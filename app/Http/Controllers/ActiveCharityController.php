<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CharityStatuses;

class ActiveCharityController extends Controller
{
    protected $status;

    public function __construct(CharityStatuses $charityStatuses)
    {
        $this->status = $charityStatuses;
    }

    // show all active charities
    public function index()
    {
        $charities = $this->status->getActiveCharity();

        return view('dashboard.pages.charity.active.index', compact('charities'));
    }
}
