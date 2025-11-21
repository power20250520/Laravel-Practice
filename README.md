# ![Banner](banner.png)

# ☕ Laravel Practice – Coffee Shop Menu  
### **Daily Laravel Learning Repository**

This repository documents my daily Laravel practice.  
It includes a complete **Coffee Shop Menu** project showcasing:

- Laravel 12 MVC structure  
- Controllers, Models, Views  
- Migrations & Eloquent ORM  
- SQLite database  
- Category → Product (1-to-many)  
- Blade template rendering  
- Git usage & daily commits  

---

# 📘 Project Purpose

My tutor will review this GitHub repo to track:

- My daily progress  
- Code changes  
- Commit history  
- Learning outcomes  

This README contains project documentation + diagrams for clear understanding.

---

# 🎨 Project Banner

The banner above is used for identification on GitHub Pages and README.

---

# 🗂️ Project Structure

```
app/
 ├── Models/
 │    ├── Product.php
 │    └── Category.php
 └── Http/Controllers/
       └── ProductController.php

resources/views/products/
 └── index.blade.php

database/migrations/
 ├── create_categories_table.php
 └── create_products_table.php

routes/
 └── web.php
```

---

# 📦 Database ER Diagram

![ER Diagram](er_diagram.png)

```
Category (1) ----- (many) Product
```

### **Category Table**
- id  
- name  
- timestamps  

### **Product Table**
- id  
- name  
- price  
- description  
- category_id  
- timestamps  

---

# 🚀 How to Run the Project

### 1. Install dependencies
```
composer install
```

### 2. Run migrations
```
php artisan migrate
```

### 3. Launch server
```
php artisan serve
```

Access the project:

👉 http://127.0.0.1:8000/products

---

# 🌱 How Data Was Seeded (via Tinker)

Example:

```
$coffee = \App\Models\Category::create(['name' => 'Coffee']);

\App\Models\Product::create([
  'name' => 'Cappuccino',
  'price' => 4.5,
  'description' => 'Espresso with steamed milk foam',
  'category_id' => $coffee->id
]);
```

---

# 📝 Daily Commit Templates

Use one of the following formats when you push to GitHub each day:

### Template 1 — Standard
```
[Daily Practice - YYYY/MM/DD]
- Updated Laravel code
- Added features
- Improved documentation
```

### Template 2 — Detailed
```
[Daily Practice Log - YYYY/MM/DD]
✔ Created/updated: controllers, models, migrations
✔ Practiced Blade & routing
✔ Seeded new data
✔ Updated README
```

### Template 3 — Short
```
Daily update: Laravel practice project improved.
```

### Template 4 — Professional Git style
```
feat: daily learning update (YYYY-MM-DD)
```

---

# 📤 How Tutor Can Track My Work

Your tutor can check the commit history:

🔗 https://github.com/power20250520/Laravel-Practice/commits/main

---

# 📜 License

MIT License
