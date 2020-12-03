@extends('layouts.app')

@section('content')

  <div id="menu_1">
    <ul>
      <li><a href="#">コンテンツ削除確認画面</a></li>
    </ul>
  </div>
    <p class="delete_contents">コンテンツを本当に削除よろしいですか。</p>
  <div id="library_delete">
    <ul>
        <li ><a  href="#">削除する</a></li>
        <li id="library_delete_2"><a href="#">削除しない</a></li>
    </ul>
  </div>
@endsection
