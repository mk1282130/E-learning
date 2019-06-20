<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Category;

class CategoryController extends Controller
{
    public function category()
    {
        $categories = Category::all();
        return view('admin.category', compact('categories'));
    }

    public function addNewCategory()
    {
        return view('admin.addNewCategory');
    }

    public function save(Request $request)
    {
        $category = new Category();
        $category->title=$request->input('title');
        $category->description=$request->input('description');
        Auth::user()->category()->save($category);
        return redirect('admin/category');

    }
}
