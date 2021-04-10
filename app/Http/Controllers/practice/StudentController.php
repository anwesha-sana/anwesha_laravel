<?php

namespace App\Http\Controllers\practice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        $student_details = Student::get_student_details();
        dd($student_details);
    }
}
