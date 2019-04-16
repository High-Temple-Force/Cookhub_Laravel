<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InsertController extends Controller
{
    public function getIndex()
    {
        return view('insert.index');
    }

    public function confirm(\App\Http\Requests\InsertRequest $request)
    {
        $data = $request->all();
        return view('insert.confirm')->with($data);
    }

    public function finish(\App\Http\Requests\InsertRequest $request)
    {
        $user = new \App\Worker;
        $user->username = $request->username;
        $user->mail = $request->mail;
        $user->age = $request->age;
        $user->save();

        return view('insert.finish');
    }
}
