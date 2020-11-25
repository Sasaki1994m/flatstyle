<?php

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


//ログイン前のトップページ 
Route::get('/', function () {
    return view('berore_login.toppage');
});

//登録画面（高等部・中等部（Laravel・Rails）・初等部(無料)）
Route::get('/register/high', function () {
    return view('auth.register_high');
});

Route::get('/register/middle/laravel', function () {
    return view('auth.register_middle_laravel');
});

Route::get('/register/middle/rails', function () {
    return view('auth.register_middle_rails');
});

Route::get('/register/elementary', function () {
    return view('auth.register_elementary');
});

//登録確認画面
Route::get('/register/confirm', function () {
    return view('auth.confirm');
});

//ログイン画面
Route::get('/login', function () {
    return view('auth.login');
});

//ログイン後のトップページ
Route::get('/top', function () {
    return view('toppage');
});
