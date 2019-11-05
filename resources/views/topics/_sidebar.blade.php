{{--<div class="card ">--}}
{{--    <div class="card-body">--}}
{{--        <a href="{{ route('topics.create') }}" class="btn btn-success btn-block" aria-label="Left Align">--}}
{{--            <i class="fas fa-pencil-alt mr-2"></i>  新建帖子--}}
{{--        </a>--}}
{{--    </div>--}}
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
      <h5><span style="border-bottom: 3px solid #f5593d">推荐文章</span></h5>
    </div>
    <div class="card-body pt-2">
      @foreach ($links as $link)
        <a class="media mt-1" href="{{ $link->link }}">
          <div class="media-body">
            <span class="media-heading text-muted">{{ $link->title }}</span>
          </div>
        </a>
      @endforeach
    </div>
  </div>
@endif

  <div class="card mt-4 tags">
    <div class="card-title mt-3 mb-0 ml-3 text-muted">
      <h5><span style="border-bottom: 3px solid #f5593d">标签云</span></h5>
    </div>
    <div class="card-body pt-2">
      <a href=""><span class="badge badge-danger badge-pill">测试 (1)</span></a>
      <a href=""><span class="badge badge-danger badge-pill">测试 (1)</span></a>
      <a href=""><span class="badge badge-danger badge-pill">测试 (1)</span></a>
      <a href=""><span class="badge badge-danger badge-pill">测试asd (1)</span></a>
      <a href=""><span class="badge badge-danger badge-pill">测试 (1)</span></a>
      <a href=""><span class="badge badge-danger badge-pill">测试 (1)</span></a>
    </div>
  </div>

  <div class="card mt-4 comments">
    <div class="card-title mt-3 mb-0 ml-3 text-muted">
      <h5><span style="border-bottom: 3px solid #f5593d">标签云</span></h5>
    </div>
    <div class="card-body pt-2">
      <a href=""><span class="badge badge-danger badge-pill">测试 (1)</span></a>
      <a href=""><span class="badge badge-danger badge-pill">测试 (1)</span></a>
      <a href=""><span class="badge badge-danger badge-pill">测试 (1)</span></a>
      <a href=""><span class="badge badge-danger badge-pill">测试asd (1)</span></a>
      <a href=""><span class="badge badge-danger badge-pill">测试 (1)</span></a>
      <a href=""><span class="badge badge-danger badge-pill">测试 (1)</span></a>
    </div>
  </div>


