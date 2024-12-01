<x-layout>

<h1>New product</h1>

    <form method="post" action="{{ route('products.store') }}">
        @csrf

        <label for="name">Name</label>
        <input type="text" id="name" name="name">

        <label for="description">Description</label>
        <textarea id="description" name="description"></textarea>

        <label for="size">Size</label>
        <input type="text" id="size" name="size">

        <button>Create A new Product</button>

    </form>

</x-layout>