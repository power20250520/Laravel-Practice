@extends('layout')

@section('content')
<div class="container">
    <h1 class="mb-4">Coffee Shop Menu</h1>

    @foreach($categories as $category)
        <h2 class="mt-4">{{ $category->name }}</h2>
        <div class="row">
            @foreach($category->products as $product)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <img 
                            src="{{ asset('images/products/' . $product->image) }}" 
                            class="card-img-top" 
                            alt="{{ $product->name }}"
                            onerror="this.src='https://via.placeholder.com/350x250?text=No+Image';"
                        >
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                        </div>
                        <div class="card-footer">
                            <strong>${{ $product->price }}</strong>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>
@endsection
