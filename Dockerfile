FROM php:7.2-apache
# PDOを使用できるようにする
RUN docker-php-ext-install -j$(nproc) mbstring exif mysqli pdo_mysql opcache