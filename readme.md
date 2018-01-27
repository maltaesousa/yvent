# YVENT

## Requirements

  * PHP 7
  * Composer
  * Postgresql 9.6

## Getting started

Clone the repository:

```
git clone https://github.com/maltaesousa/yvent.git yvent
```

Install the app:

```
cd yvent
composer install
```

## Populate the database

```
createdb -U postgres test
psql -U postgres -d test -f prepare.sql
pg_restore -U postgres -d test lv_yvent.dump
```

## Last steps

The app needs a key in order to work properly:

```
cp .env.example .env
php artisan key:generate
```

## Run the app

```
php artisan serve
```

Logon with:

> User: masrad

> Pwd: masrad

## Troubleshooting

Be sure Composer is using the right PHP (at least PHP 7.0)
