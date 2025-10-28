# Use stable PHP base image
FROM php:8.2-fpm-bookworm

# Set working directory (note: Laravel expects /var/www, not /var/www/html)
WORKDIR /var/www

# Install dependencies (system + PHP extensions + Nginx)
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    nginx \
    libzip-dev \
    libicu-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libssl-dev \
    supervisor \
    && docker-php-ext-configure intl \
    && docker-php-ext-install pdo_mysql mbstring zip exif pcntl bcmath intl \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# Copy all application files
COPY . .

# Copy Nginx configuration
COPY nginx.conf /etc/nginx/conf.d/default.conf

# Install PHP dependencies (Laravel)
RUN composer install --no-dev --optimize-autoloader

# Ensure writable storage and cache directories
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Clear Laravel caches (ignore if .env not yet available)
RUN php artisan config:clear || true \
    && php artisan route:clear || true \
    && php artisan view:clear || true \
    && php artisan cache:clear || true

# Expose port 10000 (Render expects this)
EXPOSE 10000

# Start both PHP-FPM and Nginx
CMD ["sh", "-c", "php-fpm & nginx -g 'daemon off;'"]
