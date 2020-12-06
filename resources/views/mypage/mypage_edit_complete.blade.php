@extends('layouts.app')

@section('content')

  <div id="menu_1">
    <ul>
      <li><a href="#">ユーザー情報変更完了画面</a></li>
    </ul>
    <div class="complete_app">
      <p class="complete_img">変更完了しました。</p>
    </div>
  </div>
  <div class="text-center">
      <div class="text-center">
        <button  type="button" class="'btn btn-primary  mt-5 mb-5 p-2 w-25 btn-block'" onclick="location.href='/top'">TOPに戻る</button>
      </div>
  </div>
@endsection