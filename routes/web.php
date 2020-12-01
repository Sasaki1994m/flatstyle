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
//マイページ
Route::get('/mypage', function (){return view('mypage.mypage');})->name('mypage');
Route::get('/mypage/edit', function (){return view('mypage.mypage_edit');})->name('mypage.edit');
Route::get('/mypage/edit/confirm', function (){return view('mypage.mypage_edit_confirm');})->name('mypage.edit_confirm');
Route::get('/mypage/rankup', function (){return view('mypage.rank_up');})->name('mypage.rank_up.');
Route::get('/mypage/rankup/create', function (){return view('mypage.rank_up_create');})->name('mypage.rank_up_create');
Route::get('/mypage/rankup/confirm', function (){return view('mypage.rank_up_confirm');})->name('mypage.rank_up_confirm');
Route::get('/mypage/rankup/complete', function (){return view('mypage.rank_up_complete');})->name('mypage.rank_up_complete');
Route::get('/mypage/memberlist', function (){return view('mypage.member_list');})->name('mypage.member');
Route::get('/mypage/memberlist/edit', function (){return view('mypage.member_list_edit');})->name('member_list_delete');