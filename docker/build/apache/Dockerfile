FROM php:7.2-apache

## Basic tools
RUN apt-get update -y && \
    apt-get upgrade -y && \
    apt-get install -y bash \
            curl \
            wget \
            ca-certificates \
            vim \
            nano

## Apache
RUN a2enmod ssl rewrite

## PHP
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libpng-dev \
        libxrender1 libfontconfig \
        libicu-dev \
        libxext-dev \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install pdo_mysql gd mbstring bcmath zip intl opcache \
    && docker-php-ext-enable intl opcache

## Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

## wkhtmltopdf
RUN curl -fkL "https://github.com/wkhtmltopdf/wkhtmltopdf/releases/download/0.12.4/wkhtmltox-0.12.4_linux-generic-amd64.tar.xz" -o wkhtmltopdf.tar.xz && \
    tar -xJf wkhtmltopdf.tar.xz && \
    mv wkhtmltox/bin/wkhtmltopdf /usr/bin/wkhtmltopdf && \
    mv wkhtmltox/bin/wkhtmltoimage /usr/bin/wkhtmltoimage && \
    chmod +x /usr/bin/wkhtmltopdf && \
    mkdir -p /var/www/symfony/bin && \
    ln -s /usr/bin/wkhtmltopdf /var/www/symfony/bin/wkhtmltopdf

WORKDIR /var/www/symfony
