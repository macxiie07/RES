<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class AdminBookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $book = Category::orderBy('created_at', 'DESC')->get();
       
        return view('admin.books.home', ['books' => $book]);
    }
     
    public function show(Book $book){

        return view('app.admin.books.show', compact('book'));
      }
    public function create()
    {
        return view('app.admin.books.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'keywords' => 'required',
            'title' => 'required',
            'abstract' => 'required',
            'file_url' => 'required',
            'category_id' => 'required',
        ]);

      Book::create($data);

        return redirect(route('app.admin.books.index'))->with('status', 'Category has been successfully saved.');
    }

    public function modify(Book $book)
    {
        return view('admin.books.modify', ['books' => $book]);
    }

    public function update(Request $request, Book $book)
    {
        $data = $request->validate([
            'keywords' => 'required',
            'title' => 'required',
            'abstract' => 'required',
            'file_url' => 'required',
            'category_id' => 'required',
        ]);

        $book->update($data);

        return redirect(route('admin.books.modify', ['books' => $book]))->with('status', 'Blog has been successfully updated.');
    }

    public function delete( Book $book)
    {
        return view('admin.books.delete', ['books' => $book]);
    }

    public function destroy( Book $book)
    {
        $book->delete();

        return redirect(route('admin.books.index'))->with('status', 'Blog has been successfully deleted.');
    }
}
