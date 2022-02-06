FROM jdecode/php-8.1:laravel-node16

ARG PORT
ENV PORT=${PORT}
RUN sed -i 's/80/${PORT}/g' /etc/apache2/sites-available/000-default.conf /etc/apache2/ports.conf

COPY . /var/www/html

# Setup
RUN composer install -n --prefer-dist
RUN chmod -R 0777 storage bootstrap public

RUN npm install
RUN npm run prod
