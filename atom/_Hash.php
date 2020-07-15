<?php 
class Hash {
/**
 * Create an instance of the Bcrypt hash Driver.
 *
 * @return \Illuminate\Hashing\BcryptHasher
 */
static public function createBcryptDriver ()  
{
 	 return (new Illuminate\Hashing\HashManager)->createBcryptDriver();
}
/**
 * Create an instance of the Argon2i hash Driver.
 *
 * @return \Illuminate\Hashing\ArgonHasher
 */
static public function createArgonDriver ()  
{
 	 return (new Illuminate\Hashing\HashManager)->createArgonDriver();
}
/**
 * Create an instance of the Argon2id hash Driver.
 *
 * @return \Illuminate\Hashing\Argon2IdHasher
 */
static public function createArgon2idDriver ()  
{
 	 return (new Illuminate\Hashing\HashManager)->createArgon2idDriver();
}
/**
 * Get information about the given hashed value.
 *
 * @param  string  $hashedValue
 * @return array
 */
static public function info ( $hashedValue )  
{
 	 return (new Illuminate\Hashing\HashManager)->info($hashedValue);
}
/**
 * Hash the given value.
 *
 * @param  string  $value
 * @param  array   $options
 * @return string
 */
static public function make ( $value ,array $options =array ())  
{
 	 return (new Illuminate\Hashing\HashManager)->make($value,$options);
}
/**
 * Check the given plain value against a hash.
 *
 * @param  string  $value
 * @param  string  $hashedValue
 * @param  array   $options
 * @return bool
 */
static public function check ( $value , $hashedValue ,array $options =array ())  
{
 	 return (new Illuminate\Hashing\HashManager)->check($value,$hashedValue,$options);
}
/**
 * Check if the given hash has been hashed using the given options.
 *
 * @param  string  $hashedValue
 * @param  array   $options
 * @return bool
 */
static public function needsRehash ( $hashedValue ,array $options =array ())  
{
 	 return (new Illuminate\Hashing\HashManager)->needsRehash($hashedValue,$options);
}
/**
 * Get the default driver name.
 *
 * @return string
 */
static public function getDefaultDriver ()  
{
 	 return (new Illuminate\Hashing\HashManager)->getDefaultDriver();
}
/**
 * Create a new manager instance.
 *
 * @param  \Illuminate\Foundation\Application  $app
 * @return void
 */
public function __construct ( $app )  
{
 	 return (new Illuminate\Hashing\HashManager)->__construct($app);
}
/**
 * Get a driver instance.
 *
 * @param  string  $driver
 * @return mixed
 *
 * @throws \InvalidArgumentException
 */
static public function driver ( $driver =NULL)  
{
 	 return (new Illuminate\Hashing\HashManager)->driver($driver);
}
/**
 * Register a custom driver creator Closure.
 *
 * @param  string    $driver
 * @param  \Closure  $callback
 * @return static|$this
 */
static public function extend ( $driver ,Closure $callback )  
{
 	 return (new Illuminate\Hashing\HashManager)->extend($driver,$callback);
}
/**
 * Get all of the created "drivers".
 *
 * @return array
 */
static public function getDrivers ()  
{
 	 return (new Illuminate\Hashing\HashManager)->getDrivers();
}
/**
 * Dynamically call the default driver instance.
 *
 * @param  string  $method
 * @param  array   $parameters
 * @return mixed
 */
static public function __call ( $method , $parameters )  
{
 	 return (new Illuminate\Hashing\HashManager)->__call($method,$parameters);
}

}
