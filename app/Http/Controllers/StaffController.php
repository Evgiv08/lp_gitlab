<?php

namespace App\Http\Controllers;

use App\Staff;
use App\Http\Requests\StaffRequest;

class StaffController extends Controller
{
    protected $staff;

    /**
     * Initialise model Staff.
     *
     * @param Staff $staff
     */
    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    /**
     * Display all existing staff.
     *
     * @return \Illuminate\View\View $staff array
     */
    public function index()
    {
        $staff = $this->staff->getStaff();

        return view('dashboard.pages.staff.index', compact('staff'));
    }

    /**
     * Update the specified Staff.
     *
     * @param  StaffRequest $request
     * @param  \App\Staff   $staff
     * @return \Illuminate\Http\Response
     */
    public function update(StaffRequest $request, Staff $staff)
    {
        $this->staff->editStaff($request, $staff);

        return redirect()->route('staff.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff $staff
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();

        return redirect()->route('staff.index');
    }
}
