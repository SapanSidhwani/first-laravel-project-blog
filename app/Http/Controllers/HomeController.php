<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function show() {
        return "Student List";
    }

    function add() {
        return "Add Student";
    }

    function delete($id) {
        return "Delete Student: " . $id;
    }
}
