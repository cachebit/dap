@extends('app')
@section('title', '09_MVC_基础工作流_09_Basic_Model_Controller_View_Workflow')

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
    <h2>09 MVC 基础工作流 - Basic ModelControllerView Workflow</h2>
    <p>
      <ul class="list-inline">
        <li>标签：</li>
        <li><a href="/tags/mvc">MVC</a></li>
        <li><a href="/tags/model">模型</a></li>
        <li><a href="/tags/view">视图</a></li>
        <li><a href="/tags/controller">控制器</a></li>
        <li>QQ 群号：575709105</li>
      </ul>
    </p>
    <hr>
    <ol>
      <li><a href="#introduction">laravel视频教程《MVC 基础工作流》简介</a></li>
      <li><a href="#note">laravel视频教程《MVC 基础工作流》笔记</a></li>
      <li><a href="#link">laravel视频教程《MVC 基础工作流》地址</a></li>
    </ol>

    <h3 id="introduction">laravel视频教程《MVC 基础工作流》简介</h3>
    <p>正式开始。</p>
  </section>

  <section><!-- main content  -->
    <h3 id="note">laravel视频教程《MVC 基础工作流》笔记</h3>
    <p>英文渣催更请戳微信：larapad 或 QQ 群：575709106，反馈多的视频优先更新！欢迎字幕君联系！</p>
  </section>

  <section>
    <h3 id="link">laravel视频教程《MVC 基础工作流》下载地址</h3>
    <p>
      百度云盘链接：
      <a href="http://pan.baidu.com/s/1c2KjCC4" rel="nofollow" target="_blank">
        http://pan.baidu.com/s/1c2KjCC4
      </a>
      密码：nl9h
    </p>

    <p class="well">
      注意：本站仅分享笔记，所有其它资源均来源于网络搜索结果，仅作参考，需要教学视频，请支持购买正版，官方网站：
      <a href="https://laracasts.com" target="_blank" rel="nofollow">
        laracasts.com
      </a>。
    </p>
  </section>

  <section>
    <a class="btn btn-primary" href="/notes/laracasts/laravel_5_fundamentals/08_Eloquent_101">
      08 Eloquent 基础</a>
    <a class="btn btn-primary pull-right" href="/notes/laracasts/laravel_5_fundamentals/10_forms">
      10 表单</a>
  </section>

  <hr>

  @include('app.tags')
</div>
<div class="col-md-3 col-md-pull-9">
  @include('notes._basic')
  @include('notes._advance')
</div>
@stop
