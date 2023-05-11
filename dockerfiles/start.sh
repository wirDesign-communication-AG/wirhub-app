#!/usr/bin/env bash
set -x

service apache2 start

service cron start

# wait for the database server and only then continue
./wait-for-it.sh db:3306 --timeout=0

# trigger the setup (register users etc)
echo "--"
echo "--"
echo "--"
echo "--call app:setup"
php bin/console app:setup

# initialize the project
echo "--"
echo "--"
echo "--"
echo "--call make init"
make init

# # this will make it run indefinitely
# apachectl -D FOREGROUND
tail -f /var/log/apache2/error.log