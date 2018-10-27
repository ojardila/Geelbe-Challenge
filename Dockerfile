FROM php:7.1-cli

RUN apt-get update && apt-get install -y git 

RUN curl -sS https://getcomposer.org/installer | php \
        && chmod +x composer.phar \
        && mv composer.phar /usr/local/bin/composer \
        && ln -s /usr/local/bin/composer /usr/bin/composer;

RUN pecl install xdebug-2.5.5 && docker-php-ext-enable xdebug
#RUN echo 'xdebug.remote_port=9000' >> /usr/local/etc/php/php.ini
#RUN echo 'xdebug.remote_enable=1' >> /usr/local/etc/php/php.ini
#RUN echo 'xdebug.remote_connect_back=1' >> /usr/local/etc/php/php.ini

ADD . /app

WORKDIR /app
