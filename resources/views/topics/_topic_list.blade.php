@if (count($topics))
  <ul class="list-unstyled topic-ul-list">
    @foreach ($topics as $topic)
      <li class="media">
        {{--                <div class="mb-4" style="max-width: 540px;">--}}
        <div class="mb-4" style="width: 100%;position: relative">
          <div class="row pl-3 pr-3">
            <h5 class="transition">
              <span class="badge title-badge">
                {{ $topic->category->name }}
              </span>
              <i class="fa fa-caret-right title-badge-icon" aria-hidden="true"></i>
              <a href="{{ $topic->link() }}" title="{{ $topic->title }}">{{ $topic->title }}</a>
            </h5>
          </div>
          <div class="row no-gutters">
            <div class="col-md-4">
              <a href="{{ $topic->link() }}">
                <img class="media-object img-thumbnail mr-3"
                     src="loader.gif"
                     style="width:100%;height:178.33px;"
                     data-src="{{ $topic->cover }}" title="{{ $topic->user->name }}">
              </a>
            </div>
            <div class="col-md-8">
              <div class="card-body" style="padding-top: 0">
                <p class="card-text">
                  {{ $topic->excerpt }}
                </p>
                <p class="card-text">
                  <small class="media-body meta">
                    <span>
                      <a class="" href="{{ route('users.show', [$topic->user_id]) }}" title="{{ $topic->user->name }}">
                        <img src="{{$topic->user->avatar}}" class="meta-user-img" style="" alt="">
                        {{ $topic->user->name }}
                      </a>
                      发布于 {{ $topic->updated_at->diffForHumans() }}
                    </span>
                    <span class="text-mute" title="阅读数: {{ $topic->view_count }}">
                      <a href="{{ $topic->link() }}">
                        阅读&nbsp; ( {{ $topic->view_count }} )
                      </a>
                    </span>
                    <span class="text-mute" title="评论数: {{ $topic->reply_count }}">
                      <a href="{{ $topic->link() }}#comment">
                        评论&nbsp; ( {{ $topic->reply_count }} )
                      </a>
                    </span>
                  </small>
                </p>
              </div>
              <a href="{{ $topic->link() }}" class="read-more transition" aria-label="继续阅读">
                继续阅读<i class="fa fa-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
        </div>
      </li>

      @if ( ! $loop->last)
        <hr>
      @endif

    @endforeach
  </ul>

@else
  <div class="empty-block">暂无数据 ~_~ </div>
@endif
