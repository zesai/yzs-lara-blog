<?php

namespace App\Models;

/**
 * Class Reply
 * @property int id
 * @property string content
 * @property Topic topic
 * @property User user
 * @package App\Models
 * @author zesai
 * @date 2020/7/16
 */
class Reply extends Model
{
    protected $fillable = ['content'];

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
