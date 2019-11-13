<?php

namespace App\Http\Controllers;

use App\Models\Tag;

class TagsController extends Controller
{
    public function show(Tag $tag)
    {
        $topics = $tag->topics()
            ->orderBy('created_at', 'desc')
            ->with(['category', 'tags'])
            ->paginate(10);

        // 传参变量话题和分类到模板中
        return view('topics.index', compact('topics','tag'));
    }
}
