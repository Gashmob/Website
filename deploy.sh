#!/usr/bin/bash

root="$PWD"

composer install --no-dev

cd "$root/public/sass" && pnpm install --prod && pnpm run build
cd "$root"

cd "$root/public/js" && pnpm install --prod && pnpm run build
cd "$root"
