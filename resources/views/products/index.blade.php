@extends('layouts.app')

@section('content')
@php
    // Simple helper function for generating a unique seed (still needed for filter logic)
    function generate_seed($name) {
        return Illuminate\Support\Str::slug($name);
    }
@endphp

<h1 class="display-4 text-center mb-4 mt-2">Our Coffee Shop Menu</h1>
<p class="text-center text-muted lead">Freshly roasted beans, crafted just for you.</p>

<div x-data="{ currentFilter: 'all' }" class="text-center mb-5">
    <button @click="currentFilter = 'all'" 
            :class="{'btn-dark': currentFilter === 'all', 'btn-outline-dark': currentFilter !== 'all'}" 
            class="btn me-3">All Items</button>
    
    @foreach($categories as $category)
        <button @click="currentFilter = '{{ Str::slug($category->name) }}'" 
                :class="{'btn-dark': currentFilter === '{{ Str::slug($category->name) }}', 'btn-outline-dark': currentFilter !== '{{ Str::slug($category->name) }}'}" 
                class="btn me-3">{{ $category->name }}</button>
    @endforeach
    
    <hr class="mt-4">

    @foreach($categories as $category)
        <div x-show="currentFilter === 'all' || currentFilter === '{{ Str::slug($category->name) }}'">
            
            <h2 class="mt-5 mb-4 border-bottom pb-2">{{ $category->name }}</h2>
            
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4"> 
                
                {{-- Product Card Loop --}}
                @forelse($category->products as $product)
                    <div class="col">
                        <div class="card h-100 shadow-sm border-0 product-card">
                            <div class="row g-0">
                                
                                {{-- Image Column --}}
                                <div class="col-md-5">
                                    <img 
                                        {{-- --- MODIFIED LINE: SWITCHED BACK TO LOCAL ASSET PATH --- --}}
                                        src="{{ asset('images/products/' . $product->image) }}" 
                                        class="img-fluid rounded-start product-img" 
                                        alt="{{ $product->name }}"
                                        style="height: 100%; object-fit: cover;"
                                        {{-- Fallback image if local file is missing --}}
                                        onerror="this.onerror=null; this.src='https://via.placeholder.com/200x250?text=Local File Missing';"
                                    >
                                </div>
                                
                                {{-- Content Column --}}
                                <div class="col-md-7">
                                    <div class="card-body d-flex flex-column">
                                        <h5 class="card-title fw-bold text-dark">{{ $product->name }}</h5>
                                        <p class="card-text text-muted small mb-3">{{ $product->description }}</p>
                                        
                                        {{-- Price and Button --}}
                                        <div class="mt-auto pt-2 d-flex justify-content-between align-items-center">
                                            <h4 class="text-success mb-0">${{ $product->price }}</h4>
                                            <button class="btn btn-sm btn-dark">
                                                <i class="bi bi-cart"></i> Add
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-muted fst-italic">No products available in this category.</div>
                @endforelse
                
            </div>
        </div>
    @endforeach

</div>
@endsection