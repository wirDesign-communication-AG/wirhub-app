# v3.2.7 2026-10-21 - PHP 8.4.27 from packages.sury.org
FROM ubuntu:24.04

ENV DEBIAN_FRONTEND=noninteractive
ENV TZ=Europe/Berlin

# Packages
# PHP comes from packages.sury.org instead of the Launchpad PPA, which its
# maintainer is phasing out. Same packages and paths, different download host.
RUN  echo 'Acquire::Retries "5";' > /etc/apt/apt.conf.d/80-retries \
 && apt -q update  \
 && apt -q -y --no-install-recommends install \
    apt-transport-https \
    ca-certificates \
    tzdata \
    make \
    wget \
    zip \
    unzip \
    cron \
    git \
    vim \
    apache2  \
    gnupg \
 && wget -qO /tmp/debsuryorg-archive-keyring.deb https://packages.sury.org/debsuryorg-archive-keyring.deb \
 && dpkg -i /tmp/debsuryorg-archive-keyring.deb \
 && rm /tmp/debsuryorg-archive-keyring.deb \
 && echo "deb [signed-by=/usr/share/keyrings/debsuryorg-archive-keyring.gpg] https://packages.sury.org/php/ $(. /etc/os-release && echo $VERSION_CODENAME) main" > /etc/apt/sources.list.d/php.list \
 && apt-get update \
 && apt install -y --no-install-recommends \
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
    php8.4-fpm \
    php8.4-gmp \
    imagemagick-6.q16 \
    libxml2 \
    librsvg2-bin \
    libmagickcore-6.q16-7 \
    libmagickcore-6.q16-7-extra \
    inkscape \
    python3-setuptools \
    unoconv \
    python3-uno \
    libreoffice-core \
    libreoffice-writer \
    libreoffice-calc \
    libreoffice-impress \
    fonts-dejavu-core \
    fonts-liberation2 \
    ghostscript \
    postfix \
    wkhtmltopdf \
    openssh-client \
    lsb-release \
    libxss1 \
    rsync \
 && rm -rf /var/lib/apt/lists/* \
 && a2enmod rewrite \
 && a2enmod expires \
 && ln -snf /usr/share/zoneinfo/$TZ /etc/localtime \
 && echo $TZ > /etc/timezone


# Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
 && php -r "if (hash_file('sha384', 'composer-setup.php') !== trim(file_get_contents('https://composer.github.io/installer.sig'))) { echo 'Invalid installer'; unlink('composer-setup.php'); exit(1); }" \
 && php composer-setup.php --install-dir=/usr/local/bin --filename=composer \
 && rm composer-setup.php

# Configuration
RUN sed -i 's/rights="none" pattern="PDF"/rights="read|write" pattern="PDF"/g' /etc/ImageMagick-6/policy.xml \
 && sed -i 's/;date.timezone =/date.timezone = Europe\/Berlin/g' /etc/php/8.4/cli/php.ini \
 && sed -i 's/upload_max_filesize = 2M/upload_max_filesize = 64M/g' /etc/php/8.4/fpm/php.ini \
 && sed -i 's/post_max_size = 8M/post_max_size = 64M/g' /etc/php/8.4/fpm/php.ini \
 && sed -i 's/;date.timezone =/date.timezone = Europe\/Berlin/g' /etc/php/8.4/fpm/php.ini \
 && sed -i 's/memory_limit = 128M/memory_limit = 256M/g' /etc/php/8.4/fpm/php.ini \
 && rm /etc/php/8.4/fpm/conf.d/10-opcache.ini

COPY build/docker/fpm/php/10-opcache.ini /etc/php/8.4/fpm/conf.d/10-opcache.ini
COPY build/docker/fpm/php/www.conf /etc/php/8.4/fpm/pool.d/www.conf

EXPOSE 9000

ENTRYPOINT []
CMD ["/bin/bash"]
