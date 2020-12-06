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
          @csrf
          <div class="card mb-5">
                <div class="card-body">
                    @csrf
                    <div class="row mt-5 mb-5">
                        <div class="col-sm-8 offset-sm-2">

                            {!! Form::open(['method' => 'get' , 'route' => 'mypage.edit_confirm']) !!}
                            <div class="form-group">
                                {!! Form::label('name', 'アカウント名') !!}
                                {!! Form::text('name', old('name'), ['class' => 'form-control', 'placeholder' => '例）学園 太郎']) !!}
                            </div>
                            @if (count($errors) > 0)
                            @foreach ($errors->get('name') as $error)
                            <div class="text-danger">{{ $error }}</div>
                            @endforeach
                            @endif
                            <div class="form-group">
                                {!! Form::label('email', 'メールアドレス') !!}
                                {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '例）flatstyle@example.com']) !!}
                            </div>
                            @if (count($errors) > 0)
                            @foreach ($errors->get('email') as $error)
                            <div class="text-danger">{{ $error }}</div>
                            @endforeach
                            @endif

                            <div class="form-group">
                                {!! Form::label('password', 'パスワード') !!}
                                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '半角英数字６文字以上']) !!}
                            </div>
                            @if (count($errors) > 0)
                            @foreach ($errors->get('password') as $error)
                            <div class="text-danger">{{ $error }}</div>
                            @endforeach
                            @endif

                            <div class="form-group">
                                {!! Form::label('password_confirmation', 'パスワード（確認）') !!}
                                {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => '再度入力してください']) !!}
                            </div>
                            @if (count($errors) > 0)
                            @foreach ($errors->get('password_confirmation') as $error)
                            <div class="text-danger">{{ $error }}</div>
                            @endforeach
                            @endif

                            {!! Form::submit('確認', ['class' => 'btn btn-primary mt-5 p-2 btn-block']) !!}
                            {!! Form::button('戻る', ['class' => 'btn btn-primary mt-4 p-2 btn-block','onclick' => 'history.back()']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection