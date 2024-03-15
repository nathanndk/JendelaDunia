@extends('layouts.nav')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Edit Book</div>
                    <div class="card-body">
                        <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" id="title" class="form-control" value="{{ $book->title }}">
                            </div>

                            <div class="form-group">
                                <label for="author">Author</label>
                                <input type="text" name="author" id="author" class="form-control" value="{{ $book->author }}">
                            </div>

                            <div class="form-group">
                                <label for="published_date">Published Date</label>
                                <input type="date" name="published_date" id="published_date" class="form-control" value="{{ $book->published_date }}">
                            </div>

                            <div class="form-group">
                                <label for="publisher">Publisher</label>
                                <input type="text" name="publisher" id="publisher" class="form-control" value="{{ $book->publisher }}">
                            </div>

                            <div class="form-group">
                                <label for="pages">Pages</label>
                                <input type="number" name="pages" id="pages" class="form-control" value="{{ $book->pages }}">
                            </div>

                            <div class="form-group">
                                <label for="book_category_id">Category</label>
                                <select name="book_category_id" id="book_category_id" class="form-control">
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}"
                                            @if($category->id === $book->book_category_id) selected
                                            @endif
                                            >{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="photo">Photo</label>
                                <input type="file" name="photo" id="photo" class="form-control-file">
                                @if($book->photo)
                                    <img src="{{ asset('storage/' . $book->photo) }}" alt="Book Photo" style="max-width: 100px;">
                                @endif
                            </div>

                            <button type="submit" class="btn btn-primary">Update Book</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
