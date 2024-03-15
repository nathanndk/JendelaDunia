@extends('layouts.nav')

@section('content')
<div class="cooming_section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="section_title">Add New Book</h1>
                <form action="/books" method="POST" enctype="multipart/form-data" class="form_custom">
                    @csrf <!-- CSRF token for security -->

                    <div class="form-group">
                        <label for="title" class="form_label">Title:</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                    </div>

                    <div class="form-group">
                        <label for="author" class="form_label">Author:</label>
                        <input type="text" class="form-control" id="author" name="author" required>
                    </div>

                    <div class="form-group">
                        <label for="published_date" class="form_label">Publication Date:</label>
                        <input type="date" class="form-control" id="published_date" name="published_date" required>
                    </div>

                    <div class="form-group">
                        <label for="publisher" class="form_label">Publisher:</label>
                        <input type="text" class="form-control" id="publisher" name="publisher" required>
                    </div>

                    <div class="form-group">
                        <label for="pages" class="form_label">Number of Pages:</label>
                        <input type="number" class="form-control" id="pages" name="pages" required>
                    </div>

                   <!-- Category Selection -->
                   <div class="form-group">
                    <label for="book_category_id" class="form_label">Category:</label>
                    <select class="form-control" id="book_category_id" name="book_category_id" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                    <div class="form-group">
                        <label for="photo" class="form_label">Book Cover (optional):</label>
                        <input type="file" class="form-control-file" id="photo" name="photo">
                    </div>

                    <button type="submit" class="btn btn-primary btn_custom">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- <html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
        <h1 class="section_title">MANTA</h1>
    </body>

</html> --}}
