<?php

namespace App\Observers;

use App\Models\Tag;
use Overtrue\Pinyin\Pinyin;
use Illuminate\Support\Str;

class TagObserver
{

    public function saving(Tag $tag)
    {
        $tag->slug = Str::slug(app(Pinyin::class)->permalink($tag->name));
    }

    /**
     * Handle the tag "deleted" event.
     *
     * @param Tag $tag
     * @return void
     */
    public function deleted(Tag $tag)
    {
        //
    }
}
