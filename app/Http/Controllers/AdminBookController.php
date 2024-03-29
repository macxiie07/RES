<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Category;
class AdminBookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $book = Book::orderBy('created_at', 'DESC')->get();
       
        return view('admin.books.home', ['books' => $book]);
    }
     
    public function show(Book $book){

        return view('app.admin.books.show', compact('book'));
      }
     public function create()
      {
          // Fetch categories from the Category model
          $categories = Category::orderBy('created_at', 'DESC')->get();
          return view('app.admin.books.create', ['categories' => $categories]);
      }

    public function store(Request $request)
    {
        $data = $request->validate([
            'authors' => 'required',
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
        return view('admin.books.modify', ['books' => $book]);
    }

    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            'authors' => 'required',
            'title' => 'required',
            'abstract' => 'required',
            'file_url' => 'required',
            'category_id' => 'required',
        ]);

        $book->update($data);

        return redirect(route('admin.books.modify', ['books' => $book]))->with('status', 'Blog has been successfully updated.');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect(route('admin.books.index'))->with('status', 'Book has been successfully deleted.');
    }
}
