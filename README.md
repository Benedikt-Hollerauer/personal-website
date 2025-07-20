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

## Usage
- Access the website at `http://localhost` (or the port specified in your Docker setup).
- Use the navigation menu to explore the portfolio, projects, and resources.
- Submit the contact form to send a message (requires mail configuration).

## License

This project is licensed under the MIT license.
