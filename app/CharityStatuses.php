<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CharityStatuses extends Model
{
    protected $fillable = [
        'status'
    ];


    //status has many charities
    public function charities()
    {
        return $this->hasMany('App\Charity', 'status_id', 'id');
    }

    // get all active charities for main page
    public function getActiveCharitiesForMainPage()
    {
        return $this->where('status', 'active')->first()->charities;
    }

    // get all new charities for dashboard with pagination
    public function getNewCharities()
    {
        return $this->where('status', 'draft')->first()->charities()->paginate(5);
    }

    // get new charities number
    public function getNewCharitiesNumber()
    {
        return $this->where('status', 'draft')->first()->charities()->count();
    }

    // get all active charities for dashboard with pagination
    public function getActiveCharities()
    {
        return $this->where('status', 'active')->first()->charities()->paginate(5);
    }

    // get all completed charities for dashboard with pagination
    public function getCompletedCharities()
    {
        return $this->where('status', 'done')->first()->charities()->paginate(5);
    }

    // get all banned charities for dashboard with pagination
    public function getBannedCharities()
    {
        return $this->where('status', 'ban')->first()->charities()->paginate(5);
    }
}
