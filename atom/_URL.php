<?php 
class URL {
/**
 * Create a new URL Generator instance.
 *
 * @param  \Illuminate\Routing\RouteCollection  $routes
 * @param  \Illuminate\Http\Request  $request
 * @param  string  $assetRoot
 * @return void
 */
public function __construct (Illuminate\Routing\RouteCollection $routes ,Illuminate\Http\Request $request , $assetRoot =NULL)  
{
 	 return (new Illuminate\Routing\UrlGenerator)->__construct($routes,$request,$assetRoot);
}
/**
 * Get the full URL for the current request.
 *
 * @return string
 */
static public function full ()  
{
 	 return (new Illuminate\Routing\UrlGenerator)->full();
}
/**
 * Get the current URL for the request.
 *
 * @return string
 */
static public function current ()  
{
 	 return (new Illuminate\Routing\UrlGenerator)->current();
}
/**
 * Get the URL for the previous request.
 *
 * @param  mixed  $fallback
 * @return string
 */
static public function previous ( $fallback =false)  
{
 	 return (new Illuminate\Routing\UrlGenerator)->previous($fallback);
}
/**
 * Generate an absolute URL to the given path.
 *
 * @param  string  $path
 * @param  mixed  $extra
 * @param  bool|null  $secure
 * @return string
 */
static public function to ( $path , $extra =array (), $secure =NULL)  
{
 	 return (new Illuminate\Routing\UrlGenerator)->to($path,$extra,$secure);
}
/**
 * Generate a secure, absolute URL to the given path.
 *
 * @param  string  $path
 * @param  array   $parameters
 * @return string
 */
static public function secure ( $path , $parameters =array ())  
{
 	 return (new Illuminate\Routing\UrlGenerator)->secure($path,$parameters);
}
/**
 * Generate the URL to an application asset.
 *
 * @param  string  $path
 * @param  bool|null  $secure
 * @return string
 */
static public function asset ( $path , $secure =NULL)  
{
 	 return (new Illuminate\Routing\UrlGenerator)->asset($path,$secure);
}
/**
 * Generate the URL to a secure asset.
 *
 * @param  string  $path
 * @return string
 */
static public function secureAsset ( $path )  
{
 	 return (new Illuminate\Routing\UrlGenerator)->secureAsset($path);
}
/**
 * Generate the URL to an asset from a custom root domain such as CDN, etc.
 *
 * @param  string  $root
 * @param  string  $path
 * @param  bool|null  $secure
 * @return string
 */
static public function assetFrom ( $root , $path , $secure =NULL)  
{
 	 return (new Illuminate\Routing\UrlGenerator)->assetFrom($root,$path,$secure);
}
/**
 * Get the default scheme for a raw URL.
 *
 * @param  bool|null  $secure
 * @return string
 */
static public function formatScheme ( $secure =NULL)  
{
 	 return (new Illuminate\Routing\UrlGenerator)->formatScheme($secure);
}
/**
 * Create a signed route URL for a named route.
 *
 * @param  string  $name
 * @param  array  $parameters
 * @param  \DateTimeInterface|\DateInterval|int  $expiration
 * @param  bool  $absolute
 * @return string
 */
static public function signedRoute ( $name , $parameters =array (), $expiration =NULL, $absolute =true)  
{
 	 return (new Illuminate\Routing\UrlGenerator)->signedRoute($name,$parameters,$expiration,$absolute);
}
/**
 * Create a temporary signed route URL for a named route.
 *
 * @param  string  $name
 * @param  \DateTimeInterface|\DateInterval|int  $expiration
 * @param  array  $parameters
 * @param  bool  $absolute
 * @return string
 */
static public function temporarySignedRoute ( $name , $expiration , $parameters =array (), $absolute =true)  
{
 	 return (new Illuminate\Routing\UrlGenerator)->temporarySignedRoute($name,$expiration,$parameters,$absolute);
}
/**
 * Determine if the given request has a valid signature.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  bool  $absolute
 * @return bool
 */
static public function hasValidSignature (Illuminate\Http\Request $request , $absolute =true)  
{
 	 return (new Illuminate\Routing\UrlGenerator)->hasValidSignature($request,$absolute);
}
/**
 * Get the URL to a named route.
 *
 * @param  string  $name
 * @param  mixed   $parameters
 * @param  bool  $absolute
 * @return string
 *
 * @throws \InvalidArgumentException
 */
static public function route ( $name , $parameters =array (), $absolute =true)  
{
 	 return (new Illuminate\Routing\UrlGenerator)->route($name,$parameters,$absolute);
}
/**
 * Get the URL to a controller action.
 *
 * @param  string|array  $action
 * @param  mixed   $parameters
 * @param  bool    $absolute
 * @return string
 *
 * @throws \InvalidArgumentException
 */
static public function action ( $action , $parameters =array (), $absolute =true)  
{
 	 return (new Illuminate\Routing\UrlGenerator)->action($action,$parameters,$absolute);
}
/**
 * Format the array of URL parameters.
 *
 * @param  mixed|array  $parameters
 * @return array
 */
static public function formatParameters ( $parameters )  
{
 	 return (new Illuminate\Routing\UrlGenerator)->formatParameters($parameters);
}
/**
 * Get the base URL for the request.
 *
 * @param  string  $scheme
 * @param  string  $root
 * @return string
 */
static public function formatRoot ( $scheme , $root =NULL)  
{
 	 return (new Illuminate\Routing\UrlGenerator)->formatRoot($scheme,$root);
}
/**
 * Format the given URL segments into a single URL.
 *
 * @param  string  $root
 * @param  string  $path
 * @param  \Illuminate\Routing\Route|null  $route
 * @return string
 */
static public function format ( $root , $path , $route =NULL)  
{
 	 return (new Illuminate\Routing\UrlGenerator)->format($root,$path,$route);
}
/**
 * Determine if the given path is a valid URL.
 *
 * @param  string  $path
 * @return bool
 */
static public function isValidUrl ( $path )  
{
 	 return (new Illuminate\Routing\UrlGenerator)->isValidUrl($path);
}
/**
 * Set the default named parameters used by the URL generator.
 *
 * @param  array  $defaults
 * @return void
 */
static public function defaults (array $defaults )  
{
 	 return (new Illuminate\Routing\UrlGenerator)->defaults($defaults);
}
/**
 * Get the default named parameters used by the URL generator.
 *
 * @return array
 */
static public function getDefaultParameters ()  
{
 	 return (new Illuminate\Routing\UrlGenerator)->getDefaultParameters();
}
/**
 * Force the scheme for URLs.
 *
 * @param  string  $scheme
 * @return void
 */
static public function forceScheme ( $scheme )  
{
 	 return (new Illuminate\Routing\UrlGenerator)->forceScheme($scheme);
}
/**
 * Set the forced root URL.
 *
 * @param  string  $root
 * @return void
 */
static public function forceRootUrl ( $root )  
{
 	 return (new Illuminate\Routing\UrlGenerator)->forceRootUrl($root);
}
/**
 * Set a callback to be used to format the host of generated URLs.
 *
 * @param  \Closure  $callback
 * @return static|$this
 */
static public function formatHostUsing (Closure $callback )  
{
 	 return (new Illuminate\Routing\UrlGenerator)->formatHostUsing($callback);
}
/**
 * Set a callback to be used to format the path of generated URLs.
 *
 * @param  \Closure  $callback
 * @return static|$this
 */
static public function formatPathUsing (Closure $callback )  
{
 	 return (new Illuminate\Routing\UrlGenerator)->formatPathUsing($callback);
}
/**
 * Get the path formatter being used by the URL generator.
 *
 * @return \Closure
 */
static public function pathFormatter ()  
{
 	 return (new Illuminate\Routing\UrlGenerator)->pathFormatter();
}
/**
 * Get the request instance.
 *
 * @return \Illuminate\Http\Request
 */
static public function getRequest ()  
{
 	 return (new Illuminate\Routing\UrlGenerator)->getRequest();
}
/**
 * Set the current request instance.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return void
 */
static public function setRequest (Illuminate\Http\Request $request )  
{
 	 return (new Illuminate\Routing\UrlGenerator)->setRequest($request);
}
/**
 * Set the route collection.
 *
 * @param  \Illuminate\Routing\RouteCollection  $routes
 * @return static|$this
 */
static public function setRoutes (Illuminate\Routing\RouteCollection $routes )  
{
 	 return (new Illuminate\Routing\UrlGenerator)->setRoutes($routes);
}
/**
 * Set the session resolver for the generator.
 *
 * @param  callable  $sessionResolver
 * @return static|$this
 */
static public function setSessionResolver (callable $sessionResolver )  
{
 	 return (new Illuminate\Routing\UrlGenerator)->setSessionResolver($sessionResolver);
}
/**
 * Set the encryption key resolver.
 *
 * @param  callable  $keyResolver
 * @return static|$this
 */
static public function setKeyResolver (callable $keyResolver )  
{
 	 return (new Illuminate\Routing\UrlGenerator)->setKeyResolver($keyResolver);
}
/**
 * Set the root controller namespace.
 *
 * @param  string  $rootNamespace
 * @return static|$this
 */
static public function setRootControllerNamespace ( $rootNamespace )  
{
 	 return (new Illuminate\Routing\UrlGenerator)->setRootControllerNamespace($rootNamespace);
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
 	 return (new Illuminate\Routing\UrlGenerator)->macro($name,$macro);
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
 	 return (new Illuminate\Routing\UrlGenerator)->mixin($mixin);
}
/**
 * Checks if macro is registered.
 *
 * @param  string  $name
 * @return bool
 */
static public function hasMacro ( $name )  
{
 	 return (new Illuminate\Routing\UrlGenerator)->hasMacro($name);
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
 	 return (new Illuminate\Routing\UrlGenerator)->__callStatic($method,$parameters);
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
 	 return (new Illuminate\Routing\UrlGenerator)->__call($method,$parameters);
}

}
