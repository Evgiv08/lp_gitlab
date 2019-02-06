<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     *
     * @return  string $path_title
     */
    public function store(Request $request)
    {
//        if ($request->file('img')) {
//            $img_path = $this->ImageController->store($request);
//        }

        $img = $request->file('img');
        $extension = $img->getClientOriginalExtension();
        $path = str_slug($request->full_name).'/'.uniqid('lp_', false) . '.' . $extension;

        if ($img) {
            $img->move(storage_path() . '/app/public/', $path);
        }

        return $path;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param   string $old_img_path
     *
     * @return  string $path_title
     */
    public function update(Request $request, $old_img_path)
    {
//        if ($request->file('img')) {
//            $img_path = $this->ImageController->update($request);
//        }

        $img = $request->file('img');
        $extension = $img->getClientOriginalExtension();
        $path = str_slug($request->full_name).'/'.uniqid('lp_', false) . '.' . $extension;

        Storage::disk('public')->delete($old_img_path);
        $img->move(storage_path() . '/app/public/', $path);

        return $path;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  string $img_path
     */
    public function destroy($img_path)
    {
        Storage::disk('public')->delete($img_path);
    }
}
