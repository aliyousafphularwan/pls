<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admission;
use App\User;
use Validator;

class ApiController extends Controller
{
    
    public function admission(Request $request){

        $admin = new Admission;
        $user = new User;

        $valid = Validator::make($request->all(), [
            'regnumb' => 'required|unique:admissions',
            'fname'=> 'required',
            'lname'=> 'required',
            'father'=> 'required',
            'dob'=> 'required',
            'class'=> 'required',
            'section'=> 'required',
        ]);

        $admin->regnumb =$request->regnumb;
        $admin->fname = $request->fname;
        $admin->lname = $request->lname;
        $admin->father = $request->father;
        $admin->mother = $request->mother;
        $admin->dob = $request->dob;
        $admin->admnyr = $request->year;
        $admin->class = $request->class;
        $admin->section = $request->section;
        $admin->prevskol = $request->prevskol;
        $admin->reason = $request->reson;
        $admin->religion = $request->religion;
        $admin->referby = $request->referer;
        $admin->img = $request->img;

        if($valid->fails()){
            return response()->json([
                'error'=>$valid->errors(),
            ]);
        }else{
            $save1 = $admin->save();
            $user->username = 'std'.rand(111,999);
            $user->password = rand(111111,999999);
            $save2 = $user->save();

            if($save1 && $save2){
                return array('success' => 'account successfully created');
            }else{
                return array('failed' => 'failed to create new account');
            }
        }        
        
    }

}
