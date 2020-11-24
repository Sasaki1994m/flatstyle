@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h5 class="p-3 mt-5 mb-2 bg-primary text-light text-center">私立探求学園（高等生）登録</h5>
            <div class="card mb-5">
                <div class="card-body">

                    @csrf

                    <div class="row mt-5 mb-5">
                        <div class="col-sm-8 offset-sm-2">

                            {!! Form::open(['method' => 'post']) !!}
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


                            {!! Form::submit('確認する', ['class' => 'btn btn-primary mt-5 p-2 btn-block']) !!}
                            {!! Form::close() !!}


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection