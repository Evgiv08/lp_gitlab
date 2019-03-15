<?php

namespace App\Http\Controllers;

use App\Charity;
use App\Document;
use App\Category;
use App\BanksInfo;
use App\CharityStatuses;
use App\Http\Requests\CharityRequest;

class CharityController extends Controller
{
    protected $charity;
    protected $document;
    protected $banksInfo;
    protected $status;
    protected $category;

    public function __construct(
        Charity $charity,
        Document $document,
        BanksInfo $banksInfo,
        CharityStatuses $status,
        Category $category
    )
    {
        $this->charity = $charity;
        $this->document= $document;
        $this->banksInfo = $banksInfo;
        $this->status = $status;
        $this->category = $category;
    }

    /**
     * Display a listing of the active charities.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $charities = $this->status->getActiveCharitiesForMainPage();

      return view('site.pages.mainpage', compact('charities'));
    }

    /**
     * Show the form for creating a new charity.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->category->getAllCategories();

        return view('site.pages.charities.create', compact('categories'));
    }

    /**
     * Store a newly created charity in bd and storage.
     *
     * @param CharityRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(CharityRequest $request)
    {
        $charity = $this->charity->storeCharity($request);
        $this->document->storeDocuments($request, $charity->id, $charity->slug);
        $this->banksInfo->storeBanksInfo($charity->id, $request);

        return redirect('/client/'.$request->client_id);
    }

    /**
     * Display the specified charity.
     *
     * @param  Charity  $charity
     * @return \Illuminate\Http\Response
     */
    public function show(Charity $charity)
    {
        $category = $this->category->getOneCategoryById($charity->category_id);
        return view('site.pages.charities.show', compact('charity', 'category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
