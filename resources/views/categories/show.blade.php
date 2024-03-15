@extends('layouts.nav')

@section('content')

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header">
            <h4 class="card-title mb-0">{{ $category->category }}</h4>
        </div>
        <div class="card-body">
            <h6 class="card-subtitle mb-2 text-muted">Threads in this category:</h6>

            @if($books && $books->count() > 0)
                <div class="list-group">
                    @foreach($books as $book)
                        <a href="{{ route('books.show', $book->id) }}" class="list-group-item list-group-item-action">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h5 class="mb-1">{{ $book->title }}</h5>
                                    <p class="mb-0">{{ $book->author }}</p>
                                </div>
                                <div class="col-md-4 text-muted text-end">
                                    <small>Published on: {{ $book->published_date }}</small>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>
            @else
                <p class="text-muted">No threads in this category.</p>
            @endif
        </div>
    </div>
</div>

@endsection
