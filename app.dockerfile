FROM php:7.2.2-fpm
WORKDIR /var/www
RUN apt-get update && apt-get install -y mysql-client\
 && docker-php-ext-install pdo_mysql
ADD . /var/www
RUN chmod -R 755 /var/www
RUN chown -Rf www-data:www-data /var/www
RUN chmod -R 777 /var/www/storage
