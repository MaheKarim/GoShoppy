ARG PHP_VERSION=7.4

FROM php:${PHP_VERSION}-fpm

# Installing dependencies
RUN apt-get update && apt-get install -y --no-install-recommends \
    build-essential \
    default-mysql-client \
    libmagickwand-dev \
    libzip-dev \
    libonig-dev \
    libssl-dev \
    locales \
    zip \
    g++ \
    git \
    supervisor \
    jpegoptim optipng pngquant gifsicle \
    && pecl install imagick

# Clear cache
#RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Installing extensions
RUN docker-php-ext-configure intl \
    && docker-php-ext-install intl

RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
    && docker-php-ext-configure gd \
    && docker-php-ext-install -j$(nproc) gd

RUN docker-php-ext-install pdo_mysql mbstring zip \
  exif pcntl bcmath opcache \
  zip gettext iconv simplexml
RUN docker-php-ext-enable imagick

# Installing composer
RUN curl -sS https://getcomposer.org/installer | \
php -- --install-dir=/usr/local/bin --filename=composer

# Workdir
WORKDIR /var/www/site

ADD supervisor.conf /etc/supervisor/conf.d/worker.conf

ENV COMPOSER_ALLOW_SUPERUSER=1

COPY entrypoint.sh /usr/local/bin

EXPOSE 9000

ENTRYPOINT ["sh", "/usr/local/bin/entrypoint.sh"]
