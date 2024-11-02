<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    /*
        default (no need to write): 
        protected $table = "students"

        with dynamic:
        protected $table = "college_students"
    */

    public $timestamps = false;

    public function testFunction () {
        return "testFunction";
    }
}
