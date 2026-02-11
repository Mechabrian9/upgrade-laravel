# Base image with Nginx + PHP-FPM (optimized for Laravel)
FROM richarvey/nginx-php-fpm:php-83

# Set working directory
WORKDIR /var/www/html

# Copy your app code
COPY . /var/www/html

# Install Composer dependencies (production only)
RUN composer install --optimize-autoloader --no-dev --no-interaction --prefer-dist

# Cache Laravel config/routes/views for performance
RUN php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache

# Create storage symlink
RUN php artisan storage:link

# Fix permissions (important for storage/logs/uploads)
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache
