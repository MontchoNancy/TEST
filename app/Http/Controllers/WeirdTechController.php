<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeirdTechController extends Controller
{
    public function index(){
        return view('Weird_tech.index');
    }

    public function apropos(){
        return view('Weird_tech.apropos');
    }

    public function service(){
        return view('Weird_tech.service');
    }

    public function contact(){
        return view('Weird_tech.contact');
    }


    
}
