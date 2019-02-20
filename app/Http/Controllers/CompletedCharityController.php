<?php

namespace App\Http\Controllers;

use App\CharityStatuses;

class CompletedCharityController extends Controller
{
    protected $status;

    public function __construct(CharityStatuses $status)
    {
        $this->status = $status;
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
}
