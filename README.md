# Laravel Project Name

## Description
This Laravel project focuses on managing clients and services through a database. It utilizes three main tables: `clients`, `services`, and `clients_services`. 
The `clients` and `services` tables feed the corresponding models of clients and services, while the `clients_services` table acts as a pivot table to establish many-to-many relationships between the `clients` and `services` tables.

## Project Structure
- **laravel-api/**
  - `Client.php`: Defines the structure of the client model.
  - `Service.php`: Defines the structure of the service model.

- **database/**
  - `migrations/`: Laravel migrations for creating tables.

- **routes/**
  - `api.php`: Attach and detach added to get pivot table.

- **resources/**
  - `postman/`: Used to do petitions.

## Installation and Setup
1. **Database Configuration:**
   - Run migrations to create tables:
     ```bash
     php artisan migrate
     ```
   - Optional: Use seeders to add example data:
     ```bash
     php artisan db:seed
     ```

2. **Running the Application:**
   ```bash
   php artisan serve
