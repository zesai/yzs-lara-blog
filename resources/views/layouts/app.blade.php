<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','IT') - 一叶轻舟</title>
{{--    <meta name="description" content="@yield('description', setting('seo_description','个人学习记录博客'))" />--}}
    <meta name="description" content="@yield('description','个人学习记录博客')" />
{{--    <meta name="keyword" content="@yield('keyword', setting('seo_keyword', 'PHP,Laravel,后端,MySQL,文章'))" />--}}
    <meta name="keyword" content="@yield('keyword', 'PHP,Laravel,后端,MySQL,文章')" />
    <!-- css 样式 -->
{{--    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">--}}
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
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
    </style>
    @yield('styles')
{{--<script data-ad-client="ca-pub-7932191457233315" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>--}}
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
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="/js/jquery.scrollUp.js"></script>
    <script>
        $.scrollUp({
            scrollText: '<i class="fa fa-angle-up"></i>',
            easingType: 'linear',
            scrollSpeed: 900,
            animation: 'fade'
        });
    </script>
{{--    <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>--}}
    @yield('scripts')
</body>
</html>
