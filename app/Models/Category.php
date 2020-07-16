<?php

namespace App\Models;

/**
 * Class Category
 * @property int id
 * @property int parent_id
 * @property string name
 * @property string description
 * @property int is_directory
 * @property int level
 * @property string path
 * @property Category parent
 * @package App\Models
 * @author zesai
 * @date 2020/7/16
 */
class Category extends Model
{
    protected $fillable = [
      'name','description','is_directory','level','path'
    ];

    protected $casts = [
      'is_directory' => 'boolean',
    ];

    public function getNameArray()
    {
        return $this->pluck('name','id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class);
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    //定义一个访问器，获取所有祖先类目 ID 值
    public function getPathIdsAttribute()
    {
        // trim($str, '-') 将字符串两端的 - 符号去除
        // explode() 将字符串以 - 为分隔切割为数组
        // 最后 array_filter 将数组中的空值移除
        return array_filter(explode('-', trim($this->path, '-')));
    }

    // 获取所有祖先类目并按层级排序
    public function getAncestorsAttribute()
    {
        return Category::query()
            // 使用上面的访问器获取所有祖先类目 ID
            ->whereIn('id', $this->path_ids)
            // 按层级排序
            ->orderBy('level')
            ->get();
    }

    //获取以 - 为分隔的所有祖先类目名称以及当前类目的名称
    public function getFullNameAttribute()
    {
        return $this->ancestors // 获取所有祖先类目
            ->pluck('name') // 取出所有祖先类目的 name 字段作为一个数组
            ->push($this->name) // 将当前类目的 name 字段值加到数组的末尾
            ->implode('-'); // 用 - 符号将数组的值组装成一个字符串
    }
}
