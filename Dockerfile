# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Set the working directory inside the container
WORKDIR /var/www/html

# Copy the entire application directory into the container
COPY . /var/www/html

# Create history directory and set permissions
RUN mkdir -p history && \
    chown -R www-data:www-data history && \
    chmod -R 755 history

# Enable Apache rewrite module
RUN a2enmod rewrite

# Set recommended PHP.ini settings
# Adjust memory limit and execution time as needed
RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"
RUN sed -i -e 's/memory_limit = 128M/memory_limit = 256M/' "$PHP_INI_DIR/php.ini"
RUN sed -i -e 's/;extension=mysqli/extension=mysqli/' "$PHP_INI_DIR/php.ini"

# Install additional PHP extensions if needed
RUN docker-php-ext-install mysqli

# Expose port 80 to allow incoming traffic
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
