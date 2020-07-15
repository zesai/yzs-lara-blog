<?php 
class Bus {
/**
 * Create a new command dispatcher instance.
 *
 * @param  \Illuminate\Contracts\Container\Container  $container
 * @param  \Closure|null  $queueResolver
 * @return void
 */
public function __construct (Illuminate\Contracts\Container\Container $container ,Closure $queueResolver =NULL)  
{
 	 return (new Illuminate\Bus\Dispatcher)->__construct($container,$queueResolver);
}
/**
 * Dispatch a command to its appropriate handler.
 *
 * @param  mixed  $command
 * @return mixed
 */
static public function dispatch ( $command )  
{
 	 return (new Illuminate\Bus\Dispatcher)->dispatch($command);
}
/**
 * Dispatch a command to its appropriate handler in the current process.
 *
 * @param  mixed  $command
 * @param  mixed  $handler
 * @return mixed
 */
static public function dispatchNow ( $command , $handler =NULL)  
{
 	 return (new Illuminate\Bus\Dispatcher)->dispatchNow($command,$handler);
}
/**
 * Determine if the given command has a handler.
 *
 * @param  mixed  $command
 * @return bool
 */
static public function hasCommandHandler ( $command )  
{
 	 return (new Illuminate\Bus\Dispatcher)->hasCommandHandler($command);
}
/**
 * Retrieve the handler for a command.
 *
 * @param  mixed  $command
 * @return bool|mixed
 */
static public function getCommandHandler ( $command )  
{
 	 return (new Illuminate\Bus\Dispatcher)->getCommandHandler($command);
}
/**
 * Dispatch a command to its appropriate handler behind a queue.
 *
 * @param  mixed  $command
 * @return mixed
 *
 * @throws \RuntimeException
 */
static public function dispatchToQueue ( $command )  
{
 	 return (new Illuminate\Bus\Dispatcher)->dispatchToQueue($command);
}
/**
 * Set the pipes through which commands should be piped before dispatching.
 *
 * @param  array  $pipes
 * @return static|$this
 */
static public function pipeThrough (array $pipes )  
{
 	 return (new Illuminate\Bus\Dispatcher)->pipeThrough($pipes);
}
/**
 * Map a command to a handler.
 *
 * @param  array  $map
 * @return static|$this
 */
static public function map (array $map )  
{
 	 return (new Illuminate\Bus\Dispatcher)->map($map);
}

}
