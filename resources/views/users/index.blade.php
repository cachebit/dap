@extends('app')
@section('title', '全部用户')

@section('content')
<div class="col-md-6 col-md-push-3">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>所有用户</h5>
    </div>
    <div class="panel-body">
      <ul class="list-unstyled">
        @foreach($users as $user)
          @include('users._user')
        @endforeach
      </ul>

      {!! $users->render() !!}
    </div>
  </div>
</div>
<div class="col-md-3 col-md-pull-6">
  @include('app.left')
</div>
<div class="col-md-3">
  @include('app.tags')
</div>

@stop
