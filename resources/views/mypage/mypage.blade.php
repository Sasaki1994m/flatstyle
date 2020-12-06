@extends('layouts.app')

@section('content')

  <div id="menu_1">
    <ul>
      <li><a href="#">マイページ</a></li>
    </ul>
  </div>
  <div id="menu_2">
    <ul>
      <li><a href="{{ route('mypage.edit') }}">ユーザー情報の編集</a></li>
      <li><a href="{{ route('mypage.rank_up') }}">ランクアップ申請</a></li>
  </div>
  <div id="menu_3">
      <li><a href="{{ route('mypage.member') }}">会員一覧</a></li>
    </ul>
  </div>
@endsection