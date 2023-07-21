FROM ubuntu:latest

# important because the installation will otherwise get stuck at a "geo" question
ENV DEBIAN_FRONTEND=nonintercative

# Basic packages
RUN apt update && apt -y upgrade && apt -y install apt-transport-https make wget zip unzip lsb-release git

# Advanced packages + apache2
RUN apt -y install software-properties-common apache2 libapache2-mod-fcgid && \
    a2enmod rewrite actions fcgid alias proxy_fcgi && \
    add-apt-repository ppa:ondrej/php && \
    apt-get update && \
    apt install -y \
    php8.2 \
    php8.2-zip \
    php8.2-imagick \
    php8.2-gd \
    php8.2-intl \
    php8.2-bcmath \
    php8.2-curl \
    php8.2-mbstring \
    php8.2-mysql \
    php8.2-cli \
    php8.2-cgi \
    php8.2-xml \
    php8.2-xml \
    php8.2-gd \
    imagemagick-6.q16 \
    libxml2 \
    librsvg2-bin \
    libmagickcore-6.q16-6 \
    libmagickcore-6.q16-6-extra \
    inkscape \
    libapache2-mod-php8.2 \
    unoconv \
    libreoffice


## Additional software
### composer
RUN cd /root && \
    php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php composer-setup.php && \
    php -r "unlink('composer-setup.php');" && \
    mv composer.phar /usr/local/bin/composer

## Configuration

### Increase upload limits by replacing the default values
RUN sed -i 's/upload_max_filesize = 2M/upload_max_filesize = 64M/g' /etc/php/8.1/apache2/php.ini
RUN sed -i 's/post_max_size = 8M/post_max_size = 64M/g' /etc/php/8.1/apache2/php.ini



# create an alias for the console command ll to ls-la
RUN echo "alias ll='ls -la'" >> /root/.bashrc
RUN echo "alias stat='service --status-all'" >> /root/.bashrc
RUN echo "alias status='service --status-all'" >> /root/.bashrc

### Copy the wirhub source code
WORKDIR /var/www/
RUN mkdir wirhub
WORKDIR /var/www/wirhub
COPY . .

# Prepare make command
RUN chmod +x bin/console

# vorerst die alte 00-default.conf löschen und ersetzen. so funktionert es ohne https
RUN rm /etc/apache2/sites-available/000-default.conf
COPY dockerfiles/virtual_hosts /etc/apache2/sites-available

### Configure Webserver
RUN  echo "<h1>Apache server started: cd /var/www/html/index.html</h1>" > /var/www/html/index.html
RUN  a2enmod rewrite
RUN  a2enmod ssl


# Folder rights
RUN chmod +x bin/console

WORKDIR /var/www/wirhub

# important. otherwise the setup apache2 will throw an error:
RUN echo 'ServerName localhost' >> /etc/apache2/apache2.conf


COPY dockerfiles/start.sh ./start.sh
COPY dockerfiles/wait-for-it.sh ./wait-for-it.sh
RUN chmod +x ./start.sh
RUN chmod +x ./wait-for-it.sh

# Add the cronjobs
RUN apt update -y && \
    apt-get install cron && \
    echo "# wirhub cronjobs" >> /etc/crontab && \
    echo "0     3    * * * www-data /var/www/wirhub/bin/console app:cronjob:timer --period=daily_night > /dev/null 2>&1" >> /etc/crontab && \
    echo "5     *    * * * www-data /var/www/wirhub/bin/console app:cronjob:timer --period=one_hour    > /dev/null 2>&1" >> /etc/crontab && \
    echo "*/30  *    * * * www-data /var/www/wirhub/bin/console app:cronjob:timer --period=half_hour   > /dev/null 2>&1" >> /etc/crontab


# setting the correct server timezone
ENV TZ=Europe/Berlin
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

EXPOSE 80

RUN COMPOSER_ALLOW_SUPERUSER=1 composer install --no-dev --optimize-autoloader
RUN rm ./auth.json

RUN echo "--cmd start.sh"
CMD ["./start.sh"]
