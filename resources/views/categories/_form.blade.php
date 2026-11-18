@csrf
<label>Name</label>
<input type="text" name="name" value="{{ old('name', $category->name ?? '') }}">
@error('name') <div class="error">{{ $message }}</div> @enderror
<label>Description</label>
<textarea name="description" rows="4">{{ old('description', $category->description ?? '') }}</textarea>
@error('description') <div class="error">{{ $message }}</div> @enderror
<p><button class="btn">Save</button> <a class="btn btn-gray" href="{{ route('categories.index') }}">Cancel</a></p>
