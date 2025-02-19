<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route :: get('/helo', function(){
    return ' Hello World';
});

Route :: get('/world',function (){
    return 'World';
});

Route :: get('/salam',function(){
    return 'Selamat Datang';
});

Route :: get('/data', function(){
    return '2341760076 <br> Muhammad Satria Rahmad David';
});

Route :: get('/user/{nama}',function($nama){
    return 'Nama Saya : '.$nama;
});

Route::get('/posts/{a}/comments/{b}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});

Route :: get('/article/{id}', function($id){
    return "Halaman Artikel ke- : ".$id;
});

Route :: get('/user1/{name?}',function($name=null){
    return "Nama : " .$name;
});

Route :: get('/user1/{name?}',function($name='john'){
    return "Nama : " .$name;
});

Route :: get('/hello', [WelcomeController::class,'hello']);

Route :: get('/home', [HomeController::class,'index1']);

Route :: get('/about', AboutController::class);

Route :: get('/article/{id}', ArticleController::class);

Route :: resource('photos',PhotoController::Class);

Route::get('/greeting', [WelcomeController::class,'greeting']);
