(function ($) {
	"use strict";

    let bootsnav = {
        initialize: function() {
            this.event();
            this.hoverDropdown();
            this.navbarSticky();
            this.navbarScrollspy();
        },
        event : function(){

            // ------------------------------------------------------------------------------ //
            // Variable
            // ------------------------------------------------------------------------------ //
            let getNav = $("nav.navbar.bootsnav");

            // ------------------------------------------------------------------------------ //
            // Navbar Center
            // ------------------------------------------------------------------------------ //
            if( getNav.hasClass("brand-center")){
                let postsArr = new Array(),
                    index = $("nav.brand-center"),
                    $postsList = index.find('ul.navbar-nav');

                //Create array of all posts in lists
                index.find('ul.navbar-nav > li').each(function(){
                    postsArr.push($(this).html());
                });

                //Split the array at this point. The original array is altered.
                let firstList = postsArr.splice(0, Math.round(postsArr.length / 2)),
                    secondList = postsArr,
                    ListHTML = '';

                let createHTML = function(list){
                    ListHTML = '';
                    for (let i = 0; i < list.length; i++) {
                        ListHTML += '<li>' + list[i] + '</li>'
                    }
                }

                //Generate HTML for first list
                createHTML(firstList);
                $postsList.html(ListHTML);
                index.find("ul.nav").first().addClass("navbar-left");

                //Generate HTML for second list
                createHTML(secondList);
                //Create new list after original one
                $postsList.after('<ul class="nav navbar-nav"></ul>').next().html(ListHTML);
                index.find("ul.nav").last().addClass("navbar-right");

                //Wrap navigation menu
                index.find("ul.nav.navbar-left").wrap("<div class='col-half left'></div>");
                index.find("ul.nav.navbar-right").wrap("<div class='col-half right'></div>");

                //Selection Class
                index.find('ul.navbar-nav > li').each(function(){
                    let dropDown = $("ul.dropdown-menu", this),
                        megaMenu = $("ul.megamenu-content", this);
                    dropDown.closest("li").addClass("dropdown");
                    megaMenu.closest("li").addClass("megamenu-fw");
                });
            }


            // ------------------------------------------------------------------------------ //
            // Navbar Sidebar
            // ------------------------------------------------------------------------------ //
            if( getNav.hasClass("navbar-sidebar")){
                // Add Class to body
                $("body").addClass("wrap-nav-sidebar");
                getNav.wrapInner("<div class='scroller'></div>");
            }else{
                $(".bootsnav").addClass("on");
            }

            // ------------------------------------------------------------------------------ //
            // Menu Center
            // ------------------------------------------------------------------------------ //
            if( getNav.find("ul.nav").hasClass("navbar-center")){
                getNav.addClass("menu-center");
            }

            // ------------------------------------------------------------------------------ //
            // Navbar Full
            // ------------------------------------------------------------------------------ //
            if( getNav.hasClass("navbar-full")){
                // Add Class to body
                $("nav.navbar.bootsnav").find("ul.nav").wrap("<div class='wrap-full-menu'></div>");
                $(".wrap-full-menu").wrap("<div class='nav-full'></div>");
                $("ul.nav.navbar-nav").prepend("<li class='close-full-menu'><a href='#'><i class='fa fa-times'></i></a></li>");
            }else if( getNav.hasClass("navbar-mobile")){
                getNav.removeClass("no-full");
            }else{
                getNav.addClass("no-full");
            }

            // ------------------------------------------------------------------------------ //
            // Navbar Mobile
            // ------------------------------------------------------------------------------ //
            if( getNav.hasClass("navbar-mobile")){
                // Add Class to body
                $('.navbar-collapse').on('shown.bs.collapse', function() {
                    $("body").addClass("side-right");
                });
                $('.navbar-collapse').on('hide.bs.collapse', function() {
                    $("body").removeClass("side-right");
                });

                $(window).on("resize", function(){
                    $("body").removeClass("side-right");
                });
            }

            // ------------------------------------------------------------------------------ //
            // Navbar Fixed
            // ------------------------------------------------------------------------------ //
            if( getNav.hasClass("no-background")){
                $(window).on("scroll", function(){
                    let scrollTop = $(window).scrollTop();
                    if(scrollTop >34){
                        $(".navbar-fixed").removeClass("no-background");
                    }else {
                        $(".navbar-fixed").addClass("no-background");
                    }
                });
            }

            // ------------------------------------------------------------------------------ //
            // Navbar Fixed
            // ------------------------------------------------------------------------------ //
            if( getNav.hasClass("navbar-transparent")){
                $(window).on("scroll", function(){
                    let scrollTop = $(window).scrollTop();
                    if(scrollTop >34){
                        $(".navbar-fixed").removeClass("navbar-transparent");
                    }else {
                        $(".navbar-fixed").addClass("navbar-transparent");
                    }
                });
            }

            // ------------------------------------------------------------------------------ //
            // Button Cart
            // ------------------------------------------------------------------------------ //
            $(".btn-cart").on("click", function(e){
                e.stopPropagation();
            });

            // ------------------------------------------------------------------------------ //
            // Toggle Search
            // ------------------------------------------------------------------------------ //
            $("nav.navbar.bootsnav .attr-nav").each(function(){
                $("li.search > a", this).on("click", function(e){
                    e.preventDefault();
                    $(".top-search").slideToggle();
                });
            });
            $(".input-group-addon.close-search").on("click", function(){
                $(".top-search").slideUp();
            });

            // ------------------------------------------------------------------------------ //
            // Toggle Side Menu
            // ------------------------------------------------------------------------------ //
            $("nav.navbar.bootsnav .attr-nav").each(function(){
                $("li.side-menu > a", this).on("click", function(e){
                    e.preventDefault();
                    $("nav.navbar.bootsnav > .side").toggleClass("on");
                    $("body").toggleClass("on-side");
                });
            });
            $(".side .close-side").on("click", function(e){
                e.preventDefault();
                $("nav.navbar.bootsnav > .side").removeClass("on");
                $("body").removeClass("on-side");
            });

            // ------------------------------------------------------------------------------ //
            // Navbat Tabs
            // ------------------------------------------------------------------------------ //
            $(".tab-nav li").each(function(){
                $("a", this).off("click");
                $("a", this).on("click", function(e){
                    e.preventDefault();
                    let cek = $(this).closest("li").hasClass("active");
                    if( cek ){
                        $("a", this).off("click");
                    }else{
                        let getID = $(this).attr("href");
                        $(".tab-nav li").removeClass("active");
                        $(this).closest("li").addClass("active");
                    }
                });
            });

            $(".dropdown-tabs .tab-pane").each(function(){
                let getBG = $(this).data("background");
                $(this).css("background-image","url('" + getBG +"')");
                $(this).addClass("animated");
            });

            // ------------------------------------------------------------------------------ //
            // Wrapper
            // ------------------------------------------------------------------------------ //
            $("body").wrapInner( "<div class='wrapper'></div>");
        },


        // ------------------------------------------------------------------------------ //
        // Change dropdown to hover on dekstop
        // ------------------------------------------------------------------------------ //
        hoverDropdown : function(){
            let getNav = $("nav.navbar.bootsnav"),
                getWindow = $(window).width(),
                getHeight = $(window).height(),
                getIn = getNav.find("ul.nav").data("in"),
                getOut = getNav.find("ul.nav").data("out");

            if( getWindow < 981 ){

                // 滚动导航条的高度
                $(".scroller").css("height", "auto");

                // 禁用mouseenter事件
                $("nav.navbar.bootsnav ul.nav").find("li.dropdown").off("mouseenter");
                $("nav.navbar.bootsnav ul.nav").find("li.dropdown").off("mouseleave");
                $("nav.navbar.bootsnav ul.nav").find(".title").off("mouseenter");
                $("nav.navbar.bootsnav ul.nav").off("mouseleave");
                $(".navbar-collapse").removeClass("animated");

                // 支持单击事件
                $("nav.navbar.bootsnav ul.nav").each(function(){
                    $(".dropdown-menu", this).addClass("animated");
                    $(".dropdown-menu", this).removeClass(getOut);

                    // 下拉褪色切换
                    $("a.dropdown-toggle", this).off('click');
                    $("a.dropdown-toggle", this).on('click', function (e) {
                        e.stopPropagation();
                        $(this).closest("li.dropdown").find(".dropdown-menu").first().stop().fadeToggle().toggleClass(getIn);
                        $(this).closest("li.dropdown").first().toggleClass("on");
                        return false;
                    });

                    // 隐藏下拉作用
                    $('li.dropdown', this).each(function () {
                        $(this).find(".dropdown-menu").stop().fadeOut();
                        $(this).on('hidden.bs.dropdown', function () {
                            $(this).find(".dropdown-menu").stop().fadeOut();
                        });
                        return false;
                    });
                });

                // 隐藏下拉
                let cleanOpen = function(){
                    $('li.dropdown', this).removeClass("on");
                    $(".dropdown-menu", this).stop().fadeOut();
                    $(".dropdown-menu", this).removeClass(getIn);
                    $(".col-menu", this).removeClass("on");
                    $(".col-menu .content", this).stop().fadeOut();
                    $(".col-menu .content", this).removeClass(getIn);
                }

                // 隐藏om鼠标离开
                $("nav.navbar.bootsnav").on("mouseleave", function(){
                    cleanOpen();
                });

                // 启用点击导航
                $("nav.navbar.bootsnav .attr-nav").each(function(){
                    $(".dropdown-menu", this).removeClass("animated");
                    $("li.dropdown", this).off("mouseenter");
                    $("li.dropdown", this).off("mouseleave");
                    $("a.dropdown-toggle", this).off('click');
                    $("a.dropdown-toggle", this).on('click', function (e) {
                        e.stopPropagation();
                        $(this).closest("li.dropdown").find(".dropdown-menu").first().stop().fadeToggle();
                        $(".navbar-toggle").each(function(){
                            $(".fa", this).removeClass("fa-times");
                            $(".fa", this).addClass("fa-bars");
                            $(".navbar-collapse").removeClass("in");
                            $(".navbar-collapse").removeClass("on");
                        });
                    });

                    $(this).on("mouseleave", function(){
                        $(".dropdown-menu", this).stop().fadeOut();
                        $("li.dropdown", this).removeClass("on");
                        return false;
                    });
                });


            }else if( getWindow > 981 ){
                // Height of scroll navigation sidebar
                $(".scroller").css("height", getHeight + "px");

                // Navbar Sidebar
                if( getNav.hasClass("navbar-sidebar")){
                    // Hover effect Sidebar Menu
                    $("nav.navbar.bootsnav ul.nav").each(function(){
                        $("a.dropdown-toggle", this).off('click');
                        $("a.dropdown-toggle", this).on('click', function (e) {
                            e.stopPropagation();
                        });

                        $(".dropdown-menu", this).addClass("animated");
                        $("li.dropdown", this).on("mouseenter", function(){
                            $(".dropdown-menu", this).eq(0).removeClass(getOut);
                            $(".dropdown-menu", this).eq(0).stop().fadeIn().addClass(getIn);
                            $(this).addClass("on");
                            return false;
                        });

                        $(".col-menu").each(function(){
                            $(".content", this).addClass("animated");
                            $(".title", this).on("mouseenter", function(){
                                $(this).closest(".col-menu").find(".content").stop().fadeIn().addClass(getIn);
                                $(this).closest(".col-menu").addClass("on");
                                return false;
                            });
                        });

                        $(this).on("mouseleave", function(){
                            $(".dropdown-menu", this).stop().removeClass(getIn);
                            $(".dropdown-menu", this).stop().addClass(getOut).fadeOut();
                            $(".col-menu", this).find(".content").stop().fadeOut().removeClass(getIn);
                            $(".col-menu", this).removeClass("on");
                            $("li.dropdown", this).removeClass("on");
                            return false;
                        });
                    });
                }else{
                    // 悬停效果默认菜单
                    $("nav.navbar.bootsnav ul.nav").each(function(){
                        $("a.dropdown-toggle", this).off('click');
                        $("a.dropdown-toggle", this).on('click', function (e) {
                            e.stopPropagation();
                        });

                        $(".megamenu-fw", this).each(function(){
                            $(".title", this).off("click");
                            $("a.dropdown-toggle", this).off("click");
                            $(".content").removeClass("animated");
                        });

                        $(".dropdown-menu", this).addClass("animated");
                        $("li.dropdown", this).on("mouseenter", function(){
                            $(".dropdown-menu", this).eq(0).removeClass(getOut);
                            $(".dropdown-menu", this).eq(0).stop().fadeIn().addClass(getIn);
                            $(this).addClass("on");
                            return false;
                        });

                        $("li.dropdown", this).on("mouseleave", function(){
                            $(".dropdown-menu", this).eq(0).removeClass(getIn);
                            $(".dropdown-menu", this).eq(0).stop().fadeOut().addClass(getOut);
                            $(this).removeClass("on");
                        });

                        $(this).on("mouseleave", function(){
                            $(".dropdown-menu", this).removeClass(getIn);
                            $(".dropdown-menu", this).eq(0).stop().fadeOut().addClass(getOut);
                            $("li.dropdown", this).removeClass("on");
                            return false;
                        });
                    });
                }
            }

        },

        // ------------------------------------------------------------------------------ //
        // Navbar Sticky
        // ------------------------------------------------------------------------------ //
        navbarSticky : function(){
            let getNav = $("nav.navbar.bootsnav"),
                navSticky = getNav.hasClass("navbar-sticky");

            if( navSticky ){
                // Wraped navigation
                getNav.wrap("<div class='wrap-sticky'></div>");

                // Set Height Navigation
                let getHeight = getNav.height();
                $(".wrap-sticky").height(getHeight);

                // Windown on scroll
                let getOffset = $(".wrap-sticky").offset().top;
                $(window).on("scroll", function(){
                    let scrollTop = $(window).scrollTop();
                    if(scrollTop > getOffset){
                        getNav.addClass("sticked");
                    }else {
                        getNav.removeClass("sticked");
                    }
                });
            }
        },

        // ------------------------------------------------------------------------------ //
        // Navbar Scrollspy
        // ------------------------------------------------------------------------------ //
        navbarScrollspy : function(){
            let navScrollSpy = $(".navbar-scrollspy"),
                $body   = $('body'),
                getNav = $('nav.navbar.bootsnav'),
                offset  = getNav.outerHeight();

            if( navScrollSpy.length ){
                $body.scrollspy({target: '.navbar', offset: offset });

                // Animation Scrollspy
                $('.scroll').on('click', function(event) {
                    event.preventDefault();

                    // Active link
                    $('.scroll').removeClass("active");
                    $(this).addClass("active");

                    // Remove navbar collapse
                    $(".navbar-collapse").removeClass("in");

                    // Toggle Bars
                    $(".navbar-toggle").each(function(){
                        $(".fa", this).removeClass("fa-times");
                        $(".fa", this).addClass("fa-bars");
                    });

                    // Scroll
                    let scrollTop = $(window).scrollTop(),
                        $anchor = $(this).find('a'),
                        $section = $($anchor.attr('href')).offset().top,
                        $window = $(window).width(),
                        $minusDesktop = getNav.data("minus-value-desktop"),
                        $minusMobile = getNav.data("minus-value-mobile"),
                        $speed = getNav.data("speed");

                    if( $window > 992 ){
                        let $position = $section - $minusDesktop;
                    }else{
                        let $position = $section - $minusMobile;
                    }

                    $('html, body').stop().animate({
                        scrollTop: $position
                    }, $speed);
                });

                // Activate Navigation
                let fixSpy = function() {
                    let data = $body.data('bs.scrollspy');
                    if (data) {
                        offset = getNav.outerHeight();
                        data.options.offset = offset;
                        $body.data('bs.scrollspy', data);
                        $body.scrollspy('refresh');
                    }
                }

                // Activate Navigation on resize
                let resizeTimer;
                $(window).on('resize', function() {
                    clearTimeout(resizeTimer);
                    let resizeTimer = setTimeout(fixSpy, 200);
                });
            }
        }
    };

    // Initialize
    $(document).ready(function(){
        bootsnav.initialize();
    });

    // Reset on resize
    $(window).on("resize", function(){
        bootsnav.hoverDropdown();
        bootsnav.navbarSticky();

        // Toggle Bars
        $(".navbar-toggle").each(function(){
            $(".fa", this).removeClass("fa-times");
            $(".fa", this).addClass("fa-bars");
            $(this).removeClass("fixed");
        });
        $(".navbar-collapse").removeClass("in");
        console.log($(".navbar-collapse").removeClass("in"));
        $(".navbar-collapse").removeClass("on");
        $(".navbar-collapse").removeClass("bounceIn");
    });

}(jQuery));

