@extends('app')
@section('title', 'Laravel视频教程笔记_Laracasts视频教程笔记')

@section('content')
<div class="col-md-3">
  @include('app.left')
</div>
<div class="col-md-6">
  @include('notes.index')
</div>
<div class="col-md-3">
  @include('app.tags')
</div>
@stop
