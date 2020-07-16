<?php 
class Cookie {
/**
 * Create a new cookie instance.
 *
 * @param  string       $name
 * @param  string       $value
 * @param  int          $minutes
 * @param  string|null  $path
 * @param  string|null  $domain
 * @param  bool|null    $secure
 * @param  bool         $httpOnly
 * @param  bool         $raw
 * @param  string|null  $sameSite
 * @return \Symfony\Component\HttpFoundation\Cookie
 */
static public function make ( $name , $value , $minutes =0, $path =NULL, $domain =NULL, $secure =NULL, $httpOnly =true, $raw =false, $sameSite =NULL)  
{
 	 return (new Illuminate\Cookie\CookieJar)->make($name,$value,$minutes,$path,$domain,$secure,$httpOnly,$raw,$sameSite);
}
/**
 * Create a cookie that lasts "forever" (five years).
 *
 * @param  string       $name
 * @param  string       $value
 * @param  string|null  $path
 * @param  string|null  $domain
 * @param  bool|null    $secure
 * @param  bool         $httpOnly
 * @param  bool         $raw
 * @param  string|null  $sameSite
 * @return \Symfony\Component\HttpFoundation\Cookie
 */
static public function forever ( $name , $value , $path =NULL, $domain =NULL, $secure =NULL, $httpOnly =true, $raw =false, $sameSite =NULL)  
{
 	 return (new Illuminate\Cookie\CookieJar)->forever($name,$value,$path,$domain,$secure,$httpOnly,$raw,$sameSite);
}
/**
 * Expire the given cookie.
 *
 * @param  string  $name
 * @param  string|null  $path
 * @param  string|null  $domain
 * @return \Symfony\Component\HttpFoundation\Cookie
 */
static public function forget ( $name , $path =NULL, $domain =NULL)  
{
 	 return (new Illuminate\Cookie\CookieJar)->forget($name,$path,$domain);
}
/**
 * Determine if a cookie has been queued.
 *
 * @param  string  $key
 * @param  string|null  $path
 * @return bool
 */
static public function hasQueued ( $key , $path =NULL)  
{
 	 return (new Illuminate\Cookie\CookieJar)->hasQueued($key,$path);
}
/**
 * Get a queued cookie instance.
 *
 * @param  string  $key
 * @param  mixed   $default
 * @param  string  $path
 * @return \Symfony\Component\HttpFoundation\Cookie
 */
static public function queued ( $key , $default =NULL, $path =NULL)  
{
 	 return (new Illuminate\Cookie\CookieJar)->queued($key,$default,$path);
}
/**
 * Queue a cookie to send with the next response.
 *
 * @param  array  $parameters
 * @return void
 */
static public function queue ( $parameters )  
{
 	 return (new Illuminate\Cookie\CookieJar)->queue($parameters);
}
/**
 * Remove a cookie from the queue.
 *
 * @param  string  $name
 * @param  string|null $path
 * @return void
 */
static public function unqueue ( $name , $path =NULL)  
{
 	 return (new Illuminate\Cookie\CookieJar)->unqueue($name,$path);
}
/**
 * Set the default path and domain for the jar.
 *
 * @param  string  $path
 * @param  string  $domain
 * @param  bool    $secure
 * @param  string|null  $sameSite
 * @return static|$this
 */
static public function setDefaultPathAndDomain ( $path , $domain , $secure =false, $sameSite =NULL)  
{
 	 return (new Illuminate\Cookie\CookieJar)->setDefaultPathAndDomain($path,$domain,$secure,$sameSite);
}
/**
 * Get the cookies which have been queued for the next request.
 *
 * @return \Symfony\Component\HttpFoundation\Cookie[]
 */
static public function getQueuedCookies ()  
{
 	 return (new Illuminate\Cookie\CookieJar)->getQueuedCookies();
}
/**
 * Register a custom macro.
 *
 * @param  string $name
 * @param  object|callable  $macro
 *
 * @return void
 */
static public function macro ( $name , $macro )  
{
 	 return (new Illuminate\Cookie\CookieJar)->macro($name,$macro);
}
/**
 * Mix another object into the class.
 *
 * @param  object  $mixin
 * @param  bool  $replace
 * @return void
 *
 * @throws \ReflectionException
 */
static public function mixin ( $mixin , $replace =true)  
{
 	 return (new Illuminate\Cookie\CookieJar)->mixin($mixin,$replace);
}
/**
 * Checks if macro is registered.
 *
 * @param  string  $name
 * @return bool
 */
static public function hasMacro ( $name )  
{
 	 return (new Illuminate\Cookie\CookieJar)->hasMacro($name);
}
/**
 * Dynamically handle calls to the class.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 *
 * @throws \BadMethodCallException
 */
static public function __callStatic ( $method , $parameters )  
{
 	 return (new Illuminate\Cookie\CookieJar)->__callStatic($method,$parameters);
}
/**
 * Dynamically handle calls to the class.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 *
 * @throws \BadMethodCallException
 */
static public function __call ( $method , $parameters )  
{
 	 return (new Illuminate\Cookie\CookieJar)->__call($method,$parameters);
}

}
