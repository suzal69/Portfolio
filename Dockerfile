FROM php:8.2-apache

# Install system dependencies, PHP extensions, SQLite, and PostgreSQL dev libraries
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    sqlite3 \
    libsqlite3-dev \
    libpq-dev \
    && rm -rf /var/lib/apt/lists/*

# Install Node.js & NPM for Vite asset compilation
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - && \
    apt-get install -y nodejs

# Install required PHP extensions including MySQL, SQLite, and PostgreSQL support
RUN docker-php-ext-install pdo_mysql pdo_sqlite pdo_pgsql pgsql mbstring exif pcntl bcmath gd

# Enable Apache mod_rewrite for Laravel routing
RUN a2enmod rewrite

# Set working directory FIRST
WORKDIR /var/www/html

# Copy all project files (including package.json and composer.json)
COPY . .

# Install Composer dependencies
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN composer install --optimize-autoloader --no-dev --no-interaction

# Install Node dependencies and compile Vite assets with memory protection
RUN npm install && NODE_OPTIONS="--max-old-space-size=4096" npm run build

# Set directory permissions
RUN chown -R www-data:www-data /var/www/html/database /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/public
RUN chmod -R 775 /var/www/html/database /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/public

# Set Apache root to Laravel's public directory
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/conf-available/*.conf

# Configure Apache to listen on Render's dynamic PORT variable
RUN sed -i 's/80/${PORT}/g' /etc/apache2/ports.conf /etc/apache2/sites-available/*.conf

EXPOSE 8080

# Run migrations against Neon PostgreSQL and start Apache
CMD ["sh", "-c", "php artisan config:clear && php artisan storage:link && php artisan migrate --force && chown -R www-data:www-data database storage bootstrap/cache public && chmod -R 775 database storage bootstrap/cache public && apache2-foreground"]