@extends('app')
@section('title', '编辑个人信息')

@section('content')
<div class="col-md-6 col-md-push-3">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>编辑个人信息</h5>
    </div>
    <div class="panel-body">
      @include('shared.errors')

      <form action="{{ route('users.update', $user->id) }}" method="post">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <div class="form-group">
          <label for="name">用户名：</label>
          <input class="form-control" type="text" name="name" value="{{ $user->name }}">
        </div>

        <div class="form-group">
          <label for="email">邮箱：</label>
          <input class="form-control" type="email" name="email" value="{{ $user->email }}" disabled>
        </div>

        <div class="form-group">
          <label for="original_password">原始密码：</label>
          <input class="form-control" type="password" name="original_password">
        </div>



        <div class="form-group">
          <label for="password">新密码：</label>
          <input class="form-control" type="password" name="password">
        </div>

        <div class="form-group">
          <label for="password_confirmation">确认密码：</label>
          <input class="form-control" type="password" name="password_confirmation">
        </div>

        <button class="btn btn-primary pull-right" type="submit" name="button">更新信息</button>
      </form>

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
