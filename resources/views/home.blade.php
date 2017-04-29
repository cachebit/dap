@extends('app')
@section('title', 'laravel视频教程_laracasts视频_laracasts教程')

@section('content')
<div class="col-md-6 col-md-push-3">
  @include('notes._promote')

  @include('notes._lastest')

  @include('pdfs._promote')
</div>
<div class="col-md-3 col-md-pull-6">
  @include('notes._basic')
  @include('notes._advance')
</div>
<div class="col-md-3">
  @include('app.contact')
  @include('app.tags')
</div>
@stop
