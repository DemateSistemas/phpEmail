FROM php:7.4-apache

# Instalar dependências do PHPMailer
RUN apt-get update && apt-get install -y libpng-dev libzip-dev zip \
    && docker-php-ext-configure zip \
    && docker-php-ext-install pdo_mysql zip gd

# Configurar o Apache
COPY ./src /var/www/html
COPY ./vendor /var/www/html/vendor
RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite
