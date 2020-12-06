@extends('layouts.app')

@section('content')

  <div id="menu_1">
    <ul>
      <li><a href="#">会員一覧</a></li>
    </ul>
  </div>
  <table border="1" align="center" class="member_list">
    <tr align="center">
      <th>ユーザID</th>
      <th>アカウント名</th>
      <th>権限</th>
      <th>登録日</th>
      <th>編集</th>
    </tr>
    <tr align="center">
        <td>1</td>
        <td>佐々木真</td>
        <td>管理者</td>
        <td>2020/10/11</td>
        <td><a href="/mypage/memberlist/edit">編集</a></td>
    </tr>
    {{-- 以下内容は実装時ループ処理のため削除要 --}}
    <tr align="center">
        <td>2</td>
        <td>佐々木真</td>
        <td>ruby個別生</td>
        <td>2020/10/11</td>
        <td><a href="/mypage/memberlist/edit">編集</a></td>
    </tr>
    <tr align="center">
        <td>3</td>
        <td>佐々木真</td>
        <td>管理者</td>
        <td>2020/10/11</td>
        <td><a href="/mypage/memberlist/edit">編集</a></td>
    </tr>
    <tr align="center">
        <td>4</td>
        <td>佐々木真</td>
        <td>学園生</td>
        <td>2020/10/11</td>
        <td><a href="/mypage/memberlist/edit">編集</a></td>
    </tr>
    <tr align="center">
        <td>5</td>
        <td>佐々木真</td>
        <td>無料会員</td>
        <td>2020/10/11</td>
        <td><a href="/mypage/memberlist/edit">編集</a></td>
    </tr>
    <tr align="center">
        <td>6</td>
        <td>佐々木真</td>
        <td>larave学園生</td>
        <td>2020/10/11</td>
        <td><a href="/mypage/memberlist/edit">編集</a></td>
    </tr>
  </table>
  <div class="text-center">
      <div class="text-center">
        <button  type="button" class="'btn btn-primary  mt-3 mb-5 p-2 w-50 btn-block'" onclick="location.href='/mypage'">マイページに戻る</button>
      </div>
  </div>
@endsection