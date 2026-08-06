FROM php:8.2-apache

# Install system dependencies and PHP extensions required by Laravel (including sqlite3 & libsqlite3-dev)
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    sqlite3 \
    libsqlite3-dev

# Added pdo_sqlite extension
RUN docker-php-ext-install pdo_mysql pdo_sqlite mbstring exif pcntl bcmath gd

# Enable Apache mod_rewrite for Laravel routing
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install Composer dependencies
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --optimize-autoloader --no-dev --no-interaction

# Create SQLite database file and set directory permissions
RUN touch /var/www/html/database/database.sqlite
RUN chown -R www-data:www-data /var/www/html/database /var/www/html/storage /var/www/html/bootstrap/cache
RUN chmod -R 775 /var/www/html/database /var/www/html/storage /var/www/html/bootstrap/cache

# Set Apache root to Laravel's public directory
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/conf-available/*.conf

# Configure Apache to listen on Render's dynamic PORT variable
RUN sed -i 's/80/${PORT}/g' /etc/apache2/ports.conf /etc/apache2/sites-available/*.conf

EXPOSE 8080

# Run migrations (and seeders if available) on boot, then start Apache
CMD ["sh", "-c", "touch database/database.sqlite && php artisan migrate --force && php artisan db:seed --force && chown -R www-data:www-data database storage bootstrap/cache && chmod -R 775 database storage bootstrap/cache && apache2-foreground"]