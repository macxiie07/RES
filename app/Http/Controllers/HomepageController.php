<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        return view('homepage.index');
    }

    public function aboutus()
    {
        return view('homepage.aboutus');
    }
<<<<<<< Updated upstream
    
=======

    public function products()
    {
        return view('homepage.products');
    }

>>>>>>> Stashed changes
    public function contactus()
    {
        return view('homepage.contactus');
    }
}