<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Dashboard route not show only login*/
// Route::group(['middleware'=>'auth'],function(){
//     Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard']);
// });

Route::get('/about', function () {
    return view('about');
});

Route::get('/blog', function () {
    return view('blog');
});