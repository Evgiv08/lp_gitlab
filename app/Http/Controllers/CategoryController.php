<?php

namespace App\Http\Controllers;

use App\Category;

class CategoryController extends Controller
{
    protected $category;

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
     * @return array $categories
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
     * @param Category $category
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
     * @param Category $category
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect('/dashboard/category');
    }

    /**
     * Show categories on the charity create page.
     *
     * @return array $categories
     */
    public function show()
    {
        $categories = $this->category->all();

        return view('site.pages.charities.create', compact('categories'));
    }
}
