<x-layout>

    <h1>Products</h1>

    <a href="{{ route('products.create') }}">New product</a>
    @foreach ($products as $product)

    <h2><a href="{{ route('products.show', $product->id) }}">{{ ($product->name) }}</a></h2>
    <h2>{{ ($product->description)}}</h2>
    <h2>{{ ($product->size) }}</h2>

    @endforeach

{{ $products->links('vendor/pagination/simple-default') }}
</x-layout>


