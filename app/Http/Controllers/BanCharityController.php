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

    // show all baned charities
    public function index()
    {
        $statuses = $this->status->getBanCharity();

        return view('dashboard.pages.charity.ban.index', compact('statuses'));
    }
}
