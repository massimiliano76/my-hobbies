# My Hobbies

Laravel + VueJS project for Dev&Go

## Setup

### Clone

```sh
git clone https://github.com/lipingZLP/my-hobbies.git
cd my-hobbies
cp .env.example .env
composer install
```

### Generate a Laravel Application key

```
php artisan key:generate
```

### Setup the database

Create a `myhobbies` database:

```sql
CREATE DATABASE IF NOT EXISTS `myhobbies`
```

Modify the `my-hobbies/.env` file and set the following:

```
APP_NAME="My Hobbies"

DB_HOST=<mysql_server_address>
DB_DATABASE=myhobbies
DB_USERNAME=<mysql_username_eg_root>
DB_PASSWORD=<mysql_password_eg_root>
```


Run Laravel migrations:
```sh
php artisan migrate
```


### Compile the frontend part

```sh
cd ..
npm install && npm run dev
```

While developing, you can use:

```sh
npm run watch
```


### Add an administrator

To have access to the admin page, you must:
- Create a standard user using the registration page
- Modify the database (table: `users`, column: `is_admin`)

```sql
UPDATE `users` SET is_admin = TRUE WHERE id = ?;
```
