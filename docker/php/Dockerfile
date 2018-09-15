FROM php:7-fpm

RUN apt-get update \
  && docker-php-ext-install pdo_mysql mysqli mbstring

ADD ./php.ini /etc/php.ini