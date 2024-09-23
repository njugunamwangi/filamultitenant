## About Project

A boilerplate for Filament Multi-tenant application

## Tech Stack

- [Laravel](https://laravel.com).
- [Livewire](https://livewire.laravel.com).
- [TailwindCSS](https://tailwindcss.com).
- [FilamentPHP V3](https://filamentphp.com).

## Multi Tenant Documentation

- [Filament Companies](https://filamentphp.com/plugins/andrew-wallo-companies).

## Installation guide

- Clone the repository

```bash
git clone https://github.com/njugunamwangi/filamultitenant.git
```
- On the root of the directory, copy and paste .env.example onto .env and configure the database accordingly
 ```bash
copy .env.example .env
```

- Install composer dependencies by running composer install
 ```bash
composer install
```

- Install npm dependencies
```bash
npm install
```

- Generate laravel application key using 
```bash
php artisan key:generate
```

- Run migrations and seed the database
```bash
php artisan migrate --seed
```

- Don't forget to run the application
```bash
npm run dev
```

