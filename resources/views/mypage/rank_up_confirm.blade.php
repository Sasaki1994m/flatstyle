@extends('layouts.app')

@section('content')

  <div id="menu_1">
    <ul>
      <li><a href="#">ランクアップ申請</a></li>
    </ul>
  </div>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          @csrf
          <div class="row mt-4 mb-5">
              <div class="col-sm-8 offset-sm-2">

                  {!! Form::open(['method' => 'get' , 'route' => 'mypage.rank_up_complete']) !!}
                  <div class="form-group">
                      {!! Form::label('name', 'お名前') !!}
                      {!! Form::text('name', old('name'), ['class' => 'form-control','readonly']) !!}
                  </div>

                  <div class="form-group">
                  {!! Form::label('email', 'メールアドレス') !!}
                  {!! Form::text('email', old('email'), ['class' => 'form-control','readonly']) !!}
                  </div>

                  <div class="form-group">
                      {!! Form::label('comment','コメント') !!}
                      {!! Form::textarea('notes',null,['class' => 'form-control','id' => 'comment','rows' => '4','readonly']) !!}
                  </div>

                  {!! Form::submit('申請する', ['class' => 'btn btn-primary mt-5 p-2 btn-block']) !!}
                  {!! Form::button('戻る', ['class' => 'btn btn-primary  mt-4 p-2 btn-block','onclick' => 'history.back()']) !!}
                  {!! Form::close() !!}

              </div>
          </div>
        </div>
    </div>
</div>
@endsection