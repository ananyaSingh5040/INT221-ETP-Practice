<?php

use App\Http\Controllers\formController;
use App\Http\Controllers\studentController;
use App\Http\Controllers\TableController;
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

Route::view('/about', 'about');
// Route::redirect('/about','/');

Route::get('user', [UserController::class, 'getUser']);

// Dynamic with controller
Route::get('user/{name}', [UserController::class, 'getUserName']);

Route::get('/message', function () {
    return view('messageViewer');
});

Route::view('userForm', 'userForm');
Route::post('userForm', [UserController::class, 'userForm']);

Route::view('form', 'formView');
Route::post('adduser', [formController::class, 'getFormData']);

Route::view('url1', 'UrlTesting1');
Route::view('url2', 'UrlTesting2');

// Named Route:
Route::view('namedView/profile/user', 'namedView')->name('hm');
Route::get('show', [UserController::class, 'show']);

Route::prefix('student')->group(function () {

    Route::get('show', [studentController::class, 'show']);
    Route::get('add', [studentController::class, 'add']);
});


Route::controller(studentController::class)->group(function(){

    Route::get('showCont','show');
    Route::get('addCont','add');
    Route::get('aboutCont/{name}','about');

});

Route::view('ageCheck','welcome')->middleware('check1');

Route::get('getUsers',[TableController::class,'showUsers']);