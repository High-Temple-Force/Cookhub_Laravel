<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Student;

class FooController extends Controller
{
    public function foo1()
    {
        return 'foo1!';
    }
    //

    public function foo2()
    {
        return view('foo.foo2', [
            'title' => 'Foo2',
            'body' => 'My Lara'
        ]);
    }

    public function foo3()
    {
        $user = Student::where('name', '川端　康成')->first();
        $users = Student::all();
        return view('foo.foo3', [
            'user' => $user
        ]);
    }
}
