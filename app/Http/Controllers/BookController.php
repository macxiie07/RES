<?php

namespace App\http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;

class BookController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $book = Book::orderBy('created_at', 'ASC')->get();

        return view('app.admin.books.home', ['book' => $book]);
    }

    public function create()
{
    $categories = Category::all();
    $authors = Author::all();
    
    return view('app.admin.books.create', ['authors' => $authors, 'categories' => $categories]);
}
}