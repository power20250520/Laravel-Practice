<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->truncate(); 

        // --- Find Category IDs ---
        $espressoId = Category::where('name', 'Espresso')->value('id');
        $pourOverId = Category::where('name', 'Pour Over')->value('id'); 
        $dessertsId = Category::where('name', 'Desserts')->value('id');

        // --- Insert Product Data ---
        
        // 1. Espresso Category
        if ($espressoId) {
            Product::create([
                'category_id' => $espressoId, 'name' => 'Latte', 
                'description' => 'Classic espresso with steamed milk.',
                'price' => 4.50, 'image' => 'latte.jpg' 
            ]);
            Product::create([
                'category_id' => $espressoId, 'name' => 'Cappuccino', 
                'description' => 'Espresso with textured milk foam.',
                'price' => 4.20, 'image' => 'cappuccino.jpg' 
            ]);
            Product::create([
                'category_id' => $espressoId, 'name' => 'Mocha', 
                'description' => 'Espresso with rich chocolate and steamed milk.',
                'price' => 5.00, 'image' => 'mocha.jpg' 
            ]);
        }
        
        // 2. Pour Over Category (Using existing images if suitable, or adding new ones)
        if ($pourOverId) {
            Product::create([
                'category_id' => $pourOverId, 'name' => 'Seasonal Blend', 
                'description' => 'Light roast, fruity notes, pour over method.',
                'price' => 4.00, 'image' => 'espresso.jpg' // Reusing espresso image for now
            ]);
            Product::create([
                'category_id' => $pourOverId, 'name' => 'Single Origin', 
                'description' => 'Weekly featured single origin bean.',
                'price' => 5.50, 'image' => 'americano.jpg' // Reusing americano image for now
            ]);
        }
        
        // 3. Desserts Category
        if ($dessertsId) {
            Product::create([
                'category_id' => $dessertsId, 'name' => 'Chocolate Cake', 
                'description' => 'Rich, decadent chocolate layer cake.',
                'price' => 6.00, 'image' => 'chocolate_cake.jpg'
            ]);
            Product::create([
                'category_id' => $dessertsId, 'name' => 'Croissant', 
                'description' => 'Flaky butter croissant, baked fresh daily.',
                'price' => 3.50, 'image' => 'croissant.jpg'
            ]);
        }
    }
}