# Laravel Portfolio & Project Management App

A full-stack portfolio web application built with Laravel 12 and PHP 8.2, featuring a public showcase, admin CRUD management, dynamic image uploads, and a responsive Tailwind CSS and Vite frontend.

---

## 🚀 Features

### Public Showcase
* **Homepage:** Dynamic welcome view (`welcome.blade.php`) loaded with active portfolio items.
* **Detail Views:** Dedicated route for viewing individual portfolio items (`/portfolio/{portfolioItem}`).

### Admin Control Panel
* **Portfolio CRUD:** Complete Create, Read, Update, and Delete operations for portfolio items (`admin/portfolio`).
* **Media Handling:** Secure image upload and deletion managed via Laravel's public storage disk.
* **Project Management:** Full separate resource CRUD (`Project.php`) tracking project statuses (`pending`, `in_progress`, `completed`) with validation.
* **Authentication:** Protected admin routes utilizing Laravel's auth middleware and profile management.

---

## 🛠️ Tech Stack

* **Backend:** Laravel 12, PHP 8.2, Eloquent ORM, custom validation, and resource controllers.
* **Frontend:** Blade templates, Tailwind CSS, Vite build tooling, Alpine.js, and Axios.
* **Tooling:** Composer for PHP package management and npm for frontend assets.

---

## ⚙️ Installation & Setup

If you want to clone and run this project locally, follow these steps:

1. **Clone the repository:**
   ```bash
   git clone [https://github.com/suzal69/Portfolio.git](https://github.com/suzal69/Portfolio.git)
