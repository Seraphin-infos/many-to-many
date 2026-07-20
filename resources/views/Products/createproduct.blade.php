@extends('layouts.app')

@section('content')
<section class="w-full h-[90vh] flex justify-center items-center">
    <div class="bg-gray-300 w-md h-120 rounded-xl">
        <h1>Create Product</h1>
        <form action="{{route('products.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" class="form-control" id="price" name="price" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description"></textarea>
            </div>
            <div class="form-group">
                <label for="description">Stock</label>
                <textarea class="form-control" id="stock" name="stock"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create Product</button>
        </form>
    </div>
</section>

@endsection