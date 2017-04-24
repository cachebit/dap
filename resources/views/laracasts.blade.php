@extends('app')
@section('title', 'Laracasts 官方网站')

@section('content')
<div class="col-md-6 col-md-push-3">
  <div class="well">
    <a href="https://laracasts.com" rel="nofollow" alt="Laracasts 官网链接">点击进入>> Laracasts 官网</a>
  </div>
  @include('notes._lastest')

  @include('notes._promote')

  @include('pdfs._promote')
</div>
<div class="col-md-3 col-md-pull-6">
  @include('app.left')
</div>
<div class="col-md-3">
  @include('app.tags')
</div>
@stop
