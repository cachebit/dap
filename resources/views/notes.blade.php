@extends('app')
@section('title', 'Laravel视频教程笔记_Laracasts视频教程笔记')

@section('content')

<div class="col-md-6 col-md-push-3">
  <div class="row">
    @include('notes._lastest')
    @include('notes._promote')

    <div class="col-sm-6">
      @include('notes._basic')
    </div>
    <div class="col-sm-6">
      @include('notes._advance')
    </div>
  </div>
</div>

<div class="col-md-3 col-md-pull-6">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4><a href="http://larapad.com/">laravel视频教程</a>分类</h4>
      <p class="text-muted">按照a-z的音序排列</p>
    </div>
    <div class="panel-body">
      <h5>推荐分类</h5>
      <ul class="list-unstyled">
        <li><a href="/notes/laracasts">laracasts</a></li>
      </ul>
      <hr>
      <h5>专题分类标签</h5>
      <ul class="list-inline">
        <li><a href="/tags/forms">表单</a></li>
        <li><a href="/tags/blade">Blade</a></li>
        <li><a href="/tags/composer">Composer</a></li>
        <li><a href="/tags/eloquent">Eloquent</a></li>
        <li><a href="/tags/homestead">Homestead</a></li>
        <li><a href="/tags/configration">环境配置</a></li>
        <li><a href="/tags/controller">控制器</a></li>
        <li><a href="/tags/installation">Laravel安装</a></li>
        <li><a href="/tags/mvc">MVC</a></li>
        <li><a href="/tags/route">路由</a></li>
        <li><a href="/tags/view">视图</a></li>
        <li><a href="/tags/database">数据库</a></li>
      </ul>
    </div>
  </div>

  @include('pdfs.books._001')
  @include('pdfs.books._002')

</div>

<div class="col-md-3">
  @include('app.contact')
  @include('pdfs.books._001')
  @include('pdfs.books._002')
</div>
@stop
