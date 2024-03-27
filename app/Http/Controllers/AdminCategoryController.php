<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class AdminCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $category = Category::orderBy('created_at', 'DESC')->get();
       
        return view('admin.category.home', ['category' => $category]);
    }

    public function create()
    {
        return view('app.admin.category.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'strand' => 'required',
            'level' => 'required',
            'research_type' => 'required',
        ]);

        Category::create($data);

        return redirect(route('admin.category.index'))->with('status', 'Category has been successfully saved.');
    }

    public function modify(Category $category)
    {
        return view('app.admin.category.modify', ['category' => $category]);
    }

    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'strand' => 'required',
            'level' => 'required',
            'research_type' => 'required',
        ]);

        $category->update($data);

        return redirect(route('admin.category.index', ['category' => $category]))->with('status', 'Category has been successfully updated.');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect(route('admin.category.index'))->with('status', 'Category has been successfully deleted.');
    }
}
