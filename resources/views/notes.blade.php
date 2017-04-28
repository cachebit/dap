@extends('app')
@section('title', 'Laravel视频教程笔记_Laracasts视频教程笔记')

@section('content')

<div class="col-md-6 col-md-push-3">
  <div class="row">
    <div class="col-md-6">
      @include('notes._basic')
    </div>
    <div class="col-md-6">
      @include('notes._advance')
    </div>
  </div>

  @include('notes._lastest')
  @include('notes._promote')
</div>

<div class="col-md-3 col-md-pull-6">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4><a href="http://larapad.com/">Laravel 视频教</a>程分类</h4>
    </div>
    <div class="panel-body">
      <ul class="list-unstyled">
        <li><a href="/notes/laracasts">Laracasts</a></li>
      </ul>
    </div>
  </div>
  @include('pdfs.books._001')
  @include('pdfs.books._002')

</div>

<div class="col-md-3">
  @include('app.contact')
  @include('app.tags')
</div>
@stop
