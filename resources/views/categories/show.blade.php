@extends('layouts.nav')

@section('content')

<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $category->category }}</h5>
            <p class="card-text">Threads in this category:</p>

            @if($books && $books->count() > 0)
                <ul>
                    @foreach($books as $book)
                        <li>
                            <a href="{{ route('books.show', $book->id) }}" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">{{ $book->title }}</h5>
                                    <small>Published on: {{ $book->publication_date }}</small>
                                </div>
                                <p class="mb-1">{{ $book->author }}</p>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <p>No threads in this category.</p>
            @endif
        </div>
    </div>
</div>

@endsection
