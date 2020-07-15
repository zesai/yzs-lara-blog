<?php 
class Redirect {
/**
 * Create a new Redirector instance.
 *
 * @param  \Illuminate\Routing\UrlGenerator  $generator
 * @return void
 */
public function __construct (Illuminate\Routing\UrlGenerator $generator )  
{
 	 return (new Illuminate\Routing\Redirector)->__construct($generator);
}
/**
 * Create a new redirect response to the "home" route.
 *
 * @param  int  $status
 * @return \Illuminate\Http\RedirectResponse
 */
static public function home ( $status =302)  
{
 	 return (new Illuminate\Routing\Redirector)->home($status);
}
/**
 * Create a new redirect response to the previous location.
 *
 * @param  int    $status
 * @param  array  $headers
 * @param  mixed  $fallback
 * @return \Illuminate\Http\RedirectResponse
 */
static public function back ( $status =302, $headers =array (), $fallback =false)  
{
 	 return (new Illuminate\Routing\Redirector)->back($status,$headers,$fallback);
}
/**
 * Create a new redirect response to the current URI.
 *
 * @param  int    $status
 * @param  array  $headers
 * @return \Illuminate\Http\RedirectResponse
 */
static public function refresh ( $status =302, $headers =array ())  
{
 	 return (new Illuminate\Routing\Redirector)->refresh($status,$headers);
}
/**
 * Create a new redirect response, while putting the current URL in the session.
 *
 * @param  string  $path
 * @param  int     $status
 * @param  array   $headers
 * @param  bool    $secure
 * @return \Illuminate\Http\RedirectResponse
 */
static public function guest ( $path , $status =302, $headers =array (), $secure =NULL)  
{
 	 return (new Illuminate\Routing\Redirector)->guest($path,$status,$headers,$secure);
}
/**
 * Create a new redirect response to the previously intended location.
 *
 * @param  string  $default
 * @param  int     $status
 * @param  array   $headers
 * @param  bool    $secure
 * @return \Illuminate\Http\RedirectResponse
 */
static public function intended ( $default ='/', $status =302, $headers =array (), $secure =NULL)  
{
 	 return (new Illuminate\Routing\Redirector)->intended($default,$status,$headers,$secure);
}
/**
 * Set the intended url.
 *
 * @param  string  $url
 * @return void
 */
static public function setIntendedUrl ( $url )  
{
 	 return (new Illuminate\Routing\Redirector)->setIntendedUrl($url);
}
/**
 * Create a new redirect response to the given path.
 *
 * @param  string  $path
 * @param  int     $status
 * @param  array   $headers
 * @param  bool    $secure
 * @return \Illuminate\Http\RedirectResponse
 */
static public function to ( $path , $status =302, $headers =array (), $secure =NULL)  
{
 	 return (new Illuminate\Routing\Redirector)->to($path,$status,$headers,$secure);
}
/**
 * Create a new redirect response to an external URL (no validation).
 *
 * @param  string  $path
 * @param  int     $status
 * @param  array   $headers
 * @return \Illuminate\Http\RedirectResponse
 */
static public function away ( $path , $status =302, $headers =array ())  
{
 	 return (new Illuminate\Routing\Redirector)->away($path,$status,$headers);
}
/**
 * Create a new redirect response to the given HTTPS path.
 *
 * @param  string  $path
 * @param  int     $status
 * @param  array   $headers
 * @return \Illuminate\Http\RedirectResponse
 */
static public function secure ( $path , $status =302, $headers =array ())  
{
 	 return (new Illuminate\Routing\Redirector)->secure($path,$status,$headers);
}
/**
 * Create a new redirect response to a named route.
 *
 * @param  string  $route
 * @param  mixed   $parameters
 * @param  int     $status
 * @param  array   $headers
 * @return \Illuminate\Http\RedirectResponse
 */
static public function route ( $route , $parameters =array (), $status =302, $headers =array ())  
{
 	 return (new Illuminate\Routing\Redirector)->route($route,$parameters,$status,$headers);
}
/**
 * Create a new redirect response to a controller action.
 *
 * @param  string|array  $action
 * @param  mixed   $parameters
 * @param  int     $status
 * @param  array   $headers
 * @return \Illuminate\Http\RedirectResponse
 */
static public function action ( $action , $parameters =array (), $status =302, $headers =array ())  
{
 	 return (new Illuminate\Routing\Redirector)->action($action,$parameters,$status,$headers);
}
/**
 * Get the URL generator instance.
 *
 * @return \Illuminate\Routing\UrlGenerator
 */
static public function getUrlGenerator ()  
{
 	 return (new Illuminate\Routing\Redirector)->getUrlGenerator();
}
/**
 * Set the active session store.
 *
 * @param  \Illuminate\Session\Store  $session
 * @return void
 */
static public function setSession (Illuminate\Session\Store $session )  
{
 	 return (new Illuminate\Routing\Redirector)->setSession($session);
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
 	 return (new Illuminate\Routing\Redirector)->macro($name,$macro);
}
/**
 * Mix another object into the class.
 *
 * @param  object  $mixin
 * @return void
 *
 * @throws \ReflectionException
 */
static public function mixin ( $mixin )  
{
 	 return (new Illuminate\Routing\Redirector)->mixin($mixin);
}
/**
 * Checks if macro is registered.
 *
 * @param  string  $name
 * @return bool
 */
static public function hasMacro ( $name )  
{
 	 return (new Illuminate\Routing\Redirector)->hasMacro($name);
}
/**
 * Dynamically handle calls to the class.
 *
 * @param  string  $method
 * @param  array   $parameters
 * @return mixed
 *
 * @throws \BadMethodCallException
 */
static public function __callStatic ( $method , $parameters )  
{
 	 return (new Illuminate\Routing\Redirector)->__callStatic($method,$parameters);
}
/**
 * Dynamically handle calls to the class.
 *
 * @param  string  $method
 * @param  array   $parameters
 * @return mixed
 *
 * @throws \BadMethodCallException
 */
static public function __call ( $method , $parameters )  
{
 	 return (new Illuminate\Routing\Redirector)->__call($method,$parameters);
}

}
