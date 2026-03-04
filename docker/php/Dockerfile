FROM php:8.2-fpm

ARG UID=1000
ARG GID=1000

RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    libzip-dev \
    libonig-dev \
    libxml2-dev \
    nodejs \
    npm \
    && docker-php-ext-install pdo pdo_mysql zip

RUN usermod -u ${UID} www-data && groupmod -g ${GID} www-data

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

ARG UID=1000
ARG GID=1000

