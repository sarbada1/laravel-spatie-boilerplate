# Laravel Spatie Boilerplate

A Laravel boilerplate with Spatie Permission package integration for role-based access control.

## Features

* Role and Permission management using Spatie Laravel Permission
* Admin dashboard
* User authentication
* Pre-configured roles (admin, editor, user)
* Bootstrap 5 UI

## Installation


1. Clone the repository:

```bash
git clone https://github.com/yourusername/laravel-spatie-boilerplate.git
cd laravel-spatie-boilerplate
```


2. Install dependencies:

```bash
composer install
npm install
npm run dev
```


3. Configure environment:

```bash
cp .env.example .env
php artisan key:generate
```


4. Set up database in .env file:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```


5. Run migrations and seeders:

```bash
php artisan migrate
php artisan db:seed
```

## Default Admin Credentials

After seeding, you can login with the following admin credentials:

* Email: [admin@example.com](mailto:admin@example.com)
* Password: password

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).