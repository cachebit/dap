@extends('app')
@section('title', $title.'_'.$serie.'_'.$type)

@section('content')
<div class="col-md-3">
  @include('app.left')
</div>
<div class="col-md-9">
  <div>
    <p>
      <a href="/notes">视频教程笔记</a> /
      <a href="/notes/laracasts">{{ $type }}</a> /
      <a href="/notes/laracasts/laravel_5_fundamentals">{{ $serie }}</a>
    </p>

    <h2>{{ $title }} - 认识 Composer</h2>
    <p>视频原址：<a href="https://laracasts.com/" rel="nofollow">https://laracasts.com/</a></p>
    <p>标签：</p>
    <hr>
    <p>此系列教程假设用户从未接触过 Laravel ，以 Laravel 5 为例进行基础知识教学。</p>
    <p>此系列教程教学速度适中，确保了知识点覆盖、趣味性以及新手的可接纳性。</p>
    <p>正式开始。</p>
    <p>PHP 近几年的最大进步是引入了 Composer作为包依赖管理工具 （官网链接：getcomposer.org）。在这之前很多包依赖管理工具是不太友好的并且使用过程令人不太愉快的。而 Composer 则令包依赖管理变得非常简单。</p>
    <p>它的作用是提供了一个重复使用任何的代码的良好方式，而不是重复的制造轮子，我们可以十分快捷的下载流行的包，而且 Laravel 本身就采用了很多第三方包，良好的利用了 PHP 的生态（想了解有哪些包，直接访问packagist.com 进行搜索，包括 laravel）。</p>
    <p>然后介绍了 composer 的安装和配置。</p>
    <p>对于国内的朋友，环境配置建议参考此书（当然此书也是很棒的中文入门教程可以和这套视频结合起来看，笔者没有收广告费）：Laravel 第一本中文新手书籍《Laravel 入门教程》</p>
    <img class="img-responsive" src="/imgs/notes/laracasts/laravel_5_fundamentals/01_meet_composer/k7wwMpJduq.jpg" alt="《Laravel 入门教程》封面">
    <p>介绍：<a href="https://laravel-china.org/topics/3383/laravel-the-first-chinese-new-book-laravel-tutorial" rel="nofollow" target="_blank">https://laravel-china.org/topics/3383/laravel-the-first-chinese-new-book-laravel-tutorial</a></p>
    <p>购买：<a href="http://t.laravel-china.org/laravel-tutorial/5.1/buy-it" rel="nofollow" target="_blank">http://t.laravel-china.org/laravel-tutorial/5.1/buy-it</a></p>
    <p>下面详细讲一下视频涉及到的一些重要内容。</p>
  </div>


  @if(!Auth::check())
  <div class="panel panel-danger">
    <div class="panel-heading">
      <p>如果您看到这段话，说明您尚未注册，无法继续阅读。</p>
      <p>本站为了更加高效的帮助 Laravel 爱好者交流，采取邀请注册制。</p>
      <p>请加微信：获取邀请码完成注册，24小时内回复，祝您愉快！</p>
    </div>
  </div>
  @endif
  @if(Auth::check())
  <div>
    <p>如果你不是VIP将无法看到此处内容。</p>
  </div>
  @endif

  <hr>

  @include('app.tags')
</div>
@stop
