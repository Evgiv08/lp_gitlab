<?php

namespace App\Http\Controllers\Auth;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating staff for the application and
    | redirecting them to your dashboard. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Create a new controller instance.
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:staff')->except('staffLogout');
    }

    public function showStaffLoginForm()
    {
        return view('dashboard.pages.login');
    }

    public function staffLogin(Request $request)
    {
        $this->validate($request, [
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);

        if (Auth::guard('staff')->attempt([
            'email'    => strtolower($request->email),
            'password' => $request->password],
            $request->get('remember'))) {

            return redirect()->route('staff.index');
        }

        return back()->withInput($request->only('email', 'remember'));
    }

    public function staffLogout()
    {
        Auth::guard('staff')->logout();

        return redirect('/doorway');
    }

    public function clientLogin(Request $request)
    {
        $this->validateLogin($request, [
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = [
            'email'    => strtolower($request->email),
            'password' => $request->password,
        ];
        $remember = $request->get('remember');

        if (Auth::guard('client')->attempt($credentials, $remember)) {
            return redirect()->route('client.show', Auth::guard('client')->user()->id);
        }

        return back()->withInput($request->only('email', 'remember'));
    }

    public function userLogout()
    {
        Auth::guard('client')->logout();

        return redirect('/');
    }
}
