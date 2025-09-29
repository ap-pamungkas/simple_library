# Simple Library

A simple library management system built with Laravel.

## Requirements

- PHP 8.2 or higher
- Composer
- SQLite (default database)
- Node.js & NPM (for asset compilation)

## Installation

1. Clone the repository
2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Copy environment file:
   ```bash
   cp .env.example .env
   ```

4. Generate application key:
   ```bash
   php artisan key:generate
   ```

5. Create SQLite database:
   ```bash
   touch database/database.sqlite
   ```

6. Run database migrations:
   ```bash
   php artisan migrate
   ```

7. Seed the database (optional):
   ```bash
   php artisan db:seed
   ```

## Running the Application

Start the development server:
```bash
php artisan serve
```

The application will be available at `http://127.0.0.1:8000`

## API Documentation

This project includes a Postman collection for API testing:

**File:** `simple_library.postman_collection.json`

### Available API Endpoints:

#### Authentication
- `POST /api/register` - User registration
- `GET /api/login` - User login

#### Books Management (Requires Authentication)
- `GET /api/books` - Get all books
- `GET /api/books/{id}` - Get book by ID
- `POST /api/books` - Create new book
- `PUT /api/books/{id}` - Update book
- `DELETE /api/books/{id}` - Delete book

### Authentication Flow:
1. Register a new user via `/api/register`
2. Login via `/api/login` to get bearer token
3. Use the token in Authorization header for protected routes

## Development Commands

```bash
# Run all development services
composer run dev

# Run tests
composer run test

# Clear cache
php artisan cache:clear
php artisan config:clear
```

## Project Structure

- `app/Models/` - Eloquent models (User, Book)
- `app/Http/Controllers/` - API controllers
- `database/migrations/` - Database migrations
- `routes/api.php` - API routes definition
- `simple_library.postman_collection.json` - Postman API collection
