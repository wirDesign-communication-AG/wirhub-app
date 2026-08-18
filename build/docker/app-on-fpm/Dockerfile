# syntax=docker/dockerfile:1.10

# The bundle no longer commits Resources/public/<version>. A tagged requirement
# ships it in the tarball, a dev-* one does not, so the assets are built here.
# This stage only exists to produce vendor/ - node stays out of the final image.
FROM ghcr.io/wirdesign-communication-ag/wirhub-app/fpm-with-node:latest AS vendor

WORKDIR /var/www/wirhub

COPY composer.json composer.lock ./

# The registry credentials arrive as a BuildKit secret. Unlike an auth.json
# copied in from the context, it is never written to a layer or to the exported
# build cache, so it cannot be recovered from the published image.
RUN --mount=type=secret,id=composer_auth,env=COMPOSER_AUTH \
    COMPOSER_ALLOW_SUPERUSER=1 composer install \
    --no-dev \
    --no-interaction \
    --no-scripts \
 && npm --prefix vendor/wirdesign-communication-ag/wirhub/build ci \
 && npm --prefix vendor/wirdesign-communication-ag/wirhub/build run build \
 && rm -rf vendor/wirdesign-communication-ag/wirhub/build/node_modules


FROM ghcr.io/wirdesign-communication-ag/wirhub-app/fpm:latest

WORKDIR /var/www/wirhub

# Cronjobs
COPY build/docker/app-on-fpm/crontab /etc/cron.d/wirhub
RUN chmod 0644 /etc/cron.d/wirhub \
 && crontab /etc/cron.d/wirhub


# Composer (built in the vendor stage, including the bundle's public assets)
COPY --from=vendor /var/www/wirhub/vendor ./vendor

# App. vendor/ is excluded by .dockerignore, so this does not clobber the stage above.
COPY . .
COPY build/docker/app-on-fpm/start.sh ./start.sh

RUN chmod +x bin/console start.sh \
 && echo "postfix postfix/mailname string wirdesign.de" | debconf-set-selections \
 && echo "postfix postfix/main_mailer_type string 'Internet Site'" | debconf-set-selections \
 && composer dump-autoload --optimize


EXPOSE 9000

# Start php
ENTRYPOINT ["./start.sh"]
CMD ["/usr/sbin/php-fpm8.4", "-F"]
