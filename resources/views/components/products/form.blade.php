@csrf

<label for="name">Name</label>
<input type="text" name="name" id="name"
        value="{{ old('name', $product->name ?? '') }}">

<label for="description">Description</label>
<textarea name="description"
          id="description">{{ old('description', $product->description ?? '') }}</textarea>

<label for="size">Size</label>
<input type="text" id="size" name="size" value="{{ old('size', $product->size ?? '') }}">

<button>Create A new Product</button>