FROM php:7.1-cli

RUN apt-get update && apt-get install -y git 

RUN curl -sS https://getcomposer.org/installer | php \
        && chmod +x composer.phar \
        && mv composer.phar /usr/local/bin/composer \
        && ln -s /usr/local/bin/composer /usr/bin/composer;
ADD . /app

WORKDIR /app
