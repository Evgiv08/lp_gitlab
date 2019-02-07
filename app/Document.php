<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Document extends Model
{
    protected $table='charity_documents';

    protected $fillable = [
        'charity_id',
        'title',
        'file_path'
    ];

    // move new documets to storage
    public function storeDocuments($request, $charity_id, $slug)
    {
        $files = $request->file('document');

        foreach ($files as $title => $file) {
            $extension = $file->getClientOriginalExtension();
            $title = uniqid($title.'_', false) . '.' . $extension;

            $file->move(storage_path() . '/app/public/'.$slug.'/documents/', $title);

            $path = $slug.'/documents/'.$title;

            $this->storeDocumentsInfo($charity_id, $title, $path);
        }
    }

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
}
