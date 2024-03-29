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

echo "--"
echo "-- Trigger Update after 10 Minutes again to send version"
(sleep 600 ; (php bin/console app:update)) > /dev/null 2>&1 &


echo "--"
echo "-- Hand over directories to webserver"
chown -R www-data:www-data public/
chown -R www-data:www-data var/
chown -R www-data:www-data files/


if grep -q MAILER_URL=sendmail://default .env.local; then
  echo "--"
  echo "-- Installing postfix"
  apt install -y postfix
  sed -i 's/inet_interfaces = all/inet_interfaces = loopback-only/' /etc/postfix/main.cf
  cp /etc/resolv.conf /var/spool/postfix/etc/resolv.conf
  postfix start
fi

# # this will make it run indefinitely
# apachectl -D FOREGROUND
tail -f /var/log/apache2/error.log
