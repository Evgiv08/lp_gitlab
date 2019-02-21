<?php

namespace App\Http\Controllers;

use App\Charity;
use App\CharityStatuses;

class CompletedCharityController extends Controller
{
    protected $status;
    protected $charity;

    public function __construct(CharityStatuses $status, Charity $charity)
    {
        $this->status = $status;
        $this->charity = $charity;
    }

    /**
     * Display a listing of the completed charities in dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $charities = $this->status->getCompletedCharities();

        return view('dashboard.pages.charity.completed.index', compact('charities'));
    }

    /**
     * Display one completed charity.
     * @param   Charity $charity
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Charity $charity)
    {
        return view('dashboard.pages.charity.completed.show', compact('charity'));
    }
}
