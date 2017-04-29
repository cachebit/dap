@extends('app')
@section('title', $user->name)

@section('content')
<div class="col-md-6 col-md-push-3">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>用户信息</h5>
    </div>
    <div class="panel-body">
      <p><label for="">用户名：</label>{{ $user->name }}</p>
      <p><label for="">邮　箱：</label>{{ $user->email }}</p>
      @if(Auth::user()->id === $user->id)
      <a href="{{ route('users.edit',$user->id) }}">编辑个人资料</a>
      @endif
    </div>
  </div>
</div>
<div class="col-md-3 col-md-pull-6">
  @include('notes._basic')
  @include('notes._advance')
</div>
<div class="col-md-3">
  @include('app.tags')
</div>

@stop
