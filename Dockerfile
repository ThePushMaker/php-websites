FROM php:apache

# Install PHP extensions
RUN apt-get update && \
  apt-get install -y libzip-dev zip

#install mysqli
RUN docker-php-ext-install mysqli