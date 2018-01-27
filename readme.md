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

```
createdb -U postgres test
psql -U postgres -d test -f prepare.sql
pg_restore -U postgres -d test yvent.dump
```

## Last steps

L'application a besoin d'une clé pour fonctionner:

```
php artisan key:generate
```
Renommer le fichier .env.example en .env
Ajouter dans le fichier .env la clé générée à l'endroit prévu. Par exemple:
APP_KEY=base64:jblablalalalkdlkakdlklkakdlklalkldklkalk=

## Run the app

```
php artisan serve
```
