<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    //
    function myfunction(Request $req , $varl = ""){
        $data['value_id'] = $varl;
        return view('myview' , $data);
    }
}
