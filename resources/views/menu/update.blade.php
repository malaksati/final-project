@extends('layout.app')
@section('title')
Update Item
@endsection
@section('basic-section')
    <section class="container my-5">
        <h2 class="heading-section">Update item page</h2>
        <form method="POST" action="{{ url('items/edit') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{ $item->id }}">
            <div class="mb-3">
                <label class="form-label">Item Name</label>
                <input type="text" class="form-control" name="name" value="{{ $item->name }}">
                @error('name')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Item Price</label>
                <input type="text" class="form-control" name="price" value="{{ $item->price }}">
                @error('price')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Item Description</label>
                <textarea type="text" class="form-control" name="description">{{ $item->description }}</textarea>
                @error('description')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Product Image</label>
                <input type="file" class="form-control" name="image">
            </div>
            <input type="submit" class="btn btn-danger" value="Update Item">
        </form>
    </section>
@endsection