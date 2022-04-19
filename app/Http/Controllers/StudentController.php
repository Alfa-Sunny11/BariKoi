<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function list(){

           $students = Student::all();
   
           return view('welcome')->with('student',$students);
       }
}
