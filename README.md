# Laravel Coffee Shop Demo

This repository contains a practice Laravel project built as part of
daily exercises.\
It showcases a **Coffee Shop Menu** with categories and products using
Laravel 12, MVC structure, SQLite, migrations, Eloquent ORM, and Blade
templates.

## 🚀 Features

-   Laravel 12 project structure\
-   Product & Category models with relationships\
-   Database migrations\
-   Coffee shop menu with real items and prices\
-   Blade view rendering dynamic menu sections\
-   SQLite database\
-   Simple seeding through `php artisan tinker`

## 📂 Project Structure (Key Parts)

    app/
     ├── Models/
     │    ├── Product.php
     │    └── Category.php
     └── Http/
          └── Controllers/
                └── ProductController.php

    resources/
     └── views/
           └── products/
                 └── index.blade.php

## 📦 Database Schema

### Categories Table

  Column       Type
  ------------ -----------
  id           integer
  name         string
  created_at   timestamp
  updated_at   timestamp

### Products Table

  Column        Type
  ------------- -------------
  id            integer
  name          string
  price         decimal
  description   text
  category_id   foreign key
  created_at    timestamp
  updated_at    timestamp

## 🔧 Installation & Running

    composer install
    php artisan migrate
    php artisan serve

Visit:

    http://127.0.0.1:8000/products

## 🌱 Sample Data (via Tinker)

Example seeding:

    $coffee = \App\Models\Category::create(['name' => 'Coffee']);
    \App\Models\Product::create([
        'name' => 'Cappuccino',
        'price' => 4.5,
        'description' => 'Rich espresso with steamed milk foam',
        'category_id' => $coffee->id
    ]);

## 📘 Purpose

This project is part of a daily coding practice routine.\
Your tutor can check all commits, progress, and code history directly in
this repository.

## 📜 License

MIT License
