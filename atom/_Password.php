<?php 
class Password {
/**
 * Create a new PasswordBroker manager instance.
 *
 * @param  \Illuminate\Foundation\Application  $app
 * @return void
 */
public function __construct ( $app )  
{
 	 return (new Illuminate\Auth\Passwords\PasswordBrokerManager)->__construct($app);
}
/**
 * Attempt to get the broker from the local cache.
 *
 * @param  string|null  $name
 * @return \Illuminate\Contracts\Auth\PasswordBroker
 */
static public function broker ( $name =NULL)  
{
 	 return (new Illuminate\Auth\Passwords\PasswordBrokerManager)->broker($name);
}
/**
 * Get the default password broker name.
 *
 * @return string
 */
static public function getDefaultDriver ()  
{
 	 return (new Illuminate\Auth\Passwords\PasswordBrokerManager)->getDefaultDriver();
}
/**
 * Set the default password broker name.
 *
 * @param  string  $name
 * @return void
 */
static public function setDefaultDriver ( $name )  
{
 	 return (new Illuminate\Auth\Passwords\PasswordBrokerManager)->setDefaultDriver($name);
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
 	 return (new Illuminate\Auth\Passwords\PasswordBrokerManager)->__call($method,$parameters);
}

}
