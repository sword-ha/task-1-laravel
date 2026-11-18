@csrf
<label>Category</label>
<select name="category_id">
    <option value="">-- Select --</option>
    @foreach ($categories as $category)
        <option value="{{ $category->id }}" @selected(old('category_id', $product->category_id ?? '') == $category->id)>{{ $category->name }}</option>
    @endforeach
</select>
@error('category_id') <div class="error">{{ $message }}</div> @enderror
<label>Name</label>
<input type="text" name="name" value="{{ old('name', $product->name ?? '') }}">
@error('name') <div class="error">{{ $message }}</div> @enderror
<label>Description</label>
<textarea name="description" rows="4">{{ old('description', $product->description ?? '') }}</textarea>
@error('description') <div class="error">{{ $message }}</div> @enderror
<label>Price</label>
<input type="number" step="0.01" name="price" value="{{ old('price', $product->price ?? '') }}">
@error('price') <div class="error">{{ $message }}</div> @enderror
<label>Stock</label>
<input type="number" name="stock" value="{{ old('stock', $product->stock ?? 0) }}">
@error('stock') <div class="error">{{ $message }}</div> @enderror
<p><button class="btn">Save</button> <a class="btn btn-gray" href="{{ route('products.index') }}">Cancel</a></p>
