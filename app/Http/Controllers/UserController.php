<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
    function getUser()
    {
        return "My name is Sapan";
    }

    function sayUserName($name)
    {
        return view('username', ['name' => $name]);
    }

    function useNestedFolder()
    {
        // To check the view exists or not
        if (View::exists('nested.name'))
            return view('nested.name');
        else 
            return "No view found";
    }
}
