FROM php:8.0-fpm

# Install basic packages and extensions
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin --filename=composer
ENV COMPOSER_ALLOW_SUPERUSER 1

RUN install-php-extensions bz2 gd intl pdo_mysql zip bcmath soap

WORKDIR /var/www/

COPY ./Restore.sh /var/www/
RUN chmod 755 Restore.sh

RUN /var/www/Restore.sh \

RUN rm -rf Restore.sh
