composer install
copy .env.example .env
php artisan jwt:secret
php artisan serve