<div class="card ">
    <div class="card-body text-center">
{{--        <a href="{{ route('topics.create') }}" class="btn btn-success btn-block" aria-label="Left Align">--}}
{{--            <i class="fas fa-pencil-alt mr-2"></i>  新建帖子--}}
{{--        </a>--}}
        吾生也有涯 而知也无涯
    </div>
</div>

{{--<div class="card bg-dark text-white">--}}
{{--  <img class="card-img" src="/下载.png" alt="Card image">--}}
{{--  <div class="card-img-overlay">--}}
{{--    <h5 class="card-title" style="color:#555299">Card title</h5>--}}
{{--    <p class="card-text" style="color:#555299">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>--}}
{{--    <p class="card-text" style="color:#555299">Last updated 3 mins ago</p>--}}
{{--  </div>--}}
{{--</div>--}}

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

<div class="card mt-4 comments">
    <div class="card-title mt-3 mb-0 ml-3 text-muted">
      <h5><span style="border-bottom: 3px solid #f5593d">最新评论</span></h5>
    </div>
    <div class="card-body pt-2">
      <ul>
        <li>123</li>
        <li>123</li>
        <li>123</li>
      </ul>
    </div>
  </div>


