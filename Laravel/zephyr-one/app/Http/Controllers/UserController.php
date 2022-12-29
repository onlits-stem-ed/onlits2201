<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //
    function authenticate(Request $request)
    {
        //$request = new Request();
        $data = array($request->user_id);
        $user = DB::select('select * from users where user_id = ?', $data);
        if (isset($user[0])) {
            if ($user[0]->password == $request->password)   //error
                return view('dashboard');
            else
                echo "Authentication failed!";
            return;
        }
        echo "Authentication failed!";
    }

    function select_all()
    {
        $users = DB::select('select * from users');
        return view('users')->with('users', $users);
    }

    function select_one(Request $request)           //To verify
    {
        $data = array($request->user_id);
        $user = DB::select('select * from users where user_id=?', $data);
        return $user[0]->user_id;
    }

    function register(Request $request)
    {
        $data = array($request->user_id, $request->password);
        if ($data[1] == $request->confirm_password) {
            DB::insert("insert into users(user_id, password) values(?, ?)", $data);
            return "User created successfully!";
        } else {
            return "Password Does not match!";
        }
    }

    function update($user_id)
    {

    }

    function remove($user_id)
    {
        
    }
}
