@extends('layouts.app')

@section('content')

<!-- フラッシュメッセージ -->
@if(Session::has('flash_message'))
<div class="alert alert-success">
    {{ session('flash_message') }}
</div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h5 class="p-3 mt-5 mb-2 bg-primary text-light text-center">ログイン</h5>
            <div class="card mb-5">
                <div class="card-body">

                    @csrf

                    <div class="row mt-5 mb-5">
                        <div class="col-sm-8 offset-sm-2">
                            {!! Form::open(['route' => 'login']) !!}


                            <div class="form-group">
                                {!! Form::label('email', 'メールアドレス') !!}
                                {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => '例）hakkutsu@example.com']) !!}
                            </div>
                            @if (count($errors) > 0)
                            @foreach ($errors->get('email') as $error)
                            <div class="text-danger">{{ $error }}</div>
                            @endforeach
                            </ul>
                            @endif


                            <div class="form-group">
                                {!! Form::label('password', 'パスワード') !!}
                                {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '半角英数字６文字以上']) !!}
                            </div>
                            @if (count($errors) > 0)
                            @foreach ($errors->get('password') as $error)
                            <div class="text-danger">{{ $error }}</div>
                            @endforeach
                            </ul>
                            @endif

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('メールアドレスを記憶する') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            {!! Form::submit('ログイン', ['class' => 'btn btn-primary mt-5 p-2 btn-block']) !!}
                            {!! Form::close() !!}

                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('パスワードをお忘れですか？') }}
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection