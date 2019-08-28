## Setup

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

## Contributing

Make sure you are on the latest version of the `dev` branch.

``` 
git checkout dev
git pull
```

Create a new branch off of the dev branch (NOT off of master)

```
git checkout -b <enter_new_branch_name_here_without_brackets> 
```

When you are ready to have your changes reviewed,
open a pull request from that branch, and set
`dev` as the base branch on github.
