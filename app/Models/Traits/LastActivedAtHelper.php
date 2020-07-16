<?php

namespace App\Models\Traits;

use App\Models\User;
use Redis;
use Carbon\Carbon;

trait LastActivedAtHelper
{
    //缓存相关
    protected $hash_prefix = 'larabbs_last_actived_at_';
    protected $field_prefix = 'user_';
    protected $redis;

    public function __construct()
    {
        $this->redis = app('redis');
    }

    /**
     * 记录最后活跃时间到 redis
     * @author zesai
     * @date 2020/7/16
     */
    public function recordLastActivedAt()
    {
        // Redis 哈希表的命名，如：larabbs_last_actived_at_2019_09_11
        $hash = $this->getHashFromDateString(Carbon::now()->toDateString());

        // 字段名称，如：user_1
        $field = $this->getHashField();

        // 当前时间，如：2019_09_11 14:26:00
        $now = Carbon::now()->toDateTimeString();

        // 将数据写入 Redis，字段已存在会被更新
        $this->redis->hset($hash, $field, $now);

    }

    /**
     * 同步缓存中到数据到数据库
     * @author zesai
     * @date 2020/7/16
     */
    public function syncUserActivedAt()
    {
        // Redis 哈希表的命名，如：larabbs_last_actived_at_2019_09_11
        $hash = $this->getHashFromDateString(Carbon::yesterday()->toDateString());

        //从 Redis 中获取所有哈希表里的数据
        $dates = $this->redis->hgetall($hash);

        // 遍历，并同步到数据库中
        foreach ($dates as $user_id => $actived_at) {
            // 将 user_1 转换为 1
            $user_id = str_replace($this->field_prefix, '', $user_id);

            /**
             * 只有当前用户存在时才更新到数据库
             * @var User $user
             */
            if ($user = $this->find($user_id)) {
                $user->last_actived_at = $actived_at;
                $user->save();
            }
        }

        // 以数据库为中心到存储，既已同步，即可删除
        $this->redis->del($hash);
    }

    /**
     * @param $value
     * @return Carbon
     * @throws \Exception
     * @author zesai
     * @date 2020/7/16
     */
    public function getLastActivedAtAttribute($value)
    {
        //获取今日对应到哈希表名称
        $hash = $this->getHashFromDateString(Carbon::now()->toDateString());

        // 字段名称，如：user_1
        $field = $this->getHashField();

        // 三元运算符，优先选择 Redis 的数据，否则使用数据库中
        $datetime = $this->redis->hget($hash, $field) ? : $value;

        // 如果存在的话，返回时间对应的 Carbon 实体
        if ($datetime) {
            return new Carbon($datetime);
        } else {
            //否则使用用户注册时间
            return $this->created_at;
        }
    }

    /**
     * @param $date
     * @return string
     * @author zesai
     * @date 2020/7/16
     */
    public function getHashFromDateString($date)
    {
        // Redis 哈希表的命名，如：larabbs_last_actived_at_2017-10-21
        return $this->hash_prefix . $date;
    }

    /**
     * @return string
     * @author zesai
     * @date 2020/7/16
     */
    public function getHashField()
    {
        // 字段名称，如：user_1
        return $this->field_prefix . $this->id;
    }
}
