FROM php:8.2-apache-bullseye
COPY php/ /var/www/html/
COPY vhost.conf /etc/apache2/sites-available/000-default.conf
WORKDIR /var/www/html/
EXPOSE 8000
CMD ["php", "-S", "0.0.0.0:8000"]