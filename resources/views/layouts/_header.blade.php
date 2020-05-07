{{--<nav class="navbar navbar-expand-lg navbar-light bg-light navbar-static-top pt-3 pb-3">--}}
{{--    <div class="container">--}}
{{--        <!-- Branding Image -->--}}
{{--        <a class="navbar-brand mr-3" href="{{ url('/') }}">--}}
{{--            一叶轻舟--}}
{{--        </a>--}}

{{--        <div class="collapse navbar-collapse" id="navbarSupportedContent">--}}
{{--            <!-- Left Side Of Navbar -->--}}
{{--            <ul class="navbar-nav mr-auto">--}}
{{--                <!-- 顶部类目菜单开始 -->--}}
{{--                <!-- 判断模板是否有 $categoryTree 变量 -->--}}
{{--                @if(isset($categoryTree))--}}
{{--                    <!-- 遍历 $categoryTree 集合，将集合中的每一项以 $category 变量注入 layouts._category_item 模板中并渲染 -->--}}
{{--                    @each('layouts._category_item', $categoryTree, 'category')--}}
{{--                @endif--}}
{{--                <!-- 顶部类目菜单结束 -->--}}
{{--            </ul>--}}
{{--          <form class="form-inline pull-right" role="search" action="{{ route('topics.index') }}" method="get">--}}
{{--            <div class="form-group">--}}
{{--              <input name="q" class="form-control mr-sm-2" type="text" placeholder="关键词搜索" value="{{ old('q') }}">--}}
{{--            </div>--}}
{{--            <button class="btn my-2 my-sm-0" type="submit" style="background:none; margin-left:-3rem; color:#ff9d00;" ><i class="fa fa-search" ></i></button>--}}
{{--          </form>--}}
{{--            <!-- Right Side Of Navbar -->--}}
{{--            <ul class="nav navbar-nav navbar-ul navbar-right">--}}
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
{{--        </div>--}}

{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--          <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--    </div>--}}
{{--</nav>--}}


<div class="pageheader">
  <div class="container">
    <h2 class="title">顶部黏贴的导航菜单</h2>
    <p>Navigation menu with sticky style</p>
  </div>
</div>
<!-- End Home -->
<!-- Start Navigation -->
<nav class="navbar navbar-default navbar-sticky bootsnav">

  <!-- Start Top Search -->
  <div class="top-search">
    <div class="container">
      <div class="input-group">
        <span class="input-group-addon"><i class="fa fa-search"></i></span>
        <input type="text" class="form-control" placeholder="Search">
        <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
      </div>
    </div>
  </div>
  <!-- End Top Search -->

  <div class="container">
    <!-- Start Atribute Navigation -->
    <div class="attr-nav">
      <ul>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" >
            <i class="fa fa-shopping-bag"></i>
            <span class="badge">3</span>
          </a>
          <ul class="dropdown-menu cart-list">
            <li>
              <a href="#" class="photo"><img src="/images/thumb/thumb01.jpg" class="cart-thumb" alt="" /></a>
              <h6><a href="#">Delica omtantur </a></h6>
              <p>2x - <span class="price">$99.99</span></p>
            </li>
            <li>
              <a href="#" class="photo"><img src="/images/thumb/thumb02.jpg" class="cart-thumb" alt="" /></a>
              <h6><a href="#">Omnes ocurreret</a></h6>
              <p>1x - <span class="price">$33.33</span></p>
            </li>
            <li>
              <a href="#" class="photo"><img src="/images/thumb/thumb03.jpg" class="cart-thumb" alt="" /></a>
              <h6><a href="#">Agam facilisis</a></h6>
              <p>2x - <span class="price">$99.99</span></p>
            </li>
            <li class="total">
              <span class="pull-right"><strong>Total</strong>: $0.00</span>
              <a href="#" class="btn btn-default btn-cart">Cart</a>
            </li>
          </ul>
        </li>
        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
{{--        <li class="side-menu"><a href="#"><i class="fa fa-bars"></i></a></li>--}}
      </ul>
    </div>
    <!-- End Atribute Navigation -->

    <!-- Start Header Navigation -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
        <i class="fa fa-bars"></i>
      </button>
      <a class="navbar-brand" href="#brand">
        <img src="/images/brand/logo-black.png" class="logo" alt="">
      </a>
    </div>
    <!-- End Header Navigation -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-menu">
      <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">
          <!-- 顶部类目菜单开始 -->
          <!-- 判断模板是否有 $categoryTree 变量 -->
          @if(isset($categoryTree))
              <!-- 遍历 $categoryTree 集合，将集合中的每一项以 $category 变量注入 layouts._category_item 模板中并渲染 -->
              @each('layouts._category_item', $categoryTree, 'category')
          @endif
          <!-- 顶部类目菜单结束 -->
{{--        <li class="dropdown megamenu-fw">--}}
{{--          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Megamenu</a>--}}
{{--          <ul class="dropdown-menu megamenu-content" role="menu">--}}
{{--            <li>--}}
{{--              <div class="row">--}}
{{--                <div class="col-menu col-md-3">--}}
{{--                  <h6 class="title">Title Menu One</h6>--}}
{{--                  <div class="content">--}}
{{--                    <ul class="menu-col">--}}
{{--                      <li><a href="#">Custom Menu</a></li>--}}
{{--                      <li><a href="#">Custom Menu</a></li>--}}
{{--                      <li><a href="#">Custom Menu</a></li>--}}
{{--                      <li><a href="#">Custom Menu</a></li>--}}
{{--                      <li><a href="#">Custom Menu</a></li>--}}
{{--                      <li><a href="#">Custom Menu</a></li>--}}
{{--                    </ul>--}}
{{--                  </div>--}}
{{--                </div><!-- end col-3 -->--}}
{{--                <div class="col-menu col-md-3">--}}
{{--                  <h6 class="title">Title Menu Two</h6>--}}
{{--                  <div class="content">--}}
{{--                    <ul class="menu-col">--}}
{{--                      <li><a href="#">Custom Menu</a></li>--}}
{{--                      <li><a href="#">Custom Menu</a></li>--}}
{{--                      <li><a href="#">Custom Menu</a></li>--}}
{{--                      <li><a href="#">Custom Menu</a></li>--}}
{{--                      <li><a href="#">Custom Menu</a></li>--}}
{{--                      <li><a href="#">Custom Menu</a></li>--}}
{{--                    </ul>--}}
{{--                  </div>--}}
{{--                </div><!-- end col-3 -->--}}
{{--                <div class="col-menu col-md-3">--}}
{{--                  <h6 class="title">Title Menu Three</h6>--}}
{{--                  <div class="content">--}}
{{--                    <ul class="menu-col">--}}
{{--                      <li><a href="#">Custom Menu</a></li>--}}
{{--                      <li><a href="#">Custom Menu</a></li>--}}
{{--                      <li><a href="#">Custom Menu</a></li>--}}
{{--                      <li><a href="#">Custom Menu</a></li>--}}
{{--                      <li><a href="#">Custom Menu</a></li>--}}
{{--                      <li><a href="#">Custom Menu</a></li>--}}
{{--                    </ul>--}}
{{--                  </div>--}}
{{--                </div>--}}
{{--                <div class="col-menu col-md-3">--}}
{{--                  <h6 class="title">Title Menu Four</h6>--}}
{{--                  <div class="content">--}}
{{--                    <ul class="menu-col">--}}
{{--                      <li><a href="#">Custom Menu</a></li>--}}
{{--                      <li><a href="#">Custom Menu</a></li>--}}
{{--                      <li><a href="#">Custom Menu</a></li>--}}
{{--                      <li><a href="#">Custom Menu</a></li>--}}
{{--                      <li><a href="#">Custom Menu</a></li>--}}
{{--                      <li><a href="#">Custom Menu</a></li>--}}
{{--                    </ul>--}}
{{--                  </div>--}}
{{--                </div><!-- end col-3 -->--}}
{{--              </div><!-- end row -->--}}
{{--            </li>--}}
{{--          </ul>--}}
{{--        </li>--}}
      </ul>
    </div><!-- /.navbar-collapse -->
  </div>

</nav>
