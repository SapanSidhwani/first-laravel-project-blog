<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //
    public function upload(Request $req)
    {
        $img = new Image();

        $path = $req->file('image')->store('.', 'public');
        $imagePath = explode('/', $path)[1];

        $img->path = $imagePath;
        $img->save();

        return $req ? redirect('/view-files') : "Error while uploading image";
    }

    public function list()
    {
        $images = Image::all();
        return view('view-files', ['images' => $images]);
    }
}
