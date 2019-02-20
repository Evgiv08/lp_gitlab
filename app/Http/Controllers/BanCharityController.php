<?php

namespace App\Http\Controllers;

use App\CharityStatuses;

class BanCharityController extends Controller
{
    protected $status;

    public function __construct(CharityStatuses $status)
    {
        $this->status = $status;
    }

    /**
     * Display a listing of the banned charities in dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $charities = $this->status->getBannedCharities();

        return view('dashboard.pages.charity.ban.index', compact('charities'));
    }
}
