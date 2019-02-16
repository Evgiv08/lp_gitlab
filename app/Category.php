<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title'];

    // show all categories
    public function scopeGetAllCategories($query)
    {
        return $query->get();
    }

    public function scopeGetOneCategoryById($query, $id)
    {
        return $query->find($id)->first();
    }
}
