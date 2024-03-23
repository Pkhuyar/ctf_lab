# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
        libpng-dev \
        libzip-dev \
        libxml2-dev \
    && docker-php-ext-install pdo_mysql mysqli zip gd

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set DocumentRoot to /var/www/html for lab1
RUN sed -i 's|DocumentRoot /var/www/html/Lab_1|DocumentRoot /var/www/html|' /etc/apache2/sites-available/000-default.conf

# Set DirectoryIndex to include landing.html in apache2.conf
RUN echo "DirectoryIndex index.php index.html landing.html" >> /etc/apache2/apache2.conf
# Create directories for lab_1 and lab_2
RUN mkdir -p /var/www/html/Lab_1 /var/www/html/Lab_2

# Copy lab_1 and lab_2 folders to the container
COPY Lab_1 /var/www/html/Lab_1
COPY Lab_2 /var/www/html/Lab_2

# Copy additional files to the container
COPY landing.html /var/www/html
COPY background_img.jpg /var/www/html

# Set permissions for copied files
RUN chmod -R 755 /var/www/html/Lab_1 /var/www/html/Lab_2 /var/www/html/*.html /var/www/html/*.jpg

# Expose port 80
EXPOSE 80

# Start Apache in the foreground
CMD ["apache2-foreground"]
