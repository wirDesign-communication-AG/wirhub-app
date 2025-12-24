FROM ubuntu:24.04

RUN apt -q update
RUN DEBIAN_FRONTEND=noninteractive TZ=Europe/Berlin apt -y install tzdata

RUN echo "postfix postfix/mailname string wirdesign.de" | debconf-set-selections
RUN echo "postfix postfix/main_mailer_type string 'Internet Site'" | debconf-set-selections

# Packages
RUN  apt -q update && apt -q -y upgrade && apt -q -y install apt-transport-https make wget zip unzip cron git vim software-properties-common apache2 && \
    a2enmod rewrite && \
    add-apt-repository ppa:ondrej/php && \
    add-apt-repository ppa:ondrej/apache2 && \
    apt-get update && \
    apt install -y \
    php8.4 \
    php8.4-common \
    php8.4-zip \
    php8.4-imagick \
    php8.4-gd \
    php8.4-imap \
    php8.4-intl \
    php8.4-bcmath \
    php8.4-curl \
    php8.4-mbstring \
    php8.4-mysql \
    php8.4-cli \
    php8.4-cgi \
    php8.4-xml \
    php8.4-xml \
    php8.4-gd \
    imagemagick-6.q16 \
    libxml2 \
    librsvg2-bin \
    libmagickcore-6.q16-6 \
    libmagickcore-6.q16-6-extra \
    inkscape \
    libapache2-mod-php8.4 \
    unoconv \
    libreoffice \
    ghostscript \
    postfix \
    wkhtmltopdf


## Additional software
### composer
RUN cd /root && \
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');" && \
    mv composer.phar /usr/local/bin/composer

## Configuration

### Imagick
RUN sed -i 's/rights="none" pattern="PDF"/rights="read|write" pattern="PDF"/g' /etc/ImageMagick-6/policy.xml

### PHP
RUN sed -i 's/upload_max_filesize = 2M/upload_max_filesize = 64M/g' /etc/php/8.4/apache2/php.ini
RUN sed -i 's/post_max_size = 8M/post_max_size = 64M/g' /etc/php/8.4/apache2/php.ini
RUN sed -i 's/;date.timezone =/date.timezone = Europe\/Berlin/g' /etc/php/8.4/cli/php.ini
RUN sed -i 's/;date.timezone =/date.timezone = Europe\/Berlin/g' /etc/php/8.4/apache2/php.ini
RUN sed -i 's/memory_limit = 128M/memory_limit = 256M/g' /etc/php/8.4/apache2/php.ini

RUN rm /etc/php/8.4/apache2/conf.d/10-opcache.ini
COPY dockerfiles/php/10-opcache.ini /etc/php/8.4/apache2/conf.d


# vorerst die alte 00-default.conf löschen und ersetzen. so funktionert es ohne https
RUN rm /etc/apache2/sites-available/000-default.conf
COPY dockerfiles/virtual_hosts /etc/apache2/sites-available

### Configure Webserver
RUN  echo "<h1>Webserver running</h1>" > /var/www/html/index.html
RUN  a2enmod rewrite

# setting the correct server timezone
ENV TZ=Europe/Berlin
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

# Add the cronjobs
RUN echo "# wirhub cronjobs" >> /etc/crontab && \
    echo "0     3    * * * www-data /var/www/wirhub/bin/console app:cronjob:timer --period=daily_night > /dev/null 2>&1" >> /etc/crontab && \
    echo "5     *    * * * www-data /var/www/wirhub/bin/console app:cronjob:timer --period=one_hour    > /dev/null 2>&1" >> /etc/crontab && \
    echo "*/30  *    * * * www-data /var/www/wirhub/bin/console app:cronjob:timer --period=half_hour   > /dev/null 2>&1" >> /etc/crontab

### Copy the wirhub source code
RUN mkdir /var/www/wirhub
WORKDIR /var/www/wirhub
COPY . .

COPY dockerfiles/start.sh ./start.sh

# Rights
RUN chmod +x bin/console
RUN chmod +x ./start.sh

RUN COMPOSER_ALLOW_SUPERUSER=1 composer install --no-dev --optimize-autoloader
RUN rm ./auth.json

EXPOSE 80

RUN echo "-- Start"
CMD ["./start.sh"]
