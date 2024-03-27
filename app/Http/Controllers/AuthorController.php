<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
class AuthorController extends Controller
{
    public function index()
    {
        $author = Author::all();

        return view('app.admin.authors.home', ['author' => $author]);
    }
}
