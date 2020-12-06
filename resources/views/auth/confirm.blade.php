@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <h5 class="p-3 mt-5 mb-2 bg-primary text-light text-center">会員登録確認画面</h5>
      <div class="card mb-5">
        <div class="card-body">

          @csrf

          <div class="row mt-5 mb-5">
            <div class="col-sm-8 offset-sm-2">

              {!! Form::open(['route' => 'signup.post', 'method' => 'post']) !!}
              <div class="form-group">
                {!! Form::label('name', 'お名前') !!}
                {!! Form::text('name', $data['name'], ['class' => 'form-control','readonly']) !!}
              </div>

              <div class="form-group">
                {!! Form::label('email', 'メールアドレス') !!}
                {!! Form::text('email', $data['email'], ['class' => 'form-control','readonly']) !!}
              </div>

              <div class="form-group">
                <label for="password">パスワード</label>
                <input id="password" type="hidden" name="password" class="form-control" value="{{ $data['password'] }}">
                <input id="password" type="password" name="password" class="form-control" value="{{ $data['password'] }}" disabled>
              </div>



              {!! Form::submit('登録する', ['name' => 'action', 'class' => 'btn btn-primary mt-5 p-2  btn-block']) !!}
              <button type="button" class='btn btn-secondary mt-3 p-2  btn-block' onclick=history.back()>戻る</button>
              {!! Form::close() !!}


            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection