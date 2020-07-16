<?php

namespace App\Models;

class TopicTag extends Model
{
    /**
     * 文章批量插入标签
     * @param int $topic_id
     * @param array $tag_ids
     * @return bool
     */
    public function addTagIds(int $topic_id, array $tag_ids)
    {
        $data = array_map(function ($tag) use($topic_id) {
            return [
                'topic_id' => $topic_id,
                'tag_id'   => $tag
            ];
        },$tag_ids);

        return $this->insert($data);
    }
}
