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

//ログイン後のトップページ
Route::get('/top', function () {
    return view('toppage');
});