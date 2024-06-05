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
echo "-- Clear cache"
php bin/console cache:clear

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
echo "-- Link secret folder"
ln -s /opt/wirhub-secret/ secret

echo "--"
echo "-- Hand over directories to webserver"
chown -R www-data:www-data public/
chown -R www-data:www-data var/
chown -R www-data:www-data files/
chown -R www-data:www-data /opt/wirhub-secret/


if grep -q MAILER_URL=sendmail://default .env.local; then
  echo "--"
  echo "-- Setup postfix"
  cp /etc/resolv.conf /var/spool/postfix/etc/resolv.conf
  uname -n > /etc/mailname
  postconf inet_interfaces=loopback-only
  postconf maillog_file=/var/log/mail.log
  postconf mydestination=localhost
  postconf "myhostname=$(< /etc/mailname)"
  postfix start
fi

# # this will make it run indefinitely
# apachectl -D FOREGROUND
tail -f /var/log/apache2/error.log
