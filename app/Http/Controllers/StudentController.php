<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StudentController extends Controller
{
    //
    public function getIndex()
    {
        $query = \App\Student::query();
        $students = $query->orderBy('name', 'desc')->paginate(10);
        return view('layouts.list')->with('students',$students);
    }
}
