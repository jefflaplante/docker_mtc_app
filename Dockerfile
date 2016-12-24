FROM ubuntu:16.04 

RUN apt-get update && apt-get install -y rsync php php-fpm php-xml \
    php-curl php-imagick php-gd php-mysqli php-readline php-memcached \
    php-memcache php-redis php-sockets php-pear\
    imagemagick-common imagemagick \
    libmagickwand-dev php-dev \
    --no-install-recommends && rm -r /var/lib/apt/lists/* &&\
    pecl install imagick && \
    mkdir -p /var/www/mtc && \
    mkdir /run/php 
    
COPY html/ /var/www/html

RUN chown -R www-data:www-data /var/www/html

COPY php.ini /etc/php/7.0/fpm/php.ini
COPY php-fpm.conf /etc/php/7.0/fpm/php-fpm.conf
COPY www.conf /etc/php/7.0/fpm/pool.d/www.conf

COPY setup.sh /usr/local/bin/setup.sh

CMD ["php-fpm7.0"]
