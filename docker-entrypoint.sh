#!/bin/bash
set -e

mkdir -p bootstrap/cache \
    storage/framework/cache/data \
    storage/framework/sessions \
    storage/framework/views \
    storage/logs

chmod -R 775 bootstrap/cache storage

if [ ! -f database/database.sqlite ]; then
    touch database/database.sqlite
fi

php artisan config:clear
php artisan route:clear
php artisan view:clear

php artisan migrate --force

php artisan serve --host=0.0.0.0 --port=${PORT:-8000}