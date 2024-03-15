@extends('layouts.nav')

@section('content')
<div class="book_detail_section layout_padding">
    <div class="container">
        <div class="row">
            <!-- Book Image -->
            <div class="col-md-6 mb-5">
                <div class="book_image">
                    <img src="{{ asset('storage/'.$book->photo) }}" alt="Book Cover" style="max-width:100%;">
                </div>
            </div>
            <div class="col-md-6 mb-5">
                <h1 class="book_title">{{ $book->title }}</h1>
                <p><strong>Author:</strong> {{ $book->author }}</p>
                <p><strong>Publication Date:</strong> {{ $book->published_date }}</p>
                <p><strong>Publisher:</strong> {{ $book->publisher }}</p>
                <p><strong>Number of Pages:</strong> {{ $book->pages }}</p>
                <p><strong>Category:</strong> {{ $book->categories->name }}</p>
                <p class="book_description">{{ $book->description }}</p>
                <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary">Edit</a>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
