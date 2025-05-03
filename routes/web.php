<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\FuncCall;

Route::get('/', function () {
    return view('welcome');
});

// Dynamic Parameter Route:

Route::get('/dynamic/{name}', function ($name) {
    return view('dynamicParam', ['name' => $name]);
});

Route::view('/about','about');
// Route::redirect('/about','/');

Route::get('user',[UserController::class,'getUser']);

// Dynamic with controller
Route::get('user/{name}',[UserController::class,'getUserName']);

Route::get('/message',function(){
    return view('messageViewer');
});

Route::view('userForm','userForm');
Route::post('userForm',[UserController::class,'userForm']);