<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function index(Request $request)
    {
        $query = Book::with('categories')->orderBy('created_at', 'DESC');

        if ($request->has('search')) {
            $searchTerm = $request->get('search');
            $query->where(function ($q) use ($searchTerm) {
                $q->where('title', 'like', '%' . $searchTerm . '%')
                    ->orWhere('author', 'like', '%' . $searchTerm . '%');
            });
        }

        $books = $query->get();

        $categories = Category::all();

        return view('books.index', compact('books', 'categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('books.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'published_date' => 'required|date',
            'publisher' => 'required',
            'pages' => 'required|numeric',
            'book_category_id' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = null;

        if ($request->hasFile('photo')) {
            $imagePath = $request->file('photo')->store('books', 'public');

            Storage::disk('public')->delete($request->user()->photo ?? '');
        }

        $book = new Book();
        $book->title = $request->input('title');
        $book->author = $request->input('author');
        $book->published_date = $request->input('published_date');
        $book->publisher = $request->input('publisher');
        $book->pages = $request->input('pages');
        $book->book_category_id = $request->input('book_category_id');
        $book->user_id = auth()->user()->id;
        $book->photo = $imagePath;
        $book->save();

        return redirect()->route('books.index')->with('success', 'Book successfully added.');
    }


    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function edit(Book $book)
    {
        $categories = Category::all();

        return view('books.edit', compact('book', 'categories'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'published_date' => 'required|date',
            'publisher' => 'required',
            'pages' => 'required|numeric',
            'book_category_id' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $book->fill($request->except('photo'));

        if ($request->hasFile('photo')) {
            if ($book->photo) {
                Storage::disk('public')->delete($book->photo);
            }
            $imagePath = $request->file('photo')->store('books', 'public');
            $book->photo = $imagePath;
        }

        $book->updated_by = auth()->user()->id;

        $book->save();

        return redirect()->route('books.index')->with('success', 'Book successfully updated.');
    }


    public function destroy(Book $book)
    {
        if ($book->photo) {
            Storage::disk('public')->delete($book->photo);
        }
        $book->delete();

        return redirect()->route('books.index')->with('success', 'Book successfully deleted.');
    }
}
