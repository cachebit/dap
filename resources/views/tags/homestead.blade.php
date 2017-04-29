@extends('app')
@section('title', 'homestead_homestead安装')
@section('keywords', 'homestead,homestead安装')

@section('content')
<div class="col-md-6 col-md-push-3">
  <h3>homestead_homestead安装</h3>
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
        <td><a href="/notes/laracasts/laravel_5_fundamentals/02_virtual_machines_and_homestead">认识虚拟机和 Homestead</a></td>
        <td>2017-04-29</td>
        <td><span class="label label-warning">简介</span></td>
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
