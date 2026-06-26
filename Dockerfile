# PHP + Apache image for running the Productive Families website on Railway
FROM php:8.2-apache

# MySQL support (mysqli) used by the app
RUN docker-php-ext-install mysqli \
    && a2enmod rewrite

# Copy the website into Apache's web root
COPY . /var/www/html/

# Railway provides the port to listen on via the $PORT variable.
# This start script points Apache at that port, then runs Apache.
RUN printf '#!/bin/sh\n\
PORT="${PORT:-80}"\n\
sed -i "s/Listen 80/Listen ${PORT}/" /etc/apache2/ports.conf\n\
sed -i "s/:80>/:${PORT}>/" /etc/apache2/sites-available/000-default.conf\n\
exec apache2-foreground\n' > /usr/local/bin/start.sh \
    && chmod +x /usr/local/bin/start.sh

EXPOSE 80
CMD ["/usr/local/bin/start.sh"]
