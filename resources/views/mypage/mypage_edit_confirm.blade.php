@extends('layouts.app')

@section('content')
  <div id="menu_1">
    <ul>
      <li><a href="#">ユーザー情報の編集</a></li>
    </ul>
  </div>
  <div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card mb-5">
        <div class="card-body">
          @csrf
          <div class="row mt-5 mb-5">
            <div class="col-sm-8 offset-sm-2">
              {!! Form::open([ 'method' => 'get', 'route' => 'mypage.edit_complete']) !!}
              <div class="form-group">
                {!! Form::label('name', 'お名前') !!}
                {!! Form::text('name', old('name'), ['class' => 'form-control','readonly']) !!}
              </div>
              <div class="form-group">
                {!! Form::label('email', 'メールアドレス') !!}
                {!! Form::text('email', old('email'), ['class' => 'form-control','readonly']) !!}
              </div>
              <div class="form-group">
                <label for="password">パスワード</label>
                <input id="password" type="hidden" name="password" class="form-control" value="{{ old('password') }}">
                <input id="password" type="password" name="password" class="form-control" value="{{ old('password') }}" disabled>
              </div>
              {!! Form::submit('変更する', ['name' => 'action', 'class' => 'btn btn-primary mt-5 p-2  btn-block']) !!}
              {!! Form::button('戻る', ['name' => 'action', 'class' => 'btn btn-primary mt-3 p-2  btn-block','onclick' => 'history.back()']) !!}
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection