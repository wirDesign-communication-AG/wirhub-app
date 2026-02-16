# v3.2.0 2026-02-16 12:53:00
FROM ubuntu:24.04

ENV DEBIAN_FRONTEND=noninteractive
ENV TZ=Europe/Berlin

# Packages
RUN  apt -q update  \
 && apt -q -y --no-install-recommends install \
    apt-transport-https \
    tzdata \
    make \
    wget \
    zip \
    unzip \
    cron \
    git \
    vim \
    software-properties-common \
    apache2  \
 && add-apt-repository ppa:ondrej/php \
 && add-apt-repository ppa:ondrej/apache2 \
 && apt-get update \
 && apt install -y \
    php8.4 \
    php8.4-common \
    php8.4-zip \
    php8.4-imagick \
    php8.4-imap \
    php8.4-intl \
    php8.4-bcmath \
    php8.4-curl \
    php8.4-mbstring \
    php8.4-mysql \
    php8.4-cli \
    php8.4-cgi \
    php8.4-xml \
    php8.4-gd \
    imagemagick-6.q16 \
    libxml2 \
    librsvg2-bin \
    libmagickcore-6.q16-7 \
    libmagickcore-6.q16-7-extra \
    inkscape \
    libapache2-mod-php8.4 \
    unoconv \
    libreoffice \
    ghostscript \
    postfix \
    wkhtmltopdf \
 && apt-get purge -y software-properties-common \
 && apt-get autoremove -y \
 && rm -rf /var/lib/apt/lists/* \
 && a2enmod rewrite \
 && ln -snf /usr/share/zoneinfo/$TZ /etc/localtime \
 && echo $TZ > /etc/timezone


# Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
 && php -r "if (hash_file('sha384', 'composer-setup.php') !== trim(file_get_contents('https://composer.github.io/installer.sig'))) { echo 'Invalid installer'; unlink('composer-setup.php'); exit(1); }" \
 && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
 && rm composer-setup.php

# Configuration
RUN sed -i 's/rights="none" pattern="PDF"/rights="read|write" pattern="PDF"/g' /etc/ImageMagick-6/policy.xml \
 && sed -i 's/upload_max_filesize = 2M/upload_max_filesize = 64M/g' /etc/php/8.4/apache2/php.ini \
 && sed -i 's/post_max_size = 8M/post_max_size = 64M/g' /etc/php/8.4/apache2/php.ini \
 && sed -i 's/;date.timezone =/date.timezone = Europe\/Berlin/g' /etc/php/8.4/cli/php.ini \
 && sed -i 's/;date.timezone =/date.timezone = Europe\/Berlin/g' /etc/php/8.4/apache2/php.ini \
 && sed -i 's/memory_limit = 128M/memory_limit = 256M/g' /etc/php/8.4/apache2/php.ini \
 && rm /etc/php/8.4/apache2/conf.d/10-opcache.ini \
 && rm /etc/apache2/sites-available/000-default.conf \
 && echo "<h1>Webserver running</h1>" > /var/www/html/index.html

COPY build/docker/base/php/10-opcache.ini /etc/php/8.4/apache2/conf.d
COPY build/docker/base/virtual_hosts/000-default.conf /etc/apache2/sites-available
