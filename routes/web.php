<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
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
    return 'Selamat Datang';
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/about', function () {
    return 'NIM : 2241720258
            <br>
            Nama : Haidar Aly';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya '. $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'. $postId. ', Komentar ke-: '. $commentId;
});

Route::get('/articles/{id}', function ($id) {
    return 'Ini adalah halaman artikel dengan id: '. $id;
});

Route::get('/user/{name?}', function ($name = null) {
    return 'Nama Saya '. $name;
});

Route::get('/user/{name?}', function ($name = 'Haidar') {
    return 'Nama Saya '. $name;
});