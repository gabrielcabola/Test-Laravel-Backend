## Articles API Backend 

----

## Backend

### Description
Create a PHP Application to provide a REST API method and UI to manage the Articles in the database.

### Considerations
- Was not added Any type Authentication on the API or UI pages for cutting the total working time.
- Since the perfomance is not a goal of the project a framework was adopted to reduce working time and have better testing tools.

### Tech:
- Framework Laravel 8.x
- SQLite as database (Laravel is database agnostic so the migration and seeders can generate MySQL and Postgres)
- PHP 8.x
- Served on Nginx
- Tailwind CSS Framework
- Blade Template Engine only for the UI
---

### Live Demo
https://th-api-backend.herokuapp.com/

---
## API
[GET] https://th-api-backend.herokuapp.com/api/v1/articles

----

### Install Locally

Setup Modules
### `composer install`
### `npm run install`

Build the CSS
### `npm run dev`

Up the Dockers Container
### `vendor/bin/sail up`

Access: `http://0.0.0.0`

----

### Run Tests
### `vendor/bin/phpunit`

-----

### DB troubeshooting 
Generate a fresh database with demo data
### `touch storage/data/sqlite`
### `vendor/bin/sail run php artisan migrate --seed`

