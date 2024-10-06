<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function getUser() {
        return "My name is Sapan";
    }

    function sayUserName($name) {
        return view('username', ['name' => $name]);
    }

    function useNestedFolder() {
        return view('nested.name');
    }
}
