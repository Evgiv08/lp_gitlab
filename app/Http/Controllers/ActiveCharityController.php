<?php

namespace App\Http\Controllers;

use App\CharityStatuses;

class ActiveCharityController extends Controller
{
    protected $status;

    public function __construct(CharityStatuses $status)
    {
        $this->status = $status;
    }

    /**
     * Display a listing of the active charities in dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $charities = $this->status->getActiveCharities();

        return view('dashboard.pages.charity.active.index', compact('charities'));
    }
}
