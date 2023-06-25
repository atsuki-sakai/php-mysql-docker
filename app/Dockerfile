FROM php:8.1.12-apache

# mysqlに接続するパッケージをインストールする
# RUNはコンテナ内でパッケージをインストールするコマンド
RUN apt update \
    && docker-php-ext-install pdo_mysql

COPY src/ /var/www/html