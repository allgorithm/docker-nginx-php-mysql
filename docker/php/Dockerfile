FROM php:8.2-fpm-alpine


RUN docker-php-ext-install mysqli

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer