<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Requests\CategoryRequest;

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
     * @param CategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $this->category->create($request->all());

        return back();
    }

    /**
     * Update the category resource in admin panel.
     *
     * @param CategoryRequest $request
     * @param Category        $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        $category->update($request->all());

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
}
