<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function categories()
    {
        $categories = Categories::all();
        return view("category.category", compact("categories"));
    }

    public function addcategory(Request $request)
    {
        $request->validate([
            'category' => 'required|unique:categories,category',
            'category_slug' => 'required|regex:/^[a-zA-Z0-9-]+$/',
            'status' => 'required',
        ]);

        $category = new Categories();
        $category->category = $request->input('category');
        $category->category_slug = $request->input('category_slug');
        $category->status = $request->input('status');
        $category->save();

        return redirect(route('admin.categories'))->with('success', 'Category created successfully...');
    }
}
