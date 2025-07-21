# Personal Website

A personal website built with Laravel, featuring a portfolio, contact form, project showcase, and resource downloads. The site is containerized with Docker for easy local development and deployment.

## Table of Contents
- [Features](#features)
- [Installation](#installation)
- [Usage](#usage)
- [License](#license)

## Features
- Portfolio and about me section
- Contact form with email sending and validation
- Project showcase and downloadable resources
- Sorting algorithm visualizer
- Responsive design with custom CSS and JavaScript

## Installation
1. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/personal-website.git
   cd personal-website
   ```
2. Copy the example environment file and configure as needed:
   ```bash
   cp .env.example .env
   # Edit .env with your preferred settings
   ```
3. Install PHP dependencies:
   ```bash
   composer install
   ```
4. Install Node.js dependencies and build assets:
   ```bash
   npm install
   npm run build
   ```
5. (Optional) Start with Docker:
   ```bash
   docker-compose up -d
   ```
6. Generate application key:
   ```bash
   php artisan key:generate
   ```
7. Run database migrations (if needed):
   ```bash
   php artisan migrate
   ```

## Running the App with Docker

Follow these steps to run your Laravel app using Docker (Laravel Sail):

1. **Create your `.env` file**
   - Copy the example file:
     ```bash
     cp .env.example .env
     ```
   - Edit `.env` as needed. Make sure to set the following (or your preferred port):
     ```env
     APP_PORT=89
     WWWGROUP=1000
     ```

2. **Install Composer dependencies**
   ```bash
   composer install
   ```

3. **Install Sail (if not already installed)**
   ```bash
   composer require laravel/sail --dev
   php artisan sail:install
   ```

4. **Build and start Docker containers**
   ```bash
   ./vendor/bin/sail up -d
   ```
   *(On Windows PowerShell, use `vendor\bin\sail up -d`)*

5. **Generate the application key**
   ```bash
   ./vendor/bin/sail artisan key:generate
   ```

6. **Run database migrations (if needed)**
   ```bash
   ./vendor/bin/sail artisan migrate
   ```

7. **Access the app**
   - Open your browser and go to: [http://localhost:89](http://localhost:89)

If you change `APP_PORT` in your `.env`, use that port in your browser instead.

## Usage
- Access the website at `http://localhost`