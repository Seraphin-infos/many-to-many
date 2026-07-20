@csrf
 <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name ?? '') }}" required>
</div>
<div class="form-group">
    <label for="price">Price</label>
    <input type="number" class="form-control" id="price" name="price" step="0.01" value="{{ old('price', $product->price ?? '') }}" required>
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" name="description">{{ old('description', $product->description ?? '') }}</textarea>
</div>

<div class="form-group">
    <button type="submit" class="btn btn-primary">Save Product</button>
</div>
</div>
 