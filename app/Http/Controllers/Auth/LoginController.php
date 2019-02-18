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
        $this->middleware('guest:client')->except('logout');
        $this->middleware('guest:staff')->except('staffLogout');
    }

    /**
     * Specify redirect path for users
     * with different roles.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function redirectTo()
    {
        if (auth('staff')->user()->role ==__('app.Admin')) {
            return redirect()->route('staff.index');
        }

        return redirect()->route('new.charity.index');
    }

    /**
     * Show login form for enter in Dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function showStaffLoginForm()
    {
        return view('dashboard.pages.login');
    }

    /**
     * Handle a login request to the dashboard.
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
     * Log out staff from dashboard.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function staffLogout()
    {
        auth('staff')->logout();

        return redirect('/doorway');
    }

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
