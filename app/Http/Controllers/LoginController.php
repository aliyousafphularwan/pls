<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function login(Request $request){

        $user = User::where('id', 1)->get();
        Session::put('sid', $user);
        return redirect('/dashboard');

    }

    public function logout(){
        Session::flush();
        return redirect('/');
    }

}
