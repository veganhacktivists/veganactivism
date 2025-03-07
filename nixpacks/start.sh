#!/bin/bash

# Run Laravel migrations
php artisan migrate --force

# Cache Laravel views
php artisan view:cache

# Cache Laravel config
php artisan config:cache

# Optimize Laravel
php artisan optimize

php artisan livewire:discover

php artisan basset:clear

chown -R www-data /app/storage
chown -R www-data /app/vendor

# Transform the nginx configuration
node /assets/scripts/prestart.mjs ./nixpacks/nginx.template.conf /etc/nginx.conf

# Start PHP-FPM
php-fpm -y ./nixpacks/php-fpm.conf

# Start Supervisor
supervisord -c /etc/supervisord.conf

# Start Nginx
nginx -c /etc/nginx.conf
