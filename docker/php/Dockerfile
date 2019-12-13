FROM php:7.2.23-fpm

ENV COMPOSER_ALLOW_SUPERUSER 1

RUN apt-get update \
 && apt-get install -y --no-install-recommends \
    git \
    unzip \
    curl \
 && apt-get clean

COPY ./docker/php/php.ini /usr/local/etc/php/

# Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# App
WORKDIR /var/www/html

