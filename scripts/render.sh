#!/usr/bin/env bash
# Pre-render all PHP pages into static HTML in ./dist
set -euo pipefail

ROOT="$(cd "$(dirname "$0")/.." && pwd)"
SRC="$ROOT/webapp"
OUT="$ROOT/dist"

rm -rf "$OUT"
mkdir -p "$OUT"

# Copy static assets verbatim
cp -R "$SRC/img" "$OUT/img"
cp "$SRC/stylesheet.css" "$OUT/stylesheet.css"

# Render each PHP page to HTML
for page in index fleet tarrif terms reservation reservation-thanks; do
  (cd "$SRC" && php -d error_reporting=0 "$page.php") > "$OUT/$page.html"
  echo "rendered $page.html"
done

echo "Done. Output: $OUT"