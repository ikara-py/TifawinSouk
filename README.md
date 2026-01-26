# TifawinSouk - Digital Catalog Solutions

[![Laravel](https://img.shields.io/badge/Framework-Laravel%2011-red.svg)](https://laravel.com)
[![MySQL](https://img.shields.io/badge/Database-MySQL-blue.svg)](https://www.mysql.com)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

**TifawinSouk** is a Moroccan SME digital transformation project. It provides a centralized web application for local commerce, featuring a robust administrative back-office for inventory management and a clean, public-facing interface for local customers.

---

## Project Objectives
- **Administrative Efficiency:** Provide a secure CRUD system for managing product categories and stock.
- **Customer Experience:** Offer a lightweight, intuitive interface to browse local products by category.
- **Reliability:** Ensure data integrity through server-side validation and secure authentication.

---

## Technology Stack
- **Backend:** [Laravel](https://laravel.com) (Stable Version)
- **Frontend:** [Blade Template Engine](https://laravel.com/docs/11.x/blade), HTML5, CSS3, JavaScript
- **Authentication:** Laravel Breeze / UI
- **Database:** MySQL / MariaDB
- **Storage:** Local filesystem with Laravel Storage API

---

## Project Architecture & Planning

This project is organized into 5 major **Epics** following professional Agile methodologies:

### 1. Project Infrastructure
- Environment setup and Database configuration.
- Implementation of secure Administrative Authentication.
- [Bonus] Database Seeders & Factories for rapid development.

### 2. Back-Office: Category Management
- CRUD operations for Categories (id, nom, slug, description).
- Server-side validation for unique slugs and mandatory fields.

### 3. Back-Office: Product Management
- CRUD operations for Products (reference, price, stock, category_id).
- Integrated image upload management via Storage.
- [Bonus] Implementation of **SoftDeletes** for product recovery.

### 4. Public Interface (Customer Portal)
- Paginated listing of products by category.
- Detailed product view pages.
- [Bonus] Search functionality by product name and category filtering.

### 5. UI/UX & Feedback
- Success/Error notifications for administrative actions.
- Responsive design for catalog browsing.

---

## Database Schema



The database is optimized for relational integrity:
- **Categories:** Stores the taxonomy of the shop.
- **Products:** Linked to categories via `category_id`, supporting soft deletes and media metadata.

---

1. **Clone the project:**
   ```bash
   git clone https://github.com/ikara-py/TifawinSouk