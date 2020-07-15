<?php 
class Cache {
/**
 * Create a new Cache manager instance.
 *
 * @param  \Illuminate\Foundation\Application  $app
 * @return void
 */
public function __construct ( $app )  
{
 	 return (new Illuminate\Cache\CacheManager)->__construct($app);
}
/**
 * Get a cache store instance by name, wrapped in a repository.
 *
 * @param  string|null  $name
 * @return \Illuminate\Contracts\Cache\Repository
 */
static public function store ( $name =NULL)  
{
 	 return (new Illuminate\Cache\CacheManager)->store($name);
}
/**
 * Get a cache driver instance.
 *
 * @param  string|null  $driver
 * @return \Illuminate\Contracts\Cache\Repository
 */
static public function driver ( $driver =NULL)  
{
 	 return (new Illuminate\Cache\CacheManager)->driver($driver);
}
/**
 * Create a new cache repository with the given implementation.
 *
 * @param  \Illuminate\Contracts\Cache\Store  $store
 * @return \Illuminate\Cache\Repository
 */
static public function repository (Illuminate\Contracts\Cache\Store $store )  
{
 	 return (new Illuminate\Cache\CacheManager)->repository($store);
}
/**
 * Get the default cache driver name.
 *
 * @return string
 */
static public function getDefaultDriver ()  
{
 	 return (new Illuminate\Cache\CacheManager)->getDefaultDriver();
}
/**
 * Set the default cache driver name.
 *
 * @param  string  $name
 * @return void
 */
static public function setDefaultDriver ( $name )  
{
 	 return (new Illuminate\Cache\CacheManager)->setDefaultDriver($name);
}
/**
 * Unset the given driver instances.
 *
 * @param  array|string|null  $name
 * @return static|$this
 */
static public function forgetDriver ( $name =NULL)  
{
 	 return (new Illuminate\Cache\CacheManager)->forgetDriver($name);
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
 	 return (new Illuminate\Cache\CacheManager)->extend($driver,$callback);
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
 	 return (new Illuminate\Cache\CacheManager)->__call($method,$parameters);
}

}
