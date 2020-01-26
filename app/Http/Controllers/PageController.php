<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\State;

class PageController extends Controller
{
    public function home(){
        return view('home.index');
    }

    public function form(){

        $course = Course::all();
        $state = State::all();

        return view('form.index' , ['course'=> $course , 'state'=>$state]);
    }

    public function course(){
        return view('form.course');
    }

    public function testIndex(){
        return view('test.index');
    }

    public function quiz(){
        return view('test.quiz.game');
    }
}
