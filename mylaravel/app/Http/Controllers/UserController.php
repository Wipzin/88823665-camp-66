<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function index(){
        $user = User::all();
        return view('user');
    }

    function edit($id){
        $user = User::find($id);
        return veiw('user_edit',['user' => $user]);
    }

    function edit_action(Request $req){
        $user = User::find($req->id);

        $user->name = $req->name;
        $user->email = $req->small;
        $user->password = $req->password;

        $user->save();

        return redirect('/user');
    }
    function delete(request $req){
        User::destroy($req->id);
        return redirect('/user');
    }
}
