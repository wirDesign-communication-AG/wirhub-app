FROM ghcr.io/wirdesign-communication-ag/wirhub-app/base:latest

WORKDIR /var/www/wirhub

# Cronjobs
COPY build/docker/app/crontab /etc/cron.d/wirhub
RUN chmod 0644 /etc/cron.d/wirhub \
 && crontab /etc/cron.d/wirhub


# Composer (cached)
COPY composer.json composer.lock auth.json ./
RUN COMPOSER_ALLOW_SUPERUSER=1 composer install \
    --no-dev \
    --no-interaction \
    --no-scripts

# App
COPY . .
COPY build/docker/app/start.sh ./start.sh

RUN chmod +x bin/console start.sh \
 && rm -f auth.json \
 && echo "postfix postfix/mailname string wirdesign.de" | debconf-set-selections \
 && echo "postfix postfix/main_mailer_type string 'Internet Site'" | debconf-set-selections \
 && composer dump-autoload --optimize


EXPOSE 9000

ENTRYPOINT ["./start.sh"]
CMD ["/usr/sbin/php-fpm8.4", "-F"]
