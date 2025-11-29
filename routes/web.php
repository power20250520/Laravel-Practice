<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// 1. Home Page Route
// Uses a simple closure to return a basic 'Welcome' view
Route::get('/', function () {
    // Assuming you have a default welcome view (resources/views/welcome.blade.php)
    return view('welcome'); 
});

// 2. Menu Page Route (Already working, just confirming structure)
Route::get('/products', [ProductController::class, 'index']);

// 3. About Page Route
// Add a simple route that returns a basic view named 'about'
Route::get('/about', function () {
    // You need to create this file: resources/views/about.blade.php
    return view('about'); 
});

// 4. Contact Page Route
// Add a simple route that returns a basic view named 'contact'
Route::get('/contact', function () {
    // You need to create this file: resources/views/contact.blade.php
    return view('contact'); 
});