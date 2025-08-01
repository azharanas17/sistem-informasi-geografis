# Sistem Informasi Geografis

A Laravel-based web application featuring authentication scaffolding with Breeze and an admin panel powered by Filament v3.

---

## Features
- User authentication (Laravel Breeze)
- Modern admin panel (Filament v3)
- Flexible frontend stack (Blade, Livewire, Vue, React, or API)
- Easily extendable for geographic information systems (GIS)

---

## Requirements
- PHP >= 8.1
- Composer
- Node.js & npm (for frontend assets)
- A supported database (MySQL, PostgreSQL, SQLite, etc.)

---

## Installation

1. **Clone the repository:**
   ```bash
   git clone <your-repo-url>
   cd sistem-informasi-geografis
   ```

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies:**
   ```bash
   npm install
   ```

4. **Copy and configure environment file:**
   ```bash
   cp .env.example .env
   # Edit .env to match your database and app settings
   ```

5. **Generate application key:**
   ```bash
   php artisan key:generate
   ```

6. **Run migrations:**
   ```bash
   php artisan migrate
   ```

7. **(Optional) Seed the database:**
   ```bash
   php artisan db:seed
   ```

8. **Build frontend assets:**
   ```bash
   npm run build
   # or for development
   npm run dev
   ```

9. **Start the development server:**
   ```bash
   php artisan serve
   ```

---

## Authentication (Breeze)
- Breeze provides simple authentication scaffolding.
- You can choose your preferred frontend stack (Blade, Livewire, Vue, React, or API) during installation.
- To install Breeze (if not already):
  ```bash
  composer require laravel/breeze --dev
  php artisan breeze:install
  npm install && npm run dev
  php artisan migrate
  ```

---

## Admin Panel (Filament v3)
- Filament provides a modern admin panel at `/admin` by default.
- To create a custom panel provider (if not already present):
  ```bash
  php artisan make:filament-panel
  # Set the path (e.g., 'admin') in the generated provider
  ```
- Access the admin panel at: [http://localhost:8000/admin](http://localhost:8000/admin)
- Generate resources, pages, and widgets using Filament's artisan commands:
  ```bash
  php artisan make:filament-resource ModelName
  php artisan make:filament-page PageName
  php artisan make:filament-widget WidgetName
  ```

---

## Troubleshooting
- If you cannot access `/admin`, ensure you have a panel provider and the correct path set.
- Clear caches if routes or config do not update:
  ```bash
  php artisan route:clear
  php artisan config:clear
  php artisan cache:clear
  ```
- Ensure your user has the correct permissions to access the admin panel.

---

## License

This project is open-source and available under the [MIT license](LICENSE).
