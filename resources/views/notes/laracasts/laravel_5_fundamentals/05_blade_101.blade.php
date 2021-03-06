@extends('app')
@section('title', '05_Blade视图模板基础_05_Blade_101')

@section('content')
<div class="col-md-9 col-md-push-3">
  <section><!-- bread nav -->
    <p>
      <a href="/notes">视频教程笔记</a> /
      <a href="/notes/laracasts">laracasts</a> /
      <a href="/notes/laracasts/laravel_5_fundamentals">laravel 5 基础视频教程</a>
    </p>
  </section>

  <section><!-- infomations  -->
    <h2>05 Blade视图模板基础 - Blade 101</h2>
    <p>
      <ul class="list-inline">
        <li>标签：</li>
        <li><a href="/tags/view">视图</a></li>
        <li><a href="/tags/bladew">Blade</a></li>
        <li>QQ 群号：575709105</li>
      </ul>
    </p>
    <hr>
    <ol>
      <li><a href="#introduction">简介</a></li>
      <li><a href="#note">笔记</a></li>
      <li><a href="#link">下载地址</a></li>
    </ol>

    <h3 id="introduction">简介</h3>
    <p>正式开始。</p>
  </section>

  <section><!-- main content  -->
    <h3 id="note">笔记</h3>
    <p>英文渣催更请戳微信：larapad 或 QQ 群：575709105，反馈多的视频优先更新！欢迎字幕君联系！</p>
  </section>

  <section>
    <h3 id="link">下载地址</h3>
    @if(Auth::check())
    <p>
      百度云盘链接：
      <a href="http://pan.baidu.com/s/1kUTOzjx" rel="nofollow" target="_blank">
        http://pan.baidu.com/s/1kUTOzjx
      </a>
      密码：4cyo
    </p>

    <p class="well">
      注意：本站仅分享笔记，所有其它资源均来源于网络搜索结果，仅作参考，需要教学视频，请支持购买正版，官方网站：
      <a href="https://laracasts.com" target="_blank" rel="nofollow">
        laracasts.com
      </a>。
    </p>
    @else
    <div class="jumbotron">
      <p>该部分内容已隐藏，您无法看到是因为尚未<a class="btn btn-primary" href="/signin" rel="nofollow" target="_blank">登录</a>。</p>
      <p>没有账号请<a class="btn btn-primary" href="/signup" rel="nofollow" target="_blank">注册</a>。</p>
      <p class="text-right">Larapad - 记录和分享 Laravel 视频教程笔记。</p>
    </div>
    @endif
  </section>

  <section>
    <a class="btn btn-primary" href="/notes/laracasts/laravel_5_fundamentals/04_passing_data_to_views">
      04 给视图传递数据</a>
    <a class="btn btn-primary pull-right" href="/notes/laracasts/laravel_5_fundamentals/06_environments_and_configuration">
      06 环境和配置</a>
  </section>

  <hr>

  @include('app.tags')
</div>
<div class="col-md-3 col-md-pull-9">
  @include('notes._basic')
  @include('notes._advance')
</div>
@stop
