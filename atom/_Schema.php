<?php 
class Schema {
public $defaultStringLength ;
/**
 * Determine if the given table exists.
 *
 * @param  string  $table
 * @return bool
 */
static public function hasTable ( $table )  
{
 	 return (new Illuminate\Database\Schema\MySqlBuilder)->hasTable($table);
}
/**
 * Get the column listing for a given table.
 *
 * @param  string  $table
 * @return array
 */
static public function getColumnListing ( $table )  
{
 	 return (new Illuminate\Database\Schema\MySqlBuilder)->getColumnListing($table);
}
/**
 * Drop all tables from the database.
 *
 * @return void
 */
static public function dropAllTables ()  
{
 	 return (new Illuminate\Database\Schema\MySqlBuilder)->dropAllTables();
}
/**
 * Drop all views from the database.
 *
 * @return void
 */
static public function dropAllViews ()  
{
 	 return (new Illuminate\Database\Schema\MySqlBuilder)->dropAllViews();
}
/**
 * Create a new database Schema manager.
 *
 * @param  \Illuminate\Database\Connection  $connection
 * @return void
 */
public function __construct (Illuminate\Database\Connection $connection )  
{
 	 return (new Illuminate\Database\Schema\MySqlBuilder)->__construct($connection);
}
/**
 * Set the default string length for migrations.
 *
 * @param  int  $length
 * @return void
 */
static public function defaultStringLength ( $length )  
{
 	 return (new Illuminate\Database\Schema\MySqlBuilder)->defaultStringLength($length);
}
/**
 * Determine if the given table has a given column.
 *
 * @param  string  $table
 * @param  string  $column
 * @return bool
 */
static public function hasColumn ( $table , $column )  
{
 	 return (new Illuminate\Database\Schema\MySqlBuilder)->hasColumn($table,$column);
}
/**
 * Determine if the given table has given columns.
 *
 * @param  string  $table
 * @param  array   $columns
 * @return bool
 */
static public function hasColumns ( $table ,array $columns )  
{
 	 return (new Illuminate\Database\Schema\MySqlBuilder)->hasColumns($table,$columns);
}
/**
 * Get the data type for the given column name.
 *
 * @param  string  $table
 * @param  string  $column
 * @return string
 */
static public function getColumnType ( $table , $column )  
{
 	 return (new Illuminate\Database\Schema\MySqlBuilder)->getColumnType($table,$column);
}
/**
 * Modify a table on the schema.
 *
 * @param  string    $table
 * @param  \Closure  $callback
 * @return void
 */
static public function table ( $table ,Closure $callback )  
{
 	 return (new Illuminate\Database\Schema\MySqlBuilder)->table($table,$callback);
}
/**
 * Create a new table on the schema.
 *
 * @param  string    $table
 * @param  \Closure  $callback
 * @return void
 */
static public function create ( $table ,Closure $callback )  
{
 	 return (new Illuminate\Database\Schema\MySqlBuilder)->create($table,$callback);
}
/**
 * Drop a table from the schema.
 *
 * @param  string  $table
 * @return void
 */
static public function drop ( $table )  
{
 	 return (new Illuminate\Database\Schema\MySqlBuilder)->drop($table);
}
/**
 * Drop a table from the schema if it exists.
 *
 * @param  string  $table
 * @return void
 */
static public function dropIfExists ( $table )  
{
 	 return (new Illuminate\Database\Schema\MySqlBuilder)->dropIfExists($table);
}
/**
 * Rename a table on the schema.
 *
 * @param  string  $from
 * @param  string  $to
 * @return void
 */
static public function rename ( $from , $to )  
{
 	 return (new Illuminate\Database\Schema\MySqlBuilder)->rename($from,$to);
}
/**
 * Enable foreign key constraints.
 *
 * @return bool
 */
static public function enableForeignKeyConstraints ()  
{
 	 return (new Illuminate\Database\Schema\MySqlBuilder)->enableForeignKeyConstraints();
}
/**
 * Disable foreign key constraints.
 *
 * @return bool
 */
static public function disableForeignKeyConstraints ()  
{
 	 return (new Illuminate\Database\Schema\MySqlBuilder)->disableForeignKeyConstraints();
}
/**
 * Get the database connection instance.
 *
 * @return \Illuminate\Database\Connection
 */
static public function getConnection ()  
{
 	 return (new Illuminate\Database\Schema\MySqlBuilder)->getConnection();
}
/**
 * Set the database connection instance.
 *
 * @param  \Illuminate\Database\Connection  $connection
 * @return static|$this
 */
static public function setConnection (Illuminate\Database\Connection $connection )  
{
 	 return (new Illuminate\Database\Schema\MySqlBuilder)->setConnection($connection);
}
/**
 * Set the Schema Blueprint resolver callback.
 *
 * @param  \Closure  $resolver
 * @return void
 */
static public function blueprintResolver (Closure $resolver )  
{
 	 return (new Illuminate\Database\Schema\MySqlBuilder)->blueprintResolver($resolver);
}

}
