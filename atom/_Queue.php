<?php 
class Queue {
/**
 * Get the size of the queue.
 *
 * @param  string  $queue
 * @return int
 */
static public function size ( $queue =NULL)  
{
 	 return (new Illuminate\Queue\SyncQueue)->size($queue);
}
/**
 * Push a new job onto the queue.
 *
 * @param  string  $job
 * @param  mixed   $data
 * @param  string  $queue
 * @return mixed
 *
 * @throws \Exception|\Throwable
 */
static public function push ( $job , $data ='', $queue =NULL)  
{
 	 return (new Illuminate\Queue\SyncQueue)->push($job,$data,$queue);
}
/**
 * Push a raw payload onto the queue.
 *
 * @param  string  $payload
 * @param  string  $queue
 * @param  array   $options
 * @return mixed
 */
static public function pushRaw ( $payload , $queue =NULL,array $options =array ())  
{
 	 return (new Illuminate\Queue\SyncQueue)->pushRaw($payload,$queue,$options);
}
/**
 * Push a new job onto the queue after a delay.
 *
 * @param  \DateTimeInterface|\DateInterval|int  $delay
 * @param  string  $job
 * @param  mixed   $data
 * @param  string  $queue
 * @return mixed
 */
static public function later ( $delay , $job , $data ='', $queue =NULL)  
{
 	 return (new Illuminate\Queue\SyncQueue)->later($delay,$job,$data,$queue);
}
/**
 * Pop the next job off of the queue.
 *
 * @param  string  $queue
 * @return \Illuminate\Contracts\Queue\Job|null
 */
static public function pop ( $queue =NULL)  
{
 	 return (new Illuminate\Queue\SyncQueue)->pop($queue);
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
 	 return (new Illuminate\Queue\SyncQueue)->pushOn($queue,$job,$data);
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
 	 return (new Illuminate\Queue\SyncQueue)->laterOn($queue,$delay,$job,$data);
}
/**
 * Push an array of jobs onto the queue.
 *
 * @param  array   $jobs
 * @param  mixed   $data
 * @param  string  $queue
 * @return void
 */
static public function bulk ( $jobs , $data ='', $queue =NULL)  
{
 	 return (new Illuminate\Queue\SyncQueue)->bulk($jobs,$data,$queue);
}
/**
 * Get the expiration timestamp for an object-based queue handler.
 *
 * @param  mixed  $job
 * @return mixed
 */
static public function getJobExpiration ( $job )  
{
 	 return (new Illuminate\Queue\SyncQueue)->getJobExpiration($job);
}
/**
 * Register a callback to be executed when creating job payloads.
 *
 * @param  callable  $callback
 * @return void
 */
static public function createPayloadUsing ( $callback )  
{
 	 return (new Illuminate\Queue\SyncQueue)->createPayloadUsing($callback);
}
/**
 * Get the connection name for the queue.
 *
 * @return string
 */
static public function getConnectionName ()  
{
 	 return (new Illuminate\Queue\SyncQueue)->getConnectionName();
}
/**
 * Set the connection name for the queue.
 *
 * @param  string  $name
 * @return static|$this
 */
static public function setConnectionName ( $name )  
{
 	 return (new Illuminate\Queue\SyncQueue)->setConnectionName($name);
}
/**
 * Set the IoC container instance.
 *
 * @param  \Illuminate\Container\Container  $container
 * @return void
 */
static public function setContainer (Illuminate\Container\Container $container )  
{
 	 return (new Illuminate\Queue\SyncQueue)->setContainer($container);
}

}
