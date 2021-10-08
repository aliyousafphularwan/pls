<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    
    public function profile(){
        return view('settings.profile');
    }
    
    public function userManage(){
        return view('settings.manage');
    }

    public function defaults(){
        return view('settings.defaults');
    }

}
