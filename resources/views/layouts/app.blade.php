<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Central | Menu</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
    /* Basic custom styling for a cleaner look */
    .navbar { 
        box-shadow: 0 2px 4px rgba(0,0,0,.1); 
    }
    .bg-dark {
        background-color: #3e2723 !important; /* Dark Coffee Brown */
    }
    .bg-light-coffee {
         background-color: #f7f3f0; /* Light Creamy Background */
    }

    /* --- FIX: ENHANCED IMAGE STYLING --- */
    .product-img {
        width: 100%; /* Ensure image fills container width */
        height: 100%; /* Ensure image fills container height */
        object-fit: cover; /* Crop/scale image to cover the area without distortion */
        min-height: 150px; /* Give a minimum height for visible placeholder */
    }
    /* Ensure the entire card has a nice height */
    .product-card .row {
        height: 100%;
    }
</style>
   
</head>
<body class="bg-light-coffee">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
    <div class="container">
        <a class="navbar-brand fw-bold" href="/">☕ COFFEE CENTRAL</a> 

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link active" href="/products">Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                <li class="nav-item"><a class="nav-link" href="/contact">Contact</a></li> 
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5 mb-5" style="min-height: 70vh;">
    @yield('content') 
</div>

<footer class="bg-dark text-white text-center py-3">
    <p class="mb-0">© {{ date('Y') }} Coffee Central · All Rights Reserved</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

</body>
</html>