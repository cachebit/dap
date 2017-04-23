@extends('app')
@section('title', 'Laravel电子书_PHP电子书_PDF电子书')

@section('content')
<div class="col-md-9">
  @include('pdfs._catalog')
</div>
<div class="col-md-3">
  @include('app.declear')
  @include('app.tags')
</div>
@stop
