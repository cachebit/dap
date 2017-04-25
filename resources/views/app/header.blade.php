<header>
  <div class="row">
    <div class="col-md-8">
      <h1><a href="http://larapad.com">Larapad </a><small>记录和分享 Laravel 视频教程笔记。</small></h1>
    </div>
    <div class="col-md-4">
      <nav class="pull-right">
        <ul class="nav nav-pills">
          @if(Auth::check())
            <li role="presentation" class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->name }}<span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="{{ route('users.show', Auth::user()->id) }}">个人中心</a></li>
                <li><a href="{{ route('users.edit', Auth::user()->id) }}">编辑资料</a></li>
                <li class="divider"></li>
                <li>
                  <a id="logout" href="#">
                    <form action="{{ route('signout') }}" method="POST">
                      {{ csrf_field() }}
                      {{ method_field('DELETE') }}
                      <button class="btn btn-block btn-danger" type="submit">退出</button>
                    </form>
                  </a>
                </li>
              </ul>
            </li>
            <li role="presentation"><a href="{{ route('users.index') }}">用户列表</a></li>
          @else
            <li role="presentation"><a href="{{ route('signup') }}">注册</a></li>
            <li role="presentation"><a href="{{ route('signin') }}">登录</a></li>
          @endif
        </ul>
    </nav>
    </div>
  </div>
</header>
