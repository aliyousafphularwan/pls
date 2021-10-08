<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admission;

class StudentController extends Controller
{
    public function admission(){
        return view('student.new');
     }

     public function list(){
        return view('student.list');
     }

}
