<?php 
class Artisan {
/**
 * Create a new console kernel instance.
 *
 * @param  \Illuminate\Contracts\Foundation\Application  $app
 * @param  \Illuminate\Contracts\Events\Dispatcher  $events
 * @return void
 */
public function __construct (Illuminate\Contracts\Foundation\Application $app ,Illuminate\Contracts\Events\Dispatcher $events )  
{
 	 return (new App\Console\Kernel)->__construct($app,$events);
}
/**
 * Run the console application.
 *
 * @param  \Symfony\Component\Console\Input\InputInterface  $input
 * @param  \Symfony\Component\Console\Output\OutputInterface|null  $output
 * @return int
 */
static public function handle ( $input , $output =NULL)  
{
 	 return (new App\Console\Kernel)->handle($input,$output);
}
/**
 * Terminate the application.
 *
 * @param  \Symfony\Component\Console\Input\InputInterface  $input
 * @param  int  $status
 * @return void
 */
static public function terminate ( $input , $status )  
{
 	 return (new App\Console\Kernel)->terminate($input,$status);
}
/**
 * Register a Closure based command with the application.
 *
 * @param  string  $signature
 * @param  \Closure  $callback
 * @return \Illuminate\Foundation\Console\ClosureCommand
 */
static public function command ( $signature ,Closure $callback )  
{
 	 return (new App\Console\Kernel)->command($signature,$callback);
}
/**
 * Register the given command with the console application.
 *
 * @param  \Symfony\Component\Console\Command\Command  $command
 * @return void
 */
static public function registerCommand ( $command )  
{
 	 return (new App\Console\Kernel)->registerCommand($command);
}
/**
 * Run an Artisan console command by name.
 *
 * @param  string  $command
 * @param  array  $parameters
 * @param  \Symfony\Component\Console\Output\OutputInterface|null  $outputBuffer
 * @return int
 *
 * @throws \Symfony\Component\Console\Exception\CommandNotFoundException
 */
static public function call ( $command ,array $parameters =array (), $outputBuffer =NULL)  
{
 	 return (new App\Console\Kernel)->call($command,$parameters,$outputBuffer);
}
/**
 * Queue the given console command.
 *
 * @param  string  $command
 * @param  array   $parameters
 * @return \Illuminate\Foundation\Bus\PendingDispatch
 */
static public function queue ( $command ,array $parameters =array ())  
{
 	 func_get_args();
	 return (new App\Console\Kernel)->queue($command,$parameters);
}
/**
 * Get all of the commands registered with the console.
 *
 * @return array
 */
static public function all ()  
{
 	 return (new App\Console\Kernel)->all();
}
/**
 * Get the output for the last run command.
 *
 * @return string
 */
static public function output ()  
{
 	 return (new App\Console\Kernel)->output();
}
/**
 * Bootstrap the application for artisan commands.
 *
 * @return void
 */
static public function bootstrap ()  
{
 	 return (new App\Console\Kernel)->bootstrap();
}
/**
 * Set the Artisan application instance.
 *
 * @param  \Illuminate\Console\Application  $artisan
 * @return void
 */
static public function setArtisan ( $artisan )  
{
 	 return (new App\Console\Kernel)->setArtisan($artisan);
}

}
