<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function food(){
        return view('landing.food');
    }

    public function drink(){
        return view('landing.drink');
    }
}
