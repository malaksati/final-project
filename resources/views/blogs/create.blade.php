@extends('layout.app')
@section('title')
Create New Blog
@endsection
@section('basic-section')
    <section class="container my-5">
        <h2 class="heading-section">New Blog page</h2>
        <form method="POST" action="{{ url('blogs/store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Blog title</label>
                <input type="text" class="form-control" name="title" value="{{ old('name') }}">
                @error('name')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Blog Description</label>
                <textarea type="text" class="form-control" name="description" style="height: 250px;">{{ old('description') }}</textarea>
                @error('pro_desc')
                    <div class="alert alert-danger mt-2" role="alert">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Blog Image</label>
                <input type="file" class="form-control" name="image">
            </div>
            <input type="submit" class="btn btn-danger" value="Add Blog">
        </form>
    </section>
@endsection