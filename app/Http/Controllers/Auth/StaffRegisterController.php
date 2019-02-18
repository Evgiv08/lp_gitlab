<?php

namespace App\Http\Controllers\Auth;

use App\Staff;
use App\Http\Controllers\Controller;
use App\Http\Requests\StaffRegisterRequest;
use Illuminate\Foundation\Auth\RegistersUsers;

class StaffRegisterController extends Controller
{
    use RegistersUsers;

    // Initialize middleware.
    public function __construct()
    {
        $this->middleware('guest:staff');
    }

    /**
     * Create new member of Staff.
     *
     * @param StaffRegisterRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function createStaff(StaffRegisterRequest $request)
    {
        Staff::create([
            'name'  => ucwords($request['name']),
            'email' => strtolower($request['email']),
            'role' => $request['role'],
            'password' => bcrypt($request['password']),
        ]);

        return redirect()->route('staff.index');
    }
}
