<?php

namespace App\Http\Controllers;

use App\CharityStatuses;

class NewCharityController extends Controller
{
    protected $status;

    public function __construct(CharityStatuses $status)
    {
        $this->status = $status;
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
}
