<?php

namespace App\Http\Controllers;

use App\CharityStatuses;
use App\Charity;
use App\Category;
use App\Document;

class NewCharityController extends Controller
{
    protected $status;
    protected $charity;
    protected $category;
    protected $document;

    public function __construct(CharityStatuses $status, Charity $charity, Category $category, Document $document)
    {
        $this->status = $status;
        $this->charity = $charity;
        $this->category = $category;
        $this->document = $document;
    }

    /**
     * Display a listing of the new charities in dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $charities = $this->status->getNewCharities();

        return view('dashboard.pages.charity.new.index', compact('charities'));
    }

    /**
     * Certan charity in display.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Charity $charity)
    {
        $categories = $this->category->getAllCategories();

        return view('dashboard.pages.charity.new.show', compact('charity', 'categories'));
    }

    /**
     * Return charity to client.
     *
     * @return \Illuminate\Http\Response
     */
    public function return(Charity $charity)
    {
        $this->charity->returnNewCharity($charity);

        return redirect(route('new.charity.index'));
    }

    /**
     * Return charity to client.
     *
     * @return \Illuminate\Http\Response
     */
    public function publish(Charity $charity)
    {
        $this->charity->publishNewCharity($charity);

        return redirect(route('new.charity.index'));
    }

    /**
     * Return charity to client.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Charity $charity)
    {
        $this->charity->editNewCharity($charity);

        return back();
    }

    /**
     * Remove charity.
     *
     * @param Charity   $charity
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function delete(Charity $charity)
    {
        $this->document->deleteAllCharityDocuments($charity);
        $this->charity->deleteNewCharity($charity);

        return redirect(route('new.charity.index'));
    }

}
