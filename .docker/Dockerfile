FROM php:7.1.8-apache

MAINTAINER Josh Reed

COPY . /srv/app
COPY .docker/vhost.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /srv/app

RUN docker-php-ext-install mbstring pdo pdo_mysql \
    && chown -R www-data:www-data /srv/app

RUN apt-get update && apt-get install -y git

RUN curl --silent --show-error https://getcomposer.org/installer | php

RUN mv composer.phar /usr/bin/composer

RUN composer install
