<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // this method is for Home page
    public function index(){
        return view('front.home');
    }
    
    public function contact(){
        return view('front.contact');
    }

}
