@extends('app')
@section('title', 'Laracasts 视频教程')

@section('content')
<div class="col-md-9">
  @include('notes.laracasts._catalog')
</div>
<div class="col-md-3">
  @include('app.declear')
  @include('app.tags')
</div>
@stop
