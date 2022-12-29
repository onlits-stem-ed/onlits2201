<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{

    function create(Request $request)
    {
        DB::table('contacts')->insert([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name
        ]);
        return view('new_contact');
    }

    function list()
    {
        DB::
    }
}
