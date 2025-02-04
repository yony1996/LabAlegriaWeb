# 1️⃣ Imagen base con PHP 8.0 y Apache
FROM php:8.0-apache

# 2️⃣ Instalamos extensiones de PHP necesarias para Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libonig-dev \
    libzip-dev \
    zip \
    unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd mbstring pdo pdo_mysql zip

# 3️⃣ Habilitamos mod_rewrite para Laravel
RUN a2enmod rewrite

# 4️⃣ Instalamos Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

# 5️⃣ Copiamos los archivos del proyecto Laravel al contenedor
WORKDIR /var/www/html
COPY . .

# 6️⃣ Instalamos dependencias de Laravel
RUN composer install --no-dev --optimize-autoloader

# 7️⃣ Damos permisos a storage y bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache \
    && chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache

# 8️⃣ Exponemos el puerto 80 para Apache
EXPOSE 80

# 9️⃣ Configuramos el entrypoint para Laravel
CMD ["apache2-foreground"]
