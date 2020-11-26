@extends('layouts.app')

@section('content')

  <div id="menu_1">
    <ul>
      <li><a href="#">マイページ</a></li>
    </ul>
  </div>
    <p class="delete_contents">様を本当に退会させてよろしいですか。</p>
  <div id="member_delete">
    <ul>
        <li><a href="#">ユーザー情報の編集</a></li>
        <li id="member_delete_2"><a href="#">ランクアップ申請</a></li>
    </ul>
  </div>
@endsection