@extends('app')
@section('title', 'laravel视频教程_laracasts视频_laracasts教程')

@section('content')
<div class="col-md-3">
  @include('app.left')
</div>
<div class="col-md-6">
  @include('notes._lastest')

  @include('notes._promote')

  @include('pdfs._promote')
</div>
<div class="col-md-3">
  @include('app.tags')
</div>
@stop
