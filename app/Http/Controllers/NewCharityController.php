<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CharityStatuses;

class NewCharityController extends Controller
{

    protected $charityStatuses;

    public function __construct(CharityStatuses $charityStatuses)
    {
        $this->charityStatuses = $charityStatuses;
    }

    public function index()
    {
        $charityStatuses = $this->charityStatuses->all()->where('draft', 1);

        return view('dashboard.pages.charity.new.index', compact('charityStatuses'));
    }
}
