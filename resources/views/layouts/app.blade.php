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
{{--    <link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}
    <link href="https://unpkg.com/tailwindcss@1.2.0/dist/tailwind.min.css" rel="stylesheet">

    @yield('styles')
</head>
<body class="bg-gray-300">
{{--<div class="container h-screen"></div>--}}
        @include('layouts._header')

        <div class="container h-full">
            @include('shared._messages')
            @yield('content')
        </div>

        @include('layouts._footer')

    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <script>
        $.scrollUp({
            scrollText: '<i class="fa fa-angle-up"></i>',
            easingType: 'linear',
            scrollSpeed: 900,
            animation: 'fade'
        });
    </script>
    @yield('scripts')
</body>
</html>
