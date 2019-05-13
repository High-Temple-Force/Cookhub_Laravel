<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;


class TagController extends Controller
{
    public function store(Request $request)
    {
        $params = $request->validate([
            'tagname' => 'required|max:20',
        ]);
        Tag::firstOrCreate(['tagname' => $params]);
        
    }
    
}

