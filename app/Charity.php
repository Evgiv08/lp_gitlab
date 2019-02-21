<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

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
        'img_path',
        'status_id',
        'ban_reason',
        'ban_date'
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    // get charities for client
    public function client()
    {
        return $this->belongsTo('App\Client', 'client_id');
    }

    // get charities for category
    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }

    // charity has ONLY one status
    public function status()
    {
        return $this->belongsTo('App\CharityStatuses', 'status_id');
    }

    // charity has one bank information
    public function banks_info()
    {
        return $this->hasOne('App\BanksInfo');
    }

    //TODO: test this
    // charity has one or more documents
    public function documents()
    {
        return $this->hasMany('App\Document');
    }

    public function getAgeAttribute()
    {
        return Carbon::parse($this->attributes['birth_date'])->age;
    }

    public function scopeRandomCards($query, $number)
    {
        return $query->inRandomOrder()
                      ->take($number);
    }

    // store new charity to db
    public function storeCharity($request)
    {
        $this->client_id = $request->client_id;

        $full_name = $request->client_name;

        // check if charity for other person
        if ($request->full_name) {
            $full_name = $request->full_name;
        }

        $this->full_name = $full_name;
        $this->phone = $request->phone;
        $this->locality = $request->locality;
        $this->address = $request->address;
        $this->birth_date = $request->birth_date;
        $this->purpose = $request->purpose;
        $this->about = $request->about;
        $this->category_id = $request->category_id;
        $this->sum = $request->sum;
        $this->term = $request->term;
        $this->status_id = config('constants.draft');

        // create slug from full_name
        $this->slug = $this->createSlug($full_name);

        // check if img isset
        if ($request->file('img')) {
            $this->img_path = $this->storeImage($request, $this->slug);
        }

        $this->save();

        // return newly created object
        return $this;
    }

    // check count of same slug
    // TODO: fix it
    public function createSlug($full_name)
    {
        $slug = str_slug($full_name);

        $check_slug =  $this->where('slug', $slug)->count();

        if ($check_slug >= 1) {
            $i = ++$check_slug;
            $slug = $slug . '-' . $i;
        }

        return $slug;
    }

    // store image for charity in storage
    public function storeImage($request, $slug)
    {
        $img = $request->file('img');
        $extension = $img->getClientOriginalExtension();
        $title = uniqid('lp_', false) . '.' . $extension;

        if ($img) {
            $img->move(storage_path() . '/app/public/'.$slug.'/', $title);
        }

        $path = $slug.'/'.$title;

        return $path;
    }

    // delete image from storage
    public function deleteImage($img_path)
    {
        Storage::disk('public')->delete($img_path);
    }

    // scope for search
    public function scopeSearch($query, $search)
    {
        return $query->whereRaw('searchtext @@ to_tsquery(\'russian\', ?)', [$search])
            ->orderByRaw('ts_rank(searchtext, to_tsquery(\'russian\', ?)) DESC', [$search]);
    }

    // ban active charity for reason
    public function banActivecharity($charity)
    {
        $charity->status_id = config('constants.ban');
        $charity->ban_date = Carbon::now();
        $charity->ban_reason = request()->get('reason');

        $charity->save();
    }

    // unban charity and return active status
    public function unbanCharity($charity)
    {
        $charity->status_id = config('constants.active');
        $charity->ban_date = null;
        $charity->ban_reason = null;

        $charity->save();
    }

    // edit new charity in dashboard
    public function editNewCharity($charity)
    {
        $charity->purpose = request()->get('purpose');
        $charity->about = request()->get('about');
        $charity->category_id = request()->get('category_id');

        $charity->save();
    }

    // publish new charity (change its status to active)
    public function publishNewCharity($charity)
    {
        $charity->status_id = config('constants.active');
        $charity->start_date = Carbon::now();

        $charity->save();
    }

    // delete new charity in dashboard
    public function deleteNewCharity($charity)
    {
        $this->deleteImage($charity->img_path);
        $charity->delete();
    }

    // return charity status draft
    public function returnNewCharity($charity)
    {
        $charity->status_id = config('constants.returned');

        $charity->save();
    }
}

