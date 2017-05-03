@extends('app')
@section('title', '01_认识composer_meet_Composer_laravel5基础视频教程_laracasts')

@section('content')
<div class="col-md-9 col-md-push-3">
  <section><!-- bread nav -->
    <p>
      <a href="/notes">视频教程笔记</a> /
      <a href="/notes/laracasts">laracasts</a> /
      <a href="/notes/laracasts/laravel_5_fundamentals">laravel 5 基础视频教程</a>
    </p>
  </section>

  <section><!-- infomations  -->
    <h2>01 认识 Composer - meet Composer</h2>
    <p>
      <ul class="list-inline">
        <li>标签：</li>
        <li><a href="/tags/composer">composer</a></li>
        <li><a href="/tags/installation">laravel安装</a></li>
        <li>QQ 群号：575709105</li>
      </ul>
    </p>
    <hr>
    <ol>
      <li><a href="#introduction">简介</a></li>
      <li><a href="#note">笔记</a></li>
      <li><a href="#link">下载地址</a></li>
    </ol>
    <h3 id="introduction">简介</h3>
    <p>在我们开始使用 Laravel 之前，您首先需要了解作为 PHP 的首要依赖管理器的 Composer 。</p>
    <p>此系列教程假设用户从未接触过 Laravel ，以 Laravel 5 为例进行基础知识教学。</p>
    <p>此系列<a href="http://larapad.com" target="_blank">laravel视频教程</a>教学速度适中，确保了知识点覆盖、趣味性以及新手的可接纳性。</p>
    <p>正式开始。</p>
  </section>


  <section><!-- main content  -->
    <h3 id="note">笔记</h3>

    <p>PHP 近几年的最大进步是引入了 Composer作为包依赖管理工具 （官网链接：
    <a href="https://getcomposer.org" rel="nofollow" target="_blank">https://getcomposer.org</a>）。在这之前很多包依赖管理工具是不太友好的并且使用过程令人不太愉快的。而 Composer 则令包依赖管理变得非常简单。</p>
    <p>它的作用是提供了一个重复使用任何的代码的良好方式，而不是重复的制造轮子，我们可以十分快捷的下载流行的包，而且 Laravel 本身就采用了很多第三方包，良好的利用了 PHP 的生态（想了解有哪些包，直接访问
    <a href="https://packagist.org/" rel="nofollow" target="_blank">https://packagist.org/</a> 进行搜索，例如 authentication, password, 当然也包括 laravel）。</p>
    <p>我们现在需要 laravel， 有几种不同的方式拉取它，如果你访问 laravel 文档，会找到如下命令行：</p>
    <p><code>$ laravel new my-blog</code></p>
    <p>看起来非常方便。如果你希望通过 composer 来获取，首先你需要下载安装 composer，就如视频演示的（下载地址在文末），你直接在命令工具输入 composer，就可以判断是否安装了 composer。</p>
    <p>假如你没有听说过 composer ，你需要下载安装它。视频将为你演示一遍（基于苹果 MAC，对于 Windows 用户，直接访问文档-介绍-安装，获取安装方式）。更多内容参考文档或者对于国内的朋友，环境配置建议参考此书（当然此书也是很棒的中文入门教程可以和这套视频结合起来看，笔者没有收广告费）：Laravel 第一本中文新手书籍《Laravel 入门教程》</p>
    <img class="img-responsive" src="/imgs/notes/laracasts/laravel_5_fundamentals/01_meet_composer/k7wwMpJduq.jpg" alt="《Laravel 入门教程》封面">
    <p>下面视频演示了 composer 的基本操作。packigits的简单使用流程，如何 require 相关的包。</p>
    <p><code>$ composer require phpspec/phpspec</code></p>
    <p>composer 会下载 phpspec ，并且会自动处理 phpspec 相关的依赖一并下载。然后会生成一个 composer.json，可以把它想象成一个配置文件，明确了任何我们所需要的包。这样如果我们把项目拷贝给他人，他们只需要使用命令 composer install 就可以获得配置中需要的包。</p>
    <p>然后看一下 vendor 文件夹，可以看到所有通过 composer 拉取的包，有 phpspec，当然也有 phpspec 所需要的依赖包。还有一个 bin 目录，任何可执行文件会被放置其中。</p>
    <p>接下来还要讲的一个东西就是 composer 包含了非常有用且立即可用的 autoload，这也是很多流行的项目，包括 laravel 都在利用的东西。解释起来就是，通过使用 composer 的 autoload，遵循一个基础的约定，可以让我们非常方便的载入需要的比如 php 类，而不需要无止尽的使用require字段。不要着急，今后的课程将会深入讲解。</p>
    <p>现在回到桌面，进行 laravel 的安装。</p>
    <p>实际上我们就是利用 composer 安装一个包，而这个包就是 laravel。而通过 packagist.org 可以看到 laravel 的引入命令是 laravel/laravel ，vendor和包名称是一样的。最后可以指定文件夹的名称。视频演示者表示，他需要一个 dev-develop（我们不需要），因为录制该视频的时候，laravel 5 还未正式发布，仅存在于开发分支上，正式发布版本还是 laravel 4，而我们需要的只是下列命令。</p>
    <p><code>$ composer create-project laravel learning-laravel-5</code></p>
    <p>然后下载好以后，就进入目录，今后将逐个进行讲解。最后演示者通过 php server 快速访问了一下 laravel 的官方欢迎页面。</p>
    <p><code>$php -S localhost:8888 -t public</code></p>
    <p>如果你跟上了，并且看到了欢迎页，恭喜你。当然这里也会存在很多问题，linux 和 windows 以及 mac 的解决方法都不一样。幸好我们已经有了一个终极的解决方案：Homestead。</p>
    <p>下一节将讲解 homestead 。</p>

    <hr>
  </section>
  <section>
    <h3 id="link">下载地址</h3>
    <p>百度云盘链接：<a href="http://pan.baidu.com/s/1nuPGxWP" rel="nofollow" target="_blank">http://pan.baidu.com/s/1nuPGxWP</a> 密码：8oxz</p>
    <p class="well">注意：本站仅分享笔记，所有其它资源均来源于网络搜索结果，仅作参考，需要教学视频，请支持购买正版，官方网站：<a href="https://laracasts.com" target="_blank" rel="nofollow">laracasts.com</a>。</p>
    
  </section>
  <section>
    <a class="btn btn-default" rel="nofollow">没有上一课了。</a>
    <a class="btn btn-primary pull-right" href="/notes/laracasts/laravel_5_fundamentals/02_virtual_machines_and_homestead">
      02 认识虚拟机和 Homestead</a>
  </section>


  <hr>

  @include('app.tags')
</div>
<div class="col-md-3 col-md-pull-9">
  @include('notes._basic')
  @include('notes._advance')
</div>
@stop
