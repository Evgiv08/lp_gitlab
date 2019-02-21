<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class Document extends Model
{
    protected $table='charity_documents';

    protected $fillable = [
        'charity_id',
        'title',
        'file_path'
    ];

    //TODO: test this
    // one docoment for one charity
    public function charity()
    {
        return $this->belongsTo('App\Charity', 'charity_id');
    }

    // TODO: refactor
    // move new documets to storage
    public function storeDocuments($request, $charity_id, $slug)
    {
        $files = $request->file('document');

        foreach ($files as $title => $file) {
            $extension = $file->getClientOriginalExtension();
            $file_title = uniqid($title.'_', false) . '.' . $extension;

            $file->move(storage_path() . '/app/public/'.$slug.'/documents/', $file_title);

            $path = $slug.'/documents/'.$file_title;

            $this->storeDocumentsInfo($charity_id, $title, $path);
        }
    }

    // TODO: refactor
    // store new document information in db from loop
    public function storeDocumentsInfo($charity_id, $title, $path)
    {
        $this->insert([
            'charity_id' => $charity_id,
            'title' => $title,
            'file_path' => $path,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }

    public function deleteAllCharityDocuments($charity)
    {
        $documents = $this->where('charity_id', $charity->id)->get();

        foreach ($documents as $document) {
            Storage::disk('public')->delete($document->file_path);
        }

        // TODO: fix it - dir'll be deleted
        Storage::deleteDirectory($charity->slug);
    }
}
