@extends('app')
@section('title', 'laravel表单_laravel_forms')
@section('keywords', 'laravel表单,laravel forms')

@section('content')
<div class="col-md-6 col-md-push-3">
  <h3>laravel表单_laravel_forms</h3>
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
        <td>
          <a href="/notes/laracasts/laravel_5_fundamentals/10_forms">
            表单
          </a>
        </td>
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
