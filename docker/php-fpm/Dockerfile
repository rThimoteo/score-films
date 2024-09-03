FROM phpdockerio/php:8.3-fpm
WORKDIR "/application"

ARG WWWGROUP
ARG WWWUSER

RUN apt-get update; \
  apt-get -y --no-install-recommends install \
  git \
  vim \
  php8.3-bcmath \
  php8.3-bz2 \
  php8.3-enchant \
  php8.3-gd \
  php8.3-intl \
  php8.3-ldap \
  php8.3-mysql \
  php8.3-redis \
  php8.3-xdebug; \
  apt-get clean; \
  rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

# set up xdebug
RUN echo "xdebug.mode=coverage,develop,debug" >> /etc/php/8.3/fpm/conf.d/20-xdebug.ini
RUN echo "xdebug.remote_handler=dbgp" >> /etc/php/8.3/fpm/conf.d/20-xdebug.ini
RUN echo "xdebug.start_with_request=trigger" >> /etc/php/8.3/fpm/conf.d/20-xdebug.ini
RUN echo "xdebug.client_host=host.docker.internal" >> /etc/php/8.3/fpm/conf.d/20-xdebug.ini
RUN echo "xdebug.connect_timeout_ms=2000" >> /etc/php/8.3/fpm/conf.d/20-xdebug.ini
RUN echo "xdebug.discover_client_host=1" >> /etc/php/8.3/fpm/conf.d/20-xdebug.ini
RUN echo "xdebug.client_port=10000" >> /etc/php/8.3/fpm/conf.d/20-xdebug.ini
RUN echo "xdebug.idekey=VSCODE" >> /etc/php/8.3/fpm/conf.d/20-xdebug.ini
RUN echo "xdebug.max_nesting_level=1000" >> /etc/php/8.3/fpm/conf.d/20-xdebug.ini

RUN echo '#!/bin/bash' > /usr/local/bin/php-debug
RUN echo 'export XDEBUG_SESSION=1' >> /usr/local/bin/php-debug
RUN echo '/usr/bin/php $@' >> /usr/local/bin/php-debug
RUN chmod 755 /usr/local/bin/php-debug

RUN usermod -u ${WWWUSER} www-data
RUN groupmod -g ${WWWGROUP} www-data
