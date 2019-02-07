<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BanksInfo extends Model
{
    protected $table = 'banks_info';

    public $timestamps = false;

    protected $fillable = [
        'charity_id',
        'bank_title',
        'account_number',
        'mfo',
        'inn'
    ];

    // store new BanksInfo in db
    public function storeBanksInfo($charity_id, $request)
    {
        $this->charity_id = $charity_id;
        $this->bank_title = $request->bank_title;
        $this->account_number = $request->account_number;
        $this->mfo = $request->mfo;
        $this->inn = $request->inn;
        $this->save();
    }
}
