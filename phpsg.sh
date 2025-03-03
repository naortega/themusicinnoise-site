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

while getopts "o:s:j:Sh" opt
do
	case "$opt" in
		o)
			OUTPUT_DIR="$(echo "${OPTARG}" | sed 's:/*$::')"
			;;
		s)
			SOURCE_DIR="$(echo "${OPTARG}" | sed 's:/*$::')"
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
			print_usage
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
	local DEST_FILE
	local DEST_DIR
	if [[ $file = *.php ]]
	then
		DEST_FILE="${OUTPUT_DIR}/${file:((${#SOURCE_DIR} + 1)):-4}"
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
		DEST_FILE="${OUTPUT_DIR}/${file:((${#SOURCE_DIR} + 1))}"
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
# Make function usable to parallel
export -f process_file

find "$SOURCE_DIR" -type f -not -name '*.cfg.php' |
	parallel -j"${JOBS}" process_file
