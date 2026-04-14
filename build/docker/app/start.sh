#!/usr/bin/env bash
set -x

service cron start

# initialize the project
echo "--"
echo "-- Update envs"
COMPOSER_ALLOW_SUPERUSER=1 composer dump-env prod

echo "--"
echo "-- Preload autoload"
COMPOSER_ALLOW_SUPERUSER=1 composer dump-autoload --no-dev --classmap-authoritative

echo "--"
echo "-- Clear cache"
php bin/console cache:clear

echo "--"
echo "-- Assets"
php bin/console assets:install public/

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
echo "-- Link secret folder"
ln -s /opt/wirhub-secret/ secret

echo "--"
echo "-- Hand over directories to webserver"
chown -R app:app public/
chown -R app:app var/
chown -R app:app files/
chown -R app:app /opt/wirhub-secret/
chown -R app:app /var/lib/php/sessions


if grep -q MAILER_URL=sendmail://default .env.local; then
  echo "--"
  echo "-- Setup postfix"
  cp /etc/resolv.conf /var/spool/postfix/etc/resolv.conf

  MAILER_FQDN=$(grep '^MAILER_FQDN=' .env.local | cut -d '=' -f2-)

  if [ -n "$MAILER_FQDN" ]; then
    echo "$MAILER_FQDN" > /etc/mailname
  else
    uname -n > /etc/mailname
  fi

  postconf inet_interfaces=loopback-only
  postconf maillog_file=/var/log/mail.log
  postconf mydestination=localhost
  postconf "myhostname=$(< /etc/mailname)"
  postfix start
fi
