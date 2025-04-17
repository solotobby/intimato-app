<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function landingPage(){
        return view('welcome');
    }

    public function categories(){
        return view('features');
    }

    public function terms(){
        return view('terms');
    }

    public function about(){
        return view('about');
    }
}
