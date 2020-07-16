<?php 
class Gate {
/**
 * Create a new gate instance.
 *
 * @param  \Illuminate\Contracts\Container\Container  $container
 * @param  callable  $userResolver
 * @param  array  $abilities
 * @param  array  $policies
 * @param  array  $beforeCallbacks
 * @param  array  $afterCallbacks
 * @param  callable|null  $guessPolicyNamesUsingCallback
 * @return void
 */
public function __construct (Illuminate\Contracts\Container\Container $container ,callable $userResolver ,array $abilities =array (),array $policies =array (),array $beforeCallbacks =array (),array $afterCallbacks =array (),callable $guessPolicyNamesUsingCallback =NULL)  
{
 	 return (new Illuminate\Auth\Access\Gate)->__construct($container,$userResolver,$abilities,$policies,$beforeCallbacks,$afterCallbacks,$guessPolicyNamesUsingCallback);
}
/**
 * Determine if a given ability has been defined.
 *
 * @param  string|array  $ability
 * @return bool
 */
static public function has ( $ability )  
{
 	 func_get_args();
	 return (new Illuminate\Auth\Access\Gate)->has($ability);
}
/**
 * Define a new ability.
 *
 * @param  string  $ability
 * @param  callable|string  $callback
 * @return static|$this
 *
 * @throws \InvalidArgumentException
 */
static public function define ( $ability , $callback )  
{
 	 return (new Illuminate\Auth\Access\Gate)->define($ability,$callback);
}
/**
 * Define abilities for a resource.
 *
 * @param  string  $name
 * @param  string  $class
 * @param  array|null   $abilities
 * @return static|$this
 */
static public function resource ( $name , $class ,array $abilities =NULL)  
{
 	 return (new Illuminate\Auth\Access\Gate)->resource($name,$class,$abilities);
}
/**
 * Define a policy class for a given class type.
 *
 * @param  string  $class
 * @param  string  $policy
 * @return static|$this
 */
static public function policy ( $class , $policy )  
{
 	 return (new Illuminate\Auth\Access\Gate)->policy($class,$policy);
}
/**
 * Register a callback to run before all Gate checks.
 *
 * @param  callable  $callback
 * @return static|$this
 */
static public function before (callable $callback )  
{
 	 return (new Illuminate\Auth\Access\Gate)->before($callback);
}
/**
 * Register a callback to run after all Gate checks.
 *
 * @param  callable  $callback
 * @return static|$this
 */
static public function after (callable $callback )  
{
 	 return (new Illuminate\Auth\Access\Gate)->after($callback);
}
/**
 * Determine if the given ability should be granted for the current user.
 *
 * @param  string  $ability
 * @param  array|mixed  $arguments
 * @return bool
 */
static public function allows ( $ability , $arguments =array ())  
{
 	 return (new Illuminate\Auth\Access\Gate)->allows($ability,$arguments);
}
/**
 * Determine if the given ability should be denied for the current user.
 *
 * @param  string  $ability
 * @param  array|mixed  $arguments
 * @return bool
 */
static public function denies ( $ability , $arguments =array ())  
{
 	 return (new Illuminate\Auth\Access\Gate)->denies($ability,$arguments);
}
/**
 * Determine if all of the given abilities should be granted for the current user.
 *
 * @param  iterable|string  $abilities
 * @param  array|mixed  $arguments
 * @return bool
 */
static public function check ( $abilities , $arguments =array ())  
{
 	 return (new Illuminate\Auth\Access\Gate)->check($abilities,$arguments);
}
/**
 * Determine if any one of the given abilities should be granted for the current user.
 *
 * @param  iterable|string  $abilities
 * @param  array|mixed  $arguments
 * @return bool
 */
static public function any ( $abilities , $arguments =array ())  
{
 	 return (new Illuminate\Auth\Access\Gate)->any($abilities,$arguments);
}
/**
 * Determine if all of the given abilities should be denied for the current user.
 *
 * @param  iterable|string  $abilities
 * @param  array|mixed  $arguments
 * @return bool
 */
static public function none ( $abilities , $arguments =array ())  
{
 	 return (new Illuminate\Auth\Access\Gate)->none($abilities,$arguments);
}
/**
 * Determine if the given ability should be granted for the current user.
 *
 * @param  string  $ability
 * @param  array|mixed  $arguments
 * @return \Illuminate\Auth\Access\Response
 *
 * @throws \Illuminate\Auth\Access\AuthorizationException
 */
static public function authorize ( $ability , $arguments =array ())  
{
 	 return (new Illuminate\Auth\Access\Gate)->authorize($ability,$arguments);
}
/**
 * Inspect the user for the given ability.
 *
 * @param  string  $ability
 * @param  array|mixed  $arguments
 * @return \Illuminate\Auth\Access\Response
 */
static public function inspect ( $ability , $arguments =array ())  
{
 	 return (new Illuminate\Auth\Access\Gate)->inspect($ability,$arguments);
}
/**
 * Get the raw result from the authorization callback.
 *
 * @param  string  $ability
 * @param  array|mixed  $arguments
 * @return mixed
 *
 * @throws \Illuminate\Auth\Access\AuthorizationException
 */
static public function raw ( $ability , $arguments =array ())  
{
 	 return (new Illuminate\Auth\Access\Gate)->raw($ability,$arguments);
}
/**
 * Get a policy instance for a given class.
 *
 * @param  object|string  $class
 * @return mixed
 */
static public function getPolicyFor ( $class )  
{
 	 return (new Illuminate\Auth\Access\Gate)->getPolicyFor($class);
}
/**
 * Specify a callback to be used to guess policy names.
 *
 * @param  callable  $callback
 * @return static|$this
 */
static public function guessPolicyNamesUsing (callable $callback )  
{
 	 return (new Illuminate\Auth\Access\Gate)->guessPolicyNamesUsing($callback);
}
/**
 * Build a policy class instance of the given type.
 *
 * @param  object|string  $class
 * @return mixed
 *
 * @throws \Illuminate\Contracts\Container\BindingResolutionException
 */
static public function resolvePolicy ( $class )  
{
 	 return (new Illuminate\Auth\Access\Gate)->resolvePolicy($class);
}
/**
 * Get a gate instance for the given user.
 *
 * @param  \Illuminate\Contracts\Auth\Authenticatable|mixed  $user
 * @return static
 */
static public function forUser ( $user )  
{
 	 return (new Illuminate\Auth\Access\Gate)->forUser($user);
}
/**
 * Get all of the defined abilities.
 *
 * @return array
 */
static public function abilities ()  
{
 	 return (new Illuminate\Auth\Access\Gate)->abilities();
}
/**
 * Get all of the defined policies.
 *
 * @return array
 */
static public function policies ()  
{
 	 return (new Illuminate\Auth\Access\Gate)->policies();
}

}
