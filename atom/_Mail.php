<?php 
class Mail {
/**
 * Create a new Mailer instance.
 *
 * @param  \Illuminate\Contracts\View\Factory  $views
 * @param  \Swift_Mailer  $swift
 * @param  \Illuminate\Contracts\Events\Dispatcher|null  $events
 * @return void
 */
public function __construct (Illuminate\Contracts\View\Factory $views ,Swift_Mailer $swift ,Illuminate\Contracts\Events\Dispatcher $events =NULL)  
{
 	 return (new Illuminate\Mail\Mailer)->__construct($views,$swift,$events);
}
/**
 * Set the global from address and name.
 *
 * @param  string  $address
 * @param  string|null  $name
 * @return void
 */
static public function alwaysFrom ( $address , $name =NULL)  
{
 	 return (new Illuminate\Mail\Mailer)->alwaysFrom($address,$name);
}
/**
 * Set the global reply-to address and name.
 *
 * @param  string  $address
 * @param  string|null  $name
 * @return void
 */
static public function alwaysReplyTo ( $address , $name =NULL)  
{
 	 return (new Illuminate\Mail\Mailer)->alwaysReplyTo($address,$name);
}
/**
 * Set the global to address and name.
 *
 * @param  string  $address
 * @param  string|null  $name
 * @return void
 */
static public function alwaysTo ( $address , $name =NULL)  
{
 	 return (new Illuminate\Mail\Mailer)->alwaysTo($address,$name);
}
/**
 * Begin the process of mailing a mailable class instance.
 *
 * @param  mixed  $users
 * @return \Illuminate\Mail\PendingMail
 */
static public function to ( $users )  
{
 	 return (new Illuminate\Mail\Mailer)->to($users);
}
/**
 * Begin the process of mailing a mailable class instance.
 *
 * @param  mixed  $users
 * @return \Illuminate\Mail\PendingMail
 */
static public function cc ( $users )  
{
 	 return (new Illuminate\Mail\Mailer)->cc($users);
}
/**
 * Begin the process of mailing a mailable class instance.
 *
 * @param  mixed  $users
 * @return \Illuminate\Mail\PendingMail
 */
static public function bcc ( $users )  
{
 	 return (new Illuminate\Mail\Mailer)->bcc($users);
}
/**
 * Send a new message with only an HTML part.
 *
 * @param  string  $html
 * @param  mixed  $callback
 * @return void
 */
static public function html ( $html , $callback )  
{
 	 return (new Illuminate\Mail\Mailer)->html($html,$callback);
}
/**
 * Send a new message with only a raw text part.
 *
 * @param  string  $text
 * @param  mixed  $callback
 * @return void
 */
static public function raw ( $text , $callback )  
{
 	 return (new Illuminate\Mail\Mailer)->raw($text,$callback);
}
/**
 * Send a new message with only a plain part.
 *
 * @param  string  $view
 * @param  array  $data
 * @param  mixed  $callback
 * @return void
 */
static public function plain ( $view ,array $data , $callback )  
{
 	 return (new Illuminate\Mail\Mailer)->plain($view,$data,$callback);
}
/**
 * Render the given message as a view.
 *
 * @param  string|array  $view
 * @param  array  $data
 * @return string
 */
static public function render ( $view ,array $data =array ())  
{
 	 return (new Illuminate\Mail\Mailer)->render($view,$data);
}
/**
 * Send a new message using a view.
 *
 * @param  \Illuminate\Contracts\Mail\Mailable|string|array  $view
 * @param  array  $data
 * @param  \Closure|string|null  $callback
 * @return void
 */
static public function send ( $view ,array $data =array (), $callback =NULL)  
{
 	 return (new Illuminate\Mail\Mailer)->send($view,$data,$callback);
}
/**
 * Queue a new e-mail message for sending.
 *
 * @param  \Illuminate\Contracts\Mail\Mailable  $view
 * @param  string|null  $queue
 * @return mixed
 *
 * @throws \InvalidArgumentException
 */
static public function queue ( $view , $queue =NULL)  
{
 	 return (new Illuminate\Mail\Mailer)->queue($view,$queue);
}
/**
 * Queue a new e-mail message for sending on the given queue.
 *
 * @param  string  $queue
 * @param  \Illuminate\Contracts\Mail\Mailable  $view
 * @return mixed
 */
static public function onQueue ( $queue , $view )  
{
 	 return (new Illuminate\Mail\Mailer)->onQueue($queue,$view);
}
/**
 * Queue a new e-mail message for sending on the given queue.
 *
 * This method didn't match rest of framework's "onQueue" phrasing. Added "onQueue".
 *
 * @param  string  $queue
 * @param  \Illuminate\Contracts\Mail\Mailable  $view
 * @return mixed
 */
static public function queueOn ( $queue , $view )  
{
 	 return (new Illuminate\Mail\Mailer)->queueOn($queue,$view);
}
/**
 * Queue a new e-mail message for sending after (n) seconds.
 *
 * @param  \DateTimeInterface|\DateInterval|int  $delay
 * @param  \Illuminate\Contracts\Mail\Mailable  $view
 * @param  string|null  $queue
 * @return mixed
 *
 * @throws \InvalidArgumentException
 */
static public function later ( $delay , $view , $queue =NULL)  
{
 	 return (new Illuminate\Mail\Mailer)->later($delay,$view,$queue);
}
/**
 * Queue a new e-mail message for sending after (n) seconds on the given queue.
 *
 * @param  string  $queue
 * @param  \DateTimeInterface|\DateInterval|int  $delay
 * @param  \Illuminate\Contracts\Mail\Mailable  $view
 * @return mixed
 */
static public function laterOn ( $queue , $delay , $view )  
{
 	 return (new Illuminate\Mail\Mailer)->laterOn($queue,$delay,$view);
}
/**
 * Get the array of failed recipients.
 *
 * @return array
 */
static public function failures ()  
{
 	 return (new Illuminate\Mail\Mailer)->failures();
}
/**
 * Get the Swift Mailer instance.
 *
 * @return \Swift_Mailer
 */
static public function getSwiftMailer ()  
{
 	 return (new Illuminate\Mail\Mailer)->getSwiftMailer();
}
/**
 * Get the view factory instance.
 *
 * @return \Illuminate\Contracts\View\Factory
 */
static public function getViewFactory ()  
{
 	 return (new Illuminate\Mail\Mailer)->getViewFactory();
}
/**
 * Set the Swift Mailer instance.
 *
 * @param  \Swift_Mailer  $swift
 * @return void
 */
static public function setSwiftMailer ( $swift )  
{
 	 return (new Illuminate\Mail\Mailer)->setSwiftMailer($swift);
}
/**
 * Set the queue manager instance.
 *
 * @param  \Illuminate\Contracts\Queue\Factory  $queue
 * @return static|$this
 */
static public function setQueue (Illuminate\Contracts\Queue\Factory $queue )  
{
 	 return (new Illuminate\Mail\Mailer)->setQueue($queue);
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
 	 return (new Illuminate\Mail\Mailer)->macro($name,$macro);
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
 	 return (new Illuminate\Mail\Mailer)->mixin($mixin,$replace);
}
/**
 * Checks if macro is registered.
 *
 * @param  string  $name
 * @return bool
 */
static public function hasMacro ( $name )  
{
 	 return (new Illuminate\Mail\Mailer)->hasMacro($name);
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
 	 return (new Illuminate\Mail\Mailer)->__callStatic($method,$parameters);
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
 	 return (new Illuminate\Mail\Mailer)->__call($method,$parameters);
}

}
