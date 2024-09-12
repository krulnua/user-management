# User Management System in Laravel

A simple Laravel application for managing admin users. Includes authentication, CRUD operations, and a responsive UI built with Bootstrap.

## Prerequisites

- **Laragon** (or another local development environment)
- **PHP** (version 8.0 or higher)
- **Composer** (dependency management for PHP)
- **MySQL** (or another supported database system)

## Installation

1. **Clone the repository:**

    ```bash
    git clone https://github.com/your-username/user-management.git
    cd user-management
    ```

2. **Install dependencies:**

    ```bash
    composer install
    ```

3. **Set up the environment file:**

    ```bash
    cp .env.example .env
    ```

4. **Generate the application key:**

    ```bash
    php artisan key:generate
    ```

5. **Configure the database:**

    Update the `.env` file with your database details:

    ```plaintext
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=user_management
    DB_USERNAME=root
    DB_PASSWORD=
    ```

    Create the database named `user_management` in MySQL.

6. **Run the migrations:**

    ```bash
    php artisan migrate
    ```

7. **Seed the database with an initial admin user (optional):**

    ```bash
    php artisan db:seed --class=AdminSeeder
    ```

## Running the Application

1. **Start the Laravel development server:**

    ```bash
    php artisan serve
    ```

2. **Access the application** at:

    ```
    http://127.0.0.1:8000/login
    ```

## Features

- Admin login/logout functionality
- CRUD operations for admin users
- Responsive UI using Bootstrap
- Secure password storage

## Project Structure

- `app/Models/Admin.php`: Model for admin users
- `app/Http/Controllers/AdminController.php`: Controller handling admin operations
- `resources/views/auth/login.blade.php`: Login page view
- `resources/views/admin/`: Views for managing admins
- `routes/web.php`: Web routes
- `database/seeders/AdminSeeder.php`: Seeder file for initial admin user

## CLI Commands

- **Create a new Laravel project:**
    ```bash
    composer create-project --prefer-dist laravel/laravel user-management
    ```

- **Install dependencies:**
    ```bash
    composer install
    ```

- **Generate application key:**
    ```bash
    php artisan key:generate
    ```

- **Run migrations:**
    ```bash
    php artisan migrate
    ```

- **Seed database with an initial admin user:**
    ```bash
    php artisan db:seed --class=AdminSeeder
    ```

- **Start development server:**
    ```bash
    php artisan serve
    ```
