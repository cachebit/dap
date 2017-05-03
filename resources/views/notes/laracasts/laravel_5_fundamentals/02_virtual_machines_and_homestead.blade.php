@extends('app')
@section('title', '02_认识虚拟机和Homestead_Virtual_Machines_and_Homestead_Laracasts')

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
    <h2>02 认识虚拟机和 Homestead - Virtual Machines and Homestead</h2>
    <p>
      <ul class="list-inline">
        <li>标签：</li>
        <li><a href="/tags/homestead">homestead</a></li>
        <li><a href="/tags/configration">环境配置</a></li>
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
    <p>你也许在配置 php/laravel 开发环境的时候经常遇到问题，那么就是是 Homestead 吧！它将成为你技术成长过程种的强大后盾。</p>
    <p>正式开始。</p>
  </section>

  <section><!-- main content  -->
    <h3 id="note">笔记</h3>
    <p>英文渣催更请戳微信：larapad 或 QQ 群：575709105，反馈多的视频优先更新！欢迎字幕君联系！</p>
  </section>

  <section>
    <h3 id="link">laravel视频教程下载地址</h3>
    @if(Auth::check())
    <p>百度云盘链接：<a href="http://pan.baidu.com/s/1i5oRnSh" rel="nofollow" target="_blank">http://pan.baidu.com/s/1i5oRnSh</a> 密码：a3qu</p>
    <p class="well">注意：本站仅分享笔记，所有其它资源均来源于网络搜索结果，仅作参考，需要教学视频，请支持购买正版，官方网站：<a href="https://laracasts.com" target="_blank" rel="nofollow">laracasts.com</a>。</p>
    @else
    <div class="jumbotron">
      <p>该部分内容已隐藏，您无法看到是因为尚未<a class="btn btn-primary" href="/signin" rel="nofollow" target="_blank">登录</a>。</p>
      <p>没有账号请<a class="btn btn-primary" href="/signup" rel="nofollow" target="_blank">注册</a>。</p>
      <p class="text-right">Larapad - 记录和分享 Laravel 视频教程笔记。</p>
    </div>
    @endif
  </section>

  <section>
    <a class="btn btn-primary" href="/notes/laracasts/laravel_5_fundamentals/01_meet_composer">
      01 认识 composer</a>
    <a class="btn btn-primary pull-right" href="/notes/laracasts/laravel_5_fundamentals/03_a_gentle_introduction_to_routing_controllers_and_Views">
      03 路由、控制器和视图简介</a>
  </section>

  <hr>

  @include('app.tags')
</div>
<div class="col-md-3 col-md-pull-9">
  @include('notes._basic')
  @include('notes._advance')
</div>
@stop
