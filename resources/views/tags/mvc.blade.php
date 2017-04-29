@extends('app')
@section('title', 'laravel_MVC')
@section('keywords', 'laravel MVC')

@section('content')
<div class="col-md-6 col-md-push-3">
  <h3>laravel_MVC</h3>
  <p class="text-muted">按时间顺序，最新的在最上面。</p>
  <hr>
  <table class="table">
    <thead>
      <th>标题</th>
      <th>更新时间</th>
      <th>笔记</th>
    </thead>
    <tbody>
      <tr>
        <td><a href="/notes/laracasts/laravel_5_fundamentals/09_basic_model_controller_view_workflow">MVC 基础工作流</a></td>
        <td>2017-04-29</td>
        <td><span class="label label-default">无</span></td>
      </tr>
    </tbody>
  </table>

</div>
<div class="col-md-3 col-md-pull-6">
  @include('app.tags')
</div>
<div class="col-md-3">
  @include('pdfs.books._001')
  @include('pdfs.books._002')
</div>
@stop
