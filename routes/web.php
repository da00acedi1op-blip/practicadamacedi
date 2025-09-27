<?php

use App\Http\Controllers\ControllerUser;        
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/editar', function () {
    return view('editar');
});

Route::get('/editar', [ControllerUser::class, 'edit']);
Route::post('/editar', [ControllerUser::class, 'edit']);