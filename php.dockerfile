FROM php:7.4-fpm-alpine

RUN docker-php-ext-install mysqli pdo

# RUN usermod -u 1000 www-data

RUN cat /etc/shells