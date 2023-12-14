FROM php:7.2-apache
COPY . /var/www/html/
RUN apt update -y && apt upgrade -y
RUN apt-get install -y libpq-dev \
  && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
  && docker-php-ext-install pgsql pdo pdo_pgsql