FROM php:8.2.7-apache-bullseye

WORKDIR /var/www/html

RUN apt-get update && apt-get install -y \
    memcached \
    telnet \
    zlib1g-dev \
    libmemcached-dev

# Install PHP extensions

RUN pecl install memcached && docker-php-ext-enable memcached 

#run comando on container start
CMD service memcached start && apache2-foreground

