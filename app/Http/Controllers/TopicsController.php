<?php

namespace App\Http\Controllers;

use App\Events\TopicViewEvent;
use App\Handlers\ImageUploadHandler;
use App\Markdown\Markdown;
use App\Models\Category;
use App\Models\Topic;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TopicRequest;
use Auth;
use Illuminate\View\View;

class TopicsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show', 'uploadImage']]);
    }

    /**
     * 话题首页
     * @param Request $request
     * @param Topic $topic
     * @return Factory|View
     */
	public function index(Request $request, Topic $topic)
	{
	    $search = '';
        $topics = $topic->with(['category', 'tags'])->withOrder($request->order);
        if ($request->has('q')) {
            $search = $request->get('q');
            $request->flush('q');
            $topics->where('title', 'like', "%{$search}%")
                ->orWhere('body', 'like', "%{$search}%");
        }

        $topics = $topics->paginate(20);

		return view('topics.index', compact('topics','search'));
	}

    /**
     * 显示文章
     * @param Request $request
     * @param Topic $topic
     * @param Markdown $markdown
     * @return Factory|View
     */
    public function show(Request $request, Topic $topic, Markdown $markdown)
    {
        if ( ! empty($topic->slug) && $topic->slug != $request->slug) {
            return redirect($topic->link(), 301);
        }

        // 获取上一篇
        $prev = Topic::select('id', 'title')
            ->orderBy('created_at', 'desc')
            ->where('id', '<', $topic->id)
            ->limit(1)
            ->first();
        // 获取下一篇
        $next = Topic::select('id', 'title')
            ->orderBy('created_at', 'asc')
            ->where('id', '>', $topic->id)
            ->limit(1)
            ->first();

        //监听浏览文章 增加浏览量
        event(new TopicViewEvent($topic, $request->ip()));

        $topic->body = $markdown->toHtml($topic->body);

        return view('topics.show', compact('topic','prev', 'next') );
    }

    /**
     * 显示话题创建页
     * @param Topic $topic
     * @return Factory|View
     */
	public function create(Topic $topic)
	{
	    $categories = Category::all();
		return view('topics.create_and_edit', compact('topic','categories'));
	}

    /**
     * 创建话题
     * @param TopicRequest $request
     * @param Topic $topic
     * @return RedirectResponse
     */
	public function store(TopicRequest $request, Topic $topic)
	{
        $topic->fill($request->all());
        $topic->user_id = Auth::id();
        $topic->save();
		return redirect()->to($topic->link())->with('message', '帖子创建成功');
	}

    /**
     * 修改话题页
     * @param Topic $topic
     * @return Factory|View
     * @throws AuthorizationException
     */
	public function edit(Topic $topic)
	{
        $this->authorize('update', $topic);
        $categories = Category::all();
		return view('topics.create_and_edit', compact('topic','categories'));
	}

    /**
     * 修改话题
     * @param TopicRequest $request
     * @param Topic $topic
     * @return RedirectResponse
     * @throws AuthorizationException
     */
	public function update(TopicRequest $request, Topic $topic)
	{
		$this->authorize('update', $topic);
		$topic->update($request->all());

		return redirect()->to($topic->link())->with('message', '更新成功');
	}

    /**
     * 删除话题
     * @param Topic $topic
     * @return RedirectResponse
     * @throws AuthorizationException
     */
	public function destroy(Topic $topic)
	{
		$this->authorize('destroy', $topic);
		$topic->delete();

		return redirect()->route('topics.index')->with('success', '删除成功');
	}

    /**
     * 编辑器上传文件
     * @param Request $request
     * @param ImageUploadHandler $uploader
     * @return array
     */
	public function uploadImage(Request $request, ImageUploadHandler $uploader)
    {
        //初始化返回数据,默认是失败的
        $data = [
            'success'   => false,
            'msg'       => '上传失败!',
            'file_path' => ''
        ];
        if ($file = $request->upload_file){
//            $result = $uploader->save($file, 'topics', \Auth::id(), 1024);
            $result = $uploader->save($file, 'topics', 1, 1024);
            if($result){
               $data['file_path']  = $result['path'];
               $data['msg']        = '上传成功!';
               $data['success']    = true;
            }
        }
        return $data;
    }
}
