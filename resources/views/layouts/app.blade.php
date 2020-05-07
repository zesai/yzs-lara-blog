<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','IT') - 一叶轻舟</title>
    <meta name="description" content="@yield('description','个人学习记录博客')" />
    <meta name="keyword" content="@yield('keyword', 'PHP,Laravel,后端,MySQL,文章')" />
    <!-- css 样式 -->
  <link href="/css/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
{{--  start header--}}
{{--  <link href="/css/css/animate.css" rel="stylesheet">--}}
    <link href="/css/css/bootsnav.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/css/css/htmleaf-demo.css">
    <link href="/css/css/overwrite.css" rel="stylesheet">
    <link href="/css/css/style.css" rel="stylesheet">
    <link href="/css/css/color.css" rel="stylesheet">
{{--  end header--}}
    <style>
        /*返回顶部样式*/
        #scrollUp {
          bottom: 75px;
          right: 35px;
          width: 38px;
          height: 38px;
          background: #444;
          color: #ffffff;
          font-size: 20px;
          display: block;
          line-height: 40px;
          position: fixed;
          text-align: center;
          text-decoration: none;
          -webkit-transition: all 0.5s;
          -o-transition: all 0.5s;
          -moz-transition: all 0.5s;
          transition: all 0.5s;
          z-index: 1000;
          -webkit-border-radius: 5px;
          -moz-border-radius: 5px;
          border-radius: 5px;
        }
        nav.navbar.bootsnav ul.nav > li.dropdown > a.dropdown-toggle:after {
          font-family: 'FontAwesome';
          /*content: "\f0d7";*/
          margin-left: 5px;
          margin-top: 2px;
        }
    </style>
    @yield('styles')
</head>
<body>
    <div id="app" class="{{ route_class() }}-page">
        @include('layouts._header')
        <div class="container">
            @include('shared._messages')
            @yield('content')
        </div>
        @include('layouts._footer')
    </div>
    {{-- js --}}
    @if (app()->isLocal())
{{--        @include('sudosu::user-selector')--}}
    @endif
    <script src="{{ mix('js/app.js') }}"></script>
    <script src="/js/jquery.scrollUp.js"></script>
    <script>
        // 获取window的引用:
        let $window = $(window);
        // 获取包含data-src属性的img，并以jQuery对象存入数组:
        let lazyImgs = _.map($('img[data-src]').get(), function (i) {
            return $(i);
        });
        // 定义事件函数:
        let onScroll = function() {
            // 获取页面滚动的高度:
            let wtop = $window.scrollTop();
            // 判断是否还有未加载的img:
            if (lazyImgs.length > 0) {
                // 获取可视区域高度:
                let wheight = $window.height();
                // 存放待删除的索引:
                let loadedIndex = [];
                // 循环处理数组的每个img元素:
                _.each(lazyImgs, function ($i, index) {
                    // 判断是否在可视范围内:
                    if ($i.offset().top - wtop < wheight) {
                        // 设置src属性:
                        $i.attr('src', $i.attr('data-src'));
                        // 添加到待删除数组:
                        loadedIndex.unshift(index);
                    }
                });
                // 删除已处理的对象:
                _.each(loadedIndex, function (index) {
                    lazyImgs.splice(index, 1);
                });
            }
        };
        // 绑定事件:
        $window.scroll(onScroll);
        // 手动触发一次:
        onScroll();
    </script>
    <script>
        $.scrollUp({
            scrollText: '<i class="fa fa-angle-up"></i>',
            easingType: 'linear',
            scrollSpeed: 900,
            animation: 'fade'
        });
    </script>

    <script src="/js/js/bootsnav.js"></script>
    @yield('scripts')
</body>
</html>
