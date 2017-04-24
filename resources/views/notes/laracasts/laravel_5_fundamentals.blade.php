@extends('app')
@section('title', 'Laravel 5 基础教程 - Laracasts - ')

@section('content')
<div class="col-md-6 col-md-push-3">
  <p>
    <a href="/notes">视频教程笔记</a> /
    <a href="/notes/laracasts">laracasts</a>
  </p>
  <h3>Laravel 5 fundamentals 基础视频教程</h3>
  <div class="well">
    <p>每年，Laracasts 的“Laravel From Scratch” 系列都会更新，以反映框架的最新迭代。这是 2015 版本，它使用版本 5.0 的框架。</p>
  </div>
  @include('notes.laracasts.laravel_5_fundamentals.catalog')
</div>
<div class="col-md-3 col-md-pull-6">
  @include('app.tags')
</div>
<div class="col-md-3">
  @include('pdfs.books._001')
  @include('pdfs.books._002')
</div>
@stop
