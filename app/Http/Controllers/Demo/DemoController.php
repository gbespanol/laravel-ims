<?php

namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function Index(){
        return view('about');
    }// end method

    public function Contact(){
        return view('contact');
    }// e
}
