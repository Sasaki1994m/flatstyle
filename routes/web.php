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
Route::get('/', function () {return view('berore_login.toppage');});

//user登録画面へ（高等部・中等部（Laravel・Rails）・初等部(無料)）
Route::get('/register/high', function () {return view('auth.register_high');})
->name('register_high');
Route::get('/register/middle/laravel', function () {return view('auth.register_middle_laravel');})
->name('register_middle_laravel');
Route::get('/register/middle/rails', function () {return view('auth.register_middle_rails');})
->name('register_middle_rails');
Route::get('/register/elementary', function () {return view('auth.register_elementary');})
->name('register_elementary');

// user登録
Route::post('signup_confirm','Auth\RegisterController@signup_confirm')->name('signup.confirm');
Route::post('signup_post', 'Auth\RegisterController@store')->name('signup.post');

//ログイン・ログアウト
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');

//ログイン後のトップページ
Route::get('/top', function () {
    return view('toppage');
});
//マイページ
Route::get('/mypage', function (){return view('mypage.mypage');})->name('mypage');
Route::get('/mypage/edit', function (){return view('mypage.mypage_edit');})->name('mypage.edit');
Route::get('/mypage/edit/confirm', function (){return view('mypage.mypage_edit_confirm');})->name('mypage.edit_confirm');
Route::get('/mypage/edit/complete', function (){return view('mypage.mypage_edit_complete');})->name('mypage.edit_complete');
Route::get('/mypage/rankup', function (){return view('mypage.rank_up');})->name('mypage.rank_up');
Route::get('/mypage/rankup/create', function (){return view('mypage.rank_up_create');})->name('mypage.rank_up_create');
Route::get('/mypage/rankup/confirm', function (){return view('mypage.rank_up_confirm');})->name('mypage.rank_up_confirm');
Route::get('/mypage/rankup/complete', function (){return view('mypage.rank_up_complete');})->name('mypage.rank_up_complete');
Route::get('/mypage/memberlist', function (){return view('mypage.member_list');})->name('mypage.member');
Route::get('/mypage/memberlist/edit', function (){return view('mypage.member_list_edit');})->name('member_list_edit');
Route::get('/mypage/memberlist/complete', function (){return view('mypage.member_list_complete');})->name('member_list_complete');

Route::get('/top/contents/create', function () {
    return view('library.library_create');
});

Route::get('/top/contents/confirm', function () {
    return view('library.library_confirm');
});

Route::get('/top/contents/edit', function () {
    return view('library.library_edit');
});


