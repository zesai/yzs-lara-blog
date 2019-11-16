@extends('layouts.app')
@section('title', $topic->title)
@section('description', $topic->excerpt)
@section('styles')
  <link href="{{ asset('markdown/css/prism.css') }}" rel="stylesheet">
  <link href="{{ asset('markdown/css/fluidbox.min.css') }}" rel="stylesheet">
  <style>
    .left-box > div {
      margin-bottom: 10px;
    }
  </style>
@endsection
@section('content')
  <div class="row">

    <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 mt-0 topic-content">


      <div class="card topic-card">
        <ul class="breadcrumb mb-2 mt-0" style="background: none">
          <li><a href="/">首页</a> <span class="divider ml-2 mr-2">/</span></li>
          <li><a href="{{ route('categories.show', $topic->category->id) }}">{{ $topic->category->name }}</a></li>
        </ul>
        <div class="card-body pt-0">

          <h1 class="mb-3">
            <div class="pull-left">
              <i aria-hidden="true" class="fa fa-envelope-open-text"></i>
              <span style="line-height: 34px;">{{ $topic->title }}</span>
            </div>
            <div class="clearfix"></div>
          </h1>
          <p class="book-article-meta text-left" style="margin-bottom: 10px;">

            <span>
              <a href="{{ route('categories.show', $topic->category->id) }}" title="分类">
                <i class="fa fa-folder" aria-hidden="true"></i> {{$topic->category->name}}
              </a>
            </span>
            <span class="text-mute">
              {{ $topic->user->name }}
               发布于 {{ $topic->created_at->diffForHumans() }}
            </span>
            <span class="text-mute">
              <i class="fa fa-eye" aria-hidden="true"></i>
              {{ $topic->view_count }}
            </span>
            <span class="text-mute"><i class="far fa-comment" aria-hidden="true"></i>
                        {{ $topic->reply_count }}
            </span>
          </p>
          <hr />

          <div class="topic-body mt-4 mb-4">
            {!! $topic->body !!}
          </div>
          @can('update', $topic)
            <div class="operate">
              <hr>
              <a href="{{ route('topics.edit', $topic->id) }}" class="btn btn-outline-secondary btn-sm" role="button">
                <i class="far fa-edit"></i> 编辑
              </a>
              <form action="{{ route('topics.destroy', $topic->id) }}" method="POST"
                    style="display: inline-block"
                    onclick="return confirm('确定要删除吗？');">
                {{ csrf_field() }}
                {{ method_field('DELETE') }}
                <button type="submit" class="btn btn-outline-secondary btn-sm">
                  <i class="far fa-trash-alt"></i> 删除
                </button>
              </form>
            </div>
          @endcan
        </div>
        @if(count($topic->tags))
          <div class="topic-tags mb-3 text-center">
            <span class="h6">标签：</span>
            @foreach($topic->tags as $tag)
              <a href="">{{ $tag->name }}</a>
              @if ( ! $loop->last)
                ,
              @endif
            @endforeach
          </div>

        @endif

        <div class="jumbotron jumbotron-fluid topic-copyright">
          <div class="container" style="font-size: 14px">
            <p class="text-left m-auto">本文为原创文章,转载无需和我联系,但请注明来源</p>
            <p class="text-left m-auto">一叶轻舟 » <a href="{{ env('APP_URL') . $topic->link() }}">{{ $topic->title }}</a></p>
          </div>
        </div>
      </div>

      <div class="entry-navigation">
        <nav class="article-nav">
          <span class="article-nav-prev">上一篇<br>
            <a href="https://www.frbkw.com/1913/" rel="prev">使用Dreamweaver做地图热点且删除热点边框</a>
          </span>
          <span class="article-nav-next">下一篇<br>
            <a href="https://www.frbkw.com/1938/" rel="next">uni-app原生导航配置顶部自定义按钮以及图标</a>
          </span>
        </nav>
      </div>
      {{-- 用户回复列表 --}}
      <div class="card topic-reply mt-4">
        <div class="card-title mt-3 mb-0 ml-3 text-muted">
          <h5><span>评论</span></h5>
        </div>
        <div class="card-body">
{{--          @includeWhen(Auth::check(), 'topics._reply_box', ['topic' => $topic])--}}
          @include('topics._reply_box', ['topic' => $topic])
          @include('topics._reply_list', ['replies' => $topic->replies()->with('user', 'topic')->get()])

        </div>
      </div>

    </div>

    <div class="col-lg-3 col-md-3 sidebar">
{{--      @include('topics._left_author_info',['topic'=>$topic])--}}
      @include('topics._sidebar')
{{--      <div class="card d-none d-lg-block d-md-block" id="topic-title-box">--}}
{{--        <div class="card-body" id="left-title-box">--}}

{{--        </div>--}}
{{--      </div>--}}
    </div>
  </div>
@stop
@section('scripts')
  <script src="{{ asset('markdown/js/prism.js') }}"></script>
  <script src="{{ asset('markdown/js/jquery.min.js') }}"></script>
  <script src="{{ asset('markdown/js/jquery.ba-throttle-debounce.min.js') }}"></script>
  <script src="{{ asset('markdown/js/jquery.fluidbox.min.js') }}"></script>
  <script src="{{ asset('js/scrollfix.min.js') }}"></script>
  <script>
      $(document).ready(function () {
          $('p img').wrap(function(){
              return '<a href="' + this.src + '" title="' + this.alt + '"></a>';
          });
          //文章图片点击放大
          $('a[title="file"]').fluidbox({
              stackIndex:990,
          });
          //文章标题栏
          // $(".topic-body h2, .topic-body h3, .topic-body h4, .topic-body h5, .topic-body h6").each(function(i,item){
          //     // var tag = $(item).get(0).localName;
          //     $(item).attr("id","title-"+i);
          //     // $(item).attr("class","list-group-item list-group-item-action list-group-item-light list-item-"+i+ ' new'+tag);
          //     // $(item).attr("href","#title-"+i+"");
          //     // $("#toc").append(item);
          //     $("#left-title-box").append('<a class="list-group-item list-group-item-action list-group-item-light list-item-'+i+'" href="#title-'+i+'" style="border: none">'+$(this).text()+'</a>');
          //     // $(".newh2").css("margin-left",0);
          //     // $(".newh3").css("margin-left",20);
          //     // $(".newh4").css("margin-left",40);
          //     // $(".newh5").css("margin-left",60);
          //     // $(".newh6").css("margin-left",80);
          // });
          //左侧标题栏固定
          // var fixtop = $("#topic-title-box");
          // fixtop.scrollFix({
          //     distanceTop:20
          // });
      })
  </script>
@endsection
