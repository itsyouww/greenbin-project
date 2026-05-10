FROM php:8.2-fpm

# Instal dependensi sistem
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Instal ekstensi PHP yang dibutuhkan Laravel
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Ambil Composer terbaru dari image resmi
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Tentukan direktori kerja
WORKDIR /var/www