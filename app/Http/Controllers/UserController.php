<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\State;
use App\Enquiry;
use App\Course;

class UserController extends Controller
{
     public function create(Request $request){
                $this->validate($request , [
                    'name'=>'required',
                    'email'=>'required',
                    'address'=>'required',
                    'number'=>'required',
                    'state_id'=>'required',
                    'attended'=>'required',
                    'present'=>'required',
                    'course_id'=>'required',
                    'rechapta'=>'required'
                ]);

                $enquiry = Enquiry::create([
                    'attended' =>$request->attended,
                    'present'=>$request->present,
                ]);

                $user = User::create([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'address'=>$request->address,
                    'number'=>$request->number,
                    'state_id'=>$request->state_id,
                    'enquiry_id'=>$request->enquiry_id,
                    'course_id'=>$request->course_id
                ]);

                if(!$user){
                    return back()->with('error' , 'Registration was not successful')  ;       
                }
                return back()->with('sucsess' , 'Registeration successfull , click to proceed to test');
     }
}
