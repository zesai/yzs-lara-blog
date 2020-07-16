<?php 
class DB {
/**
 * Get a schema builder instance for the connection.
 *
 * @return \Illuminate\Database\Schema\MySqlBuilder
 */
static public function getSchemaBuilder ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->getSchemaBuilder();
}
/**
 * Bind values to their parameters in the given statement.
 *
 * @param  \PDOStatement $statement
 * @param  array  $bindings
 * @return void
 */
static public function bindValues ( $statement , $bindings )  
{
 	 return (new Illuminate\Database\MySqlConnection)->bindValues($statement,$bindings);
}
/**
 * Create a new database connection instance.
 *
 * @param  \PDO|\Closure     $pdo
 * @param  string   $database
 * @param  string   $tablePrefix
 * @param  array    $config
 * @return void
 */
public function __construct ( $pdo , $database ='', $tablePrefix ='',array $config =array ())  
{
 	 return (new Illuminate\Database\MySqlConnection)->__construct($pdo,$database,$tablePrefix,$config);
}
/**
 * Set the query grammar to the default implementation.
 *
 * @return void
 */
static public function useDefaultQueryGrammar ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->useDefaultQueryGrammar();
}
/**
 * Set the schema grammar to the default implementation.
 *
 * @return void
 */
static public function useDefaultSchemaGrammar ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->useDefaultSchemaGrammar();
}
/**
 * Set the query post processor to the default implementation.
 *
 * @return void
 */
static public function useDefaultPostProcessor ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->useDefaultPostProcessor();
}
/**
 * Begin a fluent query against a database table.
 *
 * @param  \Closure|\Illuminate\Database\Query\Builder|string  $table
 * @param  string|null  $as
 * @return \Illuminate\Database\Query\Builder
 */
static public function table ( $table , $as =NULL)  
{
 	 return (new Illuminate\Database\MySqlConnection)->table($table,$as);
}
/**
 * Get a new query builder instance.
 *
 * @return \Illuminate\Database\Query\Builder
 */
static public function query ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->query();
}
/**
 * Run a select statement and return a single result.
 *
 * @param  string  $query
 * @param  array   $bindings
 * @param  bool  $useReadPdo
 * @return a single result.
 */
static public function selectOne ( $query , $bindings =array (), $useReadPdo =true)  
{
 	 return (new Illuminate\Database\MySqlConnection)->selectOne($query,$bindings,$useReadPdo);
}
/**
 * Run a select statement against the database.
 *
 * @param  string  $query
 * @param  array   $bindings
 * @return array
 */
static public function selectFromWriteConnection ( $query , $bindings =array ())  
{
 	 return (new Illuminate\Database\MySqlConnection)->selectFromWriteConnection($query,$bindings);
}
/**
 * Run a select statement against the database.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @param  bool  $useReadPdo
 * @return array
 */
static public function select ( $query , $bindings =array (), $useReadPdo =true)  
{
 	 return (new Illuminate\Database\MySqlConnection)->select($query,$bindings,$useReadPdo);
}
/**
 * Run a select statement against the database and returns a generator.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @param  bool  $useReadPdo
 * @return \Generator
 */
static public function cursor ( $query , $bindings =array (), $useReadPdo =true)  
{
 	 return (new Illuminate\Database\MySqlConnection)->cursor($query,$bindings,$useReadPdo);
}
/**
 * Run an insert statement against the database.
 *
 * @param  string  $query
 * @param  array   $bindings
 * @return bool
 */
static public function insert ( $query , $bindings =array ())  
{
 	 return (new Illuminate\Database\MySqlConnection)->insert($query,$bindings);
}
/**
 * Run an update statement against the database.
 *
 * @param  string  $query
 * @param  array   $bindings
 * @return int
 */
static public function update ( $query , $bindings =array ())  
{
 	 return (new Illuminate\Database\MySqlConnection)->update($query,$bindings);
}
/**
 * Run a delete statement against the database.
 *
 * @param  string  $query
 * @param  array   $bindings
 * @return int
 */
static public function delete ( $query , $bindings =array ())  
{
 	 return (new Illuminate\Database\MySqlConnection)->delete($query,$bindings);
}
/**
 * Execute an SQL statement and return the boolean result.
 *
 * @param  string  $query
 * @param  array   $bindings
 * @return the boolean result.
 */
static public function statement ( $query , $bindings =array ())  
{
 	 return (new Illuminate\Database\MySqlConnection)->statement($query,$bindings);
}
/**
 * Run an SQL statement and get the number of rows affected.
 *
 * @param  string  $query
 * @param  array   $bindings
 * @return int
 */
static public function affectingStatement ( $query , $bindings =array ())  
{
 	 return (new Illuminate\Database\MySqlConnection)->affectingStatement($query,$bindings);
}
/**
 * Run a raw, unprepared query against the PDO connection.
 *
 * @param  string  $query
 * @return bool
 */
static public function unprepared ( $query )  
{
 	 return (new Illuminate\Database\MySqlConnection)->unprepared($query);
}
/**
 * Execute the given callback in "dry run" mode.
 *
 * @param  \Closure  $callback
 * @return array
 */
static public function pretend (Closure $callback )  
{
 	 return (new Illuminate\Database\MySqlConnection)->pretend($callback);
}
/**
 * Prepare the query bindings for execution.
 *
 * @param  array  $bindings
 * @return array
 */
static public function prepareBindings (array $bindings )  
{
 	 return (new Illuminate\Database\MySqlConnection)->prepareBindings($bindings);
}
/**
 * Log a query in the connection's query log.
 *
 * @param  string  $query
 * @param  array   $bindings
 * @param  float|null  $time
 * @return void
 */
static public function logQuery ( $query , $bindings , $time =NULL)  
{
 	 return (new Illuminate\Database\MySqlConnection)->logQuery($query,$bindings,$time);
}
/**
 * Reconnect to the database.
 *
 * @return void
 *
 * @throws \LogicException
 */
static public function reconnect ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->reconnect();
}
/**
 * Disconnect from the underlying PDO connection.
 *
 * @return void
 */
static public function disconnect ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->disconnect();
}
/**
 * Register a database query listener with the connection.
 *
 * @param  \Closure  $callback
 * @return void
 */
static public function listen (Closure $callback )  
{
 	 return (new Illuminate\Database\MySqlConnection)->listen($callback);
}
/**
 * Get a new raw query expression.
 *
 * @param  mixed  $value
 * @return \Illuminate\Database\Query\Expression
 */
static public function raw ( $value )  
{
 	 return (new Illuminate\Database\MySqlConnection)->raw($value);
}
/**
 * Indicate if any records have been modified.
 *
 * @param  bool  $value
 * @return void
 */
static public function recordsHaveBeenModified ( $value =true)  
{
 	 return (new Illuminate\Database\MySqlConnection)->recordsHaveBeenModified($value);
}
/**
 * Is Doctrine available?
 *
 * @return bool
 */
static public function isDoctrineAvailable ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->isDoctrineAvailable();
}
/**
 * Get a Doctrine Schema Column instance.
 *
 * @param  string  $table
 * @param  string  $column
 * @return \Doctrine\DBAL\Schema\Column
 */
static public function getDoctrineColumn ( $table , $column )  
{
 	 return (new Illuminate\Database\MySqlConnection)->getDoctrineColumn($table,$column);
}
/**
 * Get the Doctrine DBAL schema manager for the connection.
 *
 * @return \Doctrine\DBAL\Schema\AbstractSchemaManager
 */
static public function getDoctrineSchemaManager ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->getDoctrineSchemaManager();
}
/**
 * Get the Doctrine DBAL database connection instance.
 *
 * @return \Doctrine\DBAL\Connection
 */
static public function getDoctrineConnection ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->getDoctrineConnection();
}
/**
 * Get the current PDO connection.
 *
 * @return \PDO
 */
static public function getPdo ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->getPdo();
}
/**
 * Get the current PDO connection used for reading.
 *
 * @return \PDO
 */
static public function getReadPdo ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->getReadPdo();
}
/**
 * Set the PDO connection.
 *
 * @param  \PDO|\Closure|null  $pdo
 * @return static|$this
 */
static public function setPdo ( $pdo )  
{
 	 return (new Illuminate\Database\MySqlConnection)->setPdo($pdo);
}
/**
 * Set the PDO connection used for reading.
 *
 * @param  \PDO|\Closure|null  $pdo
 * @return static|$this
 */
static public function setReadPdo ( $pdo )  
{
 	 return (new Illuminate\Database\MySqlConnection)->setReadPdo($pdo);
}
/**
 * Set the reconnect instance on the connection.
 *
 * @param  callable  $reconnector
 * @return static|$this
 */
static public function setReconnector (callable $reconnector )  
{
 	 return (new Illuminate\Database\MySqlConnection)->setReconnector($reconnector);
}
/**
 * Get the database connection name.
 *
 * @return string|null
 */
static public function getName ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->getName();
}
/**
 * Get an option from the configuration options.
 *
 * @param  string|null  $option
 * @return mixed
 */
static public function getConfig ( $option =NULL)  
{
 	 return (new Illuminate\Database\MySqlConnection)->getConfig($option);
}
/**
 * Get the PDO driver name.
 *
 * @return string
 */
static public function getDriverName ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->getDriverName();
}
/**
 * Get the query grammar used by the connection.
 *
 * @return \Illuminate\Database\Query\Grammars\Grammar
 */
static public function getQueryGrammar ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->getQueryGrammar();
}
/**
 * Set the query grammar used by the connection.
 *
 * @param  \Illuminate\Database\Query\Grammars\Grammar  $grammar
 * @return static|$this
 */
static public function setQueryGrammar (Illuminate\Database\Query\Grammars\Grammar $grammar )  
{
 	 return (new Illuminate\Database\MySqlConnection)->setQueryGrammar($grammar);
}
/**
 * Get the schema grammar used by the connection.
 *
 * @return \Illuminate\Database\Schema\Grammars\Grammar
 */
static public function getSchemaGrammar ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->getSchemaGrammar();
}
/**
 * Set the schema grammar used by the connection.
 *
 * @param  \Illuminate\Database\Schema\Grammars\Grammar  $grammar
 * @return static|$this
 */
static public function setSchemaGrammar (Illuminate\Database\Schema\Grammars\Grammar $grammar )  
{
 	 return (new Illuminate\Database\MySqlConnection)->setSchemaGrammar($grammar);
}
/**
 * Get the query post processor used by the connection.
 *
 * @return \Illuminate\Database\Query\Processors\Processor
 */
static public function getPostProcessor ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->getPostProcessor();
}
/**
 * Set the query post processor used by the connection.
 *
 * @param  \Illuminate\Database\Query\Processors\Processor  $processor
 * @return static|$this
 */
static public function setPostProcessor (Illuminate\Database\Query\Processors\Processor $processor )  
{
 	 return (new Illuminate\Database\MySqlConnection)->setPostProcessor($processor);
}
/**
 * Get the event dispatcher used by the connection.
 *
 * @return \Illuminate\Contracts\Events\Dispatcher
 */
static public function getEventDispatcher ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->getEventDispatcher();
}
/**
 * Set the event dispatcher instance on the connection.
 *
 * @param  \Illuminate\Contracts\Events\Dispatcher  $events
 * @return static|$this
 */
static public function setEventDispatcher (Illuminate\Contracts\Events\Dispatcher $events )  
{
 	 return (new Illuminate\Database\MySqlConnection)->setEventDispatcher($events);
}
/**
 * Unset the event dispatcher for this connection.
 *
 * @return void
 */
static public function unsetEventDispatcher ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->unsetEventDispatcher();
}
/**
 * Determine if the connection is in a "dry run".
 *
 * @return bool
 */
static public function pretending ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->pretending();
}
/**
 * Get the connection query log.
 *
 * @return array
 */
static public function getQueryLog ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->getQueryLog();
}
/**
 * Clear the query log.
 *
 * @return void
 */
static public function flushQueryLog ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->flushQueryLog();
}
/**
 * Enable the query log on the connection.
 *
 * @return void
 */
static public function enableQueryLog ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->enableQueryLog();
}
/**
 * Disable the query log on the connection.
 *
 * @return void
 */
static public function disableQueryLog ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->disableQueryLog();
}
/**
 * Determine whether we're logging queries.
 *
 * @return bool
 */
static public function logging ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->logging();
}
/**
 * Get the name of the connected database.
 *
 * @return string
 */
static public function getDatabaseName ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->getDatabaseName();
}
/**
 * Set the name of the connected database.
 *
 * @param  string  $database
 * @return static|$this
 */
static public function setDatabaseName ( $database )  
{
 	 return (new Illuminate\Database\MySqlConnection)->setDatabaseName($database);
}
/**
 * Get the table prefix for the connection.
 *
 * @return string
 */
static public function getTablePrefix ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->getTablePrefix();
}
/**
 * Set the table prefix in use by the connection.
 *
 * @param  string  $prefix
 * @return static|$this
 */
static public function setTablePrefix ( $prefix )  
{
 	 return (new Illuminate\Database\MySqlConnection)->setTablePrefix($prefix);
}
/**
 * Set the table prefix and return the grammar.
 *
 * @param  \Illuminate\Database\Grammar  $grammar
 * @return the grammar.
 */
static public function withTablePrefix (Illuminate\Database\Grammar $grammar )  
{
 	 return (new Illuminate\Database\MySqlConnection)->withTablePrefix($grammar);
}
/**
 * Register a connection resolver.
 *
 * @param  string  $driver
 * @param  \Closure  $callback
 * @return void
 */
static public function resolverFor ( $driver ,Closure $callback )  
{
 	 return (new Illuminate\Database\MySqlConnection)->resolverFor($driver,$callback);
}
/**
 * Get the connection resolver for the given driver.
 *
 * @param  string  $driver
 * @return mixed
 */
static public function getResolver ( $driver )  
{
 	 return (new Illuminate\Database\MySqlConnection)->getResolver($driver);
}
/**
 * Execute a Closure within a transaction.
 *
 * @param  \Closure  $callback
 * @param  int  $attempts
 * @return mixed
 *
 * @throws \Exception|\Throwable
 */
static public function transaction (Closure $callback , $attempts =1)  
{
 	 return (new Illuminate\Database\MySqlConnection)->transaction($callback,$attempts);
}
/**
 * Start a new database transaction.
 *
 * @return void
 *
 * @throws \Exception
 */
static public function beginTransaction ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->beginTransaction();
}
/**
 * Commit the active database transaction.
 *
 * @return void
 */
static public function commit ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->commit();
}
/**
 * Rollback the active database transaction.
 *
 * @param  int|null  $toLevel
 * @return void
 *
 * @throws \Exception
 */
static public function rollBack ( $toLevel =NULL)  
{
 	 return (new Illuminate\Database\MySqlConnection)->rollBack($toLevel);
}
/**
 * Get the number of active transactions.
 *
 * @return int
 */
static public function transactionLevel ()  
{
 	 return (new Illuminate\Database\MySqlConnection)->transactionLevel();
}

}
