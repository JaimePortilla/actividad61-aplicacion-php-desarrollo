FROM php:8.2-apache

RUN docker-php-ext-install pdo pdo_mysql

COPY conf/000-default.conf /etc/apache2/sites-available/000-default.conf

COPY src/ /var/www/html/

WORKDIR /var/www/html

RUN sudo chown -R www-data:www-data /var/www/html