<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function __construct(){
        
    }
    public function sinhvien(){
        return view('backend.student.sinhvien');
    }

}
