<?php 
class Response {
/**
 * Create a new response factory instance.
 *
 * @param  \Illuminate\Contracts\View\Factory  $view
 * @param  \Illuminate\Routing\Redirector  $redirector
 * @return void
 */
public function __construct (Illuminate\Contracts\View\Factory $view ,Illuminate\Routing\Redirector $redirector )  
{
 	 return (new Illuminate\Routing\ResponseFactory)->__construct($view,$redirector);
}
/**
 * Create a new response instance.
 *
 * @param  string  $content
 * @param  int  $status
 * @param  array  $headers
 * @return \Illuminate\Http\Response
 */
static public function make ( $content ='', $status =200,array $headers =array ())  
{
 	 return (new Illuminate\Routing\ResponseFactory)->make($content,$status,$headers);
}
/**
 * Create a new "no content" response.
 *
 * @param  int  $status
 * @param  array  $headers
 * @return \Illuminate\Http\Response
 */
static public function noContent ( $status =204,array $headers =array ())  
{
 	 return (new Illuminate\Routing\ResponseFactory)->noContent($status,$headers);
}
/**
 * Create a new response for a given view.
 *
 * @param  string  $view
 * @param  array  $data
 * @param  int  $status
 * @param  array  $headers
 * @return \Illuminate\Http\Response
 */
static public function view ( $view , $data =array (), $status =200,array $headers =array ())  
{
 	 return (new Illuminate\Routing\ResponseFactory)->view($view,$data,$status,$headers);
}
/**
 * Create a new JSON response instance.
 *
 * @param  mixed  $data
 * @param  int  $status
 * @param  array  $headers
 * @param  int  $options
 * @return \Illuminate\Http\JsonResponse
 */
static public function json ( $data =array (), $status =200,array $headers =array (), $options =0)  
{
 	 return (new Illuminate\Routing\ResponseFactory)->json($data,$status,$headers,$options);
}
/**
 * Create a new JSONP response instance.
 *
 * @param  string  $callback
 * @param  mixed  $data
 * @param  int  $status
 * @param  array  $headers
 * @param  int  $options
 * @return \Illuminate\Http\JsonResponse
 */
static public function jsonp ( $callback , $data =array (), $status =200,array $headers =array (), $options =0)  
{
 	 return (new Illuminate\Routing\ResponseFactory)->jsonp($callback,$data,$status,$headers,$options);
}
/**
 * Create a new streamed response instance.
 *
 * @param  \Closure  $callback
 * @param  int  $status
 * @param  array  $headers
 * @return \Symfony\Component\HttpFoundation\StreamedResponse
 */
static public function stream ( $callback , $status =200,array $headers =array ())  
{
 	 return (new Illuminate\Routing\ResponseFactory)->stream($callback,$status,$headers);
}
/**
 * Create a new streamed response instance as a file download.
 *
 * @param  \Closure  $callback
 * @param  string|null  $name
 * @param  array  $headers
 * @param  string|null  $disposition
 * @return \Symfony\Component\HttpFoundation\StreamedResponse
 */
static public function streamDownload ( $callback , $name =NULL,array $headers =array (), $disposition ='attachment')  
{
 	 return (new Illuminate\Routing\ResponseFactory)->streamDownload($callback,$name,$headers,$disposition);
}
/**
 * Create a new file download response.
 *
 * @param  \SplFileInfo|string  $file
 * @param  string|null  $name
 * @param  array  $headers
 * @param  string|null  $disposition
 * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
 */
static public function download ( $file , $name =NULL,array $headers =array (), $disposition ='attachment')  
{
 	 return (new Illuminate\Routing\ResponseFactory)->download($file,$name,$headers,$disposition);
}
/**
 * Return the raw contents of a binary file.
 *
 * @param  \SplFileInfo|string  $file
 * @param  array  $headers
 * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
 */
static public function file ( $file ,array $headers =array ())  
{
 	 return (new Illuminate\Routing\ResponseFactory)->file($file,$headers);
}
/**
 * Create a new redirect response to the given path.
 *
 * @param  string  $path
 * @param  int  $status
 * @param  array  $headers
 * @param  bool|null  $secure
 * @return \Illuminate\Http\RedirectResponse
 */
static public function redirectTo ( $path , $status =302, $headers =array (), $secure =NULL)  
{
 	 return (new Illuminate\Routing\ResponseFactory)->redirectTo($path,$status,$headers,$secure);
}
/**
 * Create a new redirect response to a named route.
 *
 * @param  string  $route
 * @param  array  $parameters
 * @param  int  $status
 * @param  array  $headers
 * @return \Illuminate\Http\RedirectResponse
 */
static public function redirectToRoute ( $route , $parameters =array (), $status =302, $headers =array ())  
{
 	 return (new Illuminate\Routing\ResponseFactory)->redirectToRoute($route,$parameters,$status,$headers);
}
/**
 * Create a new redirect response to a controller action.
 *
 * @param  string  $action
 * @param  array  $parameters
 * @param  int  $status
 * @param  array  $headers
 * @return \Illuminate\Http\RedirectResponse
 */
static public function redirectToAction ( $action , $parameters =array (), $status =302, $headers =array ())  
{
 	 return (new Illuminate\Routing\ResponseFactory)->redirectToAction($action,$parameters,$status,$headers);
}
/**
 * Create a new redirect response, while putting the current URL in the session.
 *
 * @param  string  $path
 * @param  int  $status
 * @param  array  $headers
 * @param  bool|null  $secure
 * @return \Illuminate\Http\RedirectResponse
 */
static public function redirectGuest ( $path , $status =302, $headers =array (), $secure =NULL)  
{
 	 return (new Illuminate\Routing\ResponseFactory)->redirectGuest($path,$status,$headers,$secure);
}
/**
 * Create a new redirect response to the previously intended location.
 *
 * @param  string  $default
 * @param  int  $status
 * @param  array  $headers
 * @param  bool|null  $secure
 * @return \Illuminate\Http\RedirectResponse
 */
static public function redirectToIntended ( $default ='/', $status =302, $headers =array (), $secure =NULL)  
{
 	 return (new Illuminate\Routing\ResponseFactory)->redirectToIntended($default,$status,$headers,$secure);
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
 	 return (new Illuminate\Routing\ResponseFactory)->macro($name,$macro);
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
 	 return (new Illuminate\Routing\ResponseFactory)->mixin($mixin,$replace);
}
/**
 * Checks if macro is registered.
 *
 * @param  string  $name
 * @return bool
 */
static public function hasMacro ( $name )  
{
 	 return (new Illuminate\Routing\ResponseFactory)->hasMacro($name);
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
 	 return (new Illuminate\Routing\ResponseFactory)->__callStatic($method,$parameters);
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
 	 return (new Illuminate\Routing\ResponseFactory)->__call($method,$parameters);
}

}
