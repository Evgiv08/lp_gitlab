<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title'];

    /**
     * Get the staff that has the role.
     */
    public function staff()
    {
        return $this->belongsTo('App\Staff');
    }
}
