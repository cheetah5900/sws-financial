FROM composer as builder
WORKDIR /app
COPY . .
RUN composer install

FROM node:alpine as asset
WORKDIR /app
COPY . .
RUN npm install
RUN npm run prod

FROM php:8-fpm
WORKDIR /var/www/app
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip
RUN apt-get clean && rm -rf /var/lib/apt/lists/*
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd
COPY . .
COPY --from=builder /app/vendor /var/www/app/vendor
COPY --from=asset /app/public /var/www/app/public
EXPOSE 8000
CMD php artisan serve --host=0.0.0.0
