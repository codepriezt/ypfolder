<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home.index');
    }

    public function form(){
        return view('form.index');
    }

}
