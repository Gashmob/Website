#!/usr/bin/bash

root="$PWD"

composer install

cd "$root/public/css" && pnpm install && pnpm run build
cd "$root"
