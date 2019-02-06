<?php

namespace App\Http\Controllers;

use App\Document;
use App\Charity;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public $document;
    public $charity;

    public function __construct(Document $document, Charity $charity)
    {
        $this->document= $document;
        $this->charity = $charity;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param   Charity $charity_id
     *
     * @return void
     */
    public function store(Request $request, $charity_id)
    {
        $files = $request->file('document');

        foreach ($files as $title => $file){

            $extension = $file->getClientOriginalExtension();
            $path = '/documents/'.uniqid($title.'_', false) . '.' . $extension;

            $file->move(storage_path() . '/app/public/', $path);

            $this->document->create($charity_id, $title, $path);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Document  $document
     * @return \Illuminate\Http\Response
     */
    public function destroy($charity_id)
    {
        $this->document->deleteAll($charity_id);
    }
}
