# Vegan Activism

[![](https://img.shields.io/badge/community-discord-black?style=flat-square&labelColor=000&color=7289da)](https://discord.com/channels/829144774929940550/829184442878001192)
[![](https://img.shields.io/badge/sponsor-patreon-black?style=flat-square&labelColor=000&color=ff424d)](http://patreon.com/veganhacktivists)
[![](https://img.shields.io/badge/trello-vh--playground-black?style=flat-square&labelColor=000&color=026aa7)](https://trello.com/b/J3JW43mY/vh-playground)
[![](https://img.shields.io/badge/website-veganactivism.org-black?style=flat-square&labelColor=000&color=ff0097)](https://veganactivism.org)

A comprehensive guide to becoming a vegan activist! Browse pre-screened
organizations that need your help spreading veganism both online and locally.
Find local vegan events and meetups in your area and access a variety of
resources to begin your activism journey.

## Setup

See the [Vegan Hacktivists documentation](https://github.com/veganhacktivists/documentation).

### Quick setup

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
