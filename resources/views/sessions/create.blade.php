@extends('app')
@section('title', '用户登录')

@section('content')
<div class="col-sm-offset-3 col-sm-6">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>用户登录</h5>
    </div>
    <div class="panel-body">
      @include('shared.errors')

      <form method="post" action="{{ route('signin') }}">
        {{ csrf_field() }}

        <div class="form-group">
          <label for="email">邮箱：</label>
          <input class="form-control" type="email" name="email" value="{{ old('email') }}">
        </div>

        <div class="form-group">
          <label for="password">密码（ <a href="{{ route('password.reset') }}">忘记密码？</a>）：</label>
          <input class="form-control" type="password" name="password">
        </div>

        <div class="checkbox">
          <label><input type="checkbox" name="remember">记住我</label>
        </div>

        <a href="{{ route('signup') }}">立即加入我们！</a>
        <button class="btn btn-primary pull-right" type="submit">登录</button>
      </form>
    </div>
  </div>
</div>
@stop
