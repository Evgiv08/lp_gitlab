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

    // show all completed charities
    public function index()
    {
        $statuses = $this->status->getCompletedCharity();

        return view('dashboard.pages.charity.completed.index', compact('statuses'));
    }
}
