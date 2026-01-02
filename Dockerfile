FROM php:7.1-apache

# Aktifkan modul Apache
RUN a2enmod rewrite

# Install ekstensi yang sering dipakai CI3
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy semua file CI3 ke folder Apache
COPY . /var/www/html/

# Set permission
RUN chown -R www-data:www-data /var/www/html

# Expose port Apache
EXPOSE 80
