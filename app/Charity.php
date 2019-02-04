<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Charity extends Model
{
    protected $fillable = [
        'client_id',
        'full_name',
        'phone',
        'locality',
        'address',
        'birth_date',
        'purpose',
        'about',
        'category_id',
        'sum',
        'term',
        'start_date',
        'finish_date',
        'slug',
        'img_path'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getAgeAttribute()
    {
        return Carbon::parse($this->attributes['birth_date'])->age;
    }
}
