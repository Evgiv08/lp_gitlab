<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
    use Notifiable;
    protected $table = 'staff';

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function add($fields)
    {
        $employee = new static();
        $employee->fill($fields);
        $employee->password = bcrypt($fields['password']);
        $employee->save();

        return $employee;
    }
}
