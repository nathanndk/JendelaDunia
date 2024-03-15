@extends('layouts.nav')

@section('content')
<div class="books_section layout_padding">
 <div class="container mb-5">

    <h2 class="letest_text">Categories</h2>
    <li><a href="{{ route('categories.create') }}" class="btn btn-primary">Add Category</a><li>
     <div class="books_menu">
     <div class="list-group mt-3 mb-3">
         @foreach($categories as $category)
         <div class="list-group-item">
             {{ $category->name }}
             <div class="float-right">
                <a href="{{ route('categories.show', $category->id) }}" class="btn btn-sm btn-primary">View</a>
                 <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                 <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                 </form>
             </div>
         </div>
         @endforeach
     </div>
 </div>
 </div>
</div>
 @endsection
