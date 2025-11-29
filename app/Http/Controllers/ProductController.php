<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    public function index()
    {
        // 1. Fetch data
        $categories = Category::with('products')->get();
        
        // 2. FORCED DEBUGGING (Remove or comment out the dd([...]) line)
        // dd([ 
        //     'Product_Count' => Product::count(), 
        //     'Categories_Data' => $categories->toArray()
        // ]);
        
        // 3. Normal view return
        return view('products.index', compact('categories'));
    }
}