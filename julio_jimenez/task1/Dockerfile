FROM php:7.4.0-fpm-alpine3.10

ENV DB_DATA_PATH="/var/lib/mysql"
ENV DB_ROOT_PASS="wordpress_root_password"
ENV DB_USER="wordpress_user"
ENV DB_PASS="password"
ENV MAX_ALLOWED_PACKET="200M"
ENV MAINDB="wordpress"

COPY wordpress.conf /etc/nginx/conf.d/wordpress.conf 
COPY --chown=www-data:www-data wp-config.php /var/www/wordpress/wp-config.php

EXPOSE 80

# Install libs and packages needed for wordpress
# Create directories for supervisor and mariadb
# Install php extensions 
RUN mkdir /etc/my.cnf.d/ && mkdir /var/log/supervisor && mkdir -p /run/nginx && apk update && apk add nginx mariadb libzip-dev mariadb-client supervisor freetype-dev imagemagick-dev libjpeg-turbo-dev libpng-dev \
    && curl -L "https://wordpress.org/latest.zip" > latest.zip  && unzip latest.zip -d /var/www/ -q && chown -R www-data:www-data /var/www/wordpress && mysql_install_db --user=mysql --datadir=${DB_DATA_PATH} \
    && docker-php-ext-install bcmath exif mysqli opcache zip 

COPY supervisord.conf /etc/supervisord.conf
COPY entry.sh entry.sh
# When container runs, will bring up db and nginx services
CMD [ "./entry.sh" ]
