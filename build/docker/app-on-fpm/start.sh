#!/usr/bin/env bash
set -x

service cron start

# initialize the project
echo "--"
echo "-- Update envs"
COMPOSER_ALLOW_SUPERUSER=1 composer dump-env prod

# Autoloader and cache are built in the image, see Dockerfile

echo "--"
echo "-- Assets"
# --checksum: every image has fresh timestamps, so only the content tells what changed.
# --copy-links: public-dist only holds symlinks into vendor/, the webserver needs the files.
if command -v rsync > /dev/null; then
  rsync -a --copy-links --checksum --delete --chown=www-data:www-data public-dist/bundles/ public/bundles/
else
  # Base image built before rsync was added
  php bin/console assets:install public/
fi

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
echo "-- Copy static to public"
cp -r static/* public/

echo "--"
echo "-- Hand over directories to webserver"
# Only touches what is not owned by www-data yet, files/ holds every upload. -h keeps symlinks from changing their target.
find public/ var/ files/ /opt/wirhub-secret/ /var/lib/php/sessions \( ! -user www-data -o ! -group www-data \) -exec chown -h www-data:www-data {} +


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

touch /tmp/start-sh-finished

/usr/sbin/php-fpm8.4 -F
