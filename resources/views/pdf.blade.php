@extends('app')
@section('title', 'Laravel电子书_PHP电子书_PDF电子书')

@section('content')
<div class="col-md-9">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4>PDF 电子书分类</h4>
    </div>
    <div class="panel-body">
      <ul class="list-inline">
        <li><a href="#">Laravel 电子书</a></li>
        <li><a href="#">php 电子书</a></li>
        <li><a href="#">设计模式</a></li>
        <li><a href="#">最佳实践</a></li>
      </ul>
    </div>
  </div>
  @include('pdfs._catalog')

  <div class="row">
    <div class="col-sm-6">
      @include('notes._basic')
    </div>
    <div class="col-sm-6">
      @include('notes._advance')
    </div>
  </div>
</div>
<div class="col-md-3">
  @include('app.contact')
  @include('app.tags')
</div>
@stop
