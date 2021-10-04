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

        $validate = Validator::make($request->all(), [
            'fname' => 'required|unique:admission'
        ]);

        $admin->regnumb = 'pls-'.date('y').rand(111,999);
        $admin->fname = $request->fname;
        $admin->lname = $request->lname;
        $admin->father = $request->father;
        $admin->mother = $request->mother;
        $admin->dob = $request->dob;
        $admin->admnyr = $request->year;
        $admin->class = $request->class;
        $admin->section = $request->section;
        $admin->prevskol = $request->rpevskol;
        $admin->reason = $request->reson;
        $admin->religion = $request->religion;
        $admin->referby = $request->referer;
        $admin->img = $request->img;

        if($validate->fails()){
            return response()->json([
                'error'=>$validate->errors(),

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
