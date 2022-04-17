<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Blogcontroller;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Coursecontroller;
use App\Http\Controllers\Messagecontroller;

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

Route::get('/', [Usercontroller::class,'index']);

Route::get('/signup', [Usercontroller::class,'signup']);

Route::post('/store', [Usercontroller::class,'store']);

Route::post('/signup', [Usercontroller::class,'signup'])->name('signup');

Route::get('/signin', [Usercontroller::class,'signin']);

Route::post('/check', [Usercontroller::class,'check']);

Route::get('/course', [Coursecontroller::class,'course']);

Route::get('/blog', [Blogcontroller::class,'blog']);

Route::get('/contactus', [Messagecontroller::class,'contactus']);

Route::post('/message', [Messagecontroller::class,'getmessage']);


Route::get('/home', function () {
    return view('home');
});

Route::get('/library', function () {
    return view('library');
});


