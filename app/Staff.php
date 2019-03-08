<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'role_id', 'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Retrieve all Staff members from DB.
     *
     * @param $query
     * @return array
     */
    public function scopeGetStaff($query)
    {
        return $query->latest()->get();
    }

    /**
     * Update specific Staff member info.
     * @param $request
     * @param $staff
     * @return void
     */
    public function editStaff($request, $staff)
    {
        $staff['role'] = $request['role'];
        $staff['password'] = bcrypt($request['password']);

        $staff->save();
    }
}
