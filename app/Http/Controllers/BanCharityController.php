<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CharityStatuses;

class BanCharityController extends Controller
{
    protected $status;

    public function __construct(CharityStatuses $charityStatuses)
    {
        $this->status = $charityStatuses;
    }

    // show all baned charities
    public function index()
    {
        $charities = $this->status->getBanCharity();

        return view('dashboard.pages.charity.ban.index', compact('charities'));
    }
}
