@section('content')
    @extends('layouts.nav')
    <div class="container mt-5">
        <h1>Add New Category</h1>
        <form method="POST" action="{{ route('categories.store') }}">
            @csrf
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <button type="submit" class="btn btn-primary mb-5">Create</button>
        </form>
    </div>
@endsection
