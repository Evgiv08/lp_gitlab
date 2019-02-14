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

    // show all new charities
    public function index()
    {
        $statuses = $this->status->getNewCharity();

        return view('dashboard.pages.charity.new.index', compact('statuses'));
    }
}
