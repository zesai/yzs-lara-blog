@if (count($topics))
  <ul class="list-unstyled topic-ul-list">
    @foreach ($topics as $topic)
      <li class="media">
        {{--                <div class="mb-4" style="max-width: 540px;">--}}
        <div class="mb-4" style="width: 100%;">
          <div class="row pl-3 pr-3">
            <h5>
              <span class="badge badge-danger">
                  {{ $topic->category->name }}
              </span>
              <a href="{{ $topic->link() }}" title="{{ $topic->title }}">{{ $topic->title }}</a>
            </h5>
          </div>
          <div class="row no-gutters">
            <div class="col-md-4">
              <a href="{{ $topic->link() }}">
                <img class="media-object img-thumbnail mr-3" style="width:100%;height:178.33px;" src="{{ $topic->user->avatar }}" title="{{ $topic->user->name }}">
              </a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                  <p class="card-text">
                    {{ $topic->excerpt }}
                  </p>

                <p class="card-text">
                  <small class="media-body meta text-secondary">
                    <span class="divider"></span>
                    <a class="text-secondary" href="{{ route('users.show', [$topic->user_id]) }}" title="{{ $topic->user->name }}"><i class="far fa-user"></i> {{ $topic->user->name }}</a>
                    <span class="divider"> &nbsp; 发布于 &nbsp; </span>
                    <span>{{ $topic->updated_at->diffForHumans() }}</span>
                    <span class="divider"> &nbsp;&nbsp;/&nbsp;&nbsp; </span>
                    <span class="text-mute new-tooltip" data-toggle="tooltip" data-placement="bottom" title="阅读数"><i class="fa fa-eye" aria-hidden="true"></i> 609</span>
                    <span class="divider"> &nbsp;&nbsp;/&nbsp;&nbsp; </span>
                    <span class="text-mute new-tooltip" data-toggle="tooltip" data-placement="bottom" title="评论数: {{ $topic->reply_count }}"><i class="far fa-comment" aria-hidden="true"></i> {{ $topic->reply_count }}</span>
                  </small>
                </p>
              </div>
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
