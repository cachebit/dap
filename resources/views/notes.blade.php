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
        <li><a href="/notes/laracasts">Laracasts</a></li>
      </ul>
      <hr>
      <h5>专题分类标签</h5>
      <ul class="list-inline">
        <li><a href="/notes/composer">composer</a></li>
        <li><a href="/notes/controller">controller</a></li>
        <li><a href="#">homestead</a></li>
        <li><a href="#">环境配置</a></li>
        <li><a href="/notes/installation">laravel安装</a></li>
        <li><a href="/notes/route">route</a></li>
        <li><a href="/notes/view">view</a></li>
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
