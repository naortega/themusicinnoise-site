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

function print_usage() {
	echo "$0 [-o <output dir>] [-s <source dir>] [-j <num>]"
}

while getopts "o:s:j:h" opt
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

# Make these variables visible within parallel
export OUTPUT_DIR
export SOURCE_DIR

while IFS= read -r -d '' dir
do
	OUT_DIR="${OUTPUT_DIR}/${dir:((${#SOURCE_DIR} + 1))}"
	if ! [ -d "$OUT_DIR" ]
	then
		mkdir -p "$OUT_DIR"
	fi
done < <(find "$SOURCE_DIR" -mindepth 1 -type d -print0)

function process_file() {
	file="$1"
	if [[ $file = *.php ]]
	then
		DEST_FILE="${OUTPUT_DIR}/${file:((${#SOURCE_DIR} + 1)):-4}"
		if ! [ "$file" -nt "$DEST_FILE" ]
		then
			return
		fi
		echo -n "Generating $DEST_FILE ... "
		php "$file" > "$DEST_FILE"
		echo "done"
	else
		DEST_FILE="${OUTPUT_DIR}/${file:((${#SOURCE_DIR} + 1))}"
		if ! [ "$file" -nt "$DEST_FILE" ]
		then
			return
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
