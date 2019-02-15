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

    // show all active charities
    public function index()
    {
        $statuses = $this->status->getActiveCharity();

        return view('dashboard.pages.charity.active.index', compact('statuses'));
    }
}
