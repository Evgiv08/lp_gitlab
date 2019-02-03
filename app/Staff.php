<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Staff extends Authenticatable
{
    protected $guard = 'staff';

    protected $fillable = [
        'name', 'role', 'email', 'password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getRole()
    {
        if (strtolower($this->role) != null) {
            switch (strtolower($this->role)) {
                case 'seo':
                    return 'СЕО';
                case 'admin':
                    return 'Администратор';
                case 'moderator':
                    return 'Модератор';
            }
        }
    }
}
