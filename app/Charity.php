<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
