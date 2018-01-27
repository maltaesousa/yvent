# YVENT

## Requirements

PHP 7
Composer
Postgresql 9.6

## Getting started

Clone the repository:

```
git clone https://github.com/maltaesousa/yvent.git yvent
```

Install the app:

```
composer install
```

## Populate the database

Copy paste 

```
createdb -U postgres test
psql -U postgres -d test -f prepare.sql
pg_restore -U postgres -d test yvent.dump
```

## Last steps

The app needs a key in order to work properly:

```
php artisan key:generate
cp .env.example .env
```

Add in the .env file the key you just generated, for example:

APP_KEY=base64:jblablalalalkdlkakdlklkakdlklalkldklkalk=

## Run the app

```
php artisan serve
```
