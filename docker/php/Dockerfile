FROM php:7-fpm

COPY php.ini /usr/local/etc/php/

RUN apt-get update && apt-get install -y \
  libfreetype6-dev libjpeg62-turbo-dev libpng-dev git vim unzip \
  && docker-php-ext-install pdo_mysql mysqli mbstring gd iconv \
  && apt-get clean

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer