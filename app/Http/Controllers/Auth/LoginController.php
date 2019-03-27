<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    // Initialize middleware.
    public function __construct()
    {
        $this->middleware('guest:staff')->except('staffLogout');
        $this->middleware('guest:client')->except('clientLogout');
    }

    /*
    |--------------------------------------------------------------------------
    | Dashboard Login
    |--------------------------------------------------------------------------
    */

    /**
     * Show login form for enter in Dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function showStaffLoginForm()
    {
        if (auth('staff')->check()) {
            return back();
        }

        return view('dashboard.pages.login');
    }

    /**
     * Handle a login request to the Dashboard.
     *
     * @param LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function staffLogin(LoginRequest $request)
    {
        if (auth('staff')->attempt($request->only('email', 'password'))) {
            return $this->redirectTo();
        }

        return back()->withInput();
    }

    /**
     * Specify redirect path for authenticated staff
     * with different roles.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectTo()
    {
        if (auth('staff')->user()->role_id == config('constants.admin')) {
            return redirect()->route('staff.index');
        }

        return redirect()->route('new.charity.index');
    }

    /**
     * Log out staff from dashboard.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function staffLogout()
    {
        auth('staff')->logout();

        return redirect('/doorway');
    }

    /*
    |--------------------------------------------------------------------------
    | Site Login
    |--------------------------------------------------------------------------
    */

    /**
     * Handle a login request to the dashboard.
     *
     * @param LoginRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function clientLogin(LoginRequest $request)
    {
        if (auth('client')->attempt(
            $request->only('email', 'password'),
            $request['remember']
        )) {
            return redirect()->route('client.show', auth('client')->user()->id);
        }

        return back()->withInput($request->only('email', 'remember'));
    }

    /**
     * Log out client from site.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function clientLogout()
    {
        auth('client')->logout();

        return redirect()->route('mainpage');
    }
}
