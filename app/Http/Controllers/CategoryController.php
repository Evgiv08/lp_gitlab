<?php

namespace App\Http\Controllers;

use App\Category;

class CategoryController extends Controller
{


    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->category->all();

        return view('dashboard.pages.category.index', compact('categories'));
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
        ]);
        $this->category->create(request()->all());

        return redirect('/dashboard/category');
    }

    public function update(Category $category)
    {
        request()->validate([
            'title' => 'required',
        ]);
        $category->update(request()->all());

        return redirect('/dashboard/category');
    }

    public function destroy(Category $category)
    {
        $category->delete();

        return redirect('/dashboard/category');
    }
}
