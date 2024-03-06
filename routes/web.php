<?php

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
    return view('pages.test');
})->name('home');

Route::get('/test2', function () {
    return view('pages.test2');
})->name('test2');

Route::get('/template', function () {
    return view('template');
})->name('template');

Route::get('/testContent', function () {
    return view('testContent');
})->name('testContent');

Route::post('/login', [App\Http\Controllers\UserAuth::class, 'login']);
