<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\Mailer\Transport\RoundRobinTransport;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


//acara3
// Route::get('foo',function(){
//     return 'Hello world';
// });

// Route::get('user/{id}', function($id){
//     return 'User'.$id;
// });

// Route::get('post/{post}/comments/{comment}', function($postId , $commentId){
//     //
// });


//acara 5
// Route::get('/user', 'ManagementUserController@index');
// Route::resource('/user', 'ManagementUserController');

//acara 6 
Route::get("/home", function(){
    return view("home");
});

Route::get("/user", function(){
    return view("user");
});