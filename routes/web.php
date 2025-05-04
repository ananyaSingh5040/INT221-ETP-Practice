<?php

use App\Http\Controllers\APIController;
use App\Http\Controllers\EloquentQueryBuilder;
use App\Http\Controllers\FetchUserController;
use App\Http\Controllers\FileUpload;
use App\Http\Controllers\FlashController;
use App\Http\Controllers\formController;
use App\Http\Controllers\QueryBuilder;
use App\Http\Controllers\Req;
use App\Http\Controllers\RouteMethod;
use App\Http\Controllers\Student;
use App\Http\Controllers\studentController;
use App\Http\Controllers\TableController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;



Route::get('/', function () {
    return view('welcome1');
});

Route::get('/localHome/{lang}',function($lang){
    App::setlocale($lang);
    return view('localHome');
});

Route::view('flashLogin','flashLogin');
Route::post('flashLogin',[FlashController::class,'add']);
Route::view('upload','upload');
Route::post('upload',[FileUpload::class,'upload']);
Route::view('display','display');

// Route::view('login','login');
// Route::view('profile','profile');
// Route::post('login',[FetchUserController::class,'login']);
// Route::get('logout',[FetchUserController::class,'logout']);


// Route::get('/students',[Student::class,'getStudents']);
// Route::get('/getApi',[APIController::class,'getAPI']);
// Route::get('/data',[QueryBuilder::class,'getData']);
// Route::get('getProducts',[EloquentQueryBuilder::class,'qb']);

// Route::view('/user','routeMethod');
// Route::controller(RouteMethod::class)->group(function(){
//     Route::get('/users','get');
//     Route::post('/users','post');
//     Route::put('/users','put');
//     Route::patch('/users','patch');
//     Route::delete('/users','delete');

// });
// Route::view('/reqView','req');
// Route::post('/req',[Req::class,'get']);



// Dynamic Parameter Route:

// Route::get('/dynamic/{name}', function ($name) {
//     return view('dynamicParam', ['name' => $name]);
// });

// Route::view('/about', 'about');
// // Route::redirect('/about','/');

// Route::get('user', [UserController::class, 'getUser']);

// // Dynamic with controller
// Route::get('user/{name}', [UserController::class, 'getUserName']);

// Route::get('/message', function () {
//     return view('messageViewer');
// });

// Route::view('userForm', 'userForm');
// Route::post('userForm', [UserController::class, 'userForm']);

// Route::view('form', 'formView');
// Route::post('adduser', [formController::class, 'getFormData']);

// Route::view('url1', 'UrlTesting1');
// Route::view('url2', 'UrlTesting2');

// // Named Route:
// Route::view('namedView/profile/user', 'namedView')->name('hm');
// Route::get('show', [UserController::class, 'show']);

// Route::prefix('student')->group(function () {

//     Route::get('show', [studentController::class, 'show']);
//     Route::get('add', [studentController::class, 'add']);
// });


// Route::controller(studentController::class)->group(function(){

//     Route::get('showCont','show');
//     Route::get('addCont','add');
//     Route::get('aboutCont/{name}','about');

// });

// Route::view('ageCheck','welcome')->middleware('check1');

// Route::get('getUsers',[TableController::class,'showUsers']);