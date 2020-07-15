<?php 
class Notification {
/**
 * Send the given notification to the given notifiable entities.
 *
 * @param  \Illuminate\Support\Collection|array|mixed  $notifiables
 * @param  mixed  $notification
 * @return void
 */
static public function send ( $notifiables , $notification )  
{
 	 return (new Illuminate\Notifications\ChannelManager)->send($notifiables,$notification);
}
/**
 * Send the given notification immediately.
 *
 * @param  \Illuminate\Support\Collection|array|mixed  $notifiables
 * @param  mixed  $notification
 * @param  array|null  $channels
 * @return void
 */
static public function sendNow ( $notifiables , $notification ,array $channels =NULL)  
{
 	 return (new Illuminate\Notifications\ChannelManager)->sendNow($notifiables,$notification,$channels);
}
/**
 * Get a channel instance.
 *
 * @param  string|null  $name
 * @return mixed
 */
static public function channel ( $name =NULL)  
{
 	 return (new Illuminate\Notifications\ChannelManager)->channel($name);
}
/**
 * Get the default channel driver name.
 *
 * @return string
 */
static public function getDefaultDriver ()  
{
 	 return (new Illuminate\Notifications\ChannelManager)->getDefaultDriver();
}
/**
 * Get the default channel driver name.
 *
 * @return string
 */
static public function deliversVia ()  
{
 	 return (new Illuminate\Notifications\ChannelManager)->deliversVia();
}
/**
 * Set the default channel driver name.
 *
 * @param  string  $channel
 * @return void
 */
static public function deliverVia ( $channel )  
{
 	 return (new Illuminate\Notifications\ChannelManager)->deliverVia($channel);
}
/**
 * Set the locale of notifications.
 *
 * @param  string  $locale
 * @return static|$this
 */
static public function locale ( $locale )  
{
 	 return (new Illuminate\Notifications\ChannelManager)->locale($locale);
}
/**
 * Create a new manager instance.
 *
 * @param  \Illuminate\Foundation\Application  $app
 * @return void
 */
public function __construct ( $app )  
{
 	 return (new Illuminate\Notifications\ChannelManager)->__construct($app);
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
 	 return (new Illuminate\Notifications\ChannelManager)->driver($driver);
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
 	 return (new Illuminate\Notifications\ChannelManager)->extend($driver,$callback);
}
/**
 * Get all of the created "drivers".
 *
 * @return array
 */
static public function getDrivers ()  
{
 	 return (new Illuminate\Notifications\ChannelManager)->getDrivers();
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
 	 return (new Illuminate\Notifications\ChannelManager)->__call($method,$parameters);
}

}
