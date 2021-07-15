<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Holiday;

class Homecontroller extends Controller
{
    public function index() {
       
        $holiday = Holiday::all();
        // dd($holiday);
       
        return view('home',compact('holiday'));
    }
    
}
