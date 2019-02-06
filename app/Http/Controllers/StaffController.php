<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StaffController extends Controller
{
    /**
     * Initialise model Staff.
     *
     * @param Category $staff
     */
    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = $this->staff->scopeGetStaff($this->staff);

        return view('dashboard.pages.staff.index', compact('staff'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Staff               $staff
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Staff $staff)
    {
        request()->validate([
            'email' => ['required', 'email', 'unique:staff,email,'.$staff->id],
            'role'     => 'required',
            'password' => 'nullable|string|min:6|confirmed',
        ]);

        $staff->email = $request->get('email');
        $staff->role = $request->get('role');

        if ($request->get('password') != null) {
            $staff->password = bcrypt($request->get('password'));
        }
        $staff->save();

        return redirect()->route('staff.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff $staff
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();

        return redirect()->route('staff.index');
    }
}
