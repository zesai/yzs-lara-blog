<?php 
class Redis {
/**
 * Create a new Redis manager instance.
 *
 * @param  \Illuminate\Contracts\Foundation\Application  $app
 * @param  string  $driver
 * @param  array  $config
 * @return void
 */
public function __construct ( $app , $driver ,array $config )  
{
 	 return (new Illuminate\Redis\RedisManager)->__construct($app,$driver,$config);
}
/**
 * Get a Redis connection by name.
 *
 * @param  string|null  $name
 * @return \Illuminate\Redis\Connections\Connection
 */
static public function connection ( $name =NULL)  
{
 	 return (new Illuminate\Redis\RedisManager)->connection($name);
}
/**
 * Resolve the given connection by name.
 *
 * @param  string|null  $name
 * @return \Illuminate\Redis\Connections\Connection
 *
 * @throws \InvalidArgumentException
 */
static public function resolve ( $name =NULL)  
{
 	 return (new Illuminate\Redis\RedisManager)->resolve($name);
}
/**
 * Return all of the created connections.
 *
 * @return array
 */
static public function connections ()  
{
 	 return (new Illuminate\Redis\RedisManager)->connections();
}
/**
 * Enable the firing of Redis command events.
 *
 * @return void
 */
static public function enableEvents ()  
{
 	 return (new Illuminate\Redis\RedisManager)->enableEvents();
}
/**
 * Disable the firing of Redis command events.
 *
 * @return void
 */
static public function disableEvents ()  
{
 	 return (new Illuminate\Redis\RedisManager)->disableEvents();
}
/**
 * Set the default driver.
 *
 * @param  string  $driver
 * @return void
 */
static public function setDriver ( $driver )  
{
 	 return (new Illuminate\Redis\RedisManager)->setDriver($driver);
}
/**
 * Register a custom driver creator Closure.
 *
 * @param  string  $driver
 * @param  \Closure  $callback
 * @return static|$this
 */
static public function extend ( $driver ,Closure $callback )  
{
 	 return (new Illuminate\Redis\RedisManager)->extend($driver,$callback);
}
/**
 * Pass methods onto the default Redis connection.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */
static public function __call ( $method , $parameters )  
{
 	 return (new Illuminate\Redis\RedisManager)->__call($method,$parameters);
}

}
