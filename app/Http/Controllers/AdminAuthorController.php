<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
class AdminAuthorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $author = Author::orderBy('created_at', 'DESC')->get();
       
        return view('admin.authors.home', ['author' => $author]);
    }

    public function create()
    {
        return view('app.admin.authors.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'Authors' => 'required',
            'Affiliations' => 'required',
            'Leader' => 'required',
        ]);

        Author::create($data);

        return redirect(route('admin.authors.index'))->with('status', 'Author has been successfully saved.');
    }

    public function modify(Author $author)
    {
        return view('app.admin.authors.modify', ['author' => $author]);
    }

    public function update(Request $request, Author $author)
    {
        $data = $request->validate([
            'Authors' => 'required',
            'Affiliations' => 'required',
            'Leader' => 'required',
        ]);

        $author->update($data);

        return redirect(route('admin.authors.index', ['author' => $author]))->with('status', 'Author has been successfully updated.');
    }

    public function destroy(Author $author)
    {
        $author->delete();

        return redirect(route('admin.authors.index'))->with('status', 'Author has been successfully deleted.');
    }
}

