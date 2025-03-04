#!/bin/bash

# Copyright (C) 2025 Nicolás Ortega Froysa <nicolas@ortegas.org> All rights reserved.
# Author: Nicolás Ortega Froysa <nicolas@ortegas.org>
#
# This software is provided 'as-is', without any express or implied
# warranty. In no event will the authors be held liable for any damages
# arising from the use of this software.
#
# Permission is granted to anyone to use this software for any purpose,
# including commercial applications, and to alter it and redistribute it
# freely, subject to the following restrictions:
#
# 1. The origin of this software must not be misrepresented; you must not
#    claim that you wrote the original software. If you use this software
#    in a product, an acknowledgment in the product documentation would be
#    appreciated but is not required.
#
# 2. Altered source versions must be plainly marked as such, and must not be
#    misrepresented as being the original software.
#
# 3. This notice may not be removed or altered from any source
#    distribution.

set -euo pipefail

SOURCE_DIR="src"
OUTPUT_DIR="output"
JOBS=1
SERVER_FLAG=0

function print_usage() {
	echo "$0 [-o <output dir>] [-s <source dir>] [-j <num>]"
	echo "$0 -S [-o <output dir>]"
}

function print_help() {
	printf "PHP Site Generator\n\n"
	printf "SYNOPSIS:\n"
	print_usage

	printf "\nOPTIONS:\n"
	printf "\t-o <output dir>     Output directory\n"
	printf "\t-s <source dir>     Source directory\n"
	printf "\t-j <num>            Number of jobs to run\n"
	printf "\t-S                  Run a server on localhost:8080\n"
	printf "\t-h                  Show help information\n"
	printf "\n"
}

while getopts "o:s:j:Sh" opt
do
	case "$opt" in
		o)
			OUTPUT_DIR="$(realpath --relative-base=./ "${OPTARG}")"
			;;
		s)
			SOURCE_DIR="$(realpath --relative-base=./ "${OPTARG}")"
			;;
		j)
			JOBS="${OPTARG}"
			if ! [[ $JOBS =~ ^[0-9]+$ ]]
			then
				>&2 echo "Jobs option '$JOBS' is not an integer."
				print_usage
				exit 1
			fi
			;;
		S)
			SERVER_FLAG=1
			;;
		h)
			print_help
			exit
			;;
		*)
			print_usage
			exit 1
			;;
	esac
done

if [ $SERVER_FLAG -eq 1 ]
then
	php -S localhost:8080 -t "$OUTPUT_DIR"
	exit
fi

# Make these variables visible within parallel
export OUTPUT_DIR
export SOURCE_DIR

function process_file() {
	local file="$1"
	local DEST_FILE="${OUTPUT_DIR}/${file/#${SOURCE_DIR}\//}"
	local DEST_DIR
	if [[ $file = *.php ]]
	then
		DEST_FILE="${DEST_FILE::-4}"
		DEST_DIR="$(dirname "$DEST_FILE")"
		if ! [ "$file" -nt "$DEST_FILE" ]
		then
			return
		fi
		if ! [ -d "$DEST_DIR" ]
		then
			mkdir -p "$DEST_DIR"
		fi
		echo -n "Generating $DEST_FILE ... "
		php "$file" > "$DEST_FILE"
		echo "done"
	else
		DEST_DIR="$(dirname "$DEST_FILE")"
		if ! [ "$file" -nt "$DEST_FILE" ]
		then
			return
		fi
		if ! [ -d "$DEST_DIR" ]
		then
			mkdir -p "$DEST_DIR"
		fi
		echo -n "Copying target $DEST_FILE ... "
		cp "$file" "$DEST_FILE"
		echo "done"
	fi
}

function delete_file() {
	local file="$1"
	FILE_PATH=$(realpath --relative-base=./ "$OUTPUT_DIR/$file")
	echo "Deleting file $FILE_PATH"
	rm "$FILE_PATH"
}

# Make functions usable to parallel
export -f process_file
export -f delete_file

find "$SOURCE_DIR" -type f -not -name '*.cfg.php' |
	parallel -j"${JOBS}" process_file

SOURCE_FILE_LIST=$(cd "$SOURCE_DIR" && find . -type f -and -not -name '*.cfg.php' | sed 's/.php$//')
OUTPUT_FILE_LIST=$(cd "$OUTPUT_DIR" && find . -type f)

echo "${SOURCE_FILE_LIST[@]}" "${OUTPUT_FILE_LIST[@]}" | tr ' ' '\n' | sort | uniq -u |
	parallel -j"${JOBS}" delete_file
