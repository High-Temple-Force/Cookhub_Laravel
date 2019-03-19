<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InsertController extends Controller
{
    //
    public function getIndex()
    {
        return view('insert.index');
    }

    public function confirm(\App\Http\Requests\InsertRequest $request)
    {
        $data = $request->all();
        return view('insert.confirm')->with($data);
    }
}
