<?php 
class Queue {
/**
 * Get the number of queue jobs that are ready to process.
 *
 * @param  string|null  $queue
 * @return int
 */
static public function readyNow ( $queue =NULL)  
{
 	 return (new Laravel\Horizon\RedisQueue)->readyNow($queue);
}
/**
 * Push a new job onto the queue.
 *
 * @param  object|string  $job
 * @param  mixed  $data
 * @param  string|null  $queue
 * @return mixed
 */
static public function push ( $job , $data ='', $queue =NULL)  
{
 	 return (new Laravel\Horizon\RedisQueue)->push($job,$data,$queue);
}
/**
 * Push a raw payload onto the queue.
 *
 * @param  string  $payload
 * @param  string  $queue
 * @param  array  $options
 * @return mixed
 */
static public function pushRaw ( $payload , $queue =NULL,array $options =array ())  
{
 	 return (new Laravel\Horizon\RedisQueue)->pushRaw($payload,$queue,$options);
}
/**
 * Push a new job onto the queue after a delay.
 *
 * @param  \DateTimeInterface|\DateInterval|int  $delay
 * @param  string  $job
 * @param  mixed  $data
 * @param  string  $queue
 * @return mixed
 */
static public function later ( $delay , $job , $data ='', $queue =NULL)  
{
 	 return (new Laravel\Horizon\RedisQueue)->later($delay,$job,$data,$queue);
}
/**
 * Pop the next job off of the queue.
 *
 * @param  string  $queue
 * @return \Illuminate\Contracts\Queue\Job|null
 */
static public function pop ( $queue =NULL)  
{
 	 return (new Laravel\Horizon\RedisQueue)->pop($queue);
}
/**
 * Migrate the delayed jobs that are ready to the regular queue.
 *
 * @param  string  $from
 * @param  string  $to
 * @return void
 */
static public function migrateExpiredJobs ( $from , $to )  
{
 	 return (new Laravel\Horizon\RedisQueue)->migrateExpiredJobs($from,$to);
}
/**
 * Delete a reserved job from the queue.
 *
 * @param  string  $queue
 * @param  \Illuminate\Queue\Jobs\RedisJob  $job
 * @return void
 */
static public function deleteReserved ( $queue , $job )  
{
 	 return (new Laravel\Horizon\RedisQueue)->deleteReserved($queue,$job);
}
/**
 * Delete a reserved job from the reserved queue and release it.
 *
 * @param  string  $queue
 * @param  \Illuminate\Queue\Jobs\RedisJob  $job
 * @param  int  $delay
 * @return void
 */
static public function deleteAndRelease ( $queue , $job , $delay )  
{
 	 return (new Laravel\Horizon\RedisQueue)->deleteAndRelease($queue,$job,$delay);
}
/**
 * Create a new Redis queue instance.
 *
 * @param  \Illuminate\Contracts\Redis\Factory  $redis
 * @param  string  $default
 * @param  string|null  $connection
 * @param  int  $retryAfter
 * @param  int|null  $blockFor
 * @return void
 */
public function __construct (Illuminate\Contracts\Redis\Factory $redis , $default ='default', $connection =NULL, $retryAfter =60, $blockFor =NULL)  
{
 	 return (new Laravel\Horizon\RedisQueue)->__construct($redis,$default,$connection,$retryAfter,$blockFor);
}
/**
 * Get the size of the queue.
 *
 * @param  string|null  $queue
 * @return int
 */
static public function size ( $queue =NULL)  
{
 	 return (new Laravel\Horizon\RedisQueue)->size($queue);
}
/**
 * Get the queue or return the default.
 *
 * @param  string|null  $queue
 * @return the default.
 */
static public function getQueue ( $queue )  
{
 	 return (new Laravel\Horizon\RedisQueue)->getQueue($queue);
}
/**
 * Get the underlying Redis instance.
 *
 * @return \Illuminate\Contracts\Redis\Factory
 */
static public function getRedis ()  
{
 	 return (new Laravel\Horizon\RedisQueue)->getRedis();
}
/**
 * Push a new job onto the queue.
 *
 * @param  string  $queue
 * @param  string  $job
 * @param  mixed   $data
 * @return mixed
 */
static public function pushOn ( $queue , $job , $data ='')  
{
 	 return (new Laravel\Horizon\RedisQueue)->pushOn($queue,$job,$data);
}
/**
 * Push a new job onto the queue after a delay.
 *
 * @param  string  $queue
 * @param  \DateTimeInterface|\DateInterval|int  $delay
 * @param  string  $job
 * @param  mixed   $data
 * @return mixed
 */
static public function laterOn ( $queue , $delay , $job , $data ='')  
{
 	 return (new Laravel\Horizon\RedisQueue)->laterOn($queue,$delay,$job,$data);
}
/**
 * Push an array of jobs onto the queue.
 *
 * @param  array   $jobs
 * @param  mixed   $data
 * @param  string|null  $queue
 * @return void
 */
static public function bulk ( $jobs , $data ='', $queue =NULL)  
{
 	 return (new Laravel\Horizon\RedisQueue)->bulk($jobs,$data,$queue);
}
/**
 * Get the retry delay for an object-based queue handler.
 *
 * @param  mixed  $job
 * @return mixed
 */
static public function getJobRetryDelay ( $job )  
{
 	 return (new Laravel\Horizon\RedisQueue)->getJobRetryDelay($job);
}
/**
 * Get the expiration timestamp for an object-based queue handler.
 *
 * @param  mixed  $job
 * @return mixed
 */
static public function getJobExpiration ( $job )  
{
 	 return (new Laravel\Horizon\RedisQueue)->getJobExpiration($job);
}
/**
 * Register a callback to be executed when creating job payloads.
 *
 * @param  callable  $callback
 * @return void
 */
static public function createPayloadUsing ( $callback )  
{
 	 return (new Laravel\Horizon\RedisQueue)->createPayloadUsing($callback);
}
/**
 * Get the connection name for the queue.
 *
 * @return string
 */
static public function getConnectionName ()  
{
 	 return (new Laravel\Horizon\RedisQueue)->getConnectionName();
}
/**
 * Set the connection name for the queue.
 *
 * @param  string  $name
 * @return static|$this
 */
static public function setConnectionName ( $name )  
{
 	 return (new Laravel\Horizon\RedisQueue)->setConnectionName($name);
}
/**
 * Set the IoC container instance.
 *
 * @param  \Illuminate\Container\Container  $container
 * @return void
 */
static public function setContainer (Illuminate\Container\Container $container )  
{
 	 return (new Laravel\Horizon\RedisQueue)->setContainer($container);
}

}
