# Landing Page Dashboard 🌐

This project is a final assignment for the Web Programming Design course, built using Laravel. It features a website front page with a login system and a dashboard that includes CRUD operations for managing data. The project demonstrates fundamental concepts of web development, focusing on secure authentication and database management.

## Features 📝

- **Landing Page**: Attractive and user-friendly front page for the website.
- **Authentication System**: Secure login and registration for users.
- **Dashboard**: A management panel that allows CRUD (Create, Read, Update, Delete) operations on data.
- **Responsive Design**: Optimized for various screen sizes and devices.

## Technologies Used 💻

- **Laravel**: Backend framework for building web applications with PHP.
- **MySQL**: Database management for storing user and dashboard data.
- **HTML/CSS**: For structuring and styling the front page and dashboard.
- **JavaScript**: For enhancing interactivity on the landing page and dashboard.

## Installation 📥

1. Clone the repository to your local machine:
   ```bash
   git clone https://github.com/rayhanfay/landing-page-dashboard.git
   
2. Navigate to the project directory:
   ```bash
   cd landing-page-dashboard

3. Install dependencies using Composer:
   ```bash
   composer install

4. Copy .env.example to .env and configure your environment settings:
   ```bash
   cp .env.example .env
   php artisan key:generate

5. Set up the database and update .env with your database credentials. Then, migrate the database:
   ```bash
   php artisan migrate

6. Serve the application:
   ```bash
   php artisan serve
