<?php

namespace App\Http\Controllers\Auth;

use App\Staff;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class StaffLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating staff for the application and
    | redirecting them to your dashboard.
    */

    use AuthenticatesUsers;

    protected function guard()
    {
        return Auth::guard('staff');
    }

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

    public function ShowLoginForm()
    {
        return view('dashboard.login');
    }

    public function login(Request $request)
    {
        //try to login
        $this->validateLogin($request);
        if ($this->attemptLogin($request)) {
            return $this->sendLoginResponse($request);
        }

        //if login incorrect
        return redirect()->back()->with('errors', 'Неверный логин или пароль');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('staffLogin');
    }
}
