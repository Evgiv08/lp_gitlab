<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\App;

class Client extends Authenticatable
{
    protected $guard = 'client';

    protected $fillable = [
        'name', 'surname', 'email', 'phone', 'img_path', 'password'
    ];

    protected $hidden = [
        'remember_token', 'password'
    ];

    // get charities for client
    public function charities()
    {
        return $this->hasMany('App\Charity');
    }

    // get all client charities
    public function getClientCharities($client)
    {
        return $client->charities;
    }
//    public function appeals()
//    {
//        return $this->hasMany(Appeals::class, 'client_id');
//    }

//    public function marks()
//    {
//        return $this->hasMany(Mark::class, 'client_id');
//    }

    public function scopeGetClients($query)
    {
        return $query->latest()->get();
    }
}
