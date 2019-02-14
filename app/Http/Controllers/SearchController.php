<?php

namespace App\Http\Controllers;

use App\Charity;

class SearchController extends Controller
{
    protected $charity;

    public function __construct(Charity $charity)
    {
        $this->charity = $charity;
    }

    /**
     * Display a page for search.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('site.pages.search_results');
    }

    /**
     * Display a listing of the searchable resource.
     * @param   string $search_text
     *
     * @return \Illuminate\Http\Response
     */
    public function show($search_text)
    {
        $charities = $this->charity->search($search_text)->get();

        return view('site.pages.search_results', compact('search_text', 'charities'));
    }
}
