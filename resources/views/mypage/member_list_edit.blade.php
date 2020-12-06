@extends('layouts.app')

@section('content')

  <div id="menu_1">
    <ul>
      <li><a href="#">会員削除画面</a></li>
    </ul>
  </div>
    <p class="delete_contents">様を本当に削除してよろしいですか。</p>
  <div id="member_delete">
    {!! Form::open([ 'method' => 'get', 'route' => 'member_list_complete']) !!}
      <div class="d-flex justify-content-center" >
        {!! Form::submit('削除する', ['name' => 'action', 'class' => 'btn btn-primary mt-3 mx-4  mb-5 p-2 w-25 btn-block']) !!}
        {!! Form::button('戻る', ['name' => 'action', 'class' => 'btn btn-primary mt-3 mx-4  mb-5 p-2 w-25 sbtn-block','onclick' => 'history.back()']) !!}
      </div>
    {!! Form::close() !!}
  </div>
@endsection