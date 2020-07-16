<?php 
class Lang {
/**
 * Create a new translator instance.
 *
 * @param  \Illuminate\Contracts\Translation\Loader  $loader
 * @param  string  $locale
 * @return void
 */
public function __construct (Illuminate\Contracts\Translation\Loader $loader , $locale )  
{
 	 return (new Illuminate\Translation\Translator)->__construct($loader,$locale);
}
/**
 * Determine if a translation exists for a given locale.
 *
 * @param  string  $key
 * @param  string|null  $locale
 * @return bool
 */
static public function hasForLocale ( $key , $locale =NULL)  
{
 	 return (new Illuminate\Translation\Translator)->hasForLocale($key,$locale);
}
/**
 * Determine if a translation exists.
 *
 * @param  string  $key
 * @param  string|null  $locale
 * @param  bool  $fallback
 * @return bool
 */
static public function has ( $key , $locale =NULL, $fallback =true)  
{
 	 return (new Illuminate\Translation\Translator)->has($key,$locale,$fallback);
}
/**
 * Get the translation for the given key.
 *
 * @param  string  $key
 * @param  array   $replace
 * @param  string|null  $locale
 * @param  bool  $fallback
 * @return string|array
 */
static public function get ( $key ,array $replace =array (), $locale =NULL, $fallback =true)  
{
 	 return (new Illuminate\Translation\Translator)->get($key,$replace,$locale,$fallback);
}
/**
 * Get a translation according to an integer value.
 *
 * @param  string  $key
 * @param  \Countable|int|array  $number
 * @param  array   $replace
 * @param  string|null  $locale
 * @return string
 */
static public function choice ( $key , $number ,array $replace =array (), $locale =NULL)  
{
 	 return (new Illuminate\Translation\Translator)->choice($key,$number,$replace,$locale);
}
/**
 * Add translation lines to the given locale.
 *
 * @param  array  $lines
 * @param  string  $locale
 * @param  string  $namespace
 * @return void
 */
static public function addLines (array $lines , $locale , $namespace ='*')  
{
 	 return (new Illuminate\Translation\Translator)->addLines($lines,$locale,$namespace);
}
/**
 * Load the specified language group.
 *
 * @param  string  $namespace
 * @param  string  $group
 * @param  string  $locale
 * @return void
 */
static public function load ( $namespace , $group , $locale )  
{
 	 return (new Illuminate\Translation\Translator)->load($namespace,$group,$locale);
}
/**
 * Add a new namespace to the loader.
 *
 * @param  string  $namespace
 * @param  string  $hint
 * @return void
 */
static public function addNamespace ( $namespace , $hint )  
{
 	 return (new Illuminate\Translation\Translator)->addNamespace($namespace,$hint);
}
/**
 * Add a new JSON path to the loader.
 *
 * @param  string  $path
 * @return void
 */
static public function addJsonPath ( $path )  
{
 	 return (new Illuminate\Translation\Translator)->addJsonPath($path);
}
/**
 * Parse a key into namespace, group, and item.
 *
 * @param  string  $key
 * @return array
 */
static public function parseKey ( $key )  
{
 	 return (new Illuminate\Translation\Translator)->parseKey($key);
}
/**
 * Get the message selector instance.
 *
 * @return \Illuminate\Translation\MessageSelector
 */
static public function getSelector ()  
{
 	 return (new Illuminate\Translation\Translator)->getSelector();
}
/**
 * Set the message selector instance.
 *
 * @param  \Illuminate\Translation\MessageSelector  $selector
 * @return void
 */
static public function setSelector (Illuminate\Translation\MessageSelector $selector )  
{
 	 return (new Illuminate\Translation\Translator)->setSelector($selector);
}
/**
 * Get the language line loader implementation.
 *
 * @return \Illuminate\Contracts\Translation\Loader
 */
static public function getLoader ()  
{
 	 return (new Illuminate\Translation\Translator)->getLoader();
}
/**
 * Get the default locale being used.
 *
 * @return string
 */
static public function locale ()  
{
 	 return (new Illuminate\Translation\Translator)->locale();
}
/**
 * Get the default locale being used.
 *
 * @return string
 */
static public function getLocale ()  
{
 	 return (new Illuminate\Translation\Translator)->getLocale();
}
/**
 * Set the default locale.
 *
 * @param  string  $locale
 * @return void
 */
static public function setLocale ( $locale )  
{
 	 return (new Illuminate\Translation\Translator)->setLocale($locale);
}
/**
 * Get the fallback locale being used.
 *
 * @return string
 */
static public function getFallback ()  
{
 	 return (new Illuminate\Translation\Translator)->getFallback();
}
/**
 * Set the fallback locale being used.
 *
 * @param  string  $fallback
 * @return void
 */
static public function setFallback ( $fallback )  
{
 	 return (new Illuminate\Translation\Translator)->setFallback($fallback);
}
/**
 * Set the loaded translation groups.
 *
 * @param  array  $loaded
 * @return void
 */
static public function setLoaded (array $loaded )  
{
 	 return (new Illuminate\Translation\Translator)->setLoaded($loaded);
}
/**
 * Set the parsed value of a key.
 *
 * @param  string  $key
 * @param  array   $parsed
 * @return void
 */
static public function setParsedKey ( $key , $parsed )  
{
 	 return (new Illuminate\Translation\Translator)->setParsedKey($key,$parsed);
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
 	 return (new Illuminate\Translation\Translator)->macro($name,$macro);
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
 	 return (new Illuminate\Translation\Translator)->mixin($mixin,$replace);
}
/**
 * Checks if macro is registered.
 *
 * @param  string  $name
 * @return bool
 */
static public function hasMacro ( $name )  
{
 	 return (new Illuminate\Translation\Translator)->hasMacro($name);
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
 	 return (new Illuminate\Translation\Translator)->__callStatic($method,$parameters);
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
 	 return (new Illuminate\Translation\Translator)->__call($method,$parameters);
}

}
