@extends('layouts.app')
@section('title',isset($category) ? $category->name : '话题列表')
@section('content')
  <div class="row mb-5">
    <div class="col-lg-9 col-md-9 topic-list">
      @if (isset($category))
        <div class="alert alert-info" role="alert">
          分类 {{ $category->name }} ：{{ $category->description }}
        </div>
      @endif
      @if (isset($tag))
        <div class="alert alert-info" role="alert">
          标签 {{ $tag->name }} ：{{ $tag->description }}
        </div>
      @endif
      @if (isset($search) && ($search != ''))
        <div class="alert alert-info" role="alert">
          关键词 {{ $search }} ：{{ $search }}相关文章
        </div>
      @endif
      <div class="card">

        @if(!isset($tag))
          <div class="card-header bg-transparent">
            <ul class="nav nav-pills">
              <li class="nav-item"><a class="nav-link {{ active_class(!if_query('order','recent')) }}" href="{{ Request::url() }}?order=default">最后回复</a></li>
              <li class="nav-item"><a class="nav-link {{ active_class(if_query('order','recent')) }}" href="{{ Request::url() }}?order=recent">最新发布</a></li>
            </ul>
          </div>
        @endif
        <div class="card-body">
          {{-- 话题列表 --}}
          @include('topics._topic_list', ['topics' => $topics])
          {{-- 分页 --}}
          <div class="mt-5">
            {!! $topics->appends(Request::except('page'))->render() !!}
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-3 col-md-3 sidebar">
      @include('topics._sidebar')
    </div>
  </div>

@endsection
