<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function userForm(Request $request)
    {
        // return $request;
        $request->validate([
            'username'=>'required | min:3 | max:10 | Uppercase',
            'email'=>'required|email',
            'password'=>'required | min: 3 | max:23',
        ],[
            'username.required'=>'Username bharoooo',
            'email.required'=>'janab email khaali na chodde',
            'password.required'=>'arey, bade hi ajeeb kismm ke insaan hai, password hi nai rakhe??'
        ]);
        echo "UserName: $request->username";
        echo "<br>";
        echo "Email: $request->email";
        echo "<br>";
        echo "Password: $request->password";
        echo "<br>";
        
    }
    function getUser(){
        $name='ananya';
        $userArray=['sanjana','zubaida','maria'];
        return view('about',['name'=>$name,'users'=>$userArray]);
    }

    function getUserName($name)
    {
        // return "Hello ".$name;
        return view('user',['name'=>$name]);
    }

    function show()
    {
        return to_route('hm');
    }
}
