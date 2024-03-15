@extends('layouts.nav')

@section('content')
<div class="books_section layout_padding">
    <div class="container">
        <div class="books_menu">
            <ul>
                <li><a href="/books">All</a></li>
                @foreach($categories as $category)
                    <li><a href="/categories/{{ $category->id }}">{{ $category->name }}</a></li>
                @endforeach
            </ul>
        </div>
        <div class="books_section layout_padding">
            <div class="container">
                <h2 class="letest_text">Books</h2>
                <li><a href="{{ route('books.create') }}" class="btn btn-primary">Add Books</a></li>
                <div class="row">
                    @foreach($books as $book)
                        <div class="col-md-4 mb-4">
                            <div class="image_3">
                                <img src="{{ asset('storage/'.$book->photo) }}" class="image img-fluid">
                                <div class="middle">
                                    <div class="playnow_bt"><a href="{{ route('books.show', $book->id) }}">Read More</a></div>
                                </div>
                            </div>
                            <p class="there_text">{{ $book->title }}</p>
                            <div class="star_icon">
                                <ul>
                                    <li>{{ $book->author }}</li>
                                    <!-- Star icons as needed -->
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="seemore_bt"><a href="#">See More</a></div>
            </div>
        </div>
    </div>
</div>
@endsection
