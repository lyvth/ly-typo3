FROM composer:latest AS composer
FROM php:8.1-fpm

RUN apt-get update && apt-get install -y libmagickwand-dev --no-install-recommends
RUN apt-get install -y imagemagick
RUN pecl install imagick
RUN docker-php-ext-enable imagick

RUN apt-get update && \
apt-get install -y libfreetype6-dev libjpeg62-turbo-dev libpng-dev && \
docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ && \
docker-php-ext-install gd

RUN apt-get update && \
    apt-get -y install ghostscript

RUN docker-php-ext-install pdo
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli

RUN apt-get -y update \
&& apt-get install -y libicu-dev \
&& docker-php-ext-configure intl \
&& docker-php-ext-install intl

RUN apt-get install -y \
        libzip-dev \
        zip \
  && docker-php-ext-install zip

RUN apt-get update && \
    apt-get install -y libxml2-dev
RUN docker-php-ext-install soap

# Install mbstring extension
RUN apt-get update -y && apt-get install -y libonig-dev \
    && docker-php-ext-install mbstring \
    && docker-php-ext-enable mbstring \
    && rm -rf /tmp/*

RUN docker-php-ext-install session
RUN docker-php-ext-install xml
RUN docker-php-ext-install filter
RUN docker-php-ext-install opcache
RUN docker-php-ext-install fileinfo
RUN docker-php-ext-install zip

RUN apt-get update && apt-get install -y \
    zlib1g-dev \
    libzip-dev

RUN apt-get update && \
    apt-get install -y libmcrypt-dev

RUN apt-get update && \
    apt-get upgrade -y && \
    apt-get install -y git

RUN pecl install xdebug
RUN docker-php-ext-enable xdebug

COPY --from=composer /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

EXPOSE 9000