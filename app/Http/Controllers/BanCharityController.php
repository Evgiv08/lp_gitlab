<?php

namespace App\Http\Controllers;

use App\CharityStatuses;
use App\Charity;

class BanCharityController extends Controller
{
    protected $status;
    protected $charity;

    public function __construct(CharityStatuses $status, Charity $charity)
    {
        $this->status = $status;
        $this->charity = $charity;
    }

    /**
     * Display a listing of the banned charities in dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $charities = $this->status->getBannedCharities();

        return view('dashboard.pages.charity.ban.index', compact('charities'));
    }

    /**
     * Display one banned charity.
     * @param   Charity $charity
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Charity $charity)
    {
        return view('dashboard.pages.charity.ban.show', compact('charity'));
    }

    /**
     * Unban banned charity.
     * @param   Charity $charity
     *
     * @return \Illuminate\Http\Response
     */
    public function unban(Charity $charity)
    {
        $this->charity->unbanCharity($charity);

        return redirect(route('ban.charity.index'));
    }
}
