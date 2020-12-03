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

                            {!! Form::open(['method' => 'post']) !!}
                            <div class="form-group">
                                {!! Form::label('title', 'タイトル') !!}
                                {!! Form::text('title', old('title'), ['class' => 'form-control', 'placeholder' => '例）git勉強会']) !!}
                            </div>
                            @if (count($errors) > 0)
                            @foreach ($errors->get('title') as $error)
                            <div class="text-danger">{{ $error }}</div>
                            @endforeach
                            @endif
                            <div class="form-group">
                                {!! Form::label('url', 'URL') !!}
                                {!! Form::url('url', old('url'), ['class' => 'form-control', 'placeholder' => '例）https://www.youtube.com/']) !!}
                            </div>
                            @if (count($errors) > 0)
                            @foreach ($errors->get('url') as $error)
                            <div class="text-danger">{{ $error }}</div>
                            @endforeach
                            @endif

                            <div class="form-group">
                                {!! Form::label('password', '説明') !!}
                                {{Form::textarea('textareaRemarks', null, ['class' => 'form-control', 'id' => 'textareaRemarks', 'placeholder' => '説明', 'rows' => '10'])}}
                            </div>
                            @if (count($errors) > 0)
                            @foreach ($errors->get('password') as $error)
                            <div class="text-danger">{{ $error }}</div>
                            @endforeach
                            @endif

                            <div class="form-group">
                                {!! Form::label('category', 'カテゴリー') !!}
                                {{Form::select('category', [''=>'選択してください','javascript' => 'Javascript', 'php' => 'PHP', 'ruby' => 'Ruby', 'aws' => 'AWS', 'git' => 'Git'], '',  ['class' => 'form-control','id' => 'category'])}}

                            </div>
                            @if (count($errors) > 0)
                            @foreach ($errors->get('password_confirmation') as $error)
                            <div class="text-danger">{{ $error }}</div>
                            @endforeach
                            @endif

                            {!! Form::submit('編集する', ['class' => 'btn btn-primary mt-5 p-2 btn-block']) !!}
                            {!! Form::submit('戻る', ['class' => 'btn btn-primary mt-4 p-2 btn-block']) !!}
                            {!! Form::submit('削除する', ['class' => 'btn btn-danger mt-4 p-2 btn-block']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
