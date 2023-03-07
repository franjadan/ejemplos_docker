FROM composer

WORKDIR /app
COPY app/composer.json /app/

RUN composer install \
    --ignore-platform-reqs \
    --no-ansi \
    --no-dev \
    --no-interaction \
    --no-scripts

RUN composer dump-autoload --no-dev --optimize --classmap-authoritative

FROM php:8.0-apache

RUN a2enmod rewrite

RUN pecl install xdebug && docker-php-ext-enable xdebug

COPY app/src /app/
COPY app/config /app/
COPY app/.htaccess /app/
COPY app/index.php /app/
COPY php.ini /usr/local/etc/php/
