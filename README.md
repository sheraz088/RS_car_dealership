
# RS Car Dealership

A simple PHP-based car dealership web project for managing and displaying vehicle listings, registration, and salesperson views. This repo contains the front-end pages and PHP endpoints used in the course project.

## Features

- Vehicle listing and details pages
- Registration and login pages
- Salesperson view page
- Simple PHP server-side endpoints (no framework)

## Tech stack

- PHP
- HTML/CSS
- (Optional) MySQL for persistence

## Repository structure

- `index.php` — project entry
- `assets/` — CSS and images
- `pages/` — HTML/PHP pages (Home, login, registration, vehicles, SalesManView)

See the project files in the repository root and `pages/` for individual page implementations.

## Prerequisites

- PHP 7.2+ (or latest) installed
- A web server (XAMPP, WAMP, MAMP) or the PHP built-in server
- Git installed for version control

## Run locally

Option A — XAMPP/WAMP:

1. Copy the project folder into your web server document root (for XAMPP: `C:\xampp\htdocs\RS_Car_dealership`).
2. Start Apache (and MySQL if needed).
3. Open: `http://localhost/RS_Car_dealership` in your browser.

Option B — PHP built-in server:

Open a terminal in the project directory and run:

```bash
php -S localhost:8000
```

Then open `http://localhost:8000`.

If your project uses a database, create the database and update the connection settings in the project's config/connection file (if present).

## Recommended .gitignore

Create a `.gitignore` file and include at least:

```
# OS files
.DS_Store
Thumbs.db

# PHP / runtime
.env
*.log

# IDE
.vscode/
.idea/

# Composer
vendor/

# Node
node_modules/
```
