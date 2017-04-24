@extends('app')
@section('title', '《Laravel 入门基础》 laravel_fundamentals_chinese')

@section('content')
<div class="col-md-3">
  <h3>PDF 电子书推荐</h3>
  <hr>
  @include('pdfs.books._002')
</div>
<div class="col-md-9">
    <div class="page-header">
      <h3>《Laravel 入门基础》</h3>
      <i>编著：Summer，李锦发（Aufree）</i>
    </div>
    <img class="img-responsive" src="/imgs/pdfs/covers/k7wwMpJduq.jpg" alt="《Laravel 入门教程》封面">

    <p>本书将教你如何使用 Laravel 一步一步构建一个类似新浪微博的应用，让你从实际开发中体会到 Laravel 开发的敏捷、愉悦与轻松。</p>
    <p>通过阅读本教程，你将学到如 HTML、CSS、JavaScript、PHP 和 Laravel 等 Web 开发相关的基础知识。</p>
    <p>不仅于此，本书还会对这些基础知识点进行延伸扩展，为你讲解一些在 Web 开发中更为专业、实用的技能，如 Git 工作流、Gulp 前端工作流、Bootstrap 框架基本使用等。</p>
    <p>这些知识将为你未来的编程开发奠定下坚实的基础。使你不论是在做自己的个人项目，或是构建一个伟大的商业产品时，都能得心应手。</p>
    <p>本书特色</p>
    <ul>
      <li>定位为现代化 Web 开发新手入门，Git 工作流、前端工作流、GitHub 使用等；</li>
      <li>使用 Laravel LTS 作为框架版本；</li>
      <li>一步一步构建一个完整的项目，读者可以很轻松的跟着书的线索动手做下去；</li>
      <li>使用真实项目开发中的流程工具，如：Git，GitHub，Gulp，代码上线等；</li>
      <li>最佳实践，代码中加入许多最佳实践，让新手从一开始就养成好习惯；</li>
      <li>崇尚 「DRY（Don't repeat yourself）不要重复自己」，让读者能真切体验到使用 Laravel 开发的愉悦感；</li>
    </ul>
    <p>介绍：<a href="https://laravel-china.org/topics/3383/laravel-the-first-chinese-new-book-laravel-tutorial" rel="nofollow" target="_blank">https://laravel-china.org/topics/3383/laravel-the-first-chinese-new-book-laravel-tutorial</a></p>
    <p>购买：<a href="http://t.laravel-china.org/laravel-tutorial/5.1/buy-it" rel="nofollow" target="_blank">http://t.laravel-china.org/laravel-tutorial/5.1/buy-it</a></p>
  </div>
@stop
