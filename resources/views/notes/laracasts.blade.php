<h3>Laracasts 视频教程笔记分类 <small><a href="https://laracasts.com" rel="nofollow" alt="Laracasts 官网链接">点击访问>> Laracasts 官网</a></small></h3>

<hr>

<div>
  <h3>【单个课程】<small><a href="#">点击访问>>单个课程列表</a></small></h3>

  <hr>
</div>

<div>
  <h3>【系列课程】</h3>
  <div>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#first_tab" aria-controls="home" role="tab" data-toggle="tab">1-20</a></li>
      <li role="presentation"><a href="#second_tab" aria-controls="profile" role="tab" data-toggle="tab">21-40</a></li>
      <li role="presentation"><a href="#third_tab" aria-controls="messages" role="tab" data-toggle="tab">41-66</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane active" id="first_tab">
        @include('notes.laracasts.catalog_1')
      </div>
      <div role="tabpanel" class="tab-pane" id="second_tab">
        @include('notes.laracasts.catalog_2')
      </div>
      <div role="tabpanel" class="tab-pane" id="third_tab">
        @include('notes.laracasts.catalog_3')
      </div>
    </div>
  </div>
</div>
