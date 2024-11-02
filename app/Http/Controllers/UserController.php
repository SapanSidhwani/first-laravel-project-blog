<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{
    //
    function getUser()
    {
        return "My name is Sapan";
    }

    function users()
    {
        // -> From database

        // -> Raw SQL
        // $users = DB::select("select * from users");

        // -> Query Builder
        $users = DB::table('users')->where('name', 'like', 'sapan')->get();

        // -> From API
        // $res = Http::get('https://jsonplaceholder.typicode.com/users')->body(); // because response is in json format. ********->status();
        // $users = json_decode($res);

        return view('users', ['users' => $users]);
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

    function addUser(Request $req)
    {
        // How to get single inputed values on the basis of name attribute ?
        // echo $req["username"];
        // echo $req->username;

        // echo $req;

        // print_r($req["skills"]);

        // theses are some pre-made validation rules: required, min:3, max:5, email 
        $req->validate(
            [
                "useremail" => "required | email",
                "username" => "required |  min:3 | max:5 | Uppercase",
                "skills" => "required",
                "age" => "required",
                // "active" => "required",
                "gender" => "required"
            ],
            // Custom Messages
            [
                "useremail.email" => "Email format: 2iQp4@example.com",
                "useremail.required" => "Email is required",
            ]
        );

        /*
        {
            "_token": "caSQMvQ7S1DOWoEln8pCFXT8INUXLt3MWFtDAUw6",
            "username": "sapan"
        }
        */
        return $req;
    }
}
