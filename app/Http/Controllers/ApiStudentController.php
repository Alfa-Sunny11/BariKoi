<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;


class ApiStudentController extends Controller
{
    public function list(){

        return Student::all();
    }
}
