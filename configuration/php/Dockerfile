FROM php:8.1-fpm

WORKDIR /var/www/html

RUN docker-php-ext-install -j$(nproc) pdo pdo_mysql
