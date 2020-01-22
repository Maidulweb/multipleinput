<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class All extends Controller
{
    public function index (){
        return view('index');
    }
    public function about (){
        return view('about');
    }
    public function educationadmission (){
        return view('educationadmission');
    }
    public function migration (){
        return view('migration');
    }
    public function jobassisstance (){
        return view('jobassisstance');
    }
    public function accomidation (){
        return view('accomidation');
    }
    public function careerdevelopmentservices (){
        return view('careerdevelopmentservices');
    }
    public function shortcoarse (){
        return view('shortcoarse');
    }
    public function carrerconsultancy (){
        return view('carrerconsultancy');
    }
    public function contact (){
        return view('contact');
    }
    
}
