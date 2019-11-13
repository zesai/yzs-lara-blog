<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top pt-3 pb-3">
    <div class="container">
        <!-- Branding Image -->
        <a class="navbar-brand " href="{{ url('/') }}">
            一叶轻舟
        </a>

        <div class="collapse navbar-collapse ml-5" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav navbar-ul navbar-right">
                <!-- 顶部类目菜单开始 -->
                <!-- 判断模板是否有 $categoryTree 变量 -->
                @if(isset($categoryTree))
                    <!-- 遍历 $categoryTree 集合，将集合中的每一项以 $category 变量注入 layouts._category_item 模板中并渲染 -->
                    @each('layouts._category_item', $categoryTree, 'category')
                @endif
                <!-- 顶部类目菜单结束 -->
            </ul>
          <form class="form-inline pull-right ml-5" role="search" action="/Search/SearchList" method="get" target="_blank">
            <div class="form-group">
              <input name="KeyWord" class="form-control mr-sm-2" type="text" placeholder="全站搜索">
            </div>
            <button class="btn my-2 my-sm-0" type="submit" style="background:none; margin-left:-3rem; color:#ff9d00;" ><i class="fa fa-search" ></i></button>
          </form>
            <!-- Right Side Of Navbar -->
{{--            <ul class="navbar-nav navbar-right">--}}
{{--                <!-- Authentication Links -->--}}
{{--                @guest--}}
{{--                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">注册</a></li>--}}
{{--                @else--}}
{{--                    <li class="nav-item notification-badge">--}}
{{--                        <a class="nav-link mr-3 badge badge-pill badge-{{ Auth::user()->notification_count > 0 ? 'hint' : 'secondary' }} text-white" href="{{ route('notifications.index') }}">--}}
{{--                            {{ Auth::user()->notification_count }}--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                            <img src="{{ Auth::user()->avatar }}" class="img-responsive img-circle" width="30px" height="30px">--}}
{{--                            {{ Auth::user()->name }}--}}
{{--                        </a>--}}
{{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
{{--                            @can('manage_contents')--}}
{{--                                <a class="dropdown-item" href="{{ url(config('administrator.uri')) }}" target="_blank">--}}
{{--                                    <i class="fas fa-tachometer-alt mr-2"></i>--}}
{{--                                    管理后台--}}
{{--                                </a>--}}
{{--                                <div class="dropdown-divider"></div>--}}
{{--                            @endcan--}}
{{--                            <a class="dropdown-item" href="{{ route('users.show', Auth::id()) }}">--}}
{{--                                <i class="far fa-user mr-2"></i>--}}
{{--                                个人中心--}}
{{--                            </a>--}}
{{--                            <a class="dropdown-item" href="{{ route('users.edit', Auth::id()) }}">--}}
{{--                                <i class="far fa-edit mr-2"></i>--}}
{{--                                编辑资料--}}
{{--                            </a>--}}
{{--                            <div class="dropdown-divider"></div>--}}
{{--                            <a class="dropdown-item" id="logout" href="#">--}}
{{--                                <form action="{{ route('logout') }}" method="POST" onsubmit="return confirm('您确定要退出吗？')">--}}
{{--                                    {{ csrf_field() }}--}}
{{--                                    <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>--}}
{{--                                </form>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                @endguest--}}
{{--            </ul>--}}
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>
