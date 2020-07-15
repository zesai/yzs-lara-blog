<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\ReplyRequest;

class RepliesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * @param ReplyRequest $request
     * @param Reply $reply
     * @return \Illuminate\Http\RedirectResponse
     * @author zesai
     * @date 2020/7/15
     */
	public function store(ReplyRequest $request, Reply $reply)
	{
		$reply->content = $request->get('content');
		$reply->user_id = \Auth::id();
		$reply->topic_id = $request->topic_id;
        $reply->save();
		return redirect()->to($reply->topic->link())->with('success', '评论创建成功！');
	}

    /**
     * @param Reply $reply
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Auth\Access\AuthorizationException
     * @throws \Exception
     * @author zesai
     * @date 2020/7/15
     */
	public function destroy(Reply $reply)
	{
		$this->authorize('destroy', $reply);
		$reply->delete();

		return redirect()->to($reply->topic->link())->with('success', '评论删除成功！');
	}
}