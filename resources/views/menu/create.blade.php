@extends('layout.app')
@section('title')
Create New Item
@endsection
@section('basic-section')
    <section class="container my-5">
        <h2 class="heading-section">New item page</h2>
        <form method="POST" action="{{ url('items/store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Item Name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                @error('name')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Item Price</label>
                <input type="text" class="form-control" name="price" value="{{ old('price') }}">
                @error('price')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Item Description</label>
                <textarea type="text" class="form-control" name="description">{{ old('description') }}</textarea>
                @error('pro_desc')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Item Image</label>
                <input type="file" class="form-control" name="image">
            </div>
            <input type="submit" class="btn btn-danger" value="Add Item">
        </form>
    </section>
@endsection