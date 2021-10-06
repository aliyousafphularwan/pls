<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{
    public function admission(){
        return view('');
    }

    public function new_admin(Request $request){
        return $request;
    }

}
