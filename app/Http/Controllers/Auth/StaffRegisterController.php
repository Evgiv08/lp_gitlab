<?php

namespace App\Http\Controllers\StaffAuth;

use App\Staff;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new staffs as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

//    use RegistersUsers;

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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'     => ['required', 'string', 'max:255'],
            'email'    => ['required', 'string', 'email', 'max:255', 'unique:staff'],
            'role'     => ['required'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    public function register(Request $request)
    {
        $employee = Staff::add($request->all());
        if ($employee instanceof Staff) {
            return redirect()->back()->with('status', 'Success');
        }
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     *
     * @return \App\User
     */

}
