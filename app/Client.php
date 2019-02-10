<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Client extends Authenticatable
{
    protected $guard = 'client';

    protected $fillable = [
        'name', 'surname', 'email', 'phone', 'img_path', 'password'
    ];

    protected $hidden = [
        'remember_token', 'password'
    ];

    public function charities()
    {
        return $this->hasMany(Charity::class, 'client_id');
    }

//    public function appeals()
//    {
//        return $this->hasMany(Appeals::class, 'client_id');
//    }

//    public function marks()
//    {
//        return $this->hasMany(Mark::class, 'client_id');
//    }
}
