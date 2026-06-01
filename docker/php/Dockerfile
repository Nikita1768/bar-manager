FROM php:8.3-fpm

ARG user=laravel
ARG uid=1000

WORKDIR /var/www

# System dependencies
RUN apt-get update && apt-get install -y \
    git curl zip unzip vim \
    libicu-dev libzip-dev libpng-dev libonig-dev libxml2-dev \
    build-essential pkg-config \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# NodeJS
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
 && apt-get install -y nodejs

# PHP extensions
RUN docker-php-ext-install \
    intl pdo pdo_mysql mbstring exif pcntl bcmath zip

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# User
RUN groupadd -g $uid $user || true \
 && useradd -u $uid -g $user -m $user || true

# Copy project
COPY . /var/www

RUN chown -R $user:$user /var/www

USER $user

EXPOSE 9000

CMD ["php-fpm"]
