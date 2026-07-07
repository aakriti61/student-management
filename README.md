# Student Management System

A simple CRUD (Create, Read, Update, Delete) web application built with Laravel to manage student records. Built as a hands-on learning project to strengthen Laravel fundamentals.

## Features

- Add new students with form validation
- View a list of all students
- View individual student details
- Edit/update existing student records
- Delete student records
- Server-side validation (required fields, unique roll number/email, enum-restricted gender field)

## Tech Stack

- **Backend:** Laravel 12
- **Database:** SQLite
- **Frontend:** Blade templating engine, HTML/CSS
- **Tools:** XAMPP, VS Code, Git

## Database Schema

The `students` table includes:

| Field | Type | Notes |
|---|---|---|
| id | bigint | Primary key, auto-increment |
| name | string | |
| roll_number | string | Unique |
| email | string | Unique |
| phone | string | |
| address | string | |
| gender | enum | Male / Female / Other |
| course | string | |
| enrollment_date | date | |
| created_at / updated_at | timestamp | Auto-managed by Laravel |

## Routes

| Method | URI | Action |
|---|---|---|
| GET | /students | List all students |
| GET | /students/create | Show create form |
| POST | /students | Store new student |
| GET | /students/{id} | Show student details |
| GET | /students/{id}/edit | Show edit form |
| PUT/PATCH | /students/{id} | Update student |
| DELETE | /students/{id} | Delete student |

## Installation / Running Locally

1. Clone the repository
    git clone https://github.com/aakriti61/student-management.git
    cd student-management

2. Install dependencies
    composer install

3. Copy the environment file and generate an app key
    copy .env.example .env
    php artisan key:generate

4. Create the SQLite database file
    New-Item database\database.sqlite -ItemType File

5. Run migrations
    php artisan migrate

6. Start the development server
    php artisan serve
    
7. Visit `http://127.0.0.1:8000/students` in your browser

## What I Learned

- Laravel's MVC structure (Models, Views, Controllers)
- Eloquent ORM for database interaction
- Database migrations for version-controlled schema
- Blade templating (`@foreach`, `@if`, `{{ }}` escaping)
- RESTful resource routing
- Form validation and CSRF protection
- Mass assignment protection using `$fillable`

## Author

Aakriti Simkhada
[aakriti206105@gmail.com](mailto:aakriti206105@gmail.com)