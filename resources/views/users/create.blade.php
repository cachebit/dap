@extends('app')
@section('title', '用户注册')

@section('content')
<div class="col-md-6 col-md-push-3">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>用户注册</h5>
    </div>
    <div class="panel-body">
      @include('shared.errors')

      <form method="post" action="{{ route('users.store') }}">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="email">邮箱：</label>
          <input class="form-control" type="email" name="email" value="{{ old('email') }}">
        </div>

        <div class="form-group">
          <label for="name">用户名：</label>
          <input class="form-control" type="text" name="name" value="{{ old('name') }}">
        </div>

        <div class="form-group">
          <label for="password">密码：</label>
          <input class="form-control" type="password" name="password">
        </div>

        <div class="form-group">
          <label for="password_confirmation">确认密码：</label>
          <input class="form-control" type="password" name="password_confirmation">
        </div>

        <a href="{{ route('signin') }}">已有账户登录。</a>

        <button class="btn btn-primary pull-right" type="submit">注册</button>
      </form>
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
