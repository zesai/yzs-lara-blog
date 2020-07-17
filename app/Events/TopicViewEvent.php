<?php

namespace App\Events;

use App\Models\Topic;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class TopicViewEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $ip;
    public $topic;

    /**
     * Create a new event instance.
     *
     * @param Topic $topic
     * @param $ip
     */
    public function __construct(Topic $topic, $ip)
    {
        $this->topic = $topic;
        $this->ip = $ip;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
