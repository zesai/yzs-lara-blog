<?php 
class Broadcast {
/**
 * Create a new manager instance.
 *
 * @param  \Illuminate\Contracts\Foundation\Application  $app
 * @return void
 */
public function __construct ( $app )  
{
 	 return (new Illuminate\Broadcasting\BroadcastManager)->__construct($app);
}
/**
 * Register the routes for handling broadcast authentication and sockets.
 *
 * @param  array|null  $attributes
 * @return void
 */
static public function routes (array $attributes =NULL)  
{
 	 return (new Illuminate\Broadcasting\BroadcastManager)->routes($attributes);
}
/**
 * Get the socket ID for the given request.
 *
 * @param  \Illuminate\Http\Request|null  $request
 * @return string|null
 */
static public function socket ( $request =NULL)  
{
 	 return (new Illuminate\Broadcasting\BroadcastManager)->socket($request);
}
/**
 * Begin broadcasting an event.
 *
 * @param  mixed|null  $event
 * @return \Illuminate\Broadcasting\PendingBroadcast|void
 */
static public function event ( $event =NULL)  
{
 	 return (new Illuminate\Broadcasting\BroadcastManager)->event($event);
}
/**
 * Queue the given event for broadcast.
 *
 * @param  mixed  $event
 * @return void
 */
static public function queue ( $event )  
{
 	 return (new Illuminate\Broadcasting\BroadcastManager)->queue($event);
}
/**
 * Get a driver instance.
 *
 * @param  string|null  $driver
 * @return mixed
 */
static public function connection ( $driver =NULL)  
{
 	 return (new Illuminate\Broadcasting\BroadcastManager)->connection($driver);
}
/**
 * Get a driver instance.
 *
 * @param  string|null  $name
 * @return mixed
 */
static public function driver ( $name =NULL)  
{
 	 return (new Illuminate\Broadcasting\BroadcastManager)->driver($name);
}
/**
 * Get the default driver name.
 *
 * @return string
 */
static public function getDefaultDriver ()  
{
 	 return (new Illuminate\Broadcasting\BroadcastManager)->getDefaultDriver();
}
/**
 * Set the default driver name.
 *
 * @param  string  $name
 * @return void
 */
static public function setDefaultDriver ( $name )  
{
 	 return (new Illuminate\Broadcasting\BroadcastManager)->setDefaultDriver($name);
}
/**
 * Register a custom driver creator Closure.
 *
 * @param  string    $driver
 * @param  \Closure  $callback
 * @return static|$this
 */
static public function extend ( $driver ,Closure $callback )  
{
 	 return (new Illuminate\Broadcasting\BroadcastManager)->extend($driver,$callback);
}
/**
 * Dynamically call the default driver instance.
 *
 * @param  string  $method
 * @param  array   $parameters
 * @return mixed
 */
static public function __call ( $method , $parameters )  
{
 	 return (new Illuminate\Broadcasting\BroadcastManager)->__call($method,$parameters);
}

}
