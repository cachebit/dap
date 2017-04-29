@extends('app')
@section('title', 'laracasts视频下载_laracasts百度网盘_laracasts字幕')
@section('keywords','laracasts视频下载,laracasts百度网盘,laracasts字幕')

@section('content')
<div class="col-md-9 col-md-push-3">
  <h3>laracasts视频下载_laracasts百度网盘_laracasts字幕</h3>
  <hr>
  <section>
    <p>laracasts百度网盘链接 2017 最新
      <a href="http://larapad.com/" target="_blank">laravel视频教程下载</a>。
    </p>
  </section>

  <section class="well">
    <h4>最新laravel视频教程简介</h4>
    <p>每年<strong>laracasts视频下载</strong>的 laravel from scrach 系列都会针对 laravel 的最新变化而更新其内容。这是2017年版本的视频教程，采用 laravel 5.4 。</p>
    <p>你是否希望提升自己的技术水平？那么看这个系列的视频就对了。这个系列的视频会从安装开始一步一步带你掌握 laravel 框架的重要功能。</p>
  </section>
  <section>
    <h4>课程目录</h4>
    @include('_promote_table')
  </section>

  @if(Auth::check())

  <div class="jumbotron">
    <p>该部分内容已隐藏，您无法看到是因为尚未<a class="btn btn-primary" href="/signin" rel="nofollow" target="_blank">登录</a>。</p>
    <p>没有账号请<a class="btn btn-primary" href="/signup" rel="nofollow" target="_blank">注册</a>。</p>
    <p class="text-right">Larapad - 记录和分享 Laravel 视频教程笔记。</p>
  </div>

  @else
  <section>
    <p>
      laracasts百度网盘链接：
      <a href="http://pan.baidu.com/s/1sldL3v3" rel="nofollow" target="_blank">http://pan.baidu.com/s/1sldL3v3</a>
      密码：8eml
    </p>
    <p class="well">
      注意：本站仅分享笔记，所有其它资源均来源于网络搜索结果，仅作参考，需要教学视频，请支持购买正版，官方网站：
      <a href="https://laracasts.com" target="_blank" rel="nofollow">
        laracasts.com</a>。
      </p>
  </section>
  @endif
</div>
<div class="col-md-3 col-md-pull-9">
  @include('app.contact')
</div>
@stop
