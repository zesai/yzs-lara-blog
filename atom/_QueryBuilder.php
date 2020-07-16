<?php 
class QueryBuilder {
public $connection ;
public $grammar ;
public $processor ;
public $bindings ;
public $aggregate ;
public $columns ;
public $distinct ;
public $from ;
public $joins ;
public $wheres ;
public $groups ;
public $havings ;
public $orders ;
public $limit ;
public $offset ;
public $unions ;
public $unionLimit ;
public $unionOffset ;
public $unionOrders ;
public $lock ;
public $operators ;
public $useWritePdo ;
/**
 * Create a new query builder instance.
 *
 * @param  \Illuminate\Database\ConnectionInterface  $connection
 * @param  \Illuminate\Database\Query\Grammars\Grammar|null  $grammar
 * @param  \Illuminate\Database\Query\Processors\Processor|null  $processor
 * @return void
 */
public function __construct (Illuminate\Database\ConnectionInterface $connection ,Illuminate\Database\Query\Grammars\Grammar $grammar =NULL,Illuminate\Database\Query\Processors\Processor $processor =NULL)  
{
 	 return (new Illuminate\Database\Query\Builder)->__construct($connection,$grammar,$processor);
}
/**
 * Set the columns to be selected.
 *
 * @param  array|mixed  $columns
 * @return static|$this
 */
static public function select ( $columns =array (  0 => '*',))  
{
 	 func_get_args();
	 return (new Illuminate\Database\Query\Builder)->select($columns);
}
/**
 * Add a subselect expression to the query.
 *
 * @param  \Closure|\Illuminate\Database\Query\Builder|string $query
 * @param  string  $as
 * @return static
 *
 * @throws \InvalidArgumentException
 */
static public function selectSub ( $query , $as )  
{
 	 return (new Illuminate\Database\Query\Builder)->selectSub($query,$as);
}
/**
 * Add a new "raw" select expression to the query.
 *
 * @param  string  $expression
 * @param  array   $bindings
 * @return static
 */
static public function selectRaw ( $expression ,array $bindings =array ())  
{
 	 return (new Illuminate\Database\Query\Builder)->selectRaw($expression,$bindings);
}
/**
 * Makes "from" fetch from a subquery.
 *
 * @param  \Closure|\Illuminate\Database\Query\Builder|string $query
 * @param  string  $as
 * @return static
 *
 * @throws \InvalidArgumentException
 */
static public function fromSub ( $query , $as )  
{
 	 return (new Illuminate\Database\Query\Builder)->fromSub($query,$as);
}
/**
 * Add a raw from clause to the query.
 *
 * @param  string  $expression
 * @param  mixed   $bindings
 * @return static
 */
static public function fromRaw ( $expression , $bindings =array ())  
{
 	 return (new Illuminate\Database\Query\Builder)->fromRaw($expression,$bindings);
}
/**
 * Add a new select column to the query.
 *
 * @param  array|mixed  $column
 * @return static|$this
 */
static public function addSelect ( $column )  
{
 	 func_get_args();
	 return (new Illuminate\Database\Query\Builder)->addSelect($column);
}
/**
 * Force the query to only return distinct results.
 *
 * @return distinct results.
 */
static public function distinct ()  
{
 	 func_get_args();
	 return (new Illuminate\Database\Query\Builder)->distinct();
}
/**
 * Set the table which the query is targeting.
 *
 * @param  \Closure|\Illuminate\Database\Query\Builder|string  $table
 * @param  string|null  $as
 * @return static|$this
 */
static public function from ( $table , $as =NULL)  
{
 	 return (new Illuminate\Database\Query\Builder)->from($table,$as);
}
/**
 * Add a join clause to the query.
 *
 * @param  string  $table
 * @param  \Closure|string  $first
 * @param  string|null  $operator
 * @param  string|null  $second
 * @param  string  $type
 * @param  bool    $where
 * @return static|$this
 */
static public function join ( $table , $first , $operator =NULL, $second =NULL, $type ='inner', $where =false)  
{
 	 return (new Illuminate\Database\Query\Builder)->join($table,$first,$operator,$second,$type,$where);
}
/**
 * Add a "join where" clause to the query.
 *
 * @param  string  $table
 * @param  \Closure|string  $first
 * @param  string  $operator
 * @param  string  $second
 * @param  string  $type
 * @return static
 */
static public function joinWhere ( $table , $first , $operator , $second , $type ='inner')  
{
 	 return (new Illuminate\Database\Query\Builder)->joinWhere($table,$first,$operator,$second,$type);
}
/**
 * Add a subquery join clause to the query.
 *
 * @param  \Closure|\Illuminate\Database\Query\Builder|string $query
 * @param  string  $as
 * @param  \Closure|string  $first
 * @param  string|null  $operator
 * @param  string|null  $second
 * @param  string  $type
 * @param  bool    $where
 * @return static
 *
 * @throws \InvalidArgumentException
 */
static public function joinSub ( $query , $as , $first , $operator =NULL, $second =NULL, $type ='inner', $where =false)  
{
 	 return (new Illuminate\Database\Query\Builder)->joinSub($query,$as,$first,$operator,$second,$type,$where);
}
/**
 * Add a left join to the query.
 *
 * @param  string  $table
 * @param  \Closure|string  $first
 * @param  string|null  $operator
 * @param  string|null  $second
 * @return static
 */
static public function leftJoin ( $table , $first , $operator =NULL, $second =NULL)  
{
 	 return (new Illuminate\Database\Query\Builder)->leftJoin($table,$first,$operator,$second);
}
/**
 * Add a "join where" clause to the query.
 *
 * @param  string  $table
 * @param  \Closure|string  $first
 * @param  string  $operator
 * @param  string  $second
 * @return static
 */
static public function leftJoinWhere ( $table , $first , $operator , $second )  
{
 	 return (new Illuminate\Database\Query\Builder)->leftJoinWhere($table,$first,$operator,$second);
}
/**
 * Add a subquery left join to the query.
 *
 * @param  \Closure|\Illuminate\Database\Query\Builder|string $query
 * @param  string  $as
 * @param  \Closure|string  $first
 * @param  string|null  $operator
 * @param  string|null  $second
 * @return static
 */
static public function leftJoinSub ( $query , $as , $first , $operator =NULL, $second =NULL)  
{
 	 return (new Illuminate\Database\Query\Builder)->leftJoinSub($query,$as,$first,$operator,$second);
}
/**
 * Add a right join to the query.
 *
 * @param  string  $table
 * @param  \Closure|string  $first
 * @param  string|null  $operator
 * @param  string|null  $second
 * @return static
 */
static public function rightJoin ( $table , $first , $operator =NULL, $second =NULL)  
{
 	 return (new Illuminate\Database\Query\Builder)->rightJoin($table,$first,$operator,$second);
}
/**
 * Add a "right join where" clause to the query.
 *
 * @param  string  $table
 * @param  \Closure|string  $first
 * @param  string  $operator
 * @param  string  $second
 * @return static
 */
static public function rightJoinWhere ( $table , $first , $operator , $second )  
{
 	 return (new Illuminate\Database\Query\Builder)->rightJoinWhere($table,$first,$operator,$second);
}
/**
 * Add a subquery right join to the query.
 *
 * @param  \Closure|\Illuminate\Database\Query\Builder|string $query
 * @param  string  $as
 * @param  \Closure|string  $first
 * @param  string|null  $operator
 * @param  string|null  $second
 * @return static
 */
static public function rightJoinSub ( $query , $as , $first , $operator =NULL, $second =NULL)  
{
 	 return (new Illuminate\Database\Query\Builder)->rightJoinSub($query,$as,$first,$operator,$second);
}
/**
 * Add a "cross join" clause to the query.
 *
 * @param  string  $table
 * @param  \Closure|string|null  $first
 * @param  string|null  $operator
 * @param  string|null  $second
 * @return static
 */
static public function crossJoin ( $table , $first =NULL, $operator =NULL, $second =NULL)  
{
 	 return (new Illuminate\Database\Query\Builder)->crossJoin($table,$first,$operator,$second);
}
/**
 * Merge an array of where clauses and bindings.
 *
 * @param  array  $wheres
 * @param  array  $bindings
 * @return void
 */
static public function mergeWheres ( $wheres , $bindings )  
{
 	 return (new Illuminate\Database\Query\Builder)->mergeWheres($wheres,$bindings);
}
/**
 * Add a basic where clause to the query.
 *
 * @param  \Closure|string|array  $column
 * @param  mixed   $operator
 * @param  mixed   $value
 * @param  string  $boolean
 * @return static|$this
 */
static public function where ( $column , $operator =NULL, $value =NULL, $boolean ='and')  
{
 	 return (new Illuminate\Database\Query\Builder)->where($column,$operator,$value,$boolean);
}
/**
 * Prepare the value and operator for a where clause.
 *
 * @param  string  $value
 * @param  string  $operator
 * @param  bool  $useDefault
 * @return array
 *
 * @throws \InvalidArgumentException
 */
static public function prepareValueAndOperator ( $value , $operator , $useDefault =false)  
{
 	 return (new Illuminate\Database\Query\Builder)->prepareValueAndOperator($value,$operator,$useDefault);
}
/**
 * Add an "or where" clause to the query.
 *
 * @param  \Closure|string|array  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return static
 */
static public function orWhere ( $column , $operator =NULL, $value =NULL)  
{
 	 return (new Illuminate\Database\Query\Builder)->orWhere($column,$operator,$value);
}
/**
 * Add a "where" clause comparing two columns to the query.
 *
 * @param  string|array  $first
 * @param  string|null  $operator
 * @param  string|null  $second
 * @param  string|null  $boolean
 * @return static
 */
static public function whereColumn ( $first , $operator =NULL, $second =NULL, $boolean ='and')  
{
 	 return (new Illuminate\Database\Query\Builder)->whereColumn($first,$operator,$second,$boolean);
}
/**
 * Add an "or where" clause comparing two columns to the query.
 *
 * @param  string|array  $first
 * @param  string|null  $operator
 * @param  string|null  $second
 * @return static
 */
static public function orWhereColumn ( $first , $operator =NULL, $second =NULL)  
{
 	 return (new Illuminate\Database\Query\Builder)->orWhereColumn($first,$operator,$second);
}
/**
 * Add a raw where clause to the query.
 *
 * @param  string  $sql
 * @param  mixed   $bindings
 * @param  string  $boolean
 * @return static|$this
 */
static public function whereRaw ( $sql , $bindings =array (), $boolean ='and')  
{
 	 return (new Illuminate\Database\Query\Builder)->whereRaw($sql,$bindings,$boolean);
}
/**
 * Add a raw or where clause to the query.
 *
 * @param  string  $sql
 * @param  mixed   $bindings
 * @return static
 */
static public function orWhereRaw ( $sql , $bindings =array ())  
{
 	 return (new Illuminate\Database\Query\Builder)->orWhereRaw($sql,$bindings);
}
/**
 * Add a "where in" clause to the query.
 *
 * @param  string  $column
 * @param  mixed   $values
 * @param  string  $boolean
 * @param  bool    $not
 * @return static|$this
 */
static public function whereIn ( $column , $values , $boolean ='and', $not =false)  
{
 	 return (new Illuminate\Database\Query\Builder)->whereIn($column,$values,$boolean,$not);
}
/**
 * Add an "or where in" clause to the query.
 *
 * @param  string  $column
 * @param  mixed   $values
 * @return static
 */
static public function orWhereIn ( $column , $values )  
{
 	 return (new Illuminate\Database\Query\Builder)->orWhereIn($column,$values);
}
/**
 * Add a "where not in" clause to the query.
 *
 * @param  string  $column
 * @param  mixed   $values
 * @param  string  $boolean
 * @return static
 */
static public function whereNotIn ( $column , $values , $boolean ='and')  
{
 	 return (new Illuminate\Database\Query\Builder)->whereNotIn($column,$values,$boolean);
}
/**
 * Add an "or where not in" clause to the query.
 *
 * @param  string  $column
 * @param  mixed   $values
 * @return static
 */
static public function orWhereNotIn ( $column , $values )  
{
 	 return (new Illuminate\Database\Query\Builder)->orWhereNotIn($column,$values);
}
/**
 * Add a "where in raw" clause for integer values to the query.
 *
 * @param  string  $column
 * @param  \Illuminate\Contracts\Support\Arrayable|array  $values
 * @param  string  $boolean
 * @param  bool  $not
 * @return static|$this
 */
static public function whereIntegerInRaw ( $column , $values , $boolean ='and', $not =false)  
{
 	 return (new Illuminate\Database\Query\Builder)->whereIntegerInRaw($column,$values,$boolean,$not);
}
/**
 * Add a "where not in raw" clause for integer values to the query.
 *
 * @param  string  $column
 * @param  \Illuminate\Contracts\Support\Arrayable|array  $values
 * @param  string  $boolean
 * @return static|$this
 */
static public function whereIntegerNotInRaw ( $column , $values , $boolean ='and')  
{
 	 return (new Illuminate\Database\Query\Builder)->whereIntegerNotInRaw($column,$values,$boolean);
}
/**
 * Add a "where null" clause to the query.
 *
 * @param  string|array  $columns
 * @param  string  $boolean
 * @param  bool    $not
 * @return static|$this
 */
static public function whereNull ( $columns , $boolean ='and', $not =false)  
{
 	 return (new Illuminate\Database\Query\Builder)->whereNull($columns,$boolean,$not);
}
/**
 * Add an "or where null" clause to the query.
 *
 * @param  string  $column
 * @return static
 */
static public function orWhereNull ( $column )  
{
 	 return (new Illuminate\Database\Query\Builder)->orWhereNull($column);
}
/**
 * Add a "where not null" clause to the query.
 *
 * @param  string  $column
 * @param  string  $boolean
 * @return static
 */
static public function whereNotNull ( $column , $boolean ='and')  
{
 	 return (new Illuminate\Database\Query\Builder)->whereNotNull($column,$boolean);
}
/**
 * Add a where between statement to the query.
 *
 * @param  string  $column
 * @param  array   $values
 * @param  string  $boolean
 * @param  bool  $not
 * @return static|$this
 */
static public function whereBetween ( $column ,array $values , $boolean ='and', $not =false)  
{
 	 return (new Illuminate\Database\Query\Builder)->whereBetween($column,$values,$boolean,$not);
}
/**
 * Add an or where between statement to the query.
 *
 * @param  string  $column
 * @param  array   $values
 * @return static
 */
static public function orWhereBetween ( $column ,array $values )  
{
 	 return (new Illuminate\Database\Query\Builder)->orWhereBetween($column,$values);
}
/**
 * Add a where not between statement to the query.
 *
 * @param  string  $column
 * @param  array   $values
 * @param  string  $boolean
 * @return static
 */
static public function whereNotBetween ( $column ,array $values , $boolean ='and')  
{
 	 return (new Illuminate\Database\Query\Builder)->whereNotBetween($column,$values,$boolean);
}
/**
 * Add an or where not between statement to the query.
 *
 * @param  string  $column
 * @param  array   $values
 * @return static
 */
static public function orWhereNotBetween ( $column ,array $values )  
{
 	 return (new Illuminate\Database\Query\Builder)->orWhereNotBetween($column,$values);
}
/**
 * Add an "or where not null" clause to the query.
 *
 * @param  string  $column
 * @return static
 */
static public function orWhereNotNull ( $column )  
{
 	 return (new Illuminate\Database\Query\Builder)->orWhereNotNull($column);
}
/**
 * Add a "where date" statement to the query.
 *
 * @param  string  $column
 * @param  string  $operator
 * @param  \DateTimeInterface|string|null  $value
 * @param  string  $boolean
 * @return static
 */
static public function whereDate ( $column , $operator , $value =NULL, $boolean ='and')  
{
 	 return (new Illuminate\Database\Query\Builder)->whereDate($column,$operator,$value,$boolean);
}
/**
 * Add an "or where date" statement to the query.
 *
 * @param  string  $column
 * @param  string  $operator
 * @param  \DateTimeInterface|string|null  $value
 * @return static
 */
static public function orWhereDate ( $column , $operator , $value =NULL)  
{
 	 return (new Illuminate\Database\Query\Builder)->orWhereDate($column,$operator,$value);
}
/**
 * Add a "where time" statement to the query.
 *
 * @param  string  $column
 * @param  string   $operator
 * @param  \DateTimeInterface|string|null  $value
 * @param  string   $boolean
 * @return static
 */
static public function whereTime ( $column , $operator , $value =NULL, $boolean ='and')  
{
 	 return (new Illuminate\Database\Query\Builder)->whereTime($column,$operator,$value,$boolean);
}
/**
 * Add an "or where time" statement to the query.
 *
 * @param  string  $column
 * @param  string   $operator
 * @param  \DateTimeInterface|string|null  $value
 * @return static
 */
static public function orWhereTime ( $column , $operator , $value =NULL)  
{
 	 return (new Illuminate\Database\Query\Builder)->orWhereTime($column,$operator,$value);
}
/**
 * Add a "where day" statement to the query.
 *
 * @param  string  $column
 * @param  string  $operator
 * @param  \DateTimeInterface|string|null  $value
 * @param  string  $boolean
 * @return static
 */
static public function whereDay ( $column , $operator , $value =NULL, $boolean ='and')  
{
 	 return (new Illuminate\Database\Query\Builder)->whereDay($column,$operator,$value,$boolean);
}
/**
 * Add an "or where day" statement to the query.
 *
 * @param  string  $column
 * @param  string  $operator
 * @param  \DateTimeInterface|string|null  $value
 * @return static
 */
static public function orWhereDay ( $column , $operator , $value =NULL)  
{
 	 return (new Illuminate\Database\Query\Builder)->orWhereDay($column,$operator,$value);
}
/**
 * Add a "where month" statement to the query.
 *
 * @param  string  $column
 * @param  string  $operator
 * @param  \DateTimeInterface|string|null  $value
 * @param  string  $boolean
 * @return static
 */
static public function whereMonth ( $column , $operator , $value =NULL, $boolean ='and')  
{
 	 return (new Illuminate\Database\Query\Builder)->whereMonth($column,$operator,$value,$boolean);
}
/**
 * Add an "or where month" statement to the query.
 *
 * @param  string  $column
 * @param  string  $operator
 * @param  \DateTimeInterface|string|null  $value
 * @return static
 */
static public function orWhereMonth ( $column , $operator , $value =NULL)  
{
 	 return (new Illuminate\Database\Query\Builder)->orWhereMonth($column,$operator,$value);
}
/**
 * Add a "where year" statement to the query.
 *
 * @param  string  $column
 * @param  string  $operator
 * @param  \DateTimeInterface|string|int|null  $value
 * @param  string  $boolean
 * @return static
 */
static public function whereYear ( $column , $operator , $value =NULL, $boolean ='and')  
{
 	 return (new Illuminate\Database\Query\Builder)->whereYear($column,$operator,$value,$boolean);
}
/**
 * Add an "or where year" statement to the query.
 *
 * @param  string  $column
 * @param  string  $operator
 * @param  \DateTimeInterface|string|int|null  $value
 * @return static
 */
static public function orWhereYear ( $column , $operator , $value =NULL)  
{
 	 return (new Illuminate\Database\Query\Builder)->orWhereYear($column,$operator,$value);
}
/**
 * Add a nested where statement to the query.
 *
 * @param  \Closure $callback
 * @param  string   $boolean
 * @return static
 */
static public function whereNested (Closure $callback , $boolean ='and')  
{
 	 return (new Illuminate\Database\Query\Builder)->whereNested($callback,$boolean);
}
/**
 * Create a new query instance for nested where condition.
 *
 * @return static
 */
static public function forNestedWhere ()  
{
 	 return (new Illuminate\Database\Query\Builder)->forNestedWhere();
}
/**
 * Add another query builder as a nested where to the query builder.
 *
 * @param  \Illuminate\Database\Query\Builder|static $query
 * @param  string  $boolean
 * @return static|$this
 */
static public function addNestedWhereQuery ( $query , $boolean ='and')  
{
 	 return (new Illuminate\Database\Query\Builder)->addNestedWhereQuery($query,$boolean);
}
/**
 * Add an exists clause to the query.
 *
 * @param  \Closure $callback
 * @param  string   $boolean
 * @param  bool     $not
 * @return static|$this
 */
static public function whereExists (Closure $callback , $boolean ='and', $not =false)  
{
 	 return (new Illuminate\Database\Query\Builder)->whereExists($callback,$boolean,$not);
}
/**
 * Add an or exists clause to the query.
 *
 * @param  \Closure $callback
 * @param  bool     $not
 * @return static
 */
static public function orWhereExists (Closure $callback , $not =false)  
{
 	 return (new Illuminate\Database\Query\Builder)->orWhereExists($callback,$not);
}
/**
 * Add a where not exists clause to the query.
 *
 * @param  \Closure $callback
 * @param  string   $boolean
 * @return static
 */
static public function whereNotExists (Closure $callback , $boolean ='and')  
{
 	 return (new Illuminate\Database\Query\Builder)->whereNotExists($callback,$boolean);
}
/**
 * Add a where not exists clause to the query.
 *
 * @param  \Closure  $callback
 * @return static
 */
static public function orWhereNotExists (Closure $callback )  
{
 	 return (new Illuminate\Database\Query\Builder)->orWhereNotExists($callback);
}
/**
 * Add an exists clause to the query.
 *
 * @param  \Illuminate\Database\Query\Builder $query
 * @param  string  $boolean
 * @param  bool  $not
 * @return static|$this
 */
static public function addWhereExistsQuery (self $query , $boolean ='and', $not =false)  
{
 	 return (new Illuminate\Database\Query\Builder)->addWhereExistsQuery($query,$boolean,$not);
}
/**
 * Adds a where condition using row values.
 *
 * @param  array   $columns
 * @param  string  $operator
 * @param  array   $values
 * @param  string  $boolean
 * @return static|$this
 */
static public function whereRowValues ( $columns , $operator , $values , $boolean ='and')  
{
 	 return (new Illuminate\Database\Query\Builder)->whereRowValues($columns,$operator,$values,$boolean);
}
/**
 * Adds a or where condition using row values.
 *
 * @param  array   $columns
 * @param  string  $operator
 * @param  array   $values
 * @return static|$this
 */
static public function orWhereRowValues ( $columns , $operator , $values )  
{
 	 return (new Illuminate\Database\Query\Builder)->orWhereRowValues($columns,$operator,$values);
}
/**
 * Add a "where JSON contains" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $value
 * @param  string  $boolean
 * @param  bool  $not
 * @return static|$this
 */
static public function whereJsonContains ( $column , $value , $boolean ='and', $not =false)  
{
 	 return (new Illuminate\Database\Query\Builder)->whereJsonContains($column,$value,$boolean,$not);
}
/**
 * Add a "or where JSON contains" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $value
 * @return static|$this
 */
static public function orWhereJsonContains ( $column , $value )  
{
 	 return (new Illuminate\Database\Query\Builder)->orWhereJsonContains($column,$value);
}
/**
 * Add a "where JSON not contains" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $value
 * @param  string  $boolean
 * @return static|$this
 */
static public function whereJsonDoesntContain ( $column , $value , $boolean ='and')  
{
 	 return (new Illuminate\Database\Query\Builder)->whereJsonDoesntContain($column,$value,$boolean);
}
/**
 * Add a "or where JSON not contains" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $value
 * @return static|$this
 */
static public function orWhereJsonDoesntContain ( $column , $value )  
{
 	 return (new Illuminate\Database\Query\Builder)->orWhereJsonDoesntContain($column,$value);
}
/**
 * Add a "where JSON length" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @param  string  $boolean
 * @return static|$this
 */
static public function whereJsonLength ( $column , $operator , $value =NULL, $boolean ='and')  
{
 	 return (new Illuminate\Database\Query\Builder)->whereJsonLength($column,$operator,$value,$boolean);
}
/**
 * Add a "or where JSON length" clause to the query.
 *
 * @param  string  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return static|$this
 */
static public function orWhereJsonLength ( $column , $operator , $value =NULL)  
{
 	 return (new Illuminate\Database\Query\Builder)->orWhereJsonLength($column,$operator,$value);
}
/**
 * Handles dynamic "where" clauses to the query.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return static|$this
 */
static public function dynamicWhere ( $method , $parameters )  
{
 	 return (new Illuminate\Database\Query\Builder)->dynamicWhere($method,$parameters);
}
/**
 * Add a "group by" clause to the query.
 *
 * @param  array  ...$groups
 * @return static|$this
 */
static public function groupBy ( $groups )  
{
 	 return (new Illuminate\Database\Query\Builder)->groupBy($groups);
}
/**
 * Add a "having" clause to the query.
 *
 * @param  string  $column
 * @param  string|null  $operator
 * @param  string|null  $value
 * @param  string  $boolean
 * @return static|$this
 */
static public function having ( $column , $operator =NULL, $value =NULL, $boolean ='and')  
{
 	 return (new Illuminate\Database\Query\Builder)->having($column,$operator,$value,$boolean);
}
/**
 * Add a "or having" clause to the query.
 *
 * @param  string  $column
 * @param  string|null  $operator
 * @param  string|null  $value
 * @return static
 */
static public function orHaving ( $column , $operator =NULL, $value =NULL)  
{
 	 return (new Illuminate\Database\Query\Builder)->orHaving($column,$operator,$value);
}
/**
 * Add a "having between " clause to the query.
 *
 * @param  string  $column
 * @param  array  $values
 * @param  string  $boolean
 * @param  bool  $not
 * @return static
 */
static public function havingBetween ( $column ,array $values , $boolean ='and', $not =false)  
{
 	 return (new Illuminate\Database\Query\Builder)->havingBetween($column,$values,$boolean,$not);
}
/**
 * Add a raw having clause to the query.
 *
 * @param  string  $sql
 * @param  array   $bindings
 * @param  string  $boolean
 * @return static|$this
 */
static public function havingRaw ( $sql ,array $bindings =array (), $boolean ='and')  
{
 	 return (new Illuminate\Database\Query\Builder)->havingRaw($sql,$bindings,$boolean);
}
/**
 * Add a raw or having clause to the query.
 *
 * @param  string  $sql
 * @param  array   $bindings
 * @return static
 */
static public function orHavingRaw ( $sql ,array $bindings =array ())  
{
 	 return (new Illuminate\Database\Query\Builder)->orHavingRaw($sql,$bindings);
}
/**
 * Add an "order by" clause to the query.
 *
 * @param  \Closure|\Illuminate\Database\Query\Builder|string  $column
 * @param  string  $direction
 * @return static|$this
 *
 * @throws \InvalidArgumentException
 */
static public function orderBy ( $column , $direction ='asc')  
{
 	 return (new Illuminate\Database\Query\Builder)->orderBy($column,$direction);
}
/**
 * Add a descending "order by" clause to the query.
 *
 * @param  string  $column
 * @return static|$this
 */
static public function orderByDesc ( $column )  
{
 	 return (new Illuminate\Database\Query\Builder)->orderByDesc($column);
}
/**
 * Add an "order by" clause for a timestamp to the query.
 *
 * @param  string  $column
 * @return static
 */
static public function latest ( $column ='created_at')  
{
 	 return (new Illuminate\Database\Query\Builder)->latest($column);
}
/**
 * Add an "order by" clause for a timestamp to the query.
 *
 * @param  string  $column
 * @return static
 */
static public function oldest ( $column ='created_at')  
{
 	 return (new Illuminate\Database\Query\Builder)->oldest($column);
}
/**
 * Put the query's results in random order.
 *
 * @param  string  $seed
 * @return static|$this
 */
static public function inRandomOrder ( $seed ='')  
{
 	 return (new Illuminate\Database\Query\Builder)->inRandomOrder($seed);
}
/**
 * Add a raw "order by" clause to the query.
 *
 * @param  string  $sql
 * @param  array  $bindings
 * @return static|$this
 */
static public function orderByRaw ( $sql , $bindings =array ())  
{
 	 return (new Illuminate\Database\Query\Builder)->orderByRaw($sql,$bindings);
}
/**
 * Alias to set the "offset" value of the query.
 *
 * @param  int  $value
 * @return static
 */
static public function skip ( $value )  
{
 	 return (new Illuminate\Database\Query\Builder)->skip($value);
}
/**
 * Set the "offset" value of the query.
 *
 * @param  int  $value
 * @return static|$this
 */
static public function offset ( $value )  
{
 	 return (new Illuminate\Database\Query\Builder)->offset($value);
}
/**
 * Alias to set the "limit" value of the query.
 *
 * @param  int  $value
 * @return static
 */
static public function take ( $value )  
{
 	 return (new Illuminate\Database\Query\Builder)->take($value);
}
/**
 * Set the "limit" value of the query.
 *
 * @param  int  $value
 * @return static|$this
 */
static public function limit ( $value )  
{
 	 return (new Illuminate\Database\Query\Builder)->limit($value);
}
/**
 * Set the limit and offset for a given page.
 *
 * @param  int  $page
 * @param  int  $perPage
 * @return static
 */
static public function forPage ( $page , $perPage =15)  
{
 	 return (new Illuminate\Database\Query\Builder)->forPage($page,$perPage);
}
/**
 * Constrain the query to the previous "page" of results before a given ID.
 *
 * @param  int  $perPage
 * @param  int|null  $lastId
 * @param  string  $column
 * @return static
 */
static public function forPageBeforeId ( $perPage =15, $lastId =0, $column ='id')  
{
 	 return (new Illuminate\Database\Query\Builder)->forPageBeforeId($perPage,$lastId,$column);
}
/**
 * Constrain the query to the next "page" of results after a given ID.
 *
 * @param  int  $perPage
 * @param  int|null  $lastId
 * @param  string  $column
 * @return static
 */
static public function forPageAfterId ( $perPage =15, $lastId =0, $column ='id')  
{
 	 return (new Illuminate\Database\Query\Builder)->forPageAfterId($perPage,$lastId,$column);
}
/**
 * Add a union statement to the query.
 *
 * @param  \Illuminate\Database\Query\Builder|\Closure  $query
 * @param  bool  $all
 * @return static
 */
static public function union ( $query , $all =false)  
{
 	 return (new Illuminate\Database\Query\Builder)->union($query,$all);
}
/**
 * Add a union all statement to the query.
 *
 * @param  \Illuminate\Database\Query\Builder|\Closure  $query
 * @return static
 */
static public function unionAll ( $query )  
{
 	 return (new Illuminate\Database\Query\Builder)->unionAll($query);
}
/**
 * Lock the selected rows in the table.
 *
 * @param  string|bool  $value
 * @return static|$this
 */
static public function lock ( $value =true)  
{
 	 return (new Illuminate\Database\Query\Builder)->lock($value);
}
/**
 * Lock the selected rows in the table for updating.
 *
 * @return static
 */
static public function lockForUpdate ()  
{
 	 return (new Illuminate\Database\Query\Builder)->lockForUpdate();
}
/**
 * Share lock the selected rows in the table.
 *
 * @return static
 */
static public function sharedLock ()  
{
 	 return (new Illuminate\Database\Query\Builder)->sharedLock();
}
/**
 * Get the SQL representation of the query.
 *
 * @return string
 */
static public function toSql ()  
{
 	 return (new Illuminate\Database\Query\Builder)->toSql();
}
/**
 * Execute a query for a single record by ID.
 *
 * @param  int|string  $id
 * @param  array  $columns
 * @return mixed|static
 */
static public function find ( $id , $columns =array (  0 => '*',))  
{
 	 return (new Illuminate\Database\Query\Builder)->find($id,$columns);
}
/**
 * Get a single column's value from the first result of a query.
 *
 * @param  string  $column
 * @return mixed
 */
static public function value ( $column )  
{
 	 return (new Illuminate\Database\Query\Builder)->value($column);
}
/**
 * Execute the query as a "select" statement.
 *
 * @param  array|string  $columns
 * @return \Illuminate\Support\Collection
 */
static public function get ( $columns =array (  0 => '*',))  
{
 	 return (new Illuminate\Database\Query\Builder)->get($columns);
}
/**
 * Paginate the given query into a simple paginator.
 *
 * @param  int  $perPage
 * @param  array  $columns
 * @param  string  $pageName
 * @param  int|null  $page
 * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
 */
static public function paginate ( $perPage =15, $columns =array (  0 => '*',), $pageName ='page', $page =NULL)  
{
 	 return (new Illuminate\Database\Query\Builder)->paginate($perPage,$columns,$pageName,$page);
}
/**
 * Get a paginator only supporting simple next and previous links.
 *
 * This is more efficient on larger data-sets, etc.
 *
 * @param  int  $perPage
 * @param  array  $columns
 * @param  string  $pageName
 * @param  int|null  $page
 * @return \Illuminate\Contracts\Pagination\Paginator
 */
static public function simplePaginate ( $perPage =15, $columns =array (  0 => '*',), $pageName ='page', $page =NULL)  
{
 	 return (new Illuminate\Database\Query\Builder)->simplePaginate($perPage,$columns,$pageName,$page);
}
/**
 * Get the count of the total records for the paginator.
 *
 * @param  array  $columns
 * @return int
 */
static public function getCountForPagination ( $columns =array (  0 => '*',))  
{
 	 return (new Illuminate\Database\Query\Builder)->getCountForPagination($columns);
}
/**
 * Get a lazy collection for the given query.
 *
 * @return \Illuminate\Support\LazyCollection
 */
static public function cursor ()  
{
 	 return (new Illuminate\Database\Query\Builder)->cursor();
}
/**
 * Get an array with the values of a given column.
 *
 * @param  string  $column
 * @param  string|null  $key
 * @return \Illuminate\Support\Collection
 */
static public function pluck ( $column , $key =NULL)  
{
 	 return (new Illuminate\Database\Query\Builder)->pluck($column,$key);
}
/**
 * Concatenate values of a given column as a string.
 *
 * @param  string  $column
 * @param  string  $glue
 * @return string
 */
static public function implode ( $column , $glue ='')  
{
 	 return (new Illuminate\Database\Query\Builder)->implode($column,$glue);
}
/**
 * Determine if any rows exist for the current query.
 *
 * @return bool
 */
static public function exists ()  
{
 	 return (new Illuminate\Database\Query\Builder)->exists();
}
/**
 * Determine if no rows exist for the current query.
 *
 * @return bool
 */
static public function doesntExist ()  
{
 	 return (new Illuminate\Database\Query\Builder)->doesntExist();
}
/**
 * Retrieve the "count" result of the query.
 *
 * @param  string  $columns
 * @return int
 */
static public function count ( $columns ='*')  
{
 	 return (new Illuminate\Database\Query\Builder)->count($columns);
}
/**
 * Retrieve the minimum value of a given column.
 *
 * @param  string  $column
 * @return mixed
 */
static public function min ( $column )  
{
 	 return (new Illuminate\Database\Query\Builder)->min($column);
}
/**
 * Retrieve the maximum value of a given column.
 *
 * @param  string  $column
 * @return mixed
 */
static public function max ( $column )  
{
 	 return (new Illuminate\Database\Query\Builder)->max($column);
}
/**
 * Retrieve the sum of the values of a given column.
 *
 * @param  string  $column
 * @return mixed
 */
static public function sum ( $column )  
{
 	 return (new Illuminate\Database\Query\Builder)->sum($column);
}
/**
 * Retrieve the average of the values of a given column.
 *
 * @param  string  $column
 * @return mixed
 */
static public function avg ( $column )  
{
 	 return (new Illuminate\Database\Query\Builder)->avg($column);
}
/**
 * Alias for the "avg" method.
 *
 * @param  string  $column
 * @return mixed
 */
static public function average ( $column )  
{
 	 return (new Illuminate\Database\Query\Builder)->average($column);
}
/**
 * Execute an aggregate function on the database.
 *
 * @param  string  $function
 * @param  array   $columns
 * @return mixed
 */
static public function aggregate ( $function , $columns =array (  0 => '*',))  
{
 	 return (new Illuminate\Database\Query\Builder)->aggregate($function,$columns);
}
/**
 * Execute a numeric aggregate function on the database.
 *
 * @param  string  $function
 * @param  array   $columns
 * @return float|int
 */
static public function numericAggregate ( $function , $columns =array (  0 => '*',))  
{
 	 return (new Illuminate\Database\Query\Builder)->numericAggregate($function,$columns);
}
/**
 * Insert a new record into the database.
 *
 * @param  array  $values
 * @return bool
 */
static public function insert (array $values )  
{
 	 return (new Illuminate\Database\Query\Builder)->insert($values);
}
/**
 * Insert a new record into the database while ignoring errors.
 *
 * @param  array  $values
 * @return int
 */
static public function insertOrIgnore (array $values )  
{
 	 return (new Illuminate\Database\Query\Builder)->insertOrIgnore($values);
}
/**
 * Insert a new record and get the value of the primary key.
 *
 * @param  array  $values
 * @param  string|null  $sequence
 * @return int
 */
static public function insertGetId (array $values , $sequence =NULL)  
{
 	 return (new Illuminate\Database\Query\Builder)->insertGetId($values,$sequence);
}
/**
 * Insert new records into the table using a subquery.
 *
 * @param  array  $columns
 * @param  \Closure|\Illuminate\Database\Query\Builder|string  $query
 * @return int
 */
static public function insertUsing (array $columns , $query )  
{
 	 return (new Illuminate\Database\Query\Builder)->insertUsing($columns,$query);
}
/**
 * Update a record in the database.
 *
 * @param  array  $values
 * @return int
 */
static public function update (array $values )  
{
 	 return (new Illuminate\Database\Query\Builder)->update($values);
}
/**
 * Insert or update a record matching the attributes, and fill it with values.
 *
 * @param  array  $attributes
 * @param  array  $values
 * @return bool
 */
static public function updateOrInsert (array $attributes ,array $values =array ())  
{
 	 return (new Illuminate\Database\Query\Builder)->updateOrInsert($attributes,$values);
}
/**
 * Increment a column's value by a given amount.
 *
 * @param  string  $column
 * @param  float|int  $amount
 * @param  array  $extra
 * @return int
 */
static public function increment ( $column , $amount =1,array $extra =array ())  
{
 	 return (new Illuminate\Database\Query\Builder)->increment($column,$amount,$extra);
}
/**
 * Decrement a column's value by a given amount.
 *
 * @param  string  $column
 * @param  float|int  $amount
 * @param  array  $extra
 * @return int
 */
static public function decrement ( $column , $amount =1,array $extra =array ())  
{
 	 return (new Illuminate\Database\Query\Builder)->decrement($column,$amount,$extra);
}
/**
 * Delete a record from the database.
 *
 * @param  mixed  $id
 * @return int
 */
static public function delete ( $id =NULL)  
{
 	 return (new Illuminate\Database\Query\Builder)->delete($id);
}
/**
 * Run a truncate statement on the table.
 *
 * @return void
 */
static public function truncate ()  
{
 	 return (new Illuminate\Database\Query\Builder)->truncate();
}
/**
 * Get a new instance of the query builder.
 *
 * @return static
 */
static public function newQuery ()  
{
 	 return (new Illuminate\Database\Query\Builder)->newQuery();
}
/**
 * Create a raw database expression.
 *
 * @param  mixed  $value
 * @return \Illuminate\Database\Query\Expression
 */
static public function raw ( $value )  
{
 	 return (new Illuminate\Database\Query\Builder)->raw($value);
}
/**
 * Get the current query value bindings in a flattened array.
 *
 * @return array
 */
static public function getBindings ()  
{
 	 return (new Illuminate\Database\Query\Builder)->getBindings();
}
/**
 * Get the raw array of bindings.
 *
 * @return array
 */
static public function getRawBindings ()  
{
 	 return (new Illuminate\Database\Query\Builder)->getRawBindings();
}
/**
 * Set the bindings on the query builder.
 *
 * @param  array   $bindings
 * @param  string  $type
 * @return static|$this
 *
 * @throws \InvalidArgumentException
 */
static public function setBindings (array $bindings , $type ='where')  
{
 	 return (new Illuminate\Database\Query\Builder)->setBindings($bindings,$type);
}
/**
 * Add a binding to the query.
 *
 * @param  mixed   $value
 * @param  string  $type
 * @return static|$this
 *
 * @throws \InvalidArgumentException
 */
static public function addBinding ( $value , $type ='where')  
{
 	 return (new Illuminate\Database\Query\Builder)->addBinding($value,$type);
}
/**
 * Merge an array of bindings into our bindings.
 *
 * @param  \Illuminate\Database\Query\Builder  $query
 * @return static|$this
 */
static public function mergeBindings (self $query )  
{
 	 return (new Illuminate\Database\Query\Builder)->mergeBindings($query);
}
/**
 * Get the database connection instance.
 *
 * @return \Illuminate\Database\ConnectionInterface
 */
static public function getConnection ()  
{
 	 return (new Illuminate\Database\Query\Builder)->getConnection();
}
/**
 * Get the database query processor instance.
 *
 * @return \Illuminate\Database\Query\Processors\Processor
 */
static public function getProcessor ()  
{
 	 return (new Illuminate\Database\Query\Builder)->getProcessor();
}
/**
 * Get the query grammar instance.
 *
 * @return \Illuminate\Database\Query\Grammars\Grammar
 */
static public function getGrammar ()  
{
 	 return (new Illuminate\Database\Query\Builder)->getGrammar();
}
/**
 * Use the write pdo for query.
 *
 * @return static|$this
 */
static public function useWritePdo ()  
{
 	 return (new Illuminate\Database\Query\Builder)->useWritePdo();
}
/**
 * Clone the query without the given properties.
 *
 * @param  array  $properties
 * @return static
 */
static public function cloneWithout (array $properties )  
{
 	 return (new Illuminate\Database\Query\Builder)->cloneWithout($properties);
}
/**
 * Clone the query without the given bindings.
 *
 * @param  array  $except
 * @return static
 */
static public function cloneWithoutBindings (array $except )  
{
 	 return (new Illuminate\Database\Query\Builder)->cloneWithoutBindings($except);
}
/**
 * Dump the current SQL and bindings.
 *
 * @return static|$this
 */
static public function dump ()  
{
 	 return (new Illuminate\Database\Query\Builder)->dump();
}
/**
 * Die and dump the current SQL and bindings.
 *
 * @return void
 */
static public function dd ()  
{
 	 return (new Illuminate\Database\Query\Builder)->dd();
}
/**
 * Handle dynamic method calls into the method.
 *
 * @param  string  $method
 * @param  array   $parameters
 * @return mixed
 *
 * @throws \BadMethodCallException
 */
static public function __call ( $method , $parameters )  
{
 	 return (new Illuminate\Database\Query\Builder)->__call($method,$parameters);
}
/**
 * Chunk the results of the query.
 *
 * @param  int  $count
 * @param  callable  $callback
 * @return bool
 */
static public function chunk ( $count ,callable $callback )  
{
 	 return (new Illuminate\Database\Query\Builder)->chunk($count,$callback);
}
/**
 * Execute a callback over each item while chunking.
 *
 * @param  callable  $callback
 * @param  int  $count
 * @return bool
 */
static public function each (callable $callback , $count =1000)  
{
 	 return (new Illuminate\Database\Query\Builder)->each($callback,$count);
}
/**
 * Chunk the results of a query by comparing IDs.
 *
 * @param  int  $count
 * @param  callable  $callback
 * @param  string|null  $column
 * @param  string|null  $alias
 * @return bool
 */
static public function chunkById ( $count ,callable $callback , $column =NULL, $alias =NULL)  
{
 	 return (new Illuminate\Database\Query\Builder)->chunkById($count,$callback,$column,$alias);
}
/**
 * Execute a callback over each item while chunking by id.
 *
 * @param  callable  $callback
 * @param  int  $count
 * @param  string  $column
 * @param  string  $alias
 * @return bool
 */
static public function eachById (callable $callback , $count =1000, $column =NULL, $alias =NULL)  
{
 	 return (new Illuminate\Database\Query\Builder)->eachById($callback,$count,$column,$alias);
}
/**
 * Execute the query and get the first result.
 *
 * @param  array  $columns
 * @return static|\Illuminate\Database\Eloquent\Model|object|null
 */
static public function first ( $columns =array (  0 => '*',))  
{
 	 return (new Illuminate\Database\Query\Builder)->first($columns);
}
/**
 * Apply the callback's query changes if the given "value" is true.
 *
 * @param  mixed  $value
 * @param  callable  $callback
 * @param  callable|null  $default
 * @return mixed|static|$this
 */
static public function when ( $value , $callback , $default =NULL)  
{
 	 return (new Illuminate\Database\Query\Builder)->when($value,$callback,$default);
}
/**
 * Pass the query to a given callback.
 *
 * @param  callable  $callback
 * @return static
 */
static public function tap ( $callback )  
{
 	 return (new Illuminate\Database\Query\Builder)->tap($callback);
}
/**
 * Apply the callback's query changes if the given "value" is false.
 *
 * @param  mixed  $value
 * @param  callable  $callback
 * @param  callable|null  $default
 * @return mixed|static|$this
 */
static public function unless ( $value , $callback , $default =NULL)  
{
 	 return (new Illuminate\Database\Query\Builder)->unless($value,$callback,$default);
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
 	 return (new Illuminate\Database\Query\Builder)->macro($name,$macro);
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
 	 return (new Illuminate\Database\Query\Builder)->mixin($mixin,$replace);
}
/**
 * Checks if macro is registered.
 *
 * @param  string  $name
 * @return bool
 */
static public function hasMacro ( $name )  
{
 	 return (new Illuminate\Database\Query\Builder)->hasMacro($name);
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
 	 return (new Illuminate\Database\Query\Builder)->__callStatic($method,$parameters);
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
static public function macroCall ( $method , $parameters )  
{
 	 return (new Illuminate\Database\Query\Builder)->macroCall($method,$parameters);
}

}
