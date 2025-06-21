FROM php:8.2-fpm

# Instala dependencias necesarias
RUN apt-get update && apt-get install -y \
    curl \
    gnupg \
    ca-certificates \
    libonig-dev \
    libzip-dev \
    unzip \
    git \
    && docker-php-ext-install pdo_mysql mbstring zip

# Instala Node.js 18 LTS y npm
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - && \
    apt-get install -y nodejs

# Verifica versiones
RUN node -v && npm -v

WORKDIR /var/www/html
