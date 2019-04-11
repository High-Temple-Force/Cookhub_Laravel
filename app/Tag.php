<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //
    protected $fillable = [
        'tagname',
    ];

    public function post() {
        $this->belongsTo(\App\Post);
    }
}
