<?php

use Illuminate\Database\Seeder;
use App\Models\Topic;
use App\Models\User;
use App\Models\Category;
class TopicsTableSeeder extends Seeder
{
    /**
     * @author zesai
     * @date 2020/7/16
     */
    public function run()
    {
        //用户 ID 数组
        $user_ids = User::all()->pluck('id')->toArray();
        //分类 ID 数组
        $category_ids = Category::all()->pluck('id')->toArray();
        //获取 Faker 实例
        $faker = app(Faker\Generator::class);

        /** @var Topic $topics */
        $topics = factory(Topic::class)->times(100)->make()->each(function ($topic, $index)
        use($faker,$user_ids,$category_ids){
            //从用户 ID 数组中随机取出一个并赋值
            $topic->user_id = $faker->randomElement($user_ids);
            //话题分类
            $topic->category_id = $faker->randomElement($category_ids);
        });

        Topic::insert($topics->toArray());
    }

}

