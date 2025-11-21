<h1>Coffee Shop Menu</h1>

@foreach($categories as $category)
    <h2>{{ $category->name }}</h2>

    <ul>
        @foreach($category->products as $product)
            <li>{{ $product->name }} — ${{ $product->price }}</li>
        @endforeach
    </ul>
@endforeach
