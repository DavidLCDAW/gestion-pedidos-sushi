FROM php:8.4-apache

RUN apt-get update && apt-get install -y \
    curl \
    git \
    unzip \
    zip \
    libxml2-dev \
    libicu-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    vim \
 && docker-php-ext-configure gd --with-freetype --with-jpeg \
 && docker-php-ext-install \
    mysqli \
    pdo \
    pdo_mysql \
    intl \
    soap \
    gd \
    exif \
 && rm -rf /var/lib/apt/lists/*

RUN pecl install xdebug \
 && docker-php-ext-enable xdebug

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]