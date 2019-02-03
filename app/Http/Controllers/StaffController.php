<?php

namespace App\Http\Controllers;

use App\Staff;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class StaffController extends Controller
{
//    protected $employee;
//
//    /**
//     * Initialise model Staff.
//     *
//     * @param Category $staff
//     */
//    public function __construct(Category $category)
//    {
//        $this->category = $category;
//    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staff = Staff::orderBy('id', 'asc')->get();

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
        $this->validate($request, [
            'email'    => [
                'required',
                'email',
                Rule::unique('staff')->ignore($staff->id)],
            'role'     => 'required',
            'password' => 'nullable|string|min:6|confirmed',
        ]);

//        $staff->name = $request->get('name');
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
