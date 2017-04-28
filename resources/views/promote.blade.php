@extends('app')
@section('title', '福利！分享 2017 最新 laravel 视频教程')

@section('content')
<div class="col-md-9 col-md-push-3">
  <h3>福利！送 2017 最新 laravel 视频教程，限前500名注册用户。</h3>
  <hr>
  <section>
    <p>福利！送 2017 最新
      <a href="http://larapad.com/" target="_blank">laravel 视频教程</a>
      ，限前500名注册用户。
    </p>
  </section>

  <section class="well">
    <h4>最新 laravel 视频教程简介</h4>
    <p>每年 laravel from scrach 系列都会针对 laravel 的最新变化而更新其内容。这是2017年版本的视频教程，采用 laravel 5.4 。</p>
    <p>你是否希望提升自己的技术水平？那么看这个系列的视频就对了。这个系列的视频会从安装开始一步一步带你掌握 laravel 框架的重要功能。</p>
  </section>
  <section>
    <h4>课程目录</h4>
    @include('_promote_table')
  </section>

  @if(!Auth::check())

  <section class="well">
    <p>
      该部分内容已被隐藏，请
      <a href="{{ route('signin') }}" rel="nofollow" target="_blank">登录</a>
      查看。没有账号？
      <a href="{{ route('signup') }}" rel="nofollow" target="_blank">立即注册！</a>
    </p>
  </section>

  @else
  <section class="well">
    <p>
      百度云盘链接：
      <a href="http://pan.baidu.com/s/1sldL3v3">http://pan.baidu.com/s/1sldL3v3</a>
      密码：8eml
    </p>
  </section>
  @endif
</div>
<div class="col-md-3 col-md-pull-9">
  @include('app.contact')
</div>
@stop
