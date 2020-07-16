<?php 
class App {
const VERSION = _CLASS_::VERSION;
const MASTER_REQUEST = _CLASS_::MASTER_REQUEST;
const SUB_REQUEST = _CLASS_::SUB_REQUEST;
public $contextual ;
/**
 * Create a new Illuminate application instance.
 *
 * @param  string|null  $basePath
 * @return void
 */
public function __construct ( $basePath =NULL)  
{
 	 return (new Illuminate\Foundation\Application)->__construct($basePath);
}
/**
 * Get the version number of the application.
 *
 * @return string
 */
static public function version ()  
{
 	 return (new Illuminate\Foundation\Application)->version();
}
/**
 * Run the given array of bootstrap classes.
 *
 * @param  string[]  $bootstrappers
 * @return void
 */
static public function bootstrapWith (array $bootstrappers )  
{
 	 return (new Illuminate\Foundation\Application)->bootstrapWith($bootstrappers);
}
/**
 * Register a callback to run after loading the environment.
 *
 * @param  \Closure  $callback
 * @return void
 */
static public function afterLoadingEnvironment (Closure $callback )  
{
 	 return (new Illuminate\Foundation\Application)->afterLoadingEnvironment($callback);
}
/**
 * Register a callback to run before a bootstrapper.
 *
 * @param  string  $bootstrapper
 * @param  \Closure  $callback
 * @return void
 */
static public function beforeBootstrapping ( $bootstrapper ,Closure $callback )  
{
 	 return (new Illuminate\Foundation\Application)->beforeBootstrapping($bootstrapper,$callback);
}
/**
 * Register a callback to run after a bootstrapper.
 *
 * @param  string  $bootstrapper
 * @param  \Closure  $callback
 * @return void
 */
static public function afterBootstrapping ( $bootstrapper ,Closure $callback )  
{
 	 return (new Illuminate\Foundation\Application)->afterBootstrapping($bootstrapper,$callback);
}
/**
 * Determine if the application has been bootstrapped before.
 *
 * @return bool
 */
static public function hasBeenBootstrapped ()  
{
 	 return (new Illuminate\Foundation\Application)->hasBeenBootstrapped();
}
/**
 * Set the base path for the application.
 *
 * @param  string  $basePath
 * @return static|$this
 */
static public function setBasePath ( $basePath )  
{
 	 return (new Illuminate\Foundation\Application)->setBasePath($basePath);
}
/**
 * Get the path to the application "app" directory.
 *
 * @param  string  $path
 * @return string
 */
static public function path ( $path ='')  
{
 	 return (new Illuminate\Foundation\Application)->path($path);
}
/**
 * Set the application directory.
 *
 * @param  string  $path
 * @return static|$this
 */
static public function useAppPath ( $path )  
{
 	 return (new Illuminate\Foundation\Application)->useAppPath($path);
}
/**
 * Get the base path of the Laravel installation.
 *
 * @param  string  $path Optionally, a path to append to the base path
 * @return string
 */
static public function basePath ( $path ='')  
{
 	 return (new Illuminate\Foundation\Application)->basePath($path);
}
/**
 * Get the path to the bootstrap directory.
 *
 * @param  string  $path Optionally, a path to append to the bootstrap path
 * @return string
 */
static public function bootstrapPath ( $path ='')  
{
 	 return (new Illuminate\Foundation\Application)->bootstrapPath($path);
}
/**
 * Get the path to the application configuration files.
 *
 * @param  string  $path Optionally, a path to append to the config path
 * @return string
 */
static public function configPath ( $path ='')  
{
 	 return (new Illuminate\Foundation\Application)->configPath($path);
}
/**
 * Get the path to the database directory.
 *
 * @param  string  $path Optionally, a path to append to the database path
 * @return string
 */
static public function databasePath ( $path ='')  
{
 	 return (new Illuminate\Foundation\Application)->databasePath($path);
}
/**
 * Set the database directory.
 *
 * @param  string  $path
 * @return static|$this
 */
static public function useDatabasePath ( $path )  
{
 	 return (new Illuminate\Foundation\Application)->useDatabasePath($path);
}
/**
 * Get the path to the language files.
 *
 * @return string
 */
static public function langPath ()  
{
 	 return (new Illuminate\Foundation\Application)->langPath();
}
/**
 * Get the path to the public / web directory.
 *
 * @return string
 */
static public function publicPath ()  
{
 	 return (new Illuminate\Foundation\Application)->publicPath();
}
/**
 * Get the path to the storage directory.
 *
 * @return string
 */
static public function storagePath ()  
{
 	 return (new Illuminate\Foundation\Application)->storagePath();
}
/**
 * Set the storage directory.
 *
 * @param  string  $path
 * @return static|$this
 */
static public function useStoragePath ( $path )  
{
 	 return (new Illuminate\Foundation\Application)->useStoragePath($path);
}
/**
 * Get the path to the resources directory.
 *
 * @param  string  $path
 * @return string
 */
static public function resourcePath ( $path ='')  
{
 	 return (new Illuminate\Foundation\Application)->resourcePath($path);
}
/**
 * Get the path to the environment file directory.
 *
 * @return string
 */
static public function environmentPath ()  
{
 	 return (new Illuminate\Foundation\Application)->environmentPath();
}
/**
 * Set the directory for the environment file.
 *
 * @param  string  $path
 * @return static|$this
 */
static public function useEnvironmentPath ( $path )  
{
 	 return (new Illuminate\Foundation\Application)->useEnvironmentPath($path);
}
/**
 * Set the environment file to be loaded during bootstrapping.
 *
 * @param  string  $file
 * @return static|$this
 */
static public function loadEnvironmentFrom ( $file )  
{
 	 return (new Illuminate\Foundation\Application)->loadEnvironmentFrom($file);
}
/**
 * Get the environment file the application is using.
 *
 * @return string
 */
static public function environmentFile ()  
{
 	 return (new Illuminate\Foundation\Application)->environmentFile();
}
/**
 * Get the fully qualified path to the environment file.
 *
 * @return string
 */
static public function environmentFilePath ()  
{
 	 return (new Illuminate\Foundation\Application)->environmentFilePath();
}
/**
 * Get or check the current application environment.
 *
 * @param  string|array  $environments
 * @return string|bool
 */
static public function environment ( $environments )  
{
 	 return (new Illuminate\Foundation\Application)->environment($environments);
}
/**
 * Determine if application is in local environment.
 *
 * @return bool
 */
static public function isLocal ()  
{
 	 return (new Illuminate\Foundation\Application)->isLocal();
}
/**
 * Determine if application is in production environment.
 *
 * @return bool
 */
static public function isProduction ()  
{
 	 return (new Illuminate\Foundation\Application)->isProduction();
}
/**
 * Detect the application's current environment.
 *
 * @param  \Closure  $callback
 * @return string
 */
static public function detectEnvironment (Closure $callback )  
{
 	 return (new Illuminate\Foundation\Application)->detectEnvironment($callback);
}
/**
 * Determine if the application is running in the console.
 *
 * @return bool
 */
static public function runningInConsole ()  
{
 	 return (new Illuminate\Foundation\Application)->runningInConsole();
}
/**
 * Determine if the application is running unit tests.
 *
 * @return bool
 */
static public function runningUnitTests ()  
{
 	 return (new Illuminate\Foundation\Application)->runningUnitTests();
}
/**
 * Register all of the configured providers.
 *
 * @return void
 */
static public function registerConfiguredProviders ()  
{
 	 return (new Illuminate\Foundation\Application)->registerConfiguredProviders();
}
/**
 * Register a service provider with the application.
 *
 * @param  \Illuminate\Support\ServiceProvider|string  $provider
 * @param  bool   $force
 * @return \Illuminate\Support\ServiceProvider
 */
static public function register ( $provider , $force =false)  
{
 	 return (new Illuminate\Foundation\Application)->register($provider,$force);
}
/**
 * Get the registered service provider instance if it exists.
 *
 * @param  \Illuminate\Support\ServiceProvider|string  $provider
 * @return \Illuminate\Support\ServiceProvider|null
 */
static public function getProvider ( $provider )  
{
 	 return (new Illuminate\Foundation\Application)->getProvider($provider);
}
/**
 * Get the registered service provider instances if any exist.
 *
 * @param  \Illuminate\Support\ServiceProvider|string  $provider
 * @return array
 */
static public function getProviders ( $provider )  
{
 	 return (new Illuminate\Foundation\Application)->getProviders($provider);
}
/**
 * Resolve a service provider instance from the class name.
 *
 * @param  string  $provider
 * @return \Illuminate\Support\ServiceProvider
 */
static public function resolveProvider ( $provider )  
{
 	 return (new Illuminate\Foundation\Application)->resolveProvider($provider);
}
/**
 * Load and boot all of the remaining deferred providers.
 *
 * @return void
 */
static public function loadDeferredProviders ()  
{
 	 return (new Illuminate\Foundation\Application)->loadDeferredProviders();
}
/**
 * Load the provider for a deferred service.
 *
 * @param  string  $service
 * @return void
 */
static public function loadDeferredProvider ( $service )  
{
 	 return (new Illuminate\Foundation\Application)->loadDeferredProvider($service);
}
/**
 * Register a deferred provider and service.
 *
 * @param  string  $provider
 * @param  string|null  $service
 * @return void
 */
static public function registerDeferredProvider ( $provider , $service =NULL)  
{
 	 return (new Illuminate\Foundation\Application)->registerDeferredProvider($provider,$service);
}
/**
 * Resolve the given type from the container.
 *
 * (Overriding Container::make)
 *
 * @param  string  $abstract
 * @param  array  $parameters
 * @return mixed
 */
static public function make ( $abstract ,array $parameters =array ())  
{
 	 return (new Illuminate\Foundation\Application)->make($abstract,$parameters);
}
/**
 * Determine if the given abstract type has been bound.
 *
 * (Overriding Container::bound)
 *
 * @param  string  $abstract
 * @return bool
 */
static public function bound ( $abstract )  
{
 	 return (new Illuminate\Foundation\Application)->bound($abstract);
}
/**
 * Determine if the application has booted.
 *
 * @return bool
 */
static public function isBooted ()  
{
 	 return (new Illuminate\Foundation\Application)->isBooted();
}
/**
 * Boot the application's service providers.
 *
 * @return void
 */
static public function boot ()  
{
 	 return (new Illuminate\Foundation\Application)->boot();
}
/**
 * Register a new boot listener.
 *
 * @param  callable  $callback
 * @return void
 */
static public function booting ( $callback )  
{
 	 return (new Illuminate\Foundation\Application)->booting($callback);
}
/**
 * Register a new "booted" listener.
 *
 * @param  callable  $callback
 * @return void
 */
static public function booted ( $callback )  
{
 	 return (new Illuminate\Foundation\Application)->booted($callback);
}
/**
 * {@inheritdoc}
 */
static public function handle (Symfony\Component\HttpFoundation\Request $request , $type =1, $catch =true)  
{
 	 return (new Illuminate\Foundation\Application)->handle($request,$type,$catch);
}
/**
 * Determine if middleware has been disabled for the application.
 *
 * @return bool
 */
static public function shouldSkipMiddleware ()  
{
 	 return (new Illuminate\Foundation\Application)->shouldSkipMiddleware();
}
/**
 * Get the path to the cached services.php file.
 *
 * @return string
 */
static public function getCachedServicesPath ()  
{
 	 return (new Illuminate\Foundation\Application)->getCachedServicesPath();
}
/**
 * Get the path to the cached packages.php file.
 *
 * @return string
 */
static public function getCachedPackagesPath ()  
{
 	 return (new Illuminate\Foundation\Application)->getCachedPackagesPath();
}
/**
 * Determine if the application configuration is cached.
 *
 * @return bool
 */
static public function configurationIsCached ()  
{
 	 return (new Illuminate\Foundation\Application)->configurationIsCached();
}
/**
 * Get the path to the configuration cache file.
 *
 * @return string
 */
static public function getCachedConfigPath ()  
{
 	 return (new Illuminate\Foundation\Application)->getCachedConfigPath();
}
/**
 * Determine if the application routes are cached.
 *
 * @return bool
 */
static public function routesAreCached ()  
{
 	 return (new Illuminate\Foundation\Application)->routesAreCached();
}
/**
 * Get the path to the routes cache file.
 *
 * @return string
 */
static public function getCachedRoutesPath ()  
{
 	 return (new Illuminate\Foundation\Application)->getCachedRoutesPath();
}
/**
 * Determine if the application events are cached.
 *
 * @return bool
 */
static public function eventsAreCached ()  
{
 	 return (new Illuminate\Foundation\Application)->eventsAreCached();
}
/**
 * Get the path to the events cache file.
 *
 * @return string
 */
static public function getCachedEventsPath ()  
{
 	 return (new Illuminate\Foundation\Application)->getCachedEventsPath();
}
/**
 * Determine if the application is currently down for maintenance.
 *
 * @return bool
 */
static public function isDownForMaintenance ()  
{
 	 return (new Illuminate\Foundation\Application)->isDownForMaintenance();
}
/**
 * Throw an HttpException with the given data.
 *
 * @param  int     $code
 * @param  string  $message
 * @param  array   $headers
 * @return void
 *
 * @throws \Symfony\Component\HttpKernel\Exception\HttpException
 */
static public function abort ( $code , $message ='',array $headers =array ())  
{
 	 return (new Illuminate\Foundation\Application)->abort($code,$message,$headers);
}
/**
 * Register a terminating callback with the application.
 *
 * @param  callable|string  $callback
 * @return static|$this
 */
static public function terminating ( $callback )  
{
 	 return (new Illuminate\Foundation\Application)->terminating($callback);
}
/**
 * Terminate the application.
 *
 * @return void
 */
static public function terminate ()  
{
 	 return (new Illuminate\Foundation\Application)->terminate();
}
/**
 * Get the service providers that have been loaded.
 *
 * @return array
 */
static public function getLoadedProviders ()  
{
 	 return (new Illuminate\Foundation\Application)->getLoadedProviders();
}
/**
 * Get the application's deferred services.
 *
 * @return array
 */
static public function getDeferredServices ()  
{
 	 return (new Illuminate\Foundation\Application)->getDeferredServices();
}
/**
 * Set the application's deferred services.
 *
 * @param  array  $services
 * @return void
 */
static public function setDeferredServices (array $services )  
{
 	 return (new Illuminate\Foundation\Application)->setDeferredServices($services);
}
/**
 * Add an array of services to the application's deferred services.
 *
 * @param  array  $services
 * @return void
 */
static public function addDeferredServices (array $services )  
{
 	 return (new Illuminate\Foundation\Application)->addDeferredServices($services);
}
/**
 * Determine if the given service is a deferred service.
 *
 * @param  string  $service
 * @return bool
 */
static public function isDeferredService ( $service )  
{
 	 return (new Illuminate\Foundation\Application)->isDeferredService($service);
}
/**
 * Configure the real-time facade namespace.
 *
 * @param  string  $namespace
 * @return void
 */
static public function provideFacades ( $namespace )  
{
 	 return (new Illuminate\Foundation\Application)->provideFacades($namespace);
}
/**
 * Get the current application locale.
 *
 * @return string
 */
static public function getLocale ()  
{
 	 return (new Illuminate\Foundation\Application)->getLocale();
}
/**
 * Set the current application locale.
 *
 * @param  string  $locale
 * @return void
 */
static public function setLocale ( $locale )  
{
 	 return (new Illuminate\Foundation\Application)->setLocale($locale);
}
/**
 * Determine if application locale is the given locale.
 *
 * @param  string  $locale
 * @return bool
 */
static public function isLocale ( $locale )  
{
 	 return (new Illuminate\Foundation\Application)->isLocale($locale);
}
/**
 * Register the core class aliases in the container.
 *
 * @return void
 */
static public function registerCoreContainerAliases ()  
{
 	 return (new Illuminate\Foundation\Application)->registerCoreContainerAliases();
}
/**
 * Flush the container of all bindings and resolved instances.
 *
 * @return void
 */
static public function flush ()  
{
 	 return (new Illuminate\Foundation\Application)->flush();
}
/**
 * Get the application namespace.
 *
 * @return string
 *
 * @throws \RuntimeException
 */
static public function getNamespace ()  
{
 	 return (new Illuminate\Foundation\Application)->getNamespace();
}
/**
 * Define a contextual binding.
 *
 * @param  array|string  $concrete
 * @return \Illuminate\Contracts\Container\ContextualBindingBuilder
 */
static public function when ( $concrete )  
{
 	 return (new Illuminate\Foundation\Application)->when($concrete);
}
/**
 *  {@inheritdoc}
 */
static public function has ( $id )  
{
 	 return (new Illuminate\Foundation\Application)->has($id);
}
/**
 * Determine if the given abstract type has been resolved.
 *
 * @param  string  $abstract
 * @return bool
 */
static public function resolved ( $abstract )  
{
 	 return (new Illuminate\Foundation\Application)->resolved($abstract);
}
/**
 * Determine if a given type is shared.
 *
 * @param  string  $abstract
 * @return bool
 */
static public function isShared ( $abstract )  
{
 	 return (new Illuminate\Foundation\Application)->isShared($abstract);
}
/**
 * Determine if a given string is an alias.
 *
 * @param  string  $name
 * @return bool
 */
static public function isAlias ( $name )  
{
 	 return (new Illuminate\Foundation\Application)->isAlias($name);
}
/**
 * Register a binding with the container.
 *
 * @param  string  $abstract
 * @param  \Closure|string|null  $concrete
 * @param  bool  $shared
 * @return void
 */
static public function bind ( $abstract , $concrete =NULL, $shared =false)  
{
 	 return (new Illuminate\Foundation\Application)->bind($abstract,$concrete,$shared);
}
/**
 * Determine if the container has a method binding.
 *
 * @param  string  $method
 * @return bool
 */
static public function hasMethodBinding ( $method )  
{
 	 return (new Illuminate\Foundation\Application)->hasMethodBinding($method);
}
/**
 * Bind a callback to resolve with Container::call.
 *
 * @param  array|string  $method
 * @param  \Closure  $callback
 * @return void
 */
static public function bindMethod ( $method , $callback )  
{
 	 return (new Illuminate\Foundation\Application)->bindMethod($method,$callback);
}
/**
 * Get the method binding for the given method.
 *
 * @param  string  $method
 * @param  mixed  $instance
 * @return mixed
 */
static public function callMethodBinding ( $method , $instance )  
{
 	 return (new Illuminate\Foundation\Application)->callMethodBinding($method,$instance);
}
/**
 * Add a contextual binding to the container.
 *
 * @param  string  $concrete
 * @param  string  $abstract
 * @param  \Closure|string  $implementation
 * @return void
 */
static public function addContextualBinding ( $concrete , $abstract , $implementation )  
{
 	 return (new Illuminate\Foundation\Application)->addContextualBinding($concrete,$abstract,$implementation);
}
/**
 * Register a binding if it hasn't already been registered.
 *
 * @param  string  $abstract
 * @param  \Closure|string|null  $concrete
 * @param  bool  $shared
 * @return void
 */
static public function bindIf ( $abstract , $concrete =NULL, $shared =false)  
{
 	 return (new Illuminate\Foundation\Application)->bindIf($abstract,$concrete,$shared);
}
/**
 * Register a shared binding in the container.
 *
 * @param  string  $abstract
 * @param  \Closure|string|null  $concrete
 * @return void
 */
static public function singleton ( $abstract , $concrete =NULL)  
{
 	 return (new Illuminate\Foundation\Application)->singleton($abstract,$concrete);
}
/**
 * Register a shared binding if it hasn't already been registered.
 *
 * @param  string  $abstract
 * @param  \Closure|string|null  $concrete
 * @return void
 */
static public function singletonIf ( $abstract , $concrete =NULL)  
{
 	 return (new Illuminate\Foundation\Application)->singletonIf($abstract,$concrete);
}
/**
 * "Extend" an abstract type in the container.
 *
 * @param  string    $abstract
 * @param  \Closure  $closure
 * @return void
 *
 * @throws \InvalidArgumentException
 */
static public function extend ( $abstract ,Closure $closure )  
{
 	 return (new Illuminate\Foundation\Application)->extend($abstract,$closure);
}
/**
 * Register an existing instance as shared in the container.
 *
 * @param  string  $abstract
 * @param  mixed   $instance
 * @return mixed
 */
static public function instance ( $abstract , $instance )  
{
 	 return (new Illuminate\Foundation\Application)->instance($abstract,$instance);
}
/**
 * Assign a set of tags to a given binding.
 *
 * @param  array|string  $abstracts
 * @param  array|mixed   ...$tags
 * @return void
 */
static public function tag ( $abstracts , $tags )  
{
 	 func_get_args();
	 return (new Illuminate\Foundation\Application)->tag($abstracts,$tags);
}
/**
 * Resolve all of the bindings for a given tag.
 *
 * @param  string  $tag
 * @return iterable
 */
static public function tagged ( $tag )  
{
 	 return (new Illuminate\Foundation\Application)->tagged($tag);
}
/**
 * Alias a type to a different name.
 *
 * @param  string  $abstract
 * @param  string  $alias
 * @return void
 *
 * @throws \LogicException
 */
static public function alias ( $abstract , $alias )  
{
 	 return (new Illuminate\Foundation\Application)->alias($abstract,$alias);
}
/**
 * Bind a new callback to an abstract's rebind event.
 *
 * @param  string    $abstract
 * @param  \Closure  $callback
 * @return mixed
 */
static public function rebinding ( $abstract ,Closure $callback )  
{
 	 return (new Illuminate\Foundation\Application)->rebinding($abstract,$callback);
}
/**
 * Refresh an instance on the given target and method.
 *
 * @param  string  $abstract
 * @param  mixed   $target
 * @param  string  $method
 * @return mixed
 */
static public function refresh ( $abstract , $target , $method )  
{
 	 return (new Illuminate\Foundation\Application)->refresh($abstract,$target,$method);
}
/**
 * Wrap the given closure such that its dependencies will be injected when executed.
 *
 * @param  \Closure  $callback
 * @param  array  $parameters
 * @return \Closure
 */
static public function wrap (Closure $callback ,array $parameters =array ())  
{
 	 return (new Illuminate\Foundation\Application)->wrap($callback,$parameters);
}
/**
 * Call the given Closure / class@method and inject its dependencies.
 *
 * @param  callable|string  $callback
 * @param  array  $parameters
 * @param  string|null  $defaultMethod
 * @return mixed
 */
static public function call ( $callback ,array $parameters =array (), $defaultMethod =NULL)  
{
 	 return (new Illuminate\Foundation\Application)->call($callback,$parameters,$defaultMethod);
}
/**
 * Get a closure to resolve the given type from the container.
 *
 * @param  string  $abstract
 * @return \Closure
 */
static public function factory ( $abstract )  
{
 	 return (new Illuminate\Foundation\Application)->factory($abstract);
}
/**
 * An alias function name for make().
 *
 * @param  string  $abstract
 * @param  array  $parameters
 * @return mixed
 */
static public function makeWith ( $abstract ,array $parameters =array ())  
{
 	 return (new Illuminate\Foundation\Application)->makeWith($abstract,$parameters);
}
/**
 *  {@inheritdoc}
 */
static public function get ( $id )  
{
 	 return (new Illuminate\Foundation\Application)->get($id);
}
/**
 * Instantiate a concrete instance of the given type.
 *
 * @param  string  $concrete
 * @return mixed
 *
 * @throws \Illuminate\Contracts\Container\BindingResolutionException
 */
static public function build ( $concrete )  
{
 	 return (new Illuminate\Foundation\Application)->build($concrete);
}
/**
 * Register a new resolving callback.
 *
 * @param  \Closure|string  $abstract
 * @param  \Closure|null  $callback
 * @return void
 */
static public function resolving ( $abstract ,Closure $callback =NULL)  
{
 	 return (new Illuminate\Foundation\Application)->resolving($abstract,$callback);
}
/**
 * Register a new after resolving callback for all types.
 *
 * @param  \Closure|string  $abstract
 * @param  \Closure|null  $callback
 * @return void
 */
static public function afterResolving ( $abstract ,Closure $callback =NULL)  
{
 	 return (new Illuminate\Foundation\Application)->afterResolving($abstract,$callback);
}
/**
 * Get the container's bindings.
 *
 * @return array
 */
static public function getBindings ()  
{
 	 return (new Illuminate\Foundation\Application)->getBindings();
}
/**
 * Get the alias for an abstract if available.
 *
 * @param  string  $abstract
 * @return string
 */
static public function getAlias ( $abstract )  
{
 	 return (new Illuminate\Foundation\Application)->getAlias($abstract);
}
/**
 * Remove all of the extender callbacks for a given type.
 *
 * @param  string  $abstract
 * @return void
 */
static public function forgetExtenders ( $abstract )  
{
 	 return (new Illuminate\Foundation\Application)->forgetExtenders($abstract);
}
/**
 * Remove a resolved instance from the instance cache.
 *
 * @param  string  $abstract
 * @return void
 */
static public function forgetInstance ( $abstract )  
{
 	 return (new Illuminate\Foundation\Application)->forgetInstance($abstract);
}
/**
 * Clear all of the instances from the container.
 *
 * @return void
 */
static public function forgetInstances ()  
{
 	 return (new Illuminate\Foundation\Application)->forgetInstances();
}
/**
 * Get the globally available instance of the container.
 *
 * @return static
 */
static public function getInstance ()  
{
 	 return (new Illuminate\Foundation\Application)->getInstance();
}
/**
 * Set the shared instance of the container.
 *
 * @param  \Illuminate\Contracts\Container\Container|null  $container
 * @return \Illuminate\Contracts\Container\Container|static
 */
static public function setInstance (Illuminate\Contracts\Container\Container $container =NULL)  
{
 	 return (new Illuminate\Foundation\Application)->setInstance($container);
}
/**
 * Determine if a given offset exists.
 *
 * @param  string  $key
 * @return bool
 */
static public function offsetExists ( $key )  
{
 	 return (new Illuminate\Foundation\Application)->offsetExists($key);
}
/**
 * Get the value at a given offset.
 *
 * @param  string  $key
 * @return mixed
 */
static public function offsetGet ( $key )  
{
 	 return (new Illuminate\Foundation\Application)->offsetGet($key);
}
/**
 * Set the value at a given offset.
 *
 * @param  string  $key
 * @param  mixed   $value
 * @return void
 */
static public function offsetSet ( $key , $value )  
{
 	 return (new Illuminate\Foundation\Application)->offsetSet($key,$value);
}
/**
 * Unset the value at a given offset.
 *
 * @param  string  $key
 * @return void
 */
static public function offsetUnset ( $key )  
{
 	 return (new Illuminate\Foundation\Application)->offsetUnset($key);
}
/**
 * Dynamically access container services.
 *
 * @param  string  $key
 * @return mixed
 */
static public function __get ( $key )  
{
 	 return (new Illuminate\Foundation\Application)->__get($key);
}
/**
 * Dynamically set container services.
 *
 * @param  string  $key
 * @param  mixed   $value
 * @return void
 */
static public function __set ( $key , $value )  
{
 	 return (new Illuminate\Foundation\Application)->__set($key,$value);
}

}
