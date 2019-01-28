<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     * @var string
     */
    protected $redirectTo = '/dashboard/staff';

    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loginForm()
    {
        return view('dashboard.login');
    }

    public function login(Request $request)
    {
        try {
            $this->validateLogin($request);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        //true - if login success
        $loginAttempt = $this->attemptLogin($request);

        if ($loginAttempt) {
            return redirect()->route('staff');
        } else {
            return redirect()->back()->with('error', 'Wrong login or password');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('staffLogin');
    }
}
