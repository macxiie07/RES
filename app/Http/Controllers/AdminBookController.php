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
       
        return view('admin.books.home', ['book' => $book]);
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

        return redirect(route('admin.books.index'))->with('status', 'Category has been successfully saved.');
    }

    public function modify(Book $book)
    {
        return view('admin.books.modify', ['book' => $book]);
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

        return redirect(route('admin.books.modify', ['book' => $book]))->with('status', 'Blog has been successfully updated.');
    }

    public function delete( Book $book)
    {
        return view('admin.books.delete', ['book' => $book]);
    }

    public function destroy( Book $book)
    {
        $book->delete();

        return redirect(route('admin.books.index'))->with('status', 'Blog has been successfully deleted.');
    }
}
