# PHP image for running the Productive Families website on Railway
FROM php:8.2-cli

# MySQL support (mysqli) used by the app
RUN docker-php-ext-install mysqli

WORKDIR /var/www/html
COPY . /var/www/html

# Allow reasonably sized product-image uploads
RUN { \
      echo "upload_max_filesize=20M"; \
      echo "post_max_size=22M"; \
    } > /usr/local/etc/php/conf.d/uploads.ini

# Railway provides the public port via $PORT.
# PHP's built-in web server serves the site on that port.
CMD ["sh", "-c", "php -S 0.0.0.0:${PORT:-8080} -t /var/www/html"]
