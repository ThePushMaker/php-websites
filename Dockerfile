FROM php:8.3-apache

# Install PHP extensions
RUN apt-get update && \
  apt-get install -y libzip-dev zip

#install mysqli
RUN docker-php-ext-install mysqli

# Habilitar mod_rewrite
RUN a2enmod rewrite

# Copiar tu aplicación al contenedor
COPY . /var/www/html/

# Exponer el puerto 80
EXPOSE 80

# Comando para iniciar el servidor Apache
CMD ["apachectl", "-D", "FOREGROUND"]
