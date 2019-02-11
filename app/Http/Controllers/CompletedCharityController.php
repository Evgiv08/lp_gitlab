<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CharityStatuses;

class CompletedCharityController extends Controller
{
    protected $status;

    public function __construct(CharityStatuses $charityStatuses)
    {
        $this->status = $charityStatuses;
    }

    // show all completed charities
    public function index()
    {
        $charities = $this->status->getCompletedCharity();

        return view('dashboard.pages.charity.completed.index', compact('charities'));
    }
}
