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

    // get all new charities
    public function scopeGetNewCharity($query)
    {
        return $query->where('draft', 1)->paginate(1);
    }

    //gel all active charities
    public function scopeGetActiveCharity($query)
    {
        return $query->where('active', 1)->paginate(1);
    }

    //get all completed charities
    public function scopeGetCompletedCharity($query)
    {
        return $query->where('done', 1)->paginate(1);
    }

    //get all baned charities
    public function scopeGetBanCharity($query)
    {
        return $query->where('ban', 1)->paginate(1);
    }

    //status belongs to charity
    public function charity()
    {
        return $this->belongsTo(Charity::class);
    }

}
