<?php

namespace App\Models;

use Cache;

class FriendLink extends Model
{
    protected $fillable = ['name', 'url', 'avatar', 'audit', 'description'];

    protected $cache_key = 'lara_friend_links';
    protected $cache_expire_in_minutes = 1440;

    public function getCacheKey()
    {
        return $this->cache_key;
    }

    public function getAllCached()
    {
        // 尝试从缓存中取出 cache_key 对应的数据。如果能取到，便直接返回数据。
        // 否则运行匿名函数中的代码来取出 friend_links 表中所有的数据，返回的同时做了缓存。
        return Cache::remember($this->cache_key, $this->cache_expire_in_minutes, function (){
            return $this->where('audit', '=', '1')->all();
        });
    }
}
