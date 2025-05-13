# Physiomobile API

Physiomobile API is a backend service built with Laravel, designed to support the Physiomobile application. It provides RESTful endpoints for managing physiotherapy-related data and operations.

---

## 🚀 Features

- **Patient Records**: CRUD operations for patient information.

---

## 🛠️ Installation

### Prerequisites

- PHP 8.4 or higher
- Composer
- SQLite
- Git

### Steps

1. **Clone the Repository**

   ```bash
   git clone https://github.com/rinaldypasya/physiomobile-api.git
   cd physiomobile-api
   ```

2. **Install Dependencies**

   ```bash
   composer install
   ```

3. **Configure Environment**

   Copy the example environment file and modify the necessary settings:

   ```bash
   cp .env.example .env
   ```

   Update `.env` with your database credentials and other configurations.

4. **Generate Application Key**

   ```bash
   php artisan key:generate
   ```

5. **Run Migrations**

   ```bash
   php artisan migrate
   ```

6. **Serve the Application**

   ```bash
   php artisan serve
   ```

   The API will be accessible at `http://localhost:8000`.

---

## 🧪 Running Tests

Execute the test suite using PHPUnit:

```bash
php artisan test
```

---

## 📁 Project Structure

- `app/` – Core application code
- `routes/` – API route definitions
- `database/` – Migrations and seeders
- `config/` – Configuration files
- `public/` – Entry point for the application
- `resources/` – Views and assets
- `tests/` – Test cases

---
