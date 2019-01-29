<?php

namespace App\Http\Controllers\Auth;

use App\Staff;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class StaffRegisterController extends Controller
{

    /**
     * Where to redirect users after registration.
     * @var string
     */
    protected $redirectTo = '/dashboard/staff';

    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        //todo make middleware
        //with this (default) middleware admin can't register staff
        //$this->middleware('guest');
    }

    public function register(Request $request)
    {
        $this->validate($request, [
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:staff'],
            'role'     => ['required'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        $employee = Staff::add($request->all());
        if ($employee instanceof Staff) {
            return redirect()->back()->with('status', 'Success');
        }
    }
}
