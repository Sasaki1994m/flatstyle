@extends('layouts.app')

@section('content')

<!-- TOP画像 -->
<section class="top">
  <div class="container-fluid">
    <img class="d-block w-100" src="{{ asset('images/top1.png') }}" alt="top">
  </div>
</section>


<div class="container">
  <h2 class="text-center mt-5 mb-5 p-3 text-dark">どこで学ぶ?<br>ー Category ー</h2>
  <div class="card-deck row">

    <div class="col-md-6 col-lg-4 mb-4">
      <div class="card">
        <img class="card-img-top store-display" src="{{ asset('images/book1.jpg') }}" alt="top">
        <div class="card-body">
          <h5 class="card-title">カテゴリー1</h5>
          <p class="card-text">
            カテゴリーの説明が入ります。カテゴリーの説明が入ります。
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <div class="card">
        <img class="card-img-top store-display" src="{{ asset('images/book1.jpg') }}" alt="top">
        <div class="card-body">
          <h5 class="card-title">カテゴリー2</h5>
          <p class="card-text">
            カテゴリーの説明が入ります。カテゴリーの説明が入ります。
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <div class="card">
        <img class="card-img-top store-display" src="{{ asset('images/book1.jpg') }}" alt="top">
        <div class="card-body">
          <h5 class="card-title">カテゴリー3</h5>
          <p class="card-text">
            カテゴリーの説明が入ります。カテゴリーの説明が入ります。
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <div class="card">
        <img class="card-img-top store-display" src="{{ asset('images/book1.jpg') }}" alt="top">
        <div class="card-body">
          <h5 class="card-title">カテゴリー4</h5>
          <p class="card-text">
            カテゴリーの説明が入ります。カテゴリーの説明が入ります。
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <div class="card">
        <img class="card-img-top store-display" src="{{ asset('images/book1.jpg') }}" alt="top">
        <div class="card-body">
          <h5 class="card-title">カテゴリー5</h5>
          <p class="card-text">
            カテゴリーの説明が入ります。カテゴリーの説明が入ります。
          </p>
        </div>
      </div>
    </div>

    <div class="col-md-6 col-lg-4 mb-4">
      <div class="card">
        <img class="card-img-top store-display" src="{{ asset('images/book1.jpg') }}" alt="top">
        <div class="card-body">
          <h5 class="card-title">カテゴリー6</h5>
          <p class="card-text">
            カテゴリーの説明が入ります。カテゴリーの説明が入ります。
          </p>
        </div>
      </div>
    </div>

  </div>
</div>
@endsection