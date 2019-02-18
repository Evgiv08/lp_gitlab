<?php

namespace App\Http\Controllers;

use App\Charity;
use App\Category;

class SearchController extends Controller
{
    protected $charity;
    protected $category;

    public function __construct(Charity $charity, Category $category)
    {
        $this->charity = $charity;
        $this->category = $category;
    }

    /**
     * Display a page for search.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->category->getAllCategories();
        return view('site.pages.search_results', compact('categories'));
    }

    /**
     * Display a listing of the searchable resource.
     * @param   string $search_text
     *
     * @return \Illuminate\Http\Response
     */
    public function show($search_text)
    {
        if (request()->get('category_id') !== null) {
            $category_id = request()->get('category_id');
            $charities = $this->charity->search($search_text)->where('category_id', $category_id)->get();
        } else {
            $charities = $this->charity->search($search_text)->get();
        }
        $categories = $this->category->getAllCategories();
        return view('site.pages.search_results', compact('search_text', 'charities', 'categories'));
    }
}
