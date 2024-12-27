# Task-Tracker

## Overview
Task-Tracker is a task management application built using Laravel with Livewire. This project enables users to efficiently track and manage their tasks in a dynamic and responsive environment.

---

## Features
- **Task Management**: Create, update, delete, and view tasks.
- **Real-time Updates**: Leverages Livewire for real-time interactions without page reloads.
- **Responsive Design**: Fully responsive user interface for optimal experience on all devices.
- **Authentication**: Secure user registration and login functionality.
- **Database Integration**: Persistent storage of tasks in a MySQL database.

---

## Prerequisites
Ensure the following tools are installed on your system:
- PHP >= 8.0
- Composer
- Node.js and npm
- MySQL

---

## Installation

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/umaivanan/task-tracker.git
   cd task-tracker
   ```

2. **Install PHP Dependencies:**
   ```bash
   composer install
   ```

3. **Install Node.js Dependencies:**
   ```bash
   npm install
   ```

4. **Set Environment Variables:**
   Copy `.env.example` to `.env` and update database credentials:
   ```bash
   cp .env.example .env
   ```
   Update the following fields in the `.env` file:
   ```env
   DB_DATABASE=task_tracker
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **Generate Application Key:**
   ```bash
   php artisan key:generate
   ```

6. **Run Migrations:**
   ```bash
   php artisan migrate
   ```

7. **Run Development Server:**
   ```bash
   php artisan serve
   ```

8. **Build Frontend Assets:**
   ```bash
   npm run dev
   ```

---

## Usage
1. Visit the application at `http://127.0.0.1:8000`.
2. Register or log in to access the task management interface.
3. Add, edit, or delete tasks as needed.

---

## Technology Stack
- **Backend**: Laravel
- **Frontend**: Blade Templates, Livewire
- **Database**: MySQL
- **Styling**: Tailwind CSS
- **Build Tool**: Vite

---

## Troubleshooting
### Common Issues:
1. **Database Not Found:**
   Ensure the database `task_tracker` exists. Create it manually if needed:
   ```sql
   CREATE DATABASE task_tracker;
   ```

2. **Dependency Conflicts:**
   If you encounter `npm` or `composer` dependency issues, use:
   ```bash
   npm install --legacy-peer-deps
   composer update
   ```

3. **Permission Issues:**
   Ensure appropriate write permissions for the `storage` and `bootstrap/cache` directories:
   ```bash
   chmod -R 775 storage bootstrap/cache
   ```

---

## License
This project is licensed under the [MIT License](LICENSE).

---

## Contribution
Contributions are welcome! Please fork the repository and submit a pull request with your changes.

---

## Contact
For inquiries or support, contact:
- **Email**: perinpanathanumaivanan@gmail.com
- **GitHub**: (https://github.com/)

