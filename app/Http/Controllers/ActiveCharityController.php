<?php

namespace App\Http\Controllers;

use App\Charity;
use App\CharityStatuses;

class ActiveCharityController extends Controller
{
    protected $status;
    protected $charity;

    public function __construct(CharityStatuses $status, Charity $charity)
    {
        $this->status = $status;
        $this->charity = $charity;
    }

    /**
     * Display a listing of the active charities in dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $charities = $this->status->getActiveCharities();

        return view('dashboard.pages.charity.active.index', compact('charities'));
    }

    /**
     * Certan active charities display.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Charity $charity)
    {
        return view('dashboard.pages.charity.active.show', compact('charity'));
    }

    /**
     * Ban an active charity.
     * @param   Charity $charity
     *
     * @return \Illuminate\Http\Response
     */
    public function ban(Charity $charity)
    {
        $this->charity->banActiveCharity($charity);

        return redirect(route('active.charity.index'));
    }
}
