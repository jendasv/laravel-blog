````bash
docker compose run --rm app rm -rf vendor composer.lock
docker compose run --rm app composer install
````
````bash
docker compose run --rm app php artisan cache:clear
docker compose run --rm app php artisan config:clear
docker compose run --rm app php artisan view:clear
docker compose run --rm app php artisan route:clear
````

````bash
docker compose run --rm app composer dump-autoload
````

````bash
docker compose run --rm app php artisan
````

````bash
sudo chown -R $USER:$USER ./src
````

