<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Tag
 * @property int    $id          标签主键
 * @property string $name        标签名
 * @property string $slug        slug
 * @property string $keywords    标签关键词
 * @property string $description 标签描述 SEO
 *
 * @package App\Models
 *
 */
class Tag extends Model
{
    use SoftDeletes;
    protected $fillable = ['name', 'slug', 'keywords', 'description'];
    protected $dates = ['deleted_at'];

    public function link($params = [])
    {
        return route('tags.show',array_merge([$this->id, $this->sulg]), $params);
    }

    public function topics()
    {
        return $this->belongsToMany(Topic::class, 'topics_tags');
    }
}
