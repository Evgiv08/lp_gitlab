<?php

namespace App\Http\Controllers\StaffAuth;

use App\Staff;
use App\Http\Controllers\Controller;
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

    public function loginForm()
    {
        return view('dashboard.login');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);
        if ($this->attemptLogin($request)) {
            $emp = Staff::where('email', $request->get('email'))->first();
            Auth::login($emp);
            return $this->sendLoginResponse($request);
//            return $this->sendLoginResponse($request);
        }

    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('staffLogin');
    }
}
