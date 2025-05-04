<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class TableController extends Controller
{
    //
    function showUsers()
    {
        $users= DB::select('select * from users');
        return view('welcome',['users'=>$users]);
    }
}
