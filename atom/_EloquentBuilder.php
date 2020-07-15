<?php 
class EloquentBuilder {
/**
 * Create a new Eloquent query builder instance.
 *
 * @param  \Illuminate\Database\Query\Builder  $query
 * @return void
 */
public function __construct (Illuminate\Database\Query\Builder $query )  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->__construct($query);
}
/**
 * Create and return an un-saved model instance.
 *
 * @param  array  $attributes
 * @return an un-saved model instance.
 */
static public function make (array $attributes =array ())  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->make($attributes);
}
/**
 * Register a new global scope.
 *
 * @param  string  $identifier
 * @param  \Illuminate\Database\Eloquent\Scope|\Closure  $scope
 * @return static|$this
 */
static public function withGlobalScope ( $identifier , $scope )  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->withGlobalScope($identifier,$scope);
}
/**
 * Remove a registered global scope.
 *
 * @param  \Illuminate\Database\Eloquent\Scope|string  $scope
 * @return static|$this
 */
static public function withoutGlobalScope ( $scope )  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->withoutGlobalScope($scope);
}
/**
 * Remove all or passed registered global scopes.
 *
 * @param  array|null  $scopes
 * @return static|$this
 */
static public function withoutGlobalScopes (array $scopes =NULL)  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->withoutGlobalScopes($scopes);
}
/**
 * Get an array of global scopes that were removed from the query.
 *
 * @return array
 */
static public function removedScopes ()  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->removedScopes();
}
/**
 * Add a where clause on the primary key to the query.
 *
 * @param  mixed  $id
 * @return static|$this
 */
static public function whereKey ( $id )  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->whereKey($id);
}
/**
 * Add a where clause on the primary key to the query.
 *
 * @param  mixed  $id
 * @return static|$this
 */
static public function whereKeyNot ( $id )  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->whereKeyNot($id);
}
/**
 * Add a basic where clause to the query.
 *
 * @param  string|array|\Closure  $column
 * @param  mixed   $operator
 * @param  mixed   $value
 * @param  string  $boolean
 * @return static|$this
 */
static public function where ( $column , $operator =NULL, $value =NULL, $boolean ='and')  
{
 	 func_get_args();
	 return (new Illuminate\Database\Eloquent\Builder)->where($column,$operator,$value,$boolean);
}
/**
 * Add an "or where" clause to the query.
 *
 * @param  \Closure|array|string  $column
 * @param  mixed  $operator
 * @param  mixed  $value
 * @return static
 */
static public function orWhere ( $column , $operator =NULL, $value =NULL)  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->orWhere($column,$operator,$value);
}
/**
 * Add an "order by" clause for a timestamp to the query.
 *
 * @param  string  $column
 * @return static|$this
 */
static public function latest ( $column =NULL)  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->latest($column);
}
/**
 * Add an "order by" clause for a timestamp to the query.
 *
 * @param  string  $column
 * @return static|$this
 */
static public function oldest ( $column =NULL)  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->oldest($column);
}
/**
 * Create a collection of models from plain arrays.
 *
 * @param  array  $items
 * @return \Illuminate\Database\Eloquent\Collection
 */
static public function hydrate (array $items )  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->hydrate($items);
}
/**
 * Create a collection of models from a raw query.
 *
 * @param  string  $query
 * @param  array  $bindings
 * @return \Illuminate\Database\Eloquent\Collection
 */
static public function fromQuery ( $query , $bindings =array ())  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->fromQuery($query,$bindings);
}
/**
 * Find a model by its primary key.
 *
 * @param  mixed  $id
 * @param  array  $columns
 * @return static|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|null
 */
static public function find ( $id , $columns =array (  0 => '*',))  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->find($id,$columns);
}
/**
 * Find multiple models by their primary keys.
 *
 * @param  \Illuminate\Contracts\Support\Arrayable|array  $ids
 * @param  array  $columns
 * @return \Illuminate\Database\Eloquent\Collection
 */
static public function findMany ( $ids , $columns =array (  0 => '*',))  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->findMany($ids,$columns);
}
/**
 * Find a model by its primary key or throw an exception.
 *
 * @param  mixed  $id
 * @param  array  $columns
 * @return static|\Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]
 *
 * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
 */
static public function findOrFail ( $id , $columns =array (  0 => '*',))  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->findOrFail($id,$columns);
}
/**
 * Find a model by its primary key or return fresh model instance.
 *
 * @param  mixed  $id
 * @param  array  $columns
 * @return fresh model instance.
 */
static public function findOrNew ( $id , $columns =array (  0 => '*',))  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->findOrNew($id,$columns);
}
/**
 * Get the first record matching the attributes or instantiate it.
 *
 * @param  array  $attributes
 * @param  array  $values
 * @return static|\Illuminate\Database\Eloquent\Model
 */
static public function firstOrNew (array $attributes ,array $values =array ())  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->firstOrNew($attributes,$values);
}
/**
 * Get the first record matching the attributes or create it.
 *
 * @param  array  $attributes
 * @param  array  $values
 * @return static|\Illuminate\Database\Eloquent\Model
 */
static public function firstOrCreate (array $attributes ,array $values =array ())  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->firstOrCreate($attributes,$values);
}
/**
 * Create or update a record matching the attributes, and fill it with values.
 *
 * @param  array  $attributes
 * @param  array  $values
 * @return static|\Illuminate\Database\Eloquent\Model
 */
static public function updateOrCreate (array $attributes ,array $values =array ())  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->updateOrCreate($attributes,$values);
}
/**
 * Execute the query and get the first result or throw an exception.
 *
 * @param  array  $columns
 * @return static|\Illuminate\Database\Eloquent\Model
 *
 * @throws \Illuminate\Database\Eloquent\ModelNotFoundException
 */
static public function firstOrFail ( $columns =array (  0 => '*',))  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->firstOrFail($columns);
}
/**
 * Execute the query and get the first result or call a callback.
 *
 * @param  \Closure|array  $columns
 * @param  \Closure|null  $callback
 * @return static|\Illuminate\Database\Eloquent\Model|mixed
 */
static public function firstOr ( $columns =array (  0 => '*',),Closure $callback =NULL)  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->firstOr($columns,$callback);
}
/**
 * Get a single column's value from the first result of a query.
 *
 * @param  string  $column
 * @return mixed
 */
static public function value ( $column )  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->value($column);
}
/**
 * Execute the query as a "select" statement.
 *
 * @param  array  $columns
 * @return \Illuminate\Database\Eloquent\Collection|static[]
 */
static public function get ( $columns =array (  0 => '*',))  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->get($columns);
}
/**
 * Get the hydrated models without eager loading.
 *
 * @param  array  $columns
 * @return \Illuminate\Database\Eloquent\Model[]|static[]
 */
static public function getModels ( $columns =array (  0 => '*',))  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->getModels($columns);
}
/**
 * Eager load the relationships for the models.
 *
 * @param  array  $models
 * @return array
 */
static public function eagerLoadRelations (array $models )  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->eagerLoadRelations($models);
}
/**
 * Get the relation instance for the given relation name.
 *
 * @param  string  $name
 * @return \Illuminate\Database\Eloquent\Relations\Relation
 */
static public function getRelation ( $name )  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->getRelation($name);
}
/**
 * Get a generator for the given query.
 *
 * @return \Generator
 */
static public function cursor ()  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->cursor();
}
/**
 * Chunk the results of a query by comparing numeric IDs.
 *
 * @param  int  $count
 * @param  callable  $callback
 * @param  string|null  $column
 * @param  string|null  $alias
 * @return bool
 */
static public function chunkById ( $count ,callable $callback , $column =NULL, $alias =NULL)  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->chunkById($count,$callback,$column,$alias);
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
 	 return (new Illuminate\Database\Eloquent\Builder)->pluck($column,$key);
}
/**
 * Paginate the given query.
 *
 * @param  int  $perPage
 * @param  array  $columns
 * @param  string  $pageName
 * @param  int|null  $page
 * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
 *
 * @throws \InvalidArgumentException
 */
static public function paginate ( $perPage =NULL, $columns =array (  0 => '*',), $pageName ='page', $page =NULL)  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->paginate($perPage,$columns,$pageName,$page);
}
/**
 * Paginate the given query into a simple paginator.
 *
 * @param  int  $perPage
 * @param  array  $columns
 * @param  string  $pageName
 * @param  int|null  $page
 * @return \Illuminate\Contracts\Pagination\Paginator
 */
static public function simplePaginate ( $perPage =NULL, $columns =array (  0 => '*',), $pageName ='page', $page =NULL)  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->simplePaginate($perPage,$columns,$pageName,$page);
}
/**
 * Save a new model and return the instance.
 *
 * @param  array  $attributes
 * @return the instance.
 */
static public function create (array $attributes =array ())  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->create($attributes);
}
/**
 * Save a new model and return the instance. Allow mass-assignment.
 *
 * @param  array  $attributes
 * @return the instance. Allow mass-assignment.
 */
static public function forceCreate (array $attributes )  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->forceCreate($attributes);
}
/**
 * Update a record in the database.
 *
 * @param  array  $values
 * @return int
 */
static public function update (array $values )  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->update($values);
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
 	 return (new Illuminate\Database\Eloquent\Builder)->increment($column,$amount,$extra);
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
 	 return (new Illuminate\Database\Eloquent\Builder)->decrement($column,$amount,$extra);
}
/**
 * Delete a record from the database.
 *
 * @return mixed
 */
static public function delete ()  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->delete();
}
/**
 * Run the default delete function on the builder.
 *
 * Since we do not apply scopes here, the row will actually be deleted.
 *
 * @return mixed
 */
static public function forceDelete ()  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->forceDelete();
}
/**
 * Register a replacement for the default delete function.
 *
 * @param  \Closure  $callback
 * @return void
 */
static public function onDelete (Closure $callback )  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->onDelete($callback);
}
/**
 * Call the given local model scopes.
 *
 * @param  array  $scopes
 * @return static|mixed
 */
static public function scopes (array $scopes )  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->scopes($scopes);
}
/**
 * Apply the scopes to the Eloquent builder instance and return it.
 *
 * @return it.
 */
static public function applyScopes ()  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->applyScopes();
}
/**
 * Set the relationships that should be eager loaded.
 *
 * @param  mixed  $relations
 * @return static|$this
 */
static public function with ( $relations )  
{
 	 func_get_args();
	 return (new Illuminate\Database\Eloquent\Builder)->with($relations);
}
/**
 * Prevent the specified relations from being eager loaded.
 *
 * @param  mixed  $relations
 * @return static|$this
 */
static public function without ( $relations )  
{
 	 func_get_args();
	 return (new Illuminate\Database\Eloquent\Builder)->without($relations);
}
/**
 * Create a new instance of the model being queried.
 *
 * @param  array  $attributes
 * @return static|\Illuminate\Database\Eloquent\Model
 */
static public function newModelInstance ( $attributes =array ())  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->newModelInstance($attributes);
}
/**
 * Get the underlying query builder instance.
 *
 * @return \Illuminate\Database\Query\Builder
 */
static public function getQuery ()  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->getQuery();
}
/**
 * Set the underlying query builder instance.
 *
 * @param  \Illuminate\Database\Query\Builder  $query
 * @return static|$this
 */
static public function setQuery ( $query )  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->setQuery($query);
}
/**
 * Get a base query builder instance.
 *
 * @return \Illuminate\Database\Query\Builder
 */
static public function toBase ()  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->toBase();
}
/**
 * Get the relationships being eagerly loaded.
 *
 * @return array
 */
static public function getEagerLoads ()  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->getEagerLoads();
}
/**
 * Set the relationships being eagerly loaded.
 *
 * @param  array  $eagerLoad
 * @return static|$this
 */
static public function setEagerLoads (array $eagerLoad )  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->setEagerLoads($eagerLoad);
}
/**
 * Get the model instance being queried.
 *
 * @return static|\Illuminate\Database\Eloquent\Model
 */
static public function getModel ()  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->getModel();
}
/**
 * Set a model instance for the model being queried.
 *
 * @param  \Illuminate\Database\Eloquent\Model  $model
 * @return static|$this
 */
static public function setModel (Illuminate\Database\Eloquent\Model $model )  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->setModel($model);
}
/**
 * Qualify the given column name by the model's table.
 *
 * @param  string  $column
 * @return string
 */
static public function qualifyColumn ( $column )  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->qualifyColumn($column);
}
/**
 * Get the given macro by name.
 *
 * @param  string  $name
 * @return \Closure
 */
static public function getMacro ( $name )  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->getMacro($name);
}
/**
 * Dynamically access builder proxies.
 *
 * @param  string  $key
 * @return mixed
 *
 * @throws \Exception
 */
static public function __get ( $key )  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->__get($key);
}
/**
 * Dynamically handle calls into the query instance.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 */
static public function __call ( $method , $parameters )  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->__call($method,$parameters);
}
/**
 * Dynamically handle calls into the query instance.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 *
 * @throws \BadMethodCallException
 */
static public function __callStatic ( $method , $parameters )  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->__callStatic($method,$parameters);
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
 	 return (new Illuminate\Database\Eloquent\Builder)->chunk($count,$callback);
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
 	 return (new Illuminate\Database\Eloquent\Builder)->each($callback,$count);
}
/**
 * Execute the query and get the first result.
 *
 * @param  array  $columns
 * @return static|\Illuminate\Database\Eloquent\Model|object|null
 */
static public function first ( $columns =array (  0 => '*',))  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->first($columns);
}
/**
 * Apply the callback's query changes if the given "value" is true.
 *
 * @param  mixed  $value
 * @param  callable  $callback
 * @param  callable  $default
 * @return mixed|static|$this
 */
static public function when ( $value , $callback , $default =NULL)  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->when($value,$callback,$default);
}
/**
 * Pass the query to a given callback.
 *
 * @param  callable  $callback
 * @return \Illuminate\Database\Query\Builder
 */
static public function tap ( $callback )  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->tap($callback);
}
/**
 * Apply the callback's query changes if the given "value" is false.
 *
 * @param  mixed  $value
 * @param  callable  $callback
 * @param  callable  $default
 * @return mixed|static|$this
 */
static public function unless ( $value , $callback , $default =NULL)  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->unless($value,$callback,$default);
}
/**
 * Add a relationship count / exists condition to the query.
 *
 * @param  string  $relation
 * @param  string  $operator
 * @param  int     $count
 * @param  string  $boolean
 * @param  \Closure|null  $callback
 * @return static
 */
static public function has ( $relation , $operator ='>=', $count =1, $boolean ='and',Closure $callback =NULL)  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->has($relation,$operator,$count,$boolean,$callback);
}
/**
 * Add a relationship count / exists condition to the query with an "or".
 *
 * @param  string  $relation
 * @param  string  $operator
 * @param  int     $count
 * @return static
 */
static public function orHas ( $relation , $operator ='>=', $count =1)  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->orHas($relation,$operator,$count);
}
/**
 * Add a relationship count / exists condition to the query.
 *
 * @param  string  $relation
 * @param  string  $boolean
 * @param  \Closure|null  $callback
 * @return static
 */
static public function doesntHave ( $relation , $boolean ='and',Closure $callback =NULL)  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->doesntHave($relation,$boolean,$callback);
}
/**
 * Add a relationship count / exists condition to the query with an "or".
 *
 * @param  string  $relation
 * @return static
 */
static public function orDoesntHave ( $relation )  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->orDoesntHave($relation);
}
/**
 * Add a relationship count / exists condition to the query with where clauses.
 *
 * @param  string  $relation
 * @param  \Closure|null  $callback
 * @param  string  $operator
 * @param  int     $count
 * @return static
 */
static public function whereHas ( $relation ,Closure $callback =NULL, $operator ='>=', $count =1)  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->whereHas($relation,$callback,$operator,$count);
}
/**
 * Add a relationship count / exists condition to the query with where clauses and an "or".
 *
 * @param  string    $relation
 * @param  \Closure  $callback
 * @param  string    $operator
 * @param  int       $count
 * @return static
 */
static public function orWhereHas ( $relation ,Closure $callback =NULL, $operator ='>=', $count =1)  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->orWhereHas($relation,$callback,$operator,$count);
}
/**
 * Add a relationship count / exists condition to the query with where clauses.
 *
 * @param  string  $relation
 * @param  \Closure|null  $callback
 * @return static
 */
static public function whereDoesntHave ( $relation ,Closure $callback =NULL)  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->whereDoesntHave($relation,$callback);
}
/**
 * Add a relationship count / exists condition to the query with where clauses and an "or".
 *
 * @param  string    $relation
 * @param  \Closure  $callback
 * @return static
 */
static public function orWhereDoesntHave ( $relation ,Closure $callback =NULL)  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->orWhereDoesntHave($relation,$callback);
}
/**
 * Add subselect queries to count the relations.
 *
 * @param  mixed  $relations
 * @return static|$this
 */
static public function withCount ( $relations )  
{
 	 func_get_args();
	 return (new Illuminate\Database\Eloquent\Builder)->withCount($relations);
}
/**
 * Merge the where constraints from another query to the current query.
 *
 * @param  \Illuminate\Database\Eloquent\Builder  $from
 * @return static
 */
static public function mergeConstraintsFrom (Illuminate\Database\Eloquent\Builder $from )  
{
 	 return (new Illuminate\Database\Eloquent\Builder)->mergeConstraintsFrom($from);
}

}
