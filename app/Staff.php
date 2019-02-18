<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
    // Defined guard for Staff.
//    protected $guard = 'staff';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'role', 'email', 'password'
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
}
