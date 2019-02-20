<?php

namespace App\Http\Controllers;

use App\CharityStatuses;
use App\Charity;

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

    /**
     * Certan active charities display.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Charity $charity)
    {
        return view('dashboard.pages.charity.active.show', compact('charity'));
    }
}
