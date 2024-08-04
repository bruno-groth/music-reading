# Use uma imagem PHP com o Composer pré-instalado
FROM php:8.3-fpm

# Instale extensões necessárias
RUN docker-php-ext-install pdo pdo_mysql

# Instale o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER=1

# Configure o diretório de trabalho
WORKDIR /var/www

# Copie o restante do código da aplicação
#COPY . .

# Instale as dependências do PHP
#RUN composer install

# Defina permissões apropriadas
#RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Exponha a porta que o PHP-FPM usará
EXPOSE 9000

# Comando para iniciar o PHP-FPM
CMD ["php-fpm"]