FROM ubuntu:16.04 

RUN apt-get update && apt-get install -y vim rsync php php-fpm php-xml \
    php-curl php-imagick php-gd php-mysqli php-readline php-memcached php-redis php-sockets \
    --no-install-recommends && rm -r /var/lib/apt/lists/* &&\
    mkdir -p /var/www/mtc && \
    mkdir /run/php 
    
COPY www.conf /etc/php/7.0/fpm/pool.d/www.conf

COPY html/ /var/www/html

COPY setup.sh /usr/local/bin/setup.sh

CMD ["php-fpm7.0"]
