<?php

namespace App\Listeners;

use App\Events\TopicViewEvent;
use App\Models\Topic;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Cache;
use Illuminate\Support\Facades\Redis;

class TopicViewEventListeners
{
    /**
     * 一篇文章最大访问数，超过后保存数据库
     */
    const topicViewLimit = 100;

    /**
     * 同一 ip 浏览同一篇文章的记录过期时间，
     */
    const ipExpireSec = 300;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  TopicViewEvent  $event
     * @return void
     */
    public function handle(TopicViewEvent $event)
    {
        $topic = $event->topic;
        $ip = $event->ip;
        $id = $topic->id;

        // 判断 ipExpireSec 过期时间，同一 ip 在有效期内多次访问，仅作为 1 次访问量
        if ($this->ipViewLimit($id, $ip)) {
            // 更新该篇文章浏览量
            $this->updateCacheViewCount($id);
        }
    }

    /**
     * 限制同一 ip 在短时间内重复访问，增加无效浏览次数
     * @param $id
     * @param $ip
     * @return bool
     */
    public function ipViewLimit($id, $ip) : bool
    {
        $ipTopicViewKey = 'topic:ip:limit:' . $id;

        // Redis 命令 SISMEMBER 检查集合类型 Set 中有没有该键, Set 集合类型中值都是唯一
        //如果集合中不存在这个键 则新建一个并设置过期时间
        if (! Redis::command('SISMEMBER', [$ipTopicViewKey, $ip])) {
            // SADD 集合类型指令，向 ipTopicViewKey 键中加一个 ip
            Redis::command('SADD', [$ipTopicViewKey, $ip]);
            //并给该键设置有效期
            Redis::command('EXPIRE', [$ipTopicViewKey, self::ipExpireSec]);
            return true;
        }
        return false;
    }

    /**
     * 达到要求更新数据库浏览量
     * @param $count
     */
    public function updateModelViewCount($topicId, $count)
    {
        $topic = Topic::find($topicId);
        $topic->view_count += $count;
        $topic->save();
    }

    /**
     * 不同用户访问，更新缓存中浏览次数
     * @param $id
     * @param $ip
     */
    public function updateCacheViewCount($topicId)
    {
        $cacheKey = 'topic:view:count';

        //这里以 redis 哈希类型存储键，和数组类似，$cacheKey 就类似数组名, 文章 id 就类似为 key
        if (Redis::command('HEXISTS', [$cacheKey, $topicId])) {

            // 哈希类型指令 HINCRBY ,就是给 $cacheKey[$id] 加上一个值,这里一次访问就是 1, 返回当前键内的值
            $count = Redis::command('HINCRBY', [$cacheKey, $topicId, 1]);

            // 当这个值超过设定当值后，更新数据库
            if ($count >= self::topicViewLimit) {
                $this->updateModelViewCount($topicId, $count);

                // 文章浏览量更新后,就把该篇文章的浏览量清空,重新开始计数
                Redis::command('HDEL', [$cacheKey, $topicId]);
            }

        } else {
            //哈希类型指令HSET,和数组类似,就像$cacheKey[$ip] = 1;
            Redis::command('HSET', [$cacheKey, $topicId, '1']);
        }
    }



















}
