<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return '<h1>Hello World</h1>';
});

Route::get('/contatti', function () {
    return '<h1>Sezione Contatti</h1>';
});

Route::get('/bio', function () {
    return '<h1>Sezione Bio</h1>';
});

Route::get('/posts', function () {
    return '<h1>Sezione Posts</h1>';
});

Route::get('/form', function () {
    return '<h1>Sezione Form</h1>';
});
