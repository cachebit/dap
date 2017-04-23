<div class="panel panel-primary">
  <div class="panel-heading">
    <h3> Laravel 5 基础教程</h3>
    <p>本教程不仅包含基础知识，更贯穿了许多最佳实践做法，值得新手反复学习！强烈推荐！！！</p>
    <a class="btn btn-default btn-block" href="#">点击查看>>更多基础教程</a>
  </div>
  <div class="panel-body">
    <div>
      <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#first_tab" aria-controls="home" role="tab" data-toggle="tab">1-10</a></li>
        <li role="presentation"><a href="#second_tab" aria-controls="profile" role="tab" data-toggle="tab">11-20</a></li>
        <li role="presentation"><a href="#third_tab" aria-controls="messages" role="tab" data-toggle="tab">21-27</a></li>
      </ul>

      <!-- Tab panes -->
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="first_tab">
          @include('notes.laracasts.laravel_5_fundamentals.catalog_1')
        </div>
        <div role="tabpanel" class="tab-pane" id="second_tab">
          @include('notes.laracasts.laravel_5_fundamentals.catalog_2')
        </div>
        <div role="tabpanel" class="tab-pane" id="third_tab">
          @include('notes.laracasts.laravel_5_fundamentals.catalog_3')
        </div>
      </div>
    </div>
  </div>
</div>
