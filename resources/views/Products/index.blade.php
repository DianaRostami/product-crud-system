<x-layout>

    <h1>Products</h1>

    @foreach ($products as $product)

    <h2>{{ ($product->name) }}</h2>
    <h2>{{ ($product->description)}}</h2>
    <h2>{{ ($product->size) }}</h2>

    @endforeach


</x-layout>

