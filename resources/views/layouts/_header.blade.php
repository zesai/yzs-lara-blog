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
{{--            @if(isset($categoryTree))--}}
{{--                <!-- 遍历 $categoryTree 集合，将集合中的每一项以 $category 变量注入 layouts._category_item 模板中并渲染 -->--}}
{{--                @each('layouts._category_item', $categoryTree, 'category')--}}
{{--            @endif--}}
{{--            <!-- 顶部类目菜单结束 -->--}}
{{--            </ul>--}}
{{--            <form class="form-inline pull-right" role="search" action="{{ route('topics.index') }}" method="get">--}}
{{--                <div class="form-group">--}}
{{--                    <input name="q" class="form-control mr-sm-2" type="text" placeholder="关键词搜索" value="{{ old('q') }}">--}}
{{--                </div>--}}
{{--                <button class="btn my-2 my-sm-0" type="submit"--}}
{{--                        style="background:none; margin-left:-3rem; color:#ff9d00;"><i class="fa fa-search"></i></button>--}}
{{--            </form>--}}
{{--            <!-- Right Side Of Navbar -->--}}
{{--            <ul class="nav navbar-nav navbar-ul navbar-right">--}}
{{--                <!-- Authentication Links -->--}}
{{--                @guest--}}
{{--                    <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登录</a></li>--}}
{{--                    <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">注册</a></li>--}}
{{--                @else--}}
{{--                    <li class="nav-item notification-badge">--}}
{{--                        <a class="nav-link mr-3 badge badge-pill badge-{{ Auth::user()->notification_count > 0 ? 'hint' : 'secondary' }} text-white"--}}
{{--                           href="{{ route('notifications.index') }}">--}}
{{--                            {{ Auth::user()->notification_count }}--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item dropdown">--}}
{{--                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"--}}
{{--                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                            <img src="{{ Auth::user()->avatar }}" class="img-responsive img-circle" width="30px"--}}
{{--                                 height="30px">--}}
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
{{--                                <form action="{{ route('logout') }}" method="POST"--}}
{{--                                      onsubmit="return confirm('您确定要退出吗？')">--}}
{{--                                    {{ csrf_field() }}--}}
{{--                                    <button class="btn btn-block btn-danger" type="submit" name="button">退出</button>--}}
{{--                                </form>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                    </li>--}}
{{--                @endguest--}}
{{--            </ul>--}}
{{--        </div>--}}

{{--        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"--}}
{{--                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--            <span class="navbar-toggler-icon"></span>--}}
{{--        </button>--}}
{{--    </div>--}}
{{--</nav>--}}


<!-- This example requires Tailwind CSS v1.4.0+ -->
{{--<div class="relative bg-white">--}}
{{--    <div class="max-w-7xl mx-auto px-4 sm:px-6">--}}
{{--        <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">--}}
{{--            <div class="lg:w-0 lg:flex-1">--}}
{{--                <a href="#" class="flex">--}}
{{--                    <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-on-white.svg" alt="Workflow">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="-mr-2 -my-2 md:hidden">--}}
{{--                <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">--}}
{{--                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />--}}
{{--                    </svg>--}}
{{--                </button>--}}
{{--            </div>--}}
{{--            <nav class="hidden md:flex space-x-10">--}}
{{--                <div class="relative">--}}
{{--                    <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->--}}
{{--                    <button type="button" class="text-gray-500 group inline-flex items-center space-x-2 text-base leading-6 font-medium hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">--}}
{{--                        <span>Solutions</span>--}}
{{--                        <!-- Item active: "text-gray-600", Item inactive: "text-gray-400" -->--}}
{{--                        <svg class="text-gray-400 h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />--}}
{{--                        </svg>--}}
{{--                    </button>--}}

{{--                    <!----}}
{{--                      'Solutions' flyout menu, show/hide based on flyout menu state.--}}

{{--                      Entering: "transition ease-out duration-200"--}}
{{--                        From: "opacity-0 translate-y-1"--}}
{{--                        To: "opacity-100 translate-y-0"--}}
{{--                      Leaving: "transition ease-in duration-150"--}}
{{--                        From: "opacity-100 translate-y-0"--}}
{{--                        To: "opacity-0 translate-y-1"--}}
{{--                    -->--}}
{{--                    <div class="absolute -ml-4 mt-3 transform px-2 w-screen max-w-md sm:px-0 lg:ml-0 lg:left-1/2 lg:-translate-x-1/2">--}}
{{--                        <div class="rounded-lg shadow-lg">--}}
{{--                            <div class="rounded-lg shadow-xs overflow-hidden">--}}
{{--                                <div class="z-20 relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">--}}
{{--                                    <a href="#" class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">--}}
{{--                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />--}}
{{--                                        </svg>--}}
{{--                                        <div class="space-y-1">--}}
{{--                                            <p class="text-base leading-6 font-medium text-gray-900">--}}
{{--                                                Analytics--}}
{{--                                            </p>--}}
{{--                                            <p class="text-sm leading-5 text-gray-500">--}}
{{--                                                Get a better understanding of where your traffic is coming from.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <a href="#" class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">--}}
{{--                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />--}}
{{--                                        </svg>--}}
{{--                                        <div class="space-y-1">--}}
{{--                                            <p class="text-base leading-6 font-medium text-gray-900">--}}
{{--                                                Engagement--}}
{{--                                            </p>--}}
{{--                                            <p class="text-sm leading-5 text-gray-500">--}}
{{--                                                Speak directly to your customers in a more meaningful way.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <a href="#" class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">--}}
{{--                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />--}}
{{--                                        </svg>--}}
{{--                                        <div class="space-y-1">--}}
{{--                                            <p class="text-base leading-6 font-medium text-gray-900">--}}
{{--                                                Security--}}
{{--                                            </p>--}}
{{--                                            <p class="text-sm leading-5 text-gray-500">--}}
{{--                                                Your customers data will be safe and secure.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <a href="#" class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">--}}
{{--                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />--}}
{{--                                        </svg>--}}
{{--                                        <div class="space-y-1">--}}
{{--                                            <p class="text-base leading-6 font-medium text-gray-900">--}}
{{--                                                Integrations--}}
{{--                                            </p>--}}
{{--                                            <p class="text-sm leading-5 text-gray-500">--}}
{{--                                                Connect with third-party tools that you’re already using.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <a href="#" class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">--}}
{{--                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />--}}
{{--                                        </svg>--}}
{{--                                        <div class="space-y-1">--}}
{{--                                            <p class="text-base leading-6 font-medium text-gray-900">--}}
{{--                                                Automations--}}
{{--                                            </p>--}}
{{--                                            <p class="text-sm leading-5 text-gray-500">--}}
{{--                                                Build strategic funnels that will drive your customers to convert--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="px-5 py-5 bg-gray-50 space-y-6 sm:flex sm:space-y-0 sm:space-x-10 sm:px-8">--}}
{{--                                    <div class="flow-root">--}}
{{--                                        <a href="#" class="-m-3 p-3 flex items-center space-x-3 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-100 transition ease-in-out duration-150">--}}
{{--                                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />--}}
{{--                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />--}}
{{--                                            </svg>--}}
{{--                                            <span>Watch Demo</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                    <div class="flow-root">--}}
{{--                                        <a href="#" class="-m-3 p-3 flex items-center space-x-3 rounded-md text-base leading-6 font-medium text-gray-900 hover:bg-gray-100 transition ease-in-out duration-150">--}}
{{--                                            <svg class="flex-shrink-0 h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />--}}
{{--                                            </svg>--}}
{{--                                            <span>Contact Sales</span>--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <a href="#" class="text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">--}}
{{--                    Pricing--}}
{{--                </a>--}}
{{--                <a href="#" class="text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">--}}
{{--                    Docs--}}
{{--                </a>--}}

{{--                <div class="relative">--}}
{{--                    <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->--}}
{{--                    <button type="button" class="text-gray-500 inline-flex items-center space-x-2 text-base leading-6 font-medium hover:text-gray-900 focus:outline-none focus:text-gray-900 transition ease-in-out duration-150">--}}
{{--                        <span>More</span>--}}
{{--                        <!-- Item active: "text-gray-600", Item inactive: "text-gray-400" -->--}}
{{--                        <svg class="text-gray-400 h-5 w-5 group-hover:text-gray-500 group-focus:text-gray-500 transition ease-in-out duration-150" viewBox="0 0 20 20" fill="currentColor">--}}
{{--                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />--}}
{{--                        </svg>--}}
{{--                    </button>--}}

{{--                    <!----}}
{{--                      'More' flyout menu, show/hide based on flyout menu state.--}}

{{--                      Entering: "transition ease-out duration-200"--}}
{{--                        From: "opacity-0 translate-y-1"--}}
{{--                        To: "opacity-100 translate-y-0"--}}
{{--                      Leaving: "transition ease-in duration-150"--}}
{{--                        From: "opacity-100 translate-y-0"--}}
{{--                        To: "opacity-0 translate-y-1"--}}
{{--                    -->--}}
{{--                    <div class="absolute left-1/2 transform -translate-x-1/2 mt-3 px-2 w-screen max-w-md sm:px-0">--}}
{{--                        <div class="rounded-lg shadow-lg">--}}
{{--                            <div class="rounded-lg shadow-xs overflow-hidden">--}}
{{--                                <div class="z-20 relative grid gap-6 bg-white px-5 py-6 sm:gap-8 sm:p-8">--}}
{{--                                    <a href="#" class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">--}}
{{--                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />--}}
{{--                                        </svg>--}}
{{--                                        <div class="space-y-1">--}}
{{--                                            <p class="text-base leading-6 font-medium text-gray-900">--}}
{{--                                                Help Center--}}
{{--                                            </p>--}}
{{--                                            <p class="text-sm leading-5 text-gray-500">--}}
{{--                                                Get all of your questions answered in our forums or contact support.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <a href="#" class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">--}}
{{--                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 4v12l-4-2-4 2V4M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />--}}
{{--                                        </svg>--}}
{{--                                        <div class="space-y-1">--}}
{{--                                            <p class="text-base leading-6 font-medium text-gray-900">--}}
{{--                                                Guides--}}
{{--                                            </p>--}}
{{--                                            <p class="text-sm leading-5 text-gray-500">--}}
{{--                                                Learn how to maximize our platform to get the most out of it.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <a href="#" class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">--}}
{{--                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />--}}
{{--                                        </svg>--}}
{{--                                        <div class="space-y-1">--}}
{{--                                            <p class="text-base leading-6 font-medium text-gray-900">--}}
{{--                                                Events--}}
{{--                                            </p>--}}
{{--                                            <p class="text-sm leading-5 text-gray-500">--}}
{{--                                                See what meet-ups and other events we might be planning near you.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                    <a href="#" class="-m-3 p-3 flex items-start space-x-4 rounded-lg hover:bg-gray-50 transition ease-in-out duration-150">--}}
{{--                                        <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />--}}
{{--                                        </svg>--}}
{{--                                        <div class="space-y-1">--}}
{{--                                            <p class="text-base leading-6 font-medium text-gray-900">--}}
{{--                                                Security--}}
{{--                                            </p>--}}
{{--                                            <p class="text-sm leading-5 text-gray-500">--}}
{{--                                                Understand how we take your privacy seriously.--}}
{{--                                            </p>--}}
{{--                                        </div>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                                <div class="px-5 py-5 bg-gray-50 space-y-5 sm:px-8 sm:py-8">--}}
{{--                                    <div class="space-y-4">--}}
{{--                                        <h3 class="text-sm leading-5 tracking-wide font-medium text-gray-500 uppercase">--}}
{{--                                            Recent Posts--}}
{{--                                        </h3>--}}
{{--                                        <ul class="space-y-4">--}}
{{--                                            <li class="text-base leading-6 truncate">--}}
{{--                                                <a href="#" class="font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">--}}
{{--                                                    Boost your conversion rate--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-base leading-6 truncate">--}}
{{--                                                <a href="#" class="font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">--}}
{{--                                                    How to use search engine optimization to drive traffic to your site--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                            <li class="text-base leading-6 truncate">--}}
{{--                                                <a href="#" class="font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">--}}
{{--                                                    Improve your customer experience--}}
{{--                                                </a>--}}
{{--                                            </li>--}}
{{--                                        </ul>--}}
{{--                                    </div>--}}
{{--                                    <div class="text-sm leading-5">--}}
{{--                                        <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500 transition ease-in-out duration-150">--}}
{{--                                            View all posts &rarr;--}}
{{--                                        </a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </nav>--}}
{{--            <div class="hidden md:flex items-center justify-end space-x-8 md:flex-1 lg:w-0">--}}
{{--                <a href="#" class="whitespace-no-wrap text-base leading-6 font-medium text-gray-500 hover:text-gray-900 focus:outline-none focus:text-gray-900">--}}
{{--                    Sign in--}}
{{--                </a>--}}
{{--                <span class="inline-flex rounded-md shadow-sm">--}}
{{--          <a href="#" class="whitespace-no-wrap inline-flex items-center justify-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">--}}
{{--            Sign up--}}
{{--          </a>--}}
{{--        </span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <!----}}
{{--      Mobile menu, show/hide based on mobile menu state.--}}

{{--      Entering: "duration-200 ease-out"--}}
{{--        From: "opacity-0 scale-95"--}}
{{--        To: "opacity-100 scale-100"--}}
{{--      Leaving: "duration-100 ease-in"--}}
{{--        From: "opacity-100 scale-100"--}}
{{--        To: "opacity-0 scale-95"--}}
{{--    -->--}}
{{--    <div class="absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">--}}
{{--        <div class="rounded-lg shadow-lg">--}}
{{--            <div class="rounded-lg shadow-xs bg-white divide-y-2 divide-gray-50">--}}
{{--                <div class="pt-5 pb-6 px-5 space-y-6">--}}
{{--                    <div class="flex items-center justify-between">--}}
{{--                        <div>--}}
{{--                            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-on-white.svg" alt="Workflow">--}}
{{--                        </div>--}}
{{--                        <div class="-mr-2">--}}
{{--                            <button type="button" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">--}}
{{--                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />--}}
{{--                                </svg>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div>--}}
{{--                        <nav class="grid row-gap-8">--}}
{{--                            <a href="#" class="-m-3 p-3 flex items-center space-x-3 rounded-md hover:bg-gray-50 transition ease-in-out duration-150">--}}
{{--                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />--}}
{{--                                </svg>--}}
{{--                                <div class="text-base leading-6 font-medium text-gray-900">--}}
{{--                                    Analytics--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="#" class="-m-3 p-3 flex items-center space-x-3 rounded-md hover:bg-gray-50 transition ease-in-out duration-150">--}}
{{--                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />--}}
{{--                                </svg>--}}
{{--                                <div class="text-base leading-6 font-medium text-gray-900">--}}
{{--                                    Engagement--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="#" class="-m-3 p-3 flex items-center space-x-3 rounded-md hover:bg-gray-50 transition ease-in-out duration-150">--}}
{{--                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />--}}
{{--                                </svg>--}}
{{--                                <div class="text-base leading-6 font-medium text-gray-900">--}}
{{--                                    Security--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="#" class="-m-3 p-3 flex items-center space-x-3 rounded-md hover:bg-gray-50 transition ease-in-out duration-150">--}}
{{--                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />--}}
{{--                                </svg>--}}
{{--                                <div class="text-base leading-6 font-medium text-gray-900">--}}
{{--                                    Integrations--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                            <a href="#" class="-m-3 p-3 flex items-center space-x-3 rounded-md hover:bg-gray-50 transition ease-in-out duration-150">--}}
{{--                                <svg class="flex-shrink-0 h-6 w-6 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />--}}
{{--                                </svg>--}}
{{--                                <div class="text-base leading-6 font-medium text-gray-900">--}}
{{--                                    Automations--}}
{{--                                </div>--}}
{{--                            </a>--}}
{{--                        </nav>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="py-6 px-5 space-y-6">--}}
{{--                    <div class="grid grid-cols-2 row-gap-4 col-gap-8">--}}
{{--                        <a href="#" class="text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">--}}
{{--                            Pricing--}}
{{--                        </a>--}}
{{--                        <a href="#" class="text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">--}}
{{--                            Docs--}}
{{--                        </a>--}}
{{--                        <a href="#" class="text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">--}}
{{--                            Enterprise--}}
{{--                        </a>--}}
{{--                        <a href="#" class="text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">--}}
{{--                            Blog--}}
{{--                        </a>--}}
{{--                        <a href="#" class="text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">--}}
{{--                            Help Center--}}
{{--                        </a>--}}
{{--                        <a href="#" class="text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">--}}
{{--                            Guides--}}
{{--                        </a>--}}
{{--                        <a href="#" class="text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">--}}
{{--                            Security--}}
{{--                        </a>--}}
{{--                        <a href="#" class="text-base leading-6 font-medium text-gray-900 hover:text-gray-700 transition ease-in-out duration-150">--}}
{{--                            Events--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="space-y-6">--}}
{{--            <span class="w-full flex rounded-md shadow-sm">--}}
{{--              <a href="#" class="w-full flex items-center justify-center px-4 py-2 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition ease-in-out duration-150">--}}
{{--                Sign up--}}
{{--              </a>--}}
{{--            </span>--}}
{{--                        <p class="text-center text-base leading-6 font-medium text-gray-500">--}}
{{--                            Existing customer?--}}
{{--                            <a href="#" class="text-indigo-600 hover:text-indigo-500 transition ease-in-out duration-150">--}}
{{--                                Sign in--}}
{{--                            </a>--}}
{{--                        </p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}




{{--<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">--}}
{{--<!-- This is an example component -->--}}
{{--<div class="bg-gray-200 p-10 flex flex-wrap sys-app-notCollapsed ">--}}
{{--    <!--this contains my photo, email and some information.-->--}}
{{--    <div class="p-4 w-full ">--}}
{{--        <div class="w-1/3 py-4 px-6 flex mx-auto ">--}}
{{--      <span class="px-2 mx-2 inline-block capitalize font-medium ">--}}
{{--        <span class="block text-xl mt-3">Built by</span>--}}
{{--      </span>--}}
{{--            <img--}}
{{--                    src="https://lh3.googleusercontent.com/-U0lTbxzh0bE/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rdJubMZweMDYD49ddsxq1wXai_9Cg/s48-c/photo.jpg"--}}
{{--                    alt="alt placeholder" class="w-12 h-12 mt-1 rounded-full inline-block">--}}
{{--            <span class="px-2 mx-2 inline-block capitalize font-medium">--}}
{{--        <span class="block text-xl">Hamza Nouali</span>--}}
{{--        <span class="block font-normal text-gray-700">Web Developer</span>--}}
{{--      </span>--}}
{{--        </div>--}}
{{--        <div class="p-4 text-center">--}}
{{--            <a href="https://twitter.com/AppClsname" target="_tab" class="p-2 mx-2 ">--}}
{{--                <i class="fab fa-twitter inline-block w-5">--}}
{{--                </i>--}}
{{--                <span class="mx-2 ">@ClsnameApp</span>--}}
{{--            </a>--}}
{{--            <a href="https://twitter.com/HamzaNouali3" target="_tab" class="p-2 mx-2 ">--}}
{{--                <i class="fab fa-twitter inline-block w-5">--}}
{{--                </i>--}}
{{--                <span class="mx-2 ">@hamzanouali</span>--}}
{{--            </a>--}}
{{--            <span class="p-2 mx-2 ">--}}
{{--        <i class="fas fa-envelope inline-block w-5">--}}
{{--        </i>--}}
{{--        <span class="mx-2 ">hamza.nouali.business@gmail.com</span>--}}
{{--      </span>--}}
{{--            <a href="https://www.linkedin.com/in/hamza-nouali-8786ab19a/" target="_tab" class="p-2 mx-2 ">--}}
{{--                <i class="fab fa-linkedin inline-block w-5">--}}
{{--                </i>--}}
{{--                <span class="mx-2 ">hamza nouali</span>--}}
{{--            </a>--}}
{{--        </div>--}}
{{--        <p class="p-4 text-center w-3/5 mx-auto">These are HTML & CSS components built using Tailwind CSS framework, you can--}}
{{--            download it (100% Free and well documented)--}}
{{--            to learn from it or even re-use it.</p>--}}
{{--    </div>--}}
{{--    <!--horizontal navigations-->--}}
{{--    <div class="p-4 pb-0 mx-auto flex flex-wrap ">--}}
{{--        <div class="p-4 w-full lg:w-1/2 bg-gray-800">--}}
{{--            <!--dark mode - without text - icons only-->--}}
{{--            <div class="p-2 text-gray-700 bg-gray-900 rounded-lg shadow-lg ">--}}
{{--        <span class="px-2 mr-2 border-r border-gray-800">--}}
{{--          <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png"--}}
{{--               alt="alt placeholder" class="w-8 h-8 -mt-1 inline mx-auto">--}}
{{--        </span>--}}
{{--                <span class="px-1 hover:text-white cursor-pointer">--}}
{{--          <i class="fas fa-stream p-2 bg-gray-800 rounded-full">--}}
{{--          </i>--}}
{{--        </span>--}}
{{--                <span class="px-1 hover:text-white cursor-pointer">--}}
{{--          <i class="fas fa-search p-2 bg-gray-800 rounded-full">--}}
{{--          </i>--}}
{{--        </span>--}}
{{--                <span class="px-1 hover:text-white cursor-pointer">--}}
{{--          <i class="fas fa-th p-2 bg-gray-800 rounded-full">--}}
{{--          </i>--}}
{{--        </span>--}}
{{--                <span class="px-1 hover:text-white cursor-pointer">--}}
{{--          <i class="w-8 fas fa-calendar-alt p-2 bg-gray-800 rounded-full">--}}
{{--          </i>--}}
{{--        </span>--}}
{{--                <span class="px-1 hover:text-white cursor-pointer w-8 relative">--}}
{{--          <i class="fas fa-bell p-2 bg-gray-800 rounded-full">--}}
{{--          </i>--}}
{{--          <span--}}
{{--                  class="absolute right-0 top-0 -mt-2 -mr-1 text-xs bg-red-500 text-white font-medium px-2 shadow-lg rounded-full">3</span>--}}
{{--        </span>--}}
{{--                <span class="hover:text-white cursor-pointer w-10 relative float-right mr-3">--}}
{{--          <i class="fas fa-user p-2 bg-gray-800 rounded-full">--}}
{{--          </i>--}}
{{--          <span--}}
{{--                  class="absolute right-0 top-0 -mt-1 -mr-1 text-xs bg-yellow-500 text-black font-medium px-2 rounded-full">3</span>--}}
{{--        </span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="p-4 w-full lg:w-1/2">--}}
{{--            <!--dark mode - without text - icons only-->--}}
{{--            <div class="p-2 text-gray-900 bg-white rounded-lg shadow-lg ">--}}
{{--        <span class="px-2 mr-2 border-r border-gray-800">--}}
{{--          <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png"--}}
{{--               alt="alt placeholder" class="w-8 h-8 -mt-1 inline mx-auto">--}}
{{--        </span>--}}
{{--                <span class="px-1 cursor-pointer hover:text-gray-700">--}}
{{--          <i class="fas fa-stream p-2 bg-gray-200 rounded-full">--}}
{{--          </i>--}}
{{--        </span>--}}
{{--                <span class="px-1 cursor-pointer hover:text-gray-700">--}}
{{--          <i class="fas fa-search p-2 bg-gray-200 rounded-full">--}}
{{--          </i>--}}
{{--        </span>--}}
{{--                <span class="px-1 cursor-pointer hover:text-gray-700">--}}
{{--          <i class="fas fa-th p-2 bg-gray-200 rounded-full">--}}
{{--          </i>--}}
{{--        </span>--}}
{{--                <span class="px-1 cursor-pointer hover:text-gray-700">--}}
{{--          <i class="w-8 fas fa-calendar-alt p-2 bg-gray-200 rounded-full">--}}
{{--          </i>--}}
{{--        </span>--}}
{{--                <span class="px-1 w-8 relative cursor-pointer hover:text-gray-700">--}}
{{--          <i class="fas fa-bell p-2 bg-gray-200 rounded-full">--}}
{{--          </i>--}}
{{--          <span--}}
{{--                  class="absolute right-0 top-0 -mt-2 -mr-1 text-xs bg-red-500 text-white font-medium px-2 shadow-lg rounded-full">3</span>--}}
{{--        </span>--}}
{{--                <span class="w-10 relative float-right mr-3 cursor-pointer hover:text-gray-700">--}}
{{--          <i class="fas fa-user p-2 bg-gray-200 rounded-full">--}}
{{--          </i>--}}
{{--          <span--}}
{{--                  class="absolute right-0 top-0 -mt-1 -mr-1 text-xs bg-yellow-500 text-black font-medium px-2 rounded-full">3</span>--}}
{{--        </span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="p-4 w-full lg:w-1/2 bg-gray-800">--}}
{{--            <!--dark mode - text and icons-->--}}
{{--            <div class="p-2 text-gray-700 bg-gray-900 rounded-lg shadow-lg font-medium capitalize">--}}
{{--        <span class="px-2 mr-2 border-r border-gray-800">--}}
{{--          <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png"--}}
{{--               alt="alt placeholder" class="w-8 h-8 -mt-1 inline mx-auto">--}}
{{--        </span>--}}
{{--                <span class="px-2 py-1 cursor-pointer hover:bg-gray-800 hover:text-gray-300 text-sm rounded mb-5">--}}
{{--          <i class="w-8 fas fa-stream p-2 bg-gray-800 rounded-full">--}}
{{--          </i>--}}
{{--          <span class="mx-1">categories</span>--}}
{{--        </span>--}}
{{--                <span class="px-2 py-1 cursor-pointer hover:bg-gray-800 hover:text-gray-300 text-sm rounded mb-5">--}}
{{--          <i class="w-8 fas fa-th p-2 bg-gray-800 rounded-full">--}}
{{--          </i>--}}
{{--          <span class="mx-1">menu</span>--}}
{{--        </span>--}}
{{--                <span class="px-1 hover:text-white cursor-pointer">--}}
{{--          <i class="fas fa-search p-2 bg-gray-800 rounded-full">--}}
{{--          </i>--}}
{{--        </span>--}}
{{--                <span class="px-1 hover:text-white cursor-pointer">--}}
{{--          <i class="w-8 fas fa-calendar-alt p-2 bg-gray-800 rounded-full">--}}
{{--          </i>--}}
{{--        </span>--}}
{{--                <span class="px-1 hover:text-white cursor-pointer w-8 relative">--}}
{{--          <i class="w-8 fas fa-bell p-2 bg-gray-800 rounded-full">--}}
{{--          </i>--}}
{{--          <span--}}
{{--                  class="absolute right-0 top-0 -mt-2 -mr-1 text-xs bg-red-500 text-white font-medium px-2 shadow-lg rounded-full">3</span>--}}
{{--        </span>--}}
{{--                <span class="hover:text-white cursor-pointer w-10 relative float-right mr-3">--}}
{{--          <i class="fas fa-user p-2 bg-gray-800 rounded-full">--}}
{{--          </i>--}}
{{--          <span--}}
{{--                  class="absolute right-0 top-0 -mt-1 -mr-1 text-xs bg-yellow-500 text-black font-medium px-2 rounded-full">3</span>--}}
{{--        </span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="p-4 w-full lg:w-1/2">--}}
{{--            <!--light mode - text and icons-->--}}
{{--            <div class="p-2 text-gray-900 bg-white rounded-lg shadow-lg font-medium capitalize">--}}
{{--        <span class="px-2 mr-2 border-r border-gray-800">--}}
{{--          <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png"--}}
{{--               alt="alt placeholder" class="w-8 h-8 -mt-1 inline mx-auto">--}}
{{--        </span>--}}
{{--                <span class="px-2 py-1 cursor-pointer hover:bg-gray-200 hover:text-gray-700 text-sm rounded mb-5">--}}
{{--          <i class="w-8 fas fa-stream p-2 bg-gray-200 rounded-full">--}}
{{--          </i>--}}
{{--          <span class="mx-1">categories</span>--}}
{{--        </span>--}}
{{--                <span class="px-2 py-1 cursor-pointer hover:bg-gray-200 hover:text-gray-700 text-sm rounded mb-5">--}}
{{--          <i class="w-8 fas fa-th p-2 bg-gray-200 rounded-full">--}}
{{--          </i>--}}
{{--          <span class="mx-1">menu</span>--}}
{{--        </span>--}}
{{--                <span class="px-1 cursor-pointer hover:text-gray-700">--}}
{{--          <i class="fas fa-search p-2 bg-gray-200 rounded-full">--}}
{{--          </i>--}}
{{--        </span>--}}
{{--                <span class="px-1 cursor-pointer hover:text-gray-700">--}}
{{--          <i class="w-8 fas fa-calendar-alt p-2 bg-gray-200 rounded-full">--}}
{{--          </i>--}}
{{--        </span>--}}
{{--                <span class="px-1 w-8 relative cursor-pointer hover:text-gray-700">--}}
{{--          <i class="w-8 fas fa-bell p-2 bg-gray-200 rounded-full">--}}
{{--          </i>--}}
{{--          <span--}}
{{--                  class="absolute right-0 top-0 -mt-2 -mr-1 text-xs bg-red-500 text-white font-medium px-2 shadow-lg rounded-full">3</span>--}}
{{--        </span>--}}
{{--                <span class="w-10 relative float-right mr-3 cursor-pointer hover:text-gray-700">--}}
{{--          <i class="w-8 fas fa-user p-2 bg-gray-200 rounded-full">--}}
{{--          </i>--}}
{{--          <span--}}
{{--                  class="absolute right-0 top-0 -mt-1 -mr-1 text-xs bg-yellow-500 text-black font-medium px-2 rounded-full">3</span>--}}
{{--        </span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!--vertical navigations-->--}}
{{--    <div class="p-4 pt-0 mx-auto flex flex-wrap ">--}}
{{--        <!--dark mode - tight side navigation with yellow notification-->--}}
{{--        <div class="p-4 w-24 bg-gray-800">--}}
{{--            <div class="py-4 px-2 text-gray-700 bg-gray-900 rounded-lg text-center shadow-lg">--}}
{{--                <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png"--}}
{{--                     alt="alt placeholder" class="w-8 h-8 mx-auto mb-5">--}}
{{--                <span class="cursor-pointer hover:text-white px-2 block mb-5">--}}
{{--          <i class="fas fa-stream">--}}
{{--          </i>--}}
{{--        </span>--}}
{{--                <span class="cursor-pointer hover:text-white px-2 block mb-5">--}}
{{--          <i class="fas fa-search p-2 bg-gray-800 rounded-full">--}}
{{--          </i>--}}
{{--        </span>--}}
{{--                <span class="cursor-pointer hover:text-white px-2 block mb-5 relative">--}}
{{--          <i class="fas fa-users">--}}
{{--          </i>--}}
{{--          <span--}}
{{--                  class="absolute right-0 top-0 -mt-2 text-xs bg-yellow-500 text-black font-medium px-2 shadow-lg rounded-full border-2 border-gray-900">3</span>--}}
{{--        </span>--}}
{{--                <span class="cursor-pointer hover:text-white px-2 block mb-5">--}}
{{--          <i class="fas fa-calendar-alt">--}}
{{--          </i>--}}
{{--        </span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="p-4 w-24 bg-gray-800">--}}
{{--            <!--dark mode - tight side navigation with red notification-->--}}
{{--            <div class="py-4 px-2 text-gray-700 bg-gray-900 rounded text-center shadow-lg">--}}
{{--                <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png"--}}
{{--                     alt="alt placeholder" class="w-8 h-8 mx-auto mb-5">--}}
{{--                <span class="cursor-pointer hover:text-white px-2 block mb-5">--}}
{{--          <i class="fas fa-stream">--}}
{{--          </i>--}}
{{--        </span>--}}
{{--                <span class="cursor-pointer hover:text-white px-2 block mb-5">--}}
{{--          <i class="fas fa-search p-2 bg-gray-800 rounded-full">--}}
{{--          </i>--}}
{{--        </span>--}}
{{--                <span class="cursor-pointer hover:text-white px-2 block mb-5 relative">--}}
{{--          <i class="fas fa-bell">--}}
{{--          </i>--}}
{{--          <span--}}
{{--                  class="absolute right-0 top-0 -mt-2 text-xs bg-red-500 text-white font-medium px-2 shadow-lg rounded-full border-2 border-gray-900">3</span>--}}
{{--        </span>--}}
{{--                <span class="cursor-pointer px-2 block mb-5 relative">--}}
{{--          <span--}}
{{--                  class="absolute right-0 top-0 -mt-2 text-xs bg-red-500 text-white font-medium px-2 shadow-lg rounded-full border-2 border-gray-900">3</span>--}}
{{--          <img--}}
{{--                  src="https://lh3.googleusercontent.com/-U0lTbxzh0bE/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rdJubMZweMDYD49ddsxq1wXai_9Cg/s48-c/photo.jpg"--}}
{{--                  alt="alt placeholder" class="w-8 h-8 mx-auto mb-5 rounded-full">--}}
{{--        </span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="p-4 w-64 bg-gray-800">--}}
{{--            <!--dark mode - wide side navigation-->--}}
{{--            <div class="w-full py-4 px-2 text-gray-700 bg-gray-900 rounded-lg text-left capitalize font-medium shadow-lg">--}}
{{--                <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png"--}}
{{--                     alt="alt placeholder" class="w-8 h-8 mx-auto mb-5 ">--}}
{{--                <span class="cursor-pointer px-2 py-1 hover:bg-gray-800 hover:text-gray-300 rounded block mb-5">--}}
{{--          <i class="w-8 fas fa-stream p-2 bg-gray-800 rounded-full">--}}
{{--          </i>--}}
{{--          <span class="mx-2">categories</span>--}}
{{--        </span>--}}
{{--                <span class="cursor-pointer px-2 py-1 hover:bg-gray-800 hover:text-gray-300 rounded block mb-5">--}}
{{--          <i class="w-8 fas fa-search p-2 bg-gray-800 rounded-full">--}}
{{--          </i>--}}
{{--          <span class="mx-2">search</span>--}}
{{--        </span>--}}
{{--                <span class="cursor-pointer px-2 py-1 hover:bg-gray-800 hover:text-gray-300 rounded block mb-5">--}}
{{--          <span class="w-8 mb-5 relative">--}}
{{--            <i class="w-8 fas fa-user p-2 bg-gray-800 rounded-full">--}}
{{--            </i>--}}
{{--            <span--}}
{{--                    class="absolute right-0 top-0 -mt-2 -mr-1 text-xs bg-yellow-500 text-black font-medium px-2 rounded-full">3</span>--}}
{{--          </span>--}}
{{--          <span class="mx-2">sign ups</span>--}}
{{--        </span>--}}
{{--                <span class="cursor-pointer px-2 py-1 hover:bg-gray-800 hover:text-gray-300 rounded block mb-5">--}}
{{--          <i class="w-8 fas fa-th p-2 bg-gray-800 rounded-full">--}}
{{--          </i>--}}
{{--          <span class="mx-2">menu</span>--}}
{{--        </span>--}}
{{--                <span class="cursor-pointer px-2 py-1 hover:bg-gray-800 hover:text-gray-300 rounded block mb-5">--}}
{{--          <i class="w-8 fas fa-calendar-alt p-2 bg-gray-800 rounded-full">--}}
{{--          </i>--}}
{{--          <span class="mx-2">calendar</span>--}}
{{--        </span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="p-4 w-64 ">--}}
{{--            <!--light mode - wide side navigation-->--}}
{{--            <div class="w-full py-4 px-2 text-gray-900 bg-white rounded-lg text-left capitalize font-medium shadow-lg">--}}
{{--                <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png"--}}
{{--                     alt="alt placeholder" class="w-8 h-8 mx-auto mb-5 ">--}}
{{--                <span class="cursor-pointer px-2 py-1 hover:bg-gray-200 hover:text-gray-700 rounded block mb-5">--}}
{{--          <i class="w-8 fas fa-stream p-2 bg-gray-200 rounded-full">--}}
{{--          </i>--}}
{{--          <span class="mx-2">categories</span>--}}
{{--        </span>--}}
{{--                <span class="cursor-pointer px-2 py-1 hover:bg-gray-200 hover:text-gray-700 rounded block mb-5">--}}
{{--          <i class="w-8 fas fa-search p-2 bg-gray-200 rounded-full">--}}
{{--          </i>--}}
{{--          <span class="mx-2">search</span>--}}
{{--        </span>--}}
{{--                <span class="cursor-pointer px-2 py-1 hover:bg-gray-200 hover:text-gray-700 rounded block mb-5">--}}
{{--          <span class="w-8 mb-5 relative">--}}
{{--            <i class="w-8 fas fa-user p-2 bg-gray-200 rounded-full">--}}
{{--            </i>--}}
{{--            <span--}}
{{--                    class="absolute right-0 top-0 -mt-2 -mr-1 text-xs bg-yellow-500 text-black font-medium px-2 rounded-full">3</span>--}}
{{--          </span>--}}
{{--          <span class="mx-2">sign ups</span>--}}
{{--        </span>--}}
{{--                <span class="cursor-pointer px-2 py-1 hover:bg-gray-200 hover:text-gray-700 rounded block mb-5">--}}
{{--          <i class="w-8 fas fa-th p-2 bg-gray-200 rounded-full">--}}
{{--          </i>--}}
{{--          <span class="mx-2">menu</span>--}}
{{--        </span>--}}
{{--                <span class="cursor-pointer px-2 py-1 hover:bg-gray-200 hover:text-gray-700 rounded block mb-5">--}}
{{--          <i class="w-8 fas fa-calendar-alt p-2 bg-gray-200 rounded-full">--}}
{{--          </i>--}}
{{--          <span class="mx-2">calendar</span>--}}
{{--        </span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="p-4 w-24 ">--}}
{{--            <!--light mode - tight side navigation with red notification-->--}}
{{--            <div class="py-4 px-2 text-gray-900 bg-white rounded text-center shadow-lg ">--}}
{{--                <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png"--}}
{{--                     alt="alt placeholder" class="w-8 h-8 mx-auto mb-5">--}}
{{--                <span class="cursor-pointer hover:text-gray-500 px-2 block mb-5">--}}
{{--          <i class="fas fa-stream">--}}
{{--          </i>--}}
{{--        </span>--}}
{{--                <span class="cursor-pointer hover:text-gray-500 px-2 block mb-5">--}}
{{--          <i class="fas fa-search p-2 bg-gray-200 rounded-full">--}}
{{--          </i>--}}
{{--        </span>--}}
{{--                <span class="cursor-pointer hover:text-gray-500 px-2 block mb-5 relative">--}}
{{--          <i class="fas fa-bell">--}}
{{--          </i>--}}
{{--          <span--}}
{{--                  class="absolute right-0 top-0 -mt-2 text-xs bg-red-500 text-white font-medium px-2 shadow-lg rounded-full border-2 border-white">3</span>--}}
{{--        </span>--}}
{{--                <span class="cursor-pointer hover:text-gray-500 px-2 block mb-5 relative">--}}
{{--          <img--}}
{{--                  src="https://lh3.googleusercontent.com/-U0lTbxzh0bE/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rdJubMZweMDYD49ddsxq1wXai_9Cg/s48-c/photo.jpg"--}}
{{--                  alt="alt placeholder" class="w-8 h-8 mx-auto mb-5 rounded-full">--}}
{{--          <span--}}
{{--                  class="absolute right-0 top-0 -mt-2 text-xs bg-red-500 text-white font-medium px-2 shadow-lg rounded-full border-2 border-white ">3</span>--}}
{{--        </span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="p-4 w-24 ">--}}
{{--            <!--light mode - tight side navigation with yellow notification-->--}}
{{--            <div class="py-4 px-2 bg-white text-gray-900 rounded-lg text-center shadow-lg">--}}
{{--                <img src="https://www.freepnglogos.com/uploads/spotify-logo-png/file-spotify-logo-png-4.png"--}}
{{--                     alt="alt placeholder" class="w-8 h-8 mx-auto mb-5">--}}
{{--                <span class="cursor-pointer hover:text-gray-500 px-2 block mb-5">--}}
{{--          <i class="fas fa-stream">--}}
{{--          </i>--}}
{{--        </span>--}}
{{--                <span class="cursor-pointer hover:text-gray-500 px-2 block mb-5">--}}
{{--          <i class="fas fa-search p-2 bg-gray-200 rounded-full">--}}
{{--          </i>--}}
{{--        </span>--}}
{{--                <span class="cursor-pointer hover:text-gray-500 px-2 block mb-5 relative">--}}
{{--          <i class="fas fa-users">--}}
{{--          </i>--}}
{{--          <span--}}
{{--                  class="absolute right-0 top-0 -mt-2 text-xs bg-yellow-500 text-black font-medium px-2 shadow-lg rounded-full border-2 border-white">3</span>--}}
{{--        </span>--}}
{{--                <span class="cursor-pointer hover:text-gray-500 px-2 block mb-5">--}}
{{--          <i class="fas fa-calendar-alt">--}}
{{--          </i>--}}
{{--        </span>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="mb-3">
        <div class="antialiased bg-gray-100 dark-mode:bg-gray-900">
            <div class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800">
                <div x-data="{ open: true }" class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
                    <div class="flex flex-row items-center justify-between p-4">
                        <a href="#" class="text-lg font-semibold tracking-widest text-gray-900 uppercase rounded-lg dark-mode:text-white focus:outline-none focus:shadow-outline">Flowtrail UI</a>
                        <button class="rounded-lg md:hidden focus:outline-none focus:shadow-outline" @click="open = !open">
                            <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6">
                                <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow hidden pb-4 md:pb-0 md:flex md:justify-end md:flex-row">
                        <a class="px-4 py-2 mt-2 text-base font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">首页</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">编程文章</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">资源下载</a>
                        <a class="px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">自媒体</a>
                        <div @click.away="open = false" class="relative" x-data="{ open: true }">
                            <button @click="open = !open" class="flex flex-row text-gray-900 bg-gray-200 items-center w-full px-4 py-2 mt-2 text-sm font-semibold text-left bg-transparent rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
                                <span>More</span>
                                <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                            </button>
                            <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full md:max-w-screen-sm md:w-screen mt-2 origin-top-right">
                                <div class="px-2 pt-2 pb-4 bg-white rounded-md shadow-lg dark-mode:bg-gray-700">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                        <a class="flex flex row items-start rounded-lg bg-transparent p-2 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">
                                            <div class="bg-teal-500 text-white rounded-lg p-3">
                                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="md:h-6 md:w-6 h-4 w-4"><path d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                                            </div>
                                            <div class="ml-3">
                                                <p class="font-semibold">Appearance</p>
                                                <p class="text-sm">Easy customization</p>
                                            </div>
                                        </a>

                                        <a class="flex flex row items-start rounded-lg bg-transparent p-2 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">
                                            <div class="bg-teal-500 text-white rounded-lg p-3">
                                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="md:h-6 md:w-6 h-4 w-4"><path d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                                            </div>
                                            <div class="ml-3">
                                                <p class="font-semibold">Comments</p>
                                                <p class="text-sm">Check your latest comments</p>
                                            </div>
                                        </a>

                                        <a class="flex flex row items-start rounded-lg bg-transparent p-2 dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 hover:text-gray-900 focus:text-gray-900 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline" href="#">
                                            <div class="bg-teal-500 text-white rounded-lg p-3">
                                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" class="md:h-6 md:w-6 h-4 w-4"><path d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z"></path><path d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z"></path></svg>
                                            </div>
                                            <div class="ml-3">
                                                <p class="font-semibold">Analytics</p>
                                                <p class="text-sm">Take a look at your statistics</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>




<!-- item card -->
{{--<div class="md:flex shadow-lg  mx-6 md:mx-auto my-40 max-w-lg md:max-w-2xl h-64">--}}
{{--    <img class="h-full w-full md:w-1/3  object-cover rounded-lg rounded-r-none pb-5/6" src="https://ik.imagekit.io/q5edmtudmz/FB_IMG_15658659197157667_wOd8n5yFyXI.jpg" alt="bag">--}}
{{--    <div class="w-full md:w-2/3 px-4 py-4 bg-white rounded-lg">--}}
{{--        <div class="flex items-center">--}}
{{--            <h2 class="text-xl text-gray-800 font-medium mr-auto">Your Travel Buddy</h2>--}}
{{--            <p class="text-gray-800 font-semibold tracking-tighter">--}}
{{--                only--}}
{{--                <i class="text-gray-600 line-through">60$</i>--}}
{{--                48$--}}
{{--            </p>--}}
{{--        </div>--}}
{{--        <p class="text-sm text-gray-700 mt-4">--}}
{{--            Lorem, ipsum dolor sit amet consectetur Amet veritatis ipsam reiciendis numquam tempore commodi ipsa suscipit laboriosam, sit earum at sequ adipisicing elit. Amet veritatis ipsam reiciendis numquam tempore commodi ipsa suscipit laboriosam, sit earum at sequi.--}}
{{--        </p>--}}
{{--        <div class="flex items-center justify-end mt-4 top-auto">--}}
{{--            <button class="bg-white text-red-500 px-4 py-2 rounded mr-auto hover:underline">Delete</button>--}}
{{--            <button class=" bg-gray-200 text-blue-600 px-2 py-2 rounded-md mr-2">Edit</button>--}}
{{--            <button class=" bg-blue-600 text-gray-200 px-2 py-2 rounded-md ">Publish</button>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}


<!-- post card -->
{{--<div class="flex bg-white shadow-lg rounded-lg mx-4 md:mx-auto my-56 max-w-md md:max-w-2xl "><!--horizantil margin is just for display-->--}}
{{--    <div class="flex items-start px-4 py-6">--}}
{{--        <img class="w-12 h-12 rounded-full object-cover mr-4 shadow" src="https://images.unsplash.com/photo-1542156822-6924d1a71ace?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="avatar">--}}
{{--        <div class="">--}}
{{--            <div class="flex items-center justify-between">--}}
{{--                <h2 class="text-lg font-semibold text-gray-900 -mt-1">Brad Adams </h2>--}}
{{--                <small class="text-sm text-gray-700">22h ago</small>--}}
{{--            </div>--}}
{{--            <p class="text-gray-700">Joined 12 SEP 2012. </p>--}}
{{--            <p class="mt-3 text-gray-700 text-sm">--}}
{{--                Lorem ipsum, dolor sit amet conse. Saepe optio minus rem dolor sit amet!--}}
{{--            </p>--}}
{{--            <div class="mt-4 flex items-center">--}}
{{--                <div class="flex mr-2 text-gray-700 text-sm mr-3">--}}
{{--                    <svg fill="none" viewBox="0 0 24 24"  class="w-4 h-4 mr-1" stroke="currentColor">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>--}}
{{--                    </svg>--}}
{{--                    <span>12</span>--}}
{{--                </div>--}}
{{--                <div class="flex mr-2 text-gray-700 text-sm mr-8">--}}
{{--                    <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z"/>--}}
{{--                    </svg>--}}
{{--                    <span>8</span>--}}
{{--                </div>--}}
{{--                <div class="flex mr-2 text-gray-700 text-sm mr-4">--}}
{{--                    <svg fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-1" stroke="currentColor">--}}
{{--                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"/>--}}
{{--                    </svg>--}}
{{--                    <span>share</span>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

