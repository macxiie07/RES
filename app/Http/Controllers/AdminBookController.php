<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
use App\Models\Author;
class AdminBookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $book = Book::orderBy('created_at', 'DESC')->get();
       
        return view('admin.books.home', ['books' => $books]);
    }
     
    public function show(Book $book){

        return view('app.admin.books.show', compact('book'));
      }
public function create()
{
    $authors = Author::orderBy('created_at', 'DESC')->get();
    $categories = Category::orderBy('created_at', 'DESC')->get();
    
    return view('app.admin.books.create', ['authors' => $authors, 'categories' => $categories]);
}

    public function store(Request $request)
    {
        $data = $request->validate([
            'author_id' => 'required',
            'title' => 'required',
            'abstract' => 'required',
            'file_url' => 'required',
            'category_id' => 'required',
        ]);

      Book::create($data);
        return redirect(route('admin.books.index'))->with('status', 'Category has been successfully saved.');
    }

    public function modify(Book $book)
    {
        return view('app.admin.books.modify', ['book' => $book]);
    }

    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            'author_id' => 'required',
            'title' => 'required',
            'abstract' => 'required',
            'file_url' => 'required',
            'category_id' => 'required',
        ]);

        $book->update($data);

        return redirect(route('admin.books.index', ['book' => $book]))->with('status', 'Blog has been successfully updated.');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect(route('admin.books.index'))->with('status', 'Book has been successfully deleted.');
    }
}
