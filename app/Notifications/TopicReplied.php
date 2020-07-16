<?php

namespace App\Notifications;

use App\Models\Reply;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class TopicReplied extends Notification implements ShouldQueue
{
    use Queueable;

    public $reply;

    /**
     * 注入回复实体，方便 toDatabase 方法中使用
     * @param Reply $reply
     */
    public function __construct(Reply $reply)
    {
        $this->reply = $reply;
    }

    /**
     * 开启数据库通知频道
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'mail'];
    }

    /**
     * 数据库消息通知
     * @param $notifiable
     * @return array
     */
    public function toDatabase($notifiable)
    {

        /** @var Topic $topic */
        $topic = $this->reply->topic;
        /** @var User $topic */
        $user = $this->reply->user;
        $link = $topic->link(['#reply' . $this->reply->id]);

        //存入数据库中 data 的数据
        return [
            'reply_id' => $this->reply->id,
            'reply_content' => $this->reply->content,
            'user_id' => $this->reply->user->id,
            'user_name' => $this->reply->user->name,
            'user_avatar' => $this->reply->user->avatar,
            'topic_link' => $link,
            'topic_id' => $topic->id,
            'topic_title' => $topic->title,
        ];
    }

    /**
     * 邮件消息通知
     * @param $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable)
    {
        $url = $this->reply->topic->link(['#reply' . $this->reply->id]);

        return (new MailMessage())
            ->line('你的话题有新回复！')
            ->action('查看回复', $url);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
