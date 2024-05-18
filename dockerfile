# Use an official PHP runtime as a parent image with Apache
FROM php:8.0-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html/

# Install any needed extensions for PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Set the ServerName to localhost to avoid the Apache FQDN warning
RUN echo 'ServerName localhost' >> /etc/apache2/apache2.conf

# Give ownership of the /var/www/html directory to the www-data user
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 to allow communication to/from server
EXPOSE 80

# Inform Docker that the container is listening on the specified port at runtime.
CMD ["apache2-foreground"]
