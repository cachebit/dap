@extends('app')
@section('title', $title.'_'.$serie.'_'.$type)

@section('content')
<div class="col-md-3">
  @include('app.left')
</div>
<div class="col-md-9">
  <p>
    <a href="/notes">视频教程笔记</a> /
    <a href="/notes/laracasts">{{ $type }}</a> /
    <a href="/notes/laracasts/laravel_5_fundamentals">{{ $serie }}</a>
  </p>
  <h2>{{ $title }} - 认识 Composer</h2>
  <p>视频原址：<a href="https://laracasts.com/">https://laracasts.com/</a></p>
  <p>标签：</p>
  <hr>

  <div>

    <p>

    </p>
    <p>

    </p>
    @if(!Auth::check())
    <div class="panel panel-danger">
      <div class="panel-heading">
        <p>
          如果您看到这段话，说明您尚未注册，无法继续阅读。<br/>
          本站为了更加高效的帮助 Laravel 爱好者交流，采取邀请注册制。<br/>
          请加微信：获取邀请码完成注册，24小时内回复，祝您愉快！
        </p>
      </div>
    </div>
    @endif
    @if(Auth::check())
    <div>
      <p>
        如果你不是VIP将无法看到此处内容。
      </p>
    </div>
    @endif
  </div>

  <hr>

  @include('app.tags')
</div>
@stop
