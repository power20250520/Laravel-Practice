<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        // Clear the table to prevent duplicate data
        DB::table('categories')->truncate(); 

        Category::create(['name' => 'Espresso']);
        Category::create(['name' => 'Pour Over']);
        Category::create(['name' => 'Desserts']);
    }
}