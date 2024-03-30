FROM php:7.4-fpm

# Install any necessary dependencies
RUN apt-get update && apt-get install -y \
    git \
    zip \
    unzip \
    && docker-php-ext-install pdo_mysql

# Copy the application code into the container
COPY src/login/ /var/www/html/
