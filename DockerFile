# Use the official PHP image from Docker Hub
FROM php:8.1-apache

# Enable Apache mod_rewrite (commonly used in PHP apps)
RUN a2enmod rewrite

# Install necessary PHP extensions (optional, add more as needed)
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy your PHP code into the container (adjust path as necessary)
COPY . /var/www/html/

# Set permissions to allow Apache to serve the files
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 for web traffic
EXPOSE 80

# Start Apache service
CMD ["apache2-foreground"]
