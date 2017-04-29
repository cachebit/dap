<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>你访问的页面不存在 - Larapad 记录和分享 Laravel 视频教程笔记。</title>
    <meta name="keywords" content='@yield('keywords', 'laravel视频教程, laravel教程')'>
    <meta name="description" content='@yield('description', 'Larapad.com 是 Laravel 爱好者记录和分享 Laravel 教程笔记，特别是 Laravel 视频教程笔记的网站。在这里即使你听不懂教程英语也没关系，看着 Laravel 视频教程笔记的重点，就可以轻松学习关键知识。期待你加入 Larapad.com')'>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- 最新版本的 Bootstrap 核心 CSS 文件 http://www.bootcdn.cn/ -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!-- 最新版本的 jquery 文件 http://www.bootcdn.cn/ -->
    <script src="//cdn.bootcss.com/jquery/3.1.1/jquery.js"></script>
    <!-- 最新的 Bootstrap 核心 JavaScript 文件 http://www.bootcdn.cn/ -->
    <script src="/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">
      <header>
        <div class="row">
          <div class="col-md-8">
            <h1><a href="http://larapad.com">Larapad </a><small>记录和分享 Laravel 视频教程笔记。</small></h1>
          </div>
          <div class="col-md-4">
            <nav class="pull-right">
              <ul class="nav nav-pills">
                <li role="presentation"><a href="http://larapad.com/signup">注册</a></li>
                <li role="presentation"><a href="http://larapad.com/signin">登录</a></li>
              </ul>
            </nav>
          </div>
        </div>
      </header>

      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li><a href="/">首页</a></li>
              <li><a href="/notes">laravel视频教程笔记</a></li>
              <li><a href="/notes/laracasts">laracasts视频教程笔记</a></li>
              <li><a href="/pdf">PDF 电子书</a></li>
            </ul>
          </div>
        </div>
      </nav>


      <div class="row">
        <div class="col-md-offset-3 col-md-6">
          <p class="alert alert-warning">对不起，你所访问的页面不存在╮(￣▽￣)╭</p>
        </div>

        <div class="col-md-offset-3 col-md-6">
          <h5>我们推荐你访问以下内容：</h5>
          <div class="alert alert-warning">
            <a href="{{ route('promote') }}"><h4>百度云盘！送 2017 最新 laravel 视频教程。</h4></a>
            <p>分享此篇文章至各大社交平台 ，即送<b class="text-danger">30元红包</b>，详询微信号:<b class="text-danger">larapad</b>，凭有效截图领取。</p>
            <p>活动截止日期：2017年5月31日23:59，本活动最终解释权归 <a href="http://larapad.com/">Larapad 官方网站</a>所有。</p>
          </div>
        </div>

        <div class="col-md-offset-3 col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4><a href="http://larapad.com/">laravel视频教程</a>分类</h4>
              <p class="text-muted">按照a-z的音序排列</p>
            </div>
            <div class="panel-body">
              <ul class="list-inline">
                <li><a href="/tags/forms">表单</a></li>
                <li><a href="/tags/blade">Blade</a></li>
                <li><a href="/tags/composer">Composer</a></li>
                <li><a href="/tags/eloquent">Eloquent</a></li>
                <li><a href="/tags/homestead">Homestead</a></li>
                <li><a href="/tags/configration">环境配置</a></li>
                <li><a href="/tags/controller">控制器</a></li>
                <li><a href="/notes/laracasts">Laracasts视频</a></li>
                <li><a href="/tags/installation">Laravel安装</a></li>
                <li><a href="/tags/mvc">MVC</a></li>
                <li><a href="/tags/route">路由</a></li>
                <li><a href="/tags/view">视图</a></li>
                <li><a href="/tags/database">数据库</a></li>
              </ul>
            </div>
          </div>
        </div>

        <hr>

        <div class="col-sm-12 col-md-offset-3 col-md-6">
          <p>(c)2017 Larapad.com 保留所有权利。 微信号：larapad</p>
        </div>
      </div>

    </div><!-- container -->
  </body>
</html>
