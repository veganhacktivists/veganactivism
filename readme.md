To set up the Laravel installation, follow these steps:

Create your environment file

```
cp .env.example .env
```

Make sure to update your database credentials
to the appropriate values.

Install dependencies

```
composer install
yarn install
```

Generate the application's secret key

``` 
php artisan key:generate 
```

Run migrations

``` 
php artisan migrate 
```

Compile front end assets

```
 yarn dev
  ```
