FROM php:8.3-apache
  
# Update packages and install necessary libraries
RUN apt-get update && \
  apt-get install -y libzip-dev zip

# Install PHP extensions
# Install PDO and PDO_MYSQL mysqli extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Habilitar mod_rewrite
RUN a2enmod rewrite

# Copiar tu aplicación al contenedor
COPY . /var/www/html/

# Exponer el puerto 80
EXPOSE 80

# Comando para iniciar el servidor Apache
CMD ["apachectl", "-D", "FOREGROUND"]
