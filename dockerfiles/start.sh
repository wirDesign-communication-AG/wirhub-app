#!/usr/bin/env bash
set -x

service apache2 start

service cron start

# TODO: implement command to wait for successful mysql connection

# initialize the project
echo "--"
echo "-- Update envs"
COMPOSER_ALLOW_SUPERUSER=1 composer dump-env prod

echo "--"
echo "-- Migrations"
php bin/console doctrine:migrations:migrate --no-interaction

echo "--"
echo "-- Refresh theme"
php bin/console app:theme:refresh

echo "--"
echo "-- Setup spaces and users"
php bin/console app:setup

echo "--"
echo "-- Update database to latest update"
php bin/console app:update

# # this will make it run indefinitely
# apachectl -D FOREGROUND
tail -f /var/log/apache2/error.log
