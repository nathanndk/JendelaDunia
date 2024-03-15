@extends('layouts.nav')

@section('content')
<div class="d-flex flex-column vh-100">
    <div class="container my-auto mt-5">
        <h1>Edit Category</h1>
        <form method="POST" action="{{ route('categories.update', $category->id) }}" class="needs-validation" novalidate>
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Category Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
                <div class="invalid-feedback">
                    Please provide a category name.
                </div>
            </div>
            <div class="d-grid gap-2 mb-5">
                <button type="submit" class="btn btn-primary btn-lg">Update</button>
            </div>
        </form>
    </div>
    <div class="mt-auto">
        <!-- Optionally, you can add footer content here -->
    </div>
</div>
@endsection
