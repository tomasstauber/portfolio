#!/bin/bash
echo "APP_NAME=Portfolio
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost:8000
DB_CONNECTION=sqlite
APP_KEY=" > .env

php artisan key:generate --force
touch database/database.sqlite
php artisan migrate --force
php artisan serve --host=0.0.0.0 --port=8000