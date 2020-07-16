<?php 
class View {
/**
 * Create a new view factory instance.
 *
 * @param  \Illuminate\View\Engines\EngineResolver  $engines
 * @param  \Illuminate\View\ViewFinderInterface  $finder
 * @param  \Illuminate\Contracts\Events\Dispatcher  $events
 * @return void
 */
public function __construct (Illuminate\View\Engines\EngineResolver $engines ,Illuminate\View\ViewFinderInterface $finder ,Illuminate\Contracts\Events\Dispatcher $events )  
{
 	 return (new Illuminate\View\Factory)->__construct($engines,$finder,$events);
}
/**
 * Get the evaluated view contents for the given view.
 *
 * @param  string  $path
 * @param  \Illuminate\Contracts\Support\Arrayable|array   $data
 * @param  array   $mergeData
 * @return \Illuminate\Contracts\View\View
 */
static public function file ( $path , $data =array (), $mergeData =array ())  
{
 	 return (new Illuminate\View\Factory)->file($path,$data,$mergeData);
}
/**
 * Get the evaluated view contents for the given view.
 *
 * @param  string  $view
 * @param  \Illuminate\Contracts\Support\Arrayable|array   $data
 * @param  array   $mergeData
 * @return \Illuminate\Contracts\View\View
 */
static public function make ( $view , $data =array (), $mergeData =array ())  
{
 	 return (new Illuminate\View\Factory)->make($view,$data,$mergeData);
}
/**
 * Get the first view that actually exists from the given list.
 *
 * @param  array  $views
 * @param  \Illuminate\Contracts\Support\Arrayable|array   $data
 * @param  array   $mergeData
 * @return \Illuminate\Contracts\View\View
 *
 * @throws \InvalidArgumentException
 */
static public function first (array $views , $data =array (), $mergeData =array ())  
{
 	 return (new Illuminate\View\Factory)->first($views,$data,$mergeData);
}
/**
 * Get the rendered content of the view based on a given condition.
 *
 * @param  bool  $condition
 * @param  string  $view
 * @param  \Illuminate\Contracts\Support\Arrayable|array   $data
 * @param  array   $mergeData
 * @return string
 */
static public function renderWhen ( $condition , $view , $data =array (), $mergeData =array ())  
{
 	 return (new Illuminate\View\Factory)->renderWhen($condition,$view,$data,$mergeData);
}
/**
 * Get the rendered contents of a partial from a loop.
 *
 * @param  string  $view
 * @param  array   $data
 * @param  string  $iterator
 * @param  string  $empty
 * @return string
 */
static public function renderEach ( $view , $data , $iterator , $empty ='raw|')  
{
 	 return (new Illuminate\View\Factory)->renderEach($view,$data,$iterator,$empty);
}
/**
 * Determine if a given view exists.
 *
 * @param  string  $view
 * @return bool
 */
static public function exists ( $view )  
{
 	 return (new Illuminate\View\Factory)->exists($view);
}
/**
 * Get the appropriate view engine for the given path.
 *
 * @param  string  $path
 * @return \Illuminate\Contracts\View\Engine
 *
 * @throws \InvalidArgumentException
 */
static public function getEngineFromPath ( $path )  
{
 	 return (new Illuminate\View\Factory)->getEngineFromPath($path);
}
/**
 * Add a piece of shared data to the environment.
 *
 * @param  array|string  $key
 * @param  mixed|null  $value
 * @return mixed
 */
static public function share ( $key , $value =NULL)  
{
 	 return (new Illuminate\View\Factory)->share($key,$value);
}
/**
 * Increment the rendering counter.
 *
 * @return void
 */
static public function incrementRender ()  
{
 	 return (new Illuminate\View\Factory)->incrementRender();
}
/**
 * Decrement the rendering counter.
 *
 * @return void
 */
static public function decrementRender ()  
{
 	 return (new Illuminate\View\Factory)->decrementRender();
}
/**
 * Check if there are no active render operations.
 *
 * @return bool
 */
static public function doneRendering ()  
{
 	 return (new Illuminate\View\Factory)->doneRendering();
}
/**
 * Add a location to the array of view locations.
 *
 * @param  string  $location
 * @return void
 */
static public function addLocation ( $location )  
{
 	 return (new Illuminate\View\Factory)->addLocation($location);
}
/**
 * Add a new namespace to the loader.
 *
 * @param  string  $namespace
 * @param  string|array  $hints
 * @return static|$this
 */
static public function addNamespace ( $namespace , $hints )  
{
 	 return (new Illuminate\View\Factory)->addNamespace($namespace,$hints);
}
/**
 * Prepend a new namespace to the loader.
 *
 * @param  string  $namespace
 * @param  string|array  $hints
 * @return static|$this
 */
static public function prependNamespace ( $namespace , $hints )  
{
 	 return (new Illuminate\View\Factory)->prependNamespace($namespace,$hints);
}
/**
 * Replace the namespace hints for the given namespace.
 *
 * @param  string  $namespace
 * @param  string|array  $hints
 * @return static|$this
 */
static public function replaceNamespace ( $namespace , $hints )  
{
 	 return (new Illuminate\View\Factory)->replaceNamespace($namespace,$hints);
}
/**
 * Register a valid view extension and its engine.
 *
 * @param  string    $extension
 * @param  string    $engine
 * @param  \Closure|null  $resolver
 * @return void
 */
static public function addExtension ( $extension , $engine , $resolver =NULL)  
{
 	 return (new Illuminate\View\Factory)->addExtension($extension,$engine,$resolver);
}
/**
 * Flush all of the factory state like sections and stacks.
 *
 * @return void
 */
static public function flushState ()  
{
 	 return (new Illuminate\View\Factory)->flushState();
}
/**
 * Flush all of the section contents if done rendering.
 *
 * @return void
 */
static public function flushStateIfDoneRendering ()  
{
 	 return (new Illuminate\View\Factory)->flushStateIfDoneRendering();
}
/**
 * Get the extension to engine bindings.
 *
 * @return array
 */
static public function getExtensions ()  
{
 	 return (new Illuminate\View\Factory)->getExtensions();
}
/**
 * Get the engine resolver instance.
 *
 * @return \Illuminate\View\Engines\EngineResolver
 */
static public function getEngineResolver ()  
{
 	 return (new Illuminate\View\Factory)->getEngineResolver();
}
/**
 * Get the view finder instance.
 *
 * @return \Illuminate\View\ViewFinderInterface
 */
static public function getFinder ()  
{
 	 return (new Illuminate\View\Factory)->getFinder();
}
/**
 * Set the view finder instance.
 *
 * @param  \Illuminate\View\ViewFinderInterface  $finder
 * @return void
 */
static public function setFinder (Illuminate\View\ViewFinderInterface $finder )  
{
 	 return (new Illuminate\View\Factory)->setFinder($finder);
}
/**
 * Flush the cache of views located by the finder.
 *
 * @return void
 */
static public function flushFinderCache ()  
{
 	 return (new Illuminate\View\Factory)->flushFinderCache();
}
/**
 * Get the event dispatcher instance.
 *
 * @return \Illuminate\Contracts\Events\Dispatcher
 */
static public function getDispatcher ()  
{
 	 return (new Illuminate\View\Factory)->getDispatcher();
}
/**
 * Set the event dispatcher instance.
 *
 * @param  \Illuminate\Contracts\Events\Dispatcher  $events
 * @return void
 */
static public function setDispatcher (Illuminate\Contracts\Events\Dispatcher $events )  
{
 	 return (new Illuminate\View\Factory)->setDispatcher($events);
}
/**
 * Get the IoC container instance.
 *
 * @return \Illuminate\Contracts\Container\Container
 */
static public function getContainer ()  
{
 	 return (new Illuminate\View\Factory)->getContainer();
}
/**
 * Set the IoC container instance.
 *
 * @param  \Illuminate\Contracts\Container\Container  $container
 * @return void
 */
static public function setContainer (Illuminate\Contracts\Container\Container $container )  
{
 	 return (new Illuminate\View\Factory)->setContainer($container);
}
/**
 * Get an item from the shared data.
 *
 * @param  string  $key
 * @param  mixed   $default
 * @return mixed
 */
static public function shared ( $key , $default =NULL)  
{
 	 return (new Illuminate\View\Factory)->shared($key,$default);
}
/**
 * Get all of the shared data for the environment.
 *
 * @return array
 */
static public function getShared ()  
{
 	 return (new Illuminate\View\Factory)->getShared();
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
 	 return (new Illuminate\View\Factory)->macro($name,$macro);
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
 	 return (new Illuminate\View\Factory)->mixin($mixin,$replace);
}
/**
 * Checks if macro is registered.
 *
 * @param  string  $name
 * @return bool
 */
static public function hasMacro ( $name )  
{
 	 return (new Illuminate\View\Factory)->hasMacro($name);
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
 	 return (new Illuminate\View\Factory)->__callStatic($method,$parameters);
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
 	 return (new Illuminate\View\Factory)->__call($method,$parameters);
}
/**
 * Start a component rendering process.
 *
 * @param  string  $name
 * @param  array  $data
 * @return void
 */
static public function startComponent ( $name ,array $data =array ())  
{
 	 return (new Illuminate\View\Factory)->startComponent($name,$data);
}
/**
 * Get the first view that actually exists from the given list, and start a component.
 *
 * @param  array  $names
 * @param  array  $data
 * @return void
 */
static public function startComponentFirst (array $names ,array $data =array ())  
{
 	 return (new Illuminate\View\Factory)->startComponentFirst($names,$data);
}
/**
 * Render the current component.
 *
 * @return string
 */
static public function renderComponent ()  
{
 	 return (new Illuminate\View\Factory)->renderComponent();
}
/**
 * Start the slot rendering process.
 *
 * @param  string  $name
 * @param  string|null  $content
 * @return void
 */
static public function slot ( $name , $content =NULL)  
{
 	 return (new Illuminate\View\Factory)->slot($name,$content);
}
/**
 * Save the slot content for rendering.
 *
 * @return void
 */
static public function endSlot ()  
{
 	 return (new Illuminate\View\Factory)->endSlot();
}
/**
 * Register a view creator event.
 *
 * @param  array|string     $views
 * @param  \Closure|string  $callback
 * @return array
 */
static public function creator ( $views , $callback )  
{
 	 return (new Illuminate\View\Factory)->creator($views,$callback);
}
/**
 * Register multiple view composers via an array.
 *
 * @param  array  $composers
 * @return array
 */
static public function composers (array $composers )  
{
 	 return (new Illuminate\View\Factory)->composers($composers);
}
/**
 * Register a view composer event.
 *
 * @param  array|string  $views
 * @param  \Closure|string  $callback
 * @return array
 */
static public function composer ( $views , $callback )  
{
 	 return (new Illuminate\View\Factory)->composer($views,$callback);
}
/**
 * Call the composer for a given view.
 *
 * @param  \Illuminate\Contracts\View\View  $view
 * @return void
 */
static public function callComposer (Illuminate\Contracts\View\View $view )  
{
 	 return (new Illuminate\View\Factory)->callComposer($view);
}
/**
 * Call the creator for a given view.
 *
 * @param  \Illuminate\Contracts\View\View  $view
 * @return void
 */
static public function callCreator (Illuminate\Contracts\View\View $view )  
{
 	 return (new Illuminate\View\Factory)->callCreator($view);
}
/**
 * Start injecting content into a section.
 *
 * @param  string  $section
 * @param  string|null  $content
 * @return void
 */
static public function startSection ( $section , $content =NULL)  
{
 	 return (new Illuminate\View\Factory)->startSection($section,$content);
}
/**
 * Inject inline content into a section.
 *
 * @param  string  $section
 * @param  string  $content
 * @return void
 */
static public function inject ( $section , $content )  
{
 	 return (new Illuminate\View\Factory)->inject($section,$content);
}
/**
 * Stop injecting content into a section and return its contents.
 *
 * @return its contents.
 */
static public function yieldSection ()  
{
 	 return (new Illuminate\View\Factory)->yieldSection();
}
/**
 * Stop injecting content into a section.
 *
 * @param  bool  $overwrite
 * @return string
 *
 * @throws \InvalidArgumentException
 */
static public function stopSection ( $overwrite =false)  
{
 	 return (new Illuminate\View\Factory)->stopSection($overwrite);
}
/**
 * Stop injecting content into a section and append it.
 *
 * @return string
 *
 * @throws \InvalidArgumentException
 */
static public function appendSection ()  
{
 	 return (new Illuminate\View\Factory)->appendSection();
}
/**
 * Get the string contents of a section.
 *
 * @param  string  $section
 * @param  string  $default
 * @return string
 */
static public function yieldContent ( $section , $default ='')  
{
 	 return (new Illuminate\View\Factory)->yieldContent($section,$default);
}
/**
 * Get the parent placeholder for the current request.
 *
 * @param  string  $section
 * @return string
 */
static public function parentPlaceholder ( $section ='')  
{
 	 return (new Illuminate\View\Factory)->parentPlaceholder($section);
}
/**
 * Check if section exists.
 *
 * @param  string  $name
 * @return bool
 */
static public function hasSection ( $name )  
{
 	 return (new Illuminate\View\Factory)->hasSection($name);
}
/**
 * Get the contents of a section.
 *
 * @param  string  $name
 * @param  string|null  $default
 * @return mixed
 */
static public function getSection ( $name , $default =NULL)  
{
 	 return (new Illuminate\View\Factory)->getSection($name,$default);
}
/**
 * Get the entire array of sections.
 *
 * @return array
 */
static public function getSections ()  
{
 	 return (new Illuminate\View\Factory)->getSections();
}
/**
 * Flush all of the sections.
 *
 * @return void
 */
static public function flushSections ()  
{
 	 return (new Illuminate\View\Factory)->flushSections();
}
/**
 * Add new loop to the stack.
 *
 * @param  \Countable|array  $data
 * @return void
 */
static public function addLoop ( $data )  
{
 	 return (new Illuminate\View\Factory)->addLoop($data);
}
/**
 * Increment the top loop's indices.
 *
 * @return void
 */
static public function incrementLoopIndices ()  
{
 	 return (new Illuminate\View\Factory)->incrementLoopIndices();
}
/**
 * Pop a loop from the top of the loop stack.
 *
 * @return void
 */
static public function popLoop ()  
{
 	 return (new Illuminate\View\Factory)->popLoop();
}
/**
 * Get an instance of the last loop in the stack.
 *
 * @return \stdClass|null
 */
static public function getLastLoop ()  
{
 	 return (new Illuminate\View\Factory)->getLastLoop();
}
/**
 * Get the entire loop stack.
 *
 * @return array
 */
static public function getLoopStack ()  
{
 	 return (new Illuminate\View\Factory)->getLoopStack();
}
/**
 * Start injecting content into a push section.
 *
 * @param  string  $section
 * @param  string  $content
 * @return void
 */
static public function startPush ( $section , $content ='')  
{
 	 return (new Illuminate\View\Factory)->startPush($section,$content);
}
/**
 * Stop injecting content into a push section.
 *
 * @return string
 *
 * @throws \InvalidArgumentException
 */
static public function stopPush ()  
{
 	 return (new Illuminate\View\Factory)->stopPush();
}
/**
 * Start prepending content into a push section.
 *
 * @param  string  $section
 * @param  string  $content
 * @return void
 */
static public function startPrepend ( $section , $content ='')  
{
 	 return (new Illuminate\View\Factory)->startPrepend($section,$content);
}
/**
 * Stop prepending content into a push section.
 *
 * @return string
 *
 * @throws \InvalidArgumentException
 */
static public function stopPrepend ()  
{
 	 return (new Illuminate\View\Factory)->stopPrepend();
}
/**
 * Get the string contents of a push section.
 *
 * @param  string  $section
 * @param  string  $default
 * @return string
 */
static public function yieldPushContent ( $section , $default ='')  
{
 	 return (new Illuminate\View\Factory)->yieldPushContent($section,$default);
}
/**
 * Flush all of the stacks.
 *
 * @return void
 */
static public function flushStacks ()  
{
 	 return (new Illuminate\View\Factory)->flushStacks();
}
/**
 * Start a translation block.
 *
 * @param  array  $replacements
 * @return void
 */
static public function startTranslation ( $replacements =array ())  
{
 	 return (new Illuminate\View\Factory)->startTranslation($replacements);
}
/**
 * Render the current translation.
 *
 * @return string
 */
static public function renderTranslation ()  
{
 	 return (new Illuminate\View\Factory)->renderTranslation();
}

}
