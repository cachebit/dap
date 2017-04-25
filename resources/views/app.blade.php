<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title', 'Larapad') - Larapad 记录和分享 Laravel 视频教程笔记。</title>
    <meta name="keywords" content='@yield('keywords', 'laravel 视频教程, laravel 教程')'>
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
      @include('app.header')

      @include('app.nav')
      <div class="alert alert-warning">
        <a href="{{ route('promote') }}"><h4>福利！送 2017 最新 laravel 视频教程，限前500名注册用户。</h4></a>
        <p>分享此篇文章至：微信朋友圈、laravel 微信群、QQ群 ，即送<b class="text-danger">30元红包</b>，详询微信，截图领取。</p>
      </div>
      <div class="row">
        @include('shared.messages')
        @yield('content')
      </div>
      <hr>
      @include('app.footer')
    </div>
  </body>
</html>
