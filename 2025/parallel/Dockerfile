# Базовий образ PHP 8.3 Thread Safe
FROM php:8.3-zts

# Робоча директорія
WORKDIR /app

# Встановлюємо PHP Installer for Extensions (PIE)
ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN chmod +x /usr/local/bin/install-php-extensions

# Встановлюємо потрібні розширення через PIE
RUN install-php-extensions \
        pdo_pgsql \
        pgsql \
        gd \
        mbstring \
        redis \
        xdebug \
        parallel

# Копіюємо весь локальний каталог у контейнер
COPY . .

# Команда за замовчуванням
CMD ["php", "index.php"]
