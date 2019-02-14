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

    //charity has one status
    public function charityStatus()
    {
        return $this->hasOne(CharityStatuses::class);
    }

    //charity belongs to category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    // scope for search
    public function scopeSearch($query, $search)
    {
        return $query->whereRaw('searchtext @@ to_tsquery(\'russian\', ?)', [$search])
            ->orderByRaw('ts_rank(searchtext, to_tsquery(\'russian\', ?))', [$search]);
    }
}

