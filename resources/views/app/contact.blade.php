@if(!Auth::check())
<div class="panel panel-info">
  <div class="panel-heading">
    <h4>成为注册会员</h4>
  </div>
  <div class="panel-body">
    <p>本站为了方便 laravel 爱好者更加高效的交流 <a href="http://larapad.com/">laravel 视频教程</a>学习心得采用<strong>邀请注册</strong>的方式，如果你觉得自己是一个热爱学习，能够坚持，乐于助人的三好程序猿，欢迎你加入我们。</p>
    <p>注册/激活请加微信：<i class="text-danger">larapad</i>。</p>
    <p>或扫描二维码添加。</p>
    <img class="img-responsive" src="/imgs/site/wechat.png" alt="larapad微信号的二维码">
    <hr>
    <p>资源分享 QQ 群：</p>
    <p>QQ 群二维码：</p>
    <img class="img-responsive" src="/imgs/site/qq-group.png" alt="larapad QQ 群的二维码">
  </div>
</div>
@endif
