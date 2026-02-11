# Modern Nginx + PHP 8.3 for Laravel (maintained image)
FROM webdevops/php-nginx:8.3-alpine

# Set working directory
WORKDIR /app

# Copy your app code
COPY . /app

# Set document root to Laravel's public folder
ENV WEB_DOCUMENT_ROOT=/app/public

# Optional: Increase memory limit if needed (for Composer/build)
ENV PHP_MEMORY_LIMIT=2G

# Install dependencies (production only)
RUN composer install --optimize-autoloader --no-dev --no-interaction --prefer-dist

# Laravel optimizations
RUN php artisan config:cache \
    && php artisan route:cache \
    && php artisan view:cache \
    && php artisan storage:link

# Fix permissions for storage/bootstrap cache
RUN chown -R application:application /app/storage /app/bootstrap/cache \
    && chmod -R 775 /app/storage /app/bootstrap/cache
