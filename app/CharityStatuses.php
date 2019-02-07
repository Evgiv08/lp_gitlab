<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CharityStatuses extends Model
{
    protected $fillable = [
        'charity_id',
        'draft',
        'active',
        'ban',
        'done',
        'reason'
    ];

    // store new draft CharityStatus into db
    public function storeDraftStatus($charity_id)
    {
        $this->charity_id = $charity_id;
        $this->draft = 1;

        $this->save();
    }
}
