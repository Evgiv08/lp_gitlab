<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CharityStatuses;

class NewCharityController extends Controller
{
    protected $status;

    public function __construct(CharityStatuses $charityStatuses)
    {
        $this->status = $charityStatuses;
    }

    // show all new charities
    public function index()
    {
        $charities = $this->status->getNewCharity();

        return view('dashboard.pages.charity.new.index', compact('charities'));
    }
}