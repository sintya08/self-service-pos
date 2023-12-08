<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Read extends Controller
{
    public function read(){
        return view('read');
    }
}
