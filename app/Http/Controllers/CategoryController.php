<?php

namespace App\Http\Controllers;

use App\Category;

class CategoryController extends Controller
{

    /**
     * Initialise model Category.
     *
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    /**
     * Show all categories in admin panel.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->category->all();

        return view('dashboard.pages.category.index', compact('categories'));
    }

    /**
     * Create new category in admin panel.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        request()->validate([
            'title' => 'required',
        ]);
        $this->category->create(request()->all());

        return redirect('/dashboard/category');
    }

    /**
     * Update the category resource in admin panel.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Category $category)
    {
        request()->validate([
            'title' => 'required',
        ]);
        $category->update(request()->all());

        return redirect('/dashboard/category');
    }

    /**
     * Remove the category resource from admin panel.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect('/dashboard/category');
    }

    /**
     * Shows dropdown categories on the charity create page.
     *
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $categories = $this->category->all();

        return view('site.pages.charities.create', compact('categories'));
    }
}
