@extends('app')
@section('title', 'laravel视图_laravel_view')
@section('keywords', 'laravel视图,laravel view')

@section('content')
<div class="col-md-6 col-md-push-3">
  <h3>laravel视图_laravel_view</h3>
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
      <tr>
        <td>
          <a href="/notes/laracasts/laravel_5_fundamentals/09_basic_model_controller_view_workflow">
            MVC 基础工作流
          </a>
        </td>
        <td>2017-04-29</td>
        <td><span class="label label-default">无</span></td>
      </tr>
      <tr>
        <td>
          <a href="/notes/laracasts/laravel_5_fundamentals/05_blade_101">
            Blade视图模板基础
          </a>
        </td>
        <td>2017-04-29</td>
        <td><span class="label label-warning">简介</span></td>
      </tr>
      <tr>
        <td><a href="/notes/laracasts/laravel_5_fundamentals/04_passing_data_to_views">给视图传递数据</a></td>
        <td>2017-04-29</td>
        <td><span class="label label-default">无</span></td>
      </tr>
      <tr>
        <td><a href="/notes/laracasts/laravel_5_fundamentals/03_a_gentle_introduction_to_routing_controllers_and_Views">路由、控制器和视图简介</a></td>
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
