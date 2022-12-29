<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;     //???

class UserController extends Controller
{
    //
    function authenticate(Request $request)
    {
        $user_id = $request->user_id;
        $password = $request->password;
        $user = DB::table('users')->where('email', $user_id)->first();
        if (isset($user))
            return view('dashboard');
        else
            echo "Invalid username or password";
    }
}