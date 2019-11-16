<div class="card ">
    <div class="card-body text-center">
        吾生也有涯 而知也无涯
    </div>
</div>

@if (count($active_users))
  <div class="card mt-4">
    <div class="card-body active-users pt-2">
      <div class="text-center mt-1 mb-0 text-muted">活跃用户</div>
      <hr class="mt-2">
      @foreach ($active_users as $active_user)
        <a class="media mt-2" href="{{ route('users.show', $active_user->id) }}">
          <div class="media-left media-middle mr-2 ml-1">
            <img src="{{ $active_user->avatar }}" width="24px" height="24px" class="media-object">
          </div>
          <div class="media-body">
            <small class="media-heading text-secondary">{{ $active_user->name }}</small>
          </div>
        </a>
      @endforeach
    </div>
  </div>
@endif

@if (count($links))
  <div class="card mt-4 recommend-articles">
    <div class="card-title mt-3 mb-0 ml-3 text-muted">
      <h5><span>推荐文章</span></h5>
    </div>
    <div class="card-body pt-2">
      <div class="ui middle aligned animated list">
        @foreach ($links as $link)
          <a class="mt-1" href="{{ $link->link }}">
{{--            <div class="media-body">--}}
              <span class="">{{ $link->title }}</span>
{{--            </div>--}}
          </a>
        @endforeach
      </div>
    </div>
  </div>
@endif

@if(count($tags))
  <div class="card mt-4 tags">
    <div class="card-title mt-3 mb-0 ml-3 text-muted">
      <h5><span>标签云</span></h5>
    </div>
    <div class="card-body pt-2">
      <ul class="tag-all-name ">

        @foreach($tags as $tag)
        <li class="tag-name"><a class="tag-name-style-{{ rand(1,4) }} transition" href="{{ route('tags.show', $tag->id) }}">{{$tag->name}} ({{ $tag->topics_count }})</a></li>
        @endforeach
      </ul>
    </div>
  </div>
@endif

@if(count($replies))
<div class="card mt-4 sidebar-comments">
    <div class="card-title mt-3 mb-0 ml-3 text-muted">
        <h5><span style="border-bottom: 3px solid #f5593d">最新评论</span></h5>
    </div>
    <div class="card-body pt-2">
      @foreach($replies as $reply)
      <ul class="new-comment" @if($loop->first) style="border:none;"@endif>
        <img class="head-img bjy-lazyload" src="{{$reply->user->avatar}}" alt="{{$reply->user->name}}">
        <li class="nickname">
          {{$reply->user->name}}<span>{{ $reply->created_at->diffForHumans() }}</span>
        </li>
        <li class="topic-title">
          评论<a href="{{$reply->topic->link()}}" target="_blank">{{$reply->topic->title}}</a>
        </li>
        <li class="content">
          {{$reply->content}}
        </li>
      </ul>
      @endforeach
    </div>
</div>
@endif

