@extends('layouts.app')

@section('content')

<!-- TOP画像 -->
<section class="top">
  <div class="container-fluid">
    <img class="d-block w-100" src="{{ asset('images/top1.png') }}" alt="top">
  </div>
</section>
<!-- フラッシュメッセージ -->
@if(Session::has('flash_message'))
<div class="alert alert-success">
    {{ session('flash_message') }}
</div>
@endif


<div class="container">
  <h3 class="text-center mt-4 mb-4 p-3"> Flatstyleとは </h3>
  <p class="text-center mb-5 under_line">
  知識を集積し、学習を支援する図書館です。  
  </p>

  <p class="text-center mb-5">
    私立探求学園で作成した動画やテキストを<br>
    一箇所にまとめ公開しています。
  </p>

  <p class="text-center mb-5">
    ・転職成功者やフリーランスが役立てた資料も追加していきます。<br>
    ・これからどんどん機能拡充していきます。
  </p>
  <p class="text-center mb-5">
    是非一度足を運んでみて下さい。
  </p>
  <p class="text-center mb-5">
    無料会員登録はこちらです<br>
    ↓<br>
    <a class="btn btn-primary btn-lg" href="register/elementary" role="button">無料会員登録</a>
  </p>
</div>

@endsection