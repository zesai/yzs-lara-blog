<?php 
class Route {
public $middlewarePriority ;
public $verbs ;
/**
 * Create a new Router instance.
 *
 * @param  \Illuminate\Contracts\Events\Dispatcher  $events
 * @param  \Illuminate\Container\Container  $container
 * @return void
 */
public function __construct (Illuminate\Contracts\Events\Dispatcher $events ,Illuminate\Container\Container $container =NULL)  
{
 	 return (new Illuminate\Routing\Router)->__construct($events,$container);
}
/**
 * Register a new GET route with the router.
 *
 * @param  string  $uri
 * @param  \Closure|array|string|callable|null  $action
 * @return \Illuminate\Routing\Route
 */
static public function get ( $uri , $action =NULL)  
{
 	 return (new Illuminate\Routing\Router)->get($uri,$action);
}
/**
 * Register a new POST route with the router.
 *
 * @param  string  $uri
 * @param  \Closure|array|string|callable|null  $action
 * @return \Illuminate\Routing\Route
 */
static public function post ( $uri , $action =NULL)  
{
 	 return (new Illuminate\Routing\Router)->post($uri,$action);
}
/**
 * Register a new PUT route with the router.
 *
 * @param  string  $uri
 * @param  \Closure|array|string|callable|null  $action
 * @return \Illuminate\Routing\Route
 */
static public function put ( $uri , $action =NULL)  
{
 	 return (new Illuminate\Routing\Router)->put($uri,$action);
}
/**
 * Register a new PATCH route with the router.
 *
 * @param  string  $uri
 * @param  \Closure|array|string|callable|null  $action
 * @return \Illuminate\Routing\Route
 */
static public function patch ( $uri , $action =NULL)  
{
 	 return (new Illuminate\Routing\Router)->patch($uri,$action);
}
/**
 * Register a new DELETE route with the router.
 *
 * @param  string  $uri
 * @param  \Closure|array|string|callable|null  $action
 * @return \Illuminate\Routing\Route
 */
static public function delete ( $uri , $action =NULL)  
{
 	 return (new Illuminate\Routing\Router)->delete($uri,$action);
}
/**
 * Register a new OPTIONS route with the router.
 *
 * @param  string  $uri
 * @param  \Closure|array|string|callable|null  $action
 * @return \Illuminate\Routing\Route
 */
static public function options ( $uri , $action =NULL)  
{
 	 return (new Illuminate\Routing\Router)->options($uri,$action);
}
/**
 * Register a new route responding to all verbs.
 *
 * @param  string  $uri
 * @param  \Closure|array|string|callable|null  $action
 * @return \Illuminate\Routing\Route
 */
static public function any ( $uri , $action =NULL)  
{
 	 return (new Illuminate\Routing\Router)->any($uri,$action);
}
/**
 * Register a new Fallback route with the router.
 *
 * @param  \Closure|array|string|callable|null  $action
 * @return \Illuminate\Routing\Route
 */
static public function fallback ( $action )  
{
 	 return (new Illuminate\Routing\Router)->fallback($action);
}
/**
 * Create a redirect from one URI to another.
 *
 * @param  string  $uri
 * @param  string  $destination
 * @param  int  $status
 * @return \Illuminate\Routing\Route
 */
static public function redirect ( $uri , $destination , $status =302)  
{
 	 return (new Illuminate\Routing\Router)->redirect($uri,$destination,$status);
}
/**
 * Create a permanent redirect from one URI to another.
 *
 * @param  string  $uri
 * @param  string  $destination
 * @return \Illuminate\Routing\Route
 */
static public function permanentRedirect ( $uri , $destination )  
{
 	 return (new Illuminate\Routing\Router)->permanentRedirect($uri,$destination);
}
/**
 * Register a new route that returns a view.
 *
 * @param  string  $uri
 * @param  string  $view
 * @param  array  $data
 * @return \Illuminate\Routing\Route
 */
static public function view ( $uri , $view , $data =array ())  
{
 	 return (new Illuminate\Routing\Router)->view($uri,$view,$data);
}
/**
 * Register a new route with the given verbs.
 *
 * @param  array|string  $methods
 * @param  string  $uri
 * @param  \Closure|array|string|callable|null  $action
 * @return \Illuminate\Routing\Route
 */
static public function match ( $methods , $uri , $action =NULL)  
{
 	 return (new Illuminate\Routing\Router)->match($methods,$uri,$action);
}
/**
 * Register an array of resource controllers.
 *
 * @param  array  $resources
 * @param  array  $options
 * @return void
 */
static public function resources (array $resources ,array $options =array ())  
{
 	 return (new Illuminate\Routing\Router)->resources($resources,$options);
}
/**
 * Route a resource to a controller.
 *
 * @param  string  $name
 * @param  string  $controller
 * @param  array  $options
 * @return \Illuminate\Routing\PendingResourceRegistration
 */
static public function resource ( $name , $controller ,array $options =array ())  
{
 	 return (new Illuminate\Routing\Router)->resource($name,$controller,$options);
}
/**
 * Register an array of API resource controllers.
 *
 * @param  array  $resources
 * @param  array  $options
 * @return void
 */
static public function apiResources (array $resources ,array $options =array ())  
{
 	 return (new Illuminate\Routing\Router)->apiResources($resources,$options);
}
/**
 * Route an API resource to a controller.
 *
 * @param  string  $name
 * @param  string  $controller
 * @param  array  $options
 * @return \Illuminate\Routing\PendingResourceRegistration
 */
static public function apiResource ( $name , $controller ,array $options =array ())  
{
 	 return (new Illuminate\Routing\Router)->apiResource($name,$controller,$options);
}
/**
 * Create a route group with shared attributes.
 *
 * @param  array  $attributes
 * @param  \Closure|string  $routes
 * @return void
 */
static public function group (array $attributes , $routes )  
{
 	 return (new Illuminate\Routing\Router)->group($attributes,$routes);
}
/**
 * Merge the given array with the last group stack.
 *
 * @param  array  $new
 * @return array
 */
static public function mergeWithLastGroup ( $new )  
{
 	 return (new Illuminate\Routing\Router)->mergeWithLastGroup($new);
}
/**
 * Get the prefix from the last group on the stack.
 *
 * @return string
 */
static public function getLastGroupPrefix ()  
{
 	 return (new Illuminate\Routing\Router)->getLastGroupPrefix();
}
/**
 * Add a route to the underlying route collection.
 *
 * @param  array|string  $methods
 * @param  string  $uri
 * @param  \Closure|array|string|callable|null  $action
 * @return \Illuminate\Routing\Route
 */
static public function addRoute ( $methods , $uri , $action )  
{
 	 return (new Illuminate\Routing\Router)->addRoute($methods,$uri,$action);
}
/**
 * Return the response returned by the given route.
 *
 * @param  string  $name
 * @return mixed
 */
static public function respondWithRoute ( $name )  
{
 	 return (new Illuminate\Routing\Router)->respondWithRoute($name);
}
/**
 * Dispatch the request to the application.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
 */
static public function dispatch (Illuminate\Http\Request $request )  
{
 	 return (new Illuminate\Routing\Router)->dispatch($request);
}
/**
 * Dispatch the request to a route and return the response.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return the response.
 */
static public function dispatchToRoute (Illuminate\Http\Request $request )  
{
 	 return (new Illuminate\Routing\Router)->dispatchToRoute($request);
}
/**
 * Gather the middleware for the given route with resolved class names.
 *
 * @param  \Illuminate\Routing\Route  $route
 * @return array
 */
static public function gatherRouteMiddleware (Illuminate\Routing\Route $route )  
{
 	 return (new Illuminate\Routing\Router)->gatherRouteMiddleware($route);
}
/**
 * Create a response instance from the given value.
 *
 * @param  \Symfony\Component\HttpFoundation\Request  $request
 * @param  mixed  $response
 * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
 */
static public function prepareResponse ( $request , $response )  
{
 	 return (new Illuminate\Routing\Router)->prepareResponse($request,$response);
}
/**
 * Static version of prepareResponse.
 *
 * @param  \Symfony\Component\HttpFoundation\Request  $request
 * @param  mixed  $response
 * @return \Illuminate\Http\Response|\Illuminate\Http\JsonResponse
 */
static public function toResponse ( $request , $response )  
{
 	 return (new Illuminate\Routing\Router)->toResponse($request,$response);
}
/**
 * Substitute the route bindings onto the route.
 *
 * @param  \Illuminate\Routing\Route  $route
 * @return \Illuminate\Routing\Route
 */
static public function substituteBindings ( $route )  
{
 	 return (new Illuminate\Routing\Router)->substituteBindings($route);
}
/**
 * Substitute the implicit Eloquent model bindings for the route.
 *
 * @param  \Illuminate\Routing\Route  $route
 * @return void
 */
static public function substituteImplicitBindings ( $route )  
{
 	 return (new Illuminate\Routing\Router)->substituteImplicitBindings($route);
}
/**
 * Register a route matched event listener.
 *
 * @param  string|callable  $callback
 * @return void
 */
static public function matched ( $callback )  
{
 	 return (new Illuminate\Routing\Router)->matched($callback);
}
/**
 * Get all of the defined middleware short-hand names.
 *
 * @return array
 */
static public function getMiddleware ()  
{
 	 return (new Illuminate\Routing\Router)->getMiddleware();
}
/**
 * Register a short-hand name for a middleware.
 *
 * @param  string  $name
 * @param  string  $class
 * @return static|$this
 */
static public function aliasMiddleware ( $name , $class )  
{
 	 return (new Illuminate\Routing\Router)->aliasMiddleware($name,$class);
}
/**
 * Check if a middlewareGroup with the given name exists.
 *
 * @param  string  $name
 * @return bool
 */
static public function hasMiddlewareGroup ( $name )  
{
 	 return (new Illuminate\Routing\Router)->hasMiddlewareGroup($name);
}
/**
 * Get all of the defined middleware groups.
 *
 * @return array
 */
static public function getMiddlewareGroups ()  
{
 	 return (new Illuminate\Routing\Router)->getMiddlewareGroups();
}
/**
 * Register a group of middleware.
 *
 * @param  string  $name
 * @param  array  $middleware
 * @return static|$this
 */
static public function middlewareGroup ( $name ,array $middleware )  
{
 	 return (new Illuminate\Routing\Router)->middlewareGroup($name,$middleware);
}
/**
 * Add a middleware to the beginning of a middleware group.
 *
 * If the middleware is already in the group, it will not be added again.
 *
 * @param  string  $group
 * @param  string  $middleware
 * @return static|$this
 */
static public function prependMiddlewareToGroup ( $group , $middleware )  
{
 	 return (new Illuminate\Routing\Router)->prependMiddlewareToGroup($group,$middleware);
}
/**
 * Add a middleware to the end of a middleware group.
 *
 * If the middleware is already in the group, it will not be added again.
 *
 * @param  string  $group
 * @param  string  $middleware
 * @return static|$this
 */
static public function pushMiddlewareToGroup ( $group , $middleware )  
{
 	 return (new Illuminate\Routing\Router)->pushMiddlewareToGroup($group,$middleware);
}
/**
 * Add a new route parameter binder.
 *
 * @param  string  $key
 * @param  string|callable  $binder
 * @return void
 */
static public function bind ( $key , $binder )  
{
 	 return (new Illuminate\Routing\Router)->bind($key,$binder);
}
/**
 * Register a model binder for a wildcard.
 *
 * @param  string  $key
 * @param  string  $class
 * @param  \Closure|null  $callback
 * @return void
 *
 * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
 */
static public function model ( $key , $class ,Closure $callback =NULL)  
{
 	 return (new Illuminate\Routing\Router)->model($key,$class,$callback);
}
/**
 * Get the binding callback for a given binding.
 *
 * @param  string  $key
 * @return \Closure|null
 */
static public function getBindingCallback ( $key )  
{
 	 return (new Illuminate\Routing\Router)->getBindingCallback($key);
}
/**
 * Get the global "where" patterns.
 *
 * @return array
 */
static public function getPatterns ()  
{
 	 return (new Illuminate\Routing\Router)->getPatterns();
}
/**
 * Set a global where pattern on all routes.
 *
 * @param  string  $key
 * @param  string  $pattern
 * @return void
 */
static public function pattern ( $key , $pattern )  
{
 	 return (new Illuminate\Routing\Router)->pattern($key,$pattern);
}
/**
 * Set a group of global where patterns on all routes.
 *
 * @param  array  $patterns
 * @return void
 */
static public function patterns ( $patterns )  
{
 	 return (new Illuminate\Routing\Router)->patterns($patterns);
}
/**
 * Determine if the router currently has a group stack.
 *
 * @return bool
 */
static public function hasGroupStack ()  
{
 	 return (new Illuminate\Routing\Router)->hasGroupStack();
}
/**
 * Get the current group stack for the router.
 *
 * @return array
 */
static public function getGroupStack ()  
{
 	 return (new Illuminate\Routing\Router)->getGroupStack();
}
/**
 * Get a route parameter for the current route.
 *
 * @param  string  $key
 * @param  string  $default
 * @return mixed
 */
static public function input ( $key , $default =NULL)  
{
 	 return (new Illuminate\Routing\Router)->input($key,$default);
}
/**
 * Get the request currently being dispatched.
 *
 * @return \Illuminate\Http\Request
 */
static public function getCurrentRequest ()  
{
 	 return (new Illuminate\Routing\Router)->getCurrentRequest();
}
/**
 * Get the currently dispatched route instance.
 *
 * @return \Illuminate\Routing\Route
 */
static public function getCurrentRoute ()  
{
 	 return (new Illuminate\Routing\Router)->getCurrentRoute();
}
/**
 * Get the currently dispatched route instance.
 *
 * @return \Illuminate\Routing\Route|null
 */
static public function current ()  
{
 	 return (new Illuminate\Routing\Router)->current();
}
/**
 * Check if a route with the given name exists.
 *
 * @param  string  $name
 * @return bool
 */
static public function has ( $name )  
{
 	 func_get_args();
	 return (new Illuminate\Routing\Router)->has($name);
}
/**
 * Get the current route name.
 *
 * @return string|null
 */
static public function currentRouteName ()  
{
 	 return (new Illuminate\Routing\Router)->currentRouteName();
}
/**
 * Alias for the "currentRouteNamed" method.
 *
 * @param  mixed  ...$patterns
 * @return bool
 */
static public function is ( $patterns )  
{
 	 return (new Illuminate\Routing\Router)->is($patterns);
}
/**
 * Determine if the current route matches a pattern.
 *
 * @param  mixed  ...$patterns
 * @return bool
 */
static public function currentRouteNamed ( $patterns )  
{
 	 return (new Illuminate\Routing\Router)->currentRouteNamed($patterns);
}
/**
 * Get the current route action.
 *
 * @return string|null
 */
static public function currentRouteAction ()  
{
 	 return (new Illuminate\Routing\Router)->currentRouteAction();
}
/**
 * Alias for the "currentRouteUses" method.
 *
 * @param  array  ...$patterns
 * @return bool
 */
static public function uses ( $patterns )  
{
 	 return (new Illuminate\Routing\Router)->uses($patterns);
}
/**
 * Determine if the current route action matches a given action.
 *
 * @param  string  $action
 * @return bool
 */
static public function currentRouteUses ( $action )  
{
 	 return (new Illuminate\Routing\Router)->currentRouteUses($action);
}
/**
 * Register the typical authentication routes for an application.
 *
 * @param  array  $options
 * @return void
 */
static public function auth (array $options =array ())  
{
 	 return (new Illuminate\Routing\Router)->auth($options);
}
/**
 * Register the typical reset password routes for an application.
 *
 * @return void
 */
static public function resetPassword ()  
{
 	 return (new Illuminate\Routing\Router)->resetPassword();
}
/**
 * Register the typical email verification routes for an application.
 *
 * @return void
 */
static public function emailVerification ()  
{
 	 return (new Illuminate\Routing\Router)->emailVerification();
}
/**
 * Set the unmapped global resource parameters to singular.
 *
 * @param  bool  $singular
 * @return void
 */
static public function singularResourceParameters ( $singular =true)  
{
 	 return (new Illuminate\Routing\Router)->singularResourceParameters($singular);
}
/**
 * Set the global resource parameter mapping.
 *
 * @param  array  $parameters
 * @return void
 */
static public function resourceParameters (array $parameters =array ())  
{
 	 return (new Illuminate\Routing\Router)->resourceParameters($parameters);
}
/**
 * Get or set the verbs used in the resource URIs.
 *
 * @param  array  $verbs
 * @return array|null
 */
static public function resourceVerbs (array $verbs =array ())  
{
 	 return (new Illuminate\Routing\Router)->resourceVerbs($verbs);
}
/**
 * Get the underlying route collection.
 *
 * @return \Illuminate\Routing\RouteCollection
 */
static public function getRoutes ()  
{
 	 return (new Illuminate\Routing\Router)->getRoutes();
}
/**
 * Set the route collection instance.
 *
 * @param  \Illuminate\Routing\RouteCollection  $routes
 * @return void
 */
static public function setRoutes (Illuminate\Routing\RouteCollection $routes )  
{
 	 return (new Illuminate\Routing\Router)->setRoutes($routes);
}
/**
 * Dynamically handle calls into the router instance.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */
static public function __call ( $method , $parameters )  
{
 	 return (new Illuminate\Routing\Router)->__call($method,$parameters);
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
 	 return (new Illuminate\Routing\Router)->macro($name,$macro);
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
 	 return (new Illuminate\Routing\Router)->mixin($mixin);
}
/**
 * Checks if macro is registered.
 *
 * @param  string  $name
 * @return bool
 */
static public function hasMacro ( $name )  
{
 	 return (new Illuminate\Routing\Router)->hasMacro($name);
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
 	 return (new Illuminate\Routing\Router)->__callStatic($method,$parameters);
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
static public function macroCall ( $method , $parameters )  
{
 	 return (new Illuminate\Routing\Router)->macroCall($method,$parameters);
}

}
