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
                // $data = $request->all();
                // dd($data);

                $this->validate($request , [
                    'name'=>'required',
                    'email'=>'required',
                    'address'=>'required',
                    'phone'=>'required',
                    'state_id'=>'required',
                    'attended'=>'required',
                    'present'=>'required',
                    'lga'=>'required',
                    'course_id'=>'required',   
                ]);


                $enquiry = Enquiry::create([
                    'attended' =>$request->attended,
                    'present'=>$request->present,
                ]);

                if($enquiry){
                    $user = User::create([
                        'name'=>$request->name,
                        'email'=>$request->email,
                        'address'=>$request->address,
                        'phone'=>$request->phone,
                        'state_id'=>$request->state_id,
                        'enquiry_id'=>$enquiry->id,
                        'course_id'=>$request->course_id,
                        'lga'=>$request->lga
                    ]);
                }

               

                if(!$user){
                    return back()->with('error' , 'Registration was not successful')  ;       
                }
                return back()->with('sucsess' , 'Registeration successfull , click to proceed to test');
     }



     public function createCourse(Request $request){
        
            $this->validate($request,[
                'name'=>'required'
            ]);

                $course = State::create([
                    'name'=>$request->name
                ]);
               

                if(!$course){
                    return back()->with('error' , 'Registration was not successful')  ;       
                }
                return back()->with('sucsess' , 'Registeration successfull , click to proceed to test');
     }
}
