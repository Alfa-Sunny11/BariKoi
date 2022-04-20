<?php

namespace App\Http\Controllers;

use JWTAuth;
use Illuminate\Http\Request;
use App\Models\Student;


class ApiStudentController extends Controller
{
    protected $user;

    public function __construct(){
        $this->user = JwTAuth::parseToken()->authenticate();
    }

    public function list(){

        return Student::all();
    }
}
