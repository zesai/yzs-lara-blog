<?php 
class Config {
/**
 * Create a new configuration repository.
 *
 * @param  array  $items
 * @return void
 */
public function __construct (array $items =array ())  
{
 	 return (new Illuminate\Config\Repository)->__construct($items);
}
/**
 * Determine if the given configuration value exists.
 *
 * @param  string  $key
 * @return bool
 */
static public function has ( $key )  
{
 	 return (new Illuminate\Config\Repository)->has($key);
}
/**
 * Get the specified configuration value.
 *
 * @param  array|string  $key
 * @param  mixed   $default
 * @return mixed
 */
static public function get ( $key , $default =NULL)  
{
 	 return (new Illuminate\Config\Repository)->get($key,$default);
}
/**
 * Get many configuration values.
 *
 * @param  array  $keys
 * @return array
 */
static public function getMany ( $keys )  
{
 	 return (new Illuminate\Config\Repository)->getMany($keys);
}
/**
 * Set a given configuration value.
 *
 * @param  array|string  $key
 * @param  mixed   $value
 * @return void
 */
static public function set ( $key , $value =NULL)  
{
 	 return (new Illuminate\Config\Repository)->set($key,$value);
}
/**
 * Prepend a value onto an array configuration value.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @return void
 */
static public function prepend ( $key , $value )  
{
 	 return (new Illuminate\Config\Repository)->prepend($key,$value);
}
/**
 * Push a value onto an array configuration value.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @return void
 */
static public function push ( $key , $value )  
{
 	 return (new Illuminate\Config\Repository)->push($key,$value);
}
/**
 * Get all of the configuration items for the application.
 *
 * @return array
 */
static public function all ()  
{
 	 return (new Illuminate\Config\Repository)->all();
}
/**
 * Determine if the given configuration option exists.
 *
 * @param  string  $key
 * @return bool
 */
static public function offsetExists ( $key )  
{
 	 return (new Illuminate\Config\Repository)->offsetExists($key);
}
/**
 * Get a configuration option.
 *
 * @param  string  $key
 * @return mixed
 */
static public function offsetGet ( $key )  
{
 	 return (new Illuminate\Config\Repository)->offsetGet($key);
}
/**
 * Set a configuration option.
 *
 * @param  string  $key
 * @param  mixed  $value
 * @return void
 */
static public function offsetSet ( $key , $value )  
{
 	 return (new Illuminate\Config\Repository)->offsetSet($key,$value);
}
/**
 * Unset a configuration option.
 *
 * @param  string  $key
 * @return void
 */
static public function offsetUnset ( $key )  
{
 	 return (new Illuminate\Config\Repository)->offsetUnset($key);
}

}
