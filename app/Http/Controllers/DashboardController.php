<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;



class DashboardController extends Controller
{
    public function index()
    {

        $query = Book::with('categories')->orderBy('created_at', 'DESC');

        $books = $query->get();

        $categories = Category::all();

        return view('dashboard', compact('books', 'categories'));
    }
}
