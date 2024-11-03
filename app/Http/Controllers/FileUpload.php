<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileUpload extends Controller
{
    //
    function storeFile(Request $req)
    {

        $req->validate([
            'passport' => 'required|file|mimes:jpg,png,jpeg|max:2048', // Validating file types and size
        ], [
            'passport.required' => 'Please select a passport',
            'passport.file' => 'Please select a passport',
            'passport.mimes' => 'Only jpg, png, jpeg are allowed',
        ]);

        // It will store the file with unique name
        $path1 = $req->file('passport')->store('images', 'public');

        // Create a custom file name with unique ID
        $extension = $req->file('passport')->getClientOriginalExtension(); // Get the file extension
        $giveName = 'meri-marji-' . uniqid() . '.' . $extension; // Construct a custom name

        // If you want to store the file with your identity
        $path2 = $req->file('passport')->storeAs("images", $giveName, 'public');

        return view('show-file', ['path1' => $path1, 'path2' => $path2]);
    }
}
