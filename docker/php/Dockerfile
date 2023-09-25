FROM php:8.1-fpm

RUN docker-php-ext-install mysqli

#RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY --from=composer /usr/bin/composer /usr/bin/composer

#RUN pecl install xdebug    // Надо ли установить (конфигурацию на сайте xdebug.org)

#RUN pecl install xdebug \
#    && docker-php-ext-enable xdebug           // Можно и так установить и включить дебаг,
#                                                   xdebug.mode-develop парметры на сайте