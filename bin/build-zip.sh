#!/usr/bin/env bash
# Builds the WordPress.org submission ZIP, leaving out the files listed in .distignore.
# Usage: bin/build-zip.sh [output-dir]   (default: dist)
set -euo pipefail

cd "$(dirname "$0")/.."

slug=$(sed -n 's/^Text Domain: *//p' style.css | tr -d '\r')
version=$(sed -n 's/^Version: *//p' style.css | tr -d '\r')
out=${1:-dist}

rm -rf "${out:?}/$slug" "$out/$slug-$version.zip"
mkdir -p "$out/$slug"
rsync -a --exclude-from=.distignore ./ "$out/$slug/"
(cd "$out" && zip -qrX "$slug-$version.zip" "$slug")

echo "$out/$slug-$version.zip"
