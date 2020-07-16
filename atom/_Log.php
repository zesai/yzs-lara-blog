<?php 
class Log {
/**
 * Create a new Log manager instance.
 *
 * @param  \Illuminate\Contracts\Foundation\Application  $app
 * @return void
 */
public function __construct ( $app )  
{
 	 return (new Illuminate\Log\LogManager)->__construct($app);
}
/**
 * Create a new, on-demand aggregate logger instance.
 *
 * @param  array  $channels
 * @param  string|null  $channel
 * @return \Psr\Log\LoggerInterface
 */
static public function stack (array $channels , $channel =NULL)  
{
 	 return (new Illuminate\Log\LogManager)->stack($channels,$channel);
}
/**
 * Get a log channel instance.
 *
 * @param  string|null  $channel
 * @return mixed
 */
static public function channel ( $channel =NULL)  
{
 	 return (new Illuminate\Log\LogManager)->channel($channel);
}
/**
 * Get a log driver instance.
 *
 * @param  string|null  $driver
 * @return mixed
 */
static public function driver ( $driver =NULL)  
{
 	 return (new Illuminate\Log\LogManager)->driver($driver);
}
/**
 * Get the default log driver name.
 *
 * @return string
 */
static public function getDefaultDriver ()  
{
 	 return (new Illuminate\Log\LogManager)->getDefaultDriver();
}
/**
 * Set the default log driver name.
 *
 * @param  string  $name
 * @return void
 */
static public function setDefaultDriver ( $name )  
{
 	 return (new Illuminate\Log\LogManager)->setDefaultDriver($name);
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
 	 return (new Illuminate\Log\LogManager)->extend($driver,$callback);
}
/**
 * System is unusable.
 *
 * @param  string  $message
 * @param  array  $context
 *
 * @return void
 */
static public function emergency ( $message ,array $context =array ())  
{
 	 return (new Illuminate\Log\LogManager)->emergency($message,$context);
}
/**
 * Action must be taken immediately.
 *
 * Example: Entire website down, database unavailable, etc. This should
 * trigger the SMS alerts and wake you up.
 *
 * @param  string  $message
 * @param  array  $context
 *
 * @return void
 */
static public function alert ( $message ,array $context =array ())  
{
 	 return (new Illuminate\Log\LogManager)->alert($message,$context);
}
/**
 * Critical conditions.
 *
 * Example: Application component unavailable, unexpected exception.
 *
 * @param  string  $message
 * @param  array  $context
 *
 * @return void
 */
static public function critical ( $message ,array $context =array ())  
{
 	 return (new Illuminate\Log\LogManager)->critical($message,$context);
}
/**
 * Runtime errors that do not require immediate action but should typically
 * be logged and monitored.
 *
 * @param  string  $message
 * @param  array  $context
 *
 * @return void
 */
static public function error ( $message ,array $context =array ())  
{
 	 return (new Illuminate\Log\LogManager)->error($message,$context);
}
/**
 * Exceptional occurrences that are not errors.
 *
 * Example: Use of deprecated APIs, poor use of an API, undesirable things
 * that are not necessarily wrong.
 *
 * @param  string  $message
 * @param  array  $context
 *
 * @return void
 */
static public function warning ( $message ,array $context =array ())  
{
 	 return (new Illuminate\Log\LogManager)->warning($message,$context);
}
/**
 * Normal but significant events.
 *
 * @param  string  $message
 * @param  array  $context
 *
 * @return void
 */
static public function notice ( $message ,array $context =array ())  
{
 	 return (new Illuminate\Log\LogManager)->notice($message,$context);
}
/**
 * Interesting events.
 *
 * Example: User logs in, SQL logs.
 *
 * @param  string  $message
 * @param  array  $context
 *
 * @return void
 */
static public function info ( $message ,array $context =array ())  
{
 	 return (new Illuminate\Log\LogManager)->info($message,$context);
}
/**
 * Detailed debug information.
 *
 * @param  string  $message
 * @param  array  $context
 *
 * @return void
 */
static public function debug ( $message ,array $context =array ())  
{
 	 return (new Illuminate\Log\LogManager)->debug($message,$context);
}
/**
 * Logs with an arbitrary level.
 *
 * @param  mixed  $level
 * @param  string  $message
 * @param  array  $context
 *
 * @return void
 */
static public function log ( $level , $message ,array $context =array ())  
{
 	 return (new Illuminate\Log\LogManager)->log($level,$message,$context);
}
/**
 * Dynamically call the default driver instance.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */
static public function __call ( $method , $parameters )  
{
 	 return (new Illuminate\Log\LogManager)->__call($method,$parameters);
}

}
