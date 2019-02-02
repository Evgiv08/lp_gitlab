<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table='charity_documents';

    protected $fillable = [
        'charity_id',
        'title',
        'file_path'
    ];

    // store new documets to db
    public function scopeStore($charity_id, $title, $path)
    {
        $this->charity_id = $charity_id;
        $this->title = $title;
        $this->file_path = $path;
        $this->save();
    }

    // delete all charity documents from db
    public function scopeDeleteAll($charity_id)
    {
        $query->delete()->where('charity_id', $charity_id);
    }
}
