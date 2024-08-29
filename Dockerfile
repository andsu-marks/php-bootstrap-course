FROM php:8.0-apache

# Instala as dependências necessárias e a extensão mysqli
RUN docker-php-ext-install mysqli

# Habilita a extensão mysqli
RUN docker-php-ext-enable mysqli
