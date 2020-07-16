<?php 
class Session {
/**
 * Get the session configuration.
 *
 * @return array
 */
static public function getSessionConfig ()  
{
 	 return (new Illuminate\Session\SessionManager)->getSessionConfig();
}
/**
 * Get the default session driver name.
 *
 * @return string
 */
static public function getDefaultDriver ()  
{
 	 return (new Illuminate\Session\SessionManager)->getDefaultDriver();
}
/**
 * Set the default session driver name.
 *
 * @param  string  $name
 * @return void
 */
static public function setDefaultDriver ( $name )  
{
 	 return (new Illuminate\Session\SessionManager)->setDefaultDriver($name);
}
/**
 * Create a new manager instance.
 *
 * @param  \Illuminate\Contracts\Container\Container  $container
 * @return void
 */
public function __construct (Illuminate\Contracts\Container\Container $container )  
{
 	 return (new Illuminate\Session\SessionManager)->__construct($container);
}
/**
 * Get a driver instance.
 *
 * @param  string  $driver
 * @return mixed
 *
 * @throws \InvalidArgumentException
 */
static public function driver ( $driver =NULL)  
{
 	 return (new Illuminate\Session\SessionManager)->driver($driver);
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
 	 return (new Illuminate\Session\SessionManager)->extend($driver,$callback);
}
/**
 * Get all of the created "drivers".
 *
 * @return array
 */
static public function getDrivers ()  
{
 	 return (new Illuminate\Session\SessionManager)->getDrivers();
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
 	 return (new Illuminate\Session\SessionManager)->__call($method,$parameters);
}

}
