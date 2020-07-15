<?php 
class Request {
const HEADER_FORWARDED = _CLASS_::HEADER_FORWARDED;
const HEADER_X_FORWARDED_FOR = _CLASS_::HEADER_X_FORWARDED_FOR;
const HEADER_X_FORWARDED_HOST = _CLASS_::HEADER_X_FORWARDED_HOST;
const HEADER_X_FORWARDED_PROTO = _CLASS_::HEADER_X_FORWARDED_PROTO;
const HEADER_X_FORWARDED_PORT = _CLASS_::HEADER_X_FORWARDED_PORT;
const HEADER_X_FORWARDED_ALL = _CLASS_::HEADER_X_FORWARDED_ALL;
const HEADER_X_FORWARDED_AWS_ELB = _CLASS_::HEADER_X_FORWARDED_AWS_ELB;
const METHOD_HEAD = _CLASS_::METHOD_HEAD;
const METHOD_GET = _CLASS_::METHOD_GET;
const METHOD_POST = _CLASS_::METHOD_POST;
const METHOD_PUT = _CLASS_::METHOD_PUT;
const METHOD_PATCH = _CLASS_::METHOD_PATCH;
const METHOD_DELETE = _CLASS_::METHOD_DELETE;
const METHOD_PURGE = _CLASS_::METHOD_PURGE;
const METHOD_OPTIONS = _CLASS_::METHOD_OPTIONS;
const METHOD_TRACE = _CLASS_::METHOD_TRACE;
const METHOD_CONNECT = _CLASS_::METHOD_CONNECT;
public $attributes ;
public $request ;
public $query ;
public $server ;
public $files ;
public $cookies ;
public $headers ;
/**
 * Create a new Illuminate HTTP request from server variables.
 *
 * @return static
 */
static public function capture ()  
{
 	 return (new Illuminate\Http\Request)->capture();
}
/**
 * Return the Request instance.
 *
 * @return static|$this
 */
static public function instance ()  
{
 	 return (new Illuminate\Http\Request)->instance();
}
/**
 * Get the request method.
 *
 * @return string
 */
static public function method ()  
{
 	 return (new Illuminate\Http\Request)->method();
}
/**
 * Get the root URL for the application.
 *
 * @return string
 */
static public function root ()  
{
 	 return (new Illuminate\Http\Request)->root();
}
/**
 * Get the URL (no query string) for the request.
 *
 * @return string
 */
static public function url ()  
{
 	 return (new Illuminate\Http\Request)->url();
}
/**
 * Get the full URL for the request.
 *
 * @return string
 */
static public function fullUrl ()  
{
 	 return (new Illuminate\Http\Request)->fullUrl();
}
/**
 * Get the full URL for the request with the added query string parameters.
 *
 * @param  array  $query
 * @return string
 */
static public function fullUrlWithQuery (array $query )  
{
 	 return (new Illuminate\Http\Request)->fullUrlWithQuery($query);
}
/**
 * Get the current path info for the request.
 *
 * @return string
 */
static public function path ()  
{
 	 return (new Illuminate\Http\Request)->path();
}
/**
 * Get the current decoded path info for the request.
 *
 * @return string
 */
static public function decodedPath ()  
{
 	 return (new Illuminate\Http\Request)->decodedPath();
}
/**
 * Get a segment from the URI (1 based index).
 *
 * @param  int  $index
 * @param  string|null  $default
 * @return string|null
 */
static public function segment ( $index , $default =NULL)  
{
 	 return (new Illuminate\Http\Request)->segment($index,$default);
}
/**
 * Get all of the segments for the request path.
 *
 * @return array
 */
static public function segments ()  
{
 	 return (new Illuminate\Http\Request)->segments();
}
/**
 * Determine if the current request URI matches a pattern.
 *
 * @param  mixed  ...$patterns
 * @return bool
 */
static public function is ( $patterns )  
{
 	 return (new Illuminate\Http\Request)->is($patterns);
}
/**
 * Determine if the route name matches a given pattern.
 *
 * @param  mixed  ...$patterns
 * @return bool
 */
static public function routeIs ( $patterns )  
{
 	 return (new Illuminate\Http\Request)->routeIs($patterns);
}
/**
 * Determine if the current request URL and query string matches a pattern.
 *
 * @param  mixed  ...$patterns
 * @return bool
 */
static public function fullUrlIs ( $patterns )  
{
 	 return (new Illuminate\Http\Request)->fullUrlIs($patterns);
}
/**
 * Determine if the request is the result of an AJAX call.
 *
 * @return bool
 */
static public function ajax ()  
{
 	 return (new Illuminate\Http\Request)->ajax();
}
/**
 * Determine if the request is the result of an PJAX call.
 *
 * @return bool
 */
static public function pjax ()  
{
 	 return (new Illuminate\Http\Request)->pjax();
}
/**
 * Determine if the request is the result of an prefetch call.
 *
 * @return bool
 */
static public function prefetch ()  
{
 	 return (new Illuminate\Http\Request)->prefetch();
}
/**
 * Determine if the request is over HTTPS.
 *
 * @return bool
 */
static public function secure ()  
{
 	 return (new Illuminate\Http\Request)->secure();
}
/**
 * Get the client IP address.
 *
 * @return string
 */
static public function ip ()  
{
 	 return (new Illuminate\Http\Request)->ip();
}
/**
 * Get the client IP addresses.
 *
 * @return array
 */
static public function ips ()  
{
 	 return (new Illuminate\Http\Request)->ips();
}
/**
 * Get the client user agent.
 *
 * @return string
 */
static public function userAgent ()  
{
 	 return (new Illuminate\Http\Request)->userAgent();
}
/**
 * Merge new input into the current request's input array.
 *
 * @param  array  $input
 * @return static
 */
static public function merge (array $input )  
{
 	 return (new Illuminate\Http\Request)->merge($input);
}
/**
 * Replace the input for the current request.
 *
 * @param  array  $input
 * @return static
 */
static public function replace (array $input )  
{
 	 return (new Illuminate\Http\Request)->replace($input);
}
/**
 * This method belongs to Symfony HttpFoundation and is not usually needed when using Laravel.
 *
 * Instead, you may use the "input" method.
 *
 * @param  string  $key
 * @param  mixed  $default
 * @return mixed
 */
static public function get ( $key , $default =NULL)  
{
 	 return (new Illuminate\Http\Request)->get($key,$default);
}
/**
 * Get the JSON payload for the request.
 *
 * @param  string  $key
 * @param  mixed   $default
 * @return \Symfony\Component\HttpFoundation\ParameterBag|mixed
 */
static public function json ( $key =NULL, $default =NULL)  
{
 	 return (new Illuminate\Http\Request)->json($key,$default);
}
/**
 * Create a new request instance from the given Laravel request.
 *
 * @param  \Illuminate\Http\Request  $from
 * @param  \Illuminate\Http\Request|null  $to
 * @return static
 */
static public function createFrom (self $from , $to =NULL)  
{
 	 return (new Illuminate\Http\Request)->createFrom($from,$to);
}
/**
 * Create an Illuminate request from a Symfony instance.
 *
 * @param  \Symfony\Component\HttpFoundation\Request  $request
 * @return static
 */
static public function createFromBase (Symfony\Component\HttpFoundation\Request $request )  
{
 	 return (new Illuminate\Http\Request)->createFromBase($request);
}
/**
 * {@inheritdoc}
 */
static public function duplicate (array $query =NULL,array $request =NULL,array $attributes =NULL,array $cookies =NULL,array $files =NULL,array $server =NULL)  
{
 	 return (new Illuminate\Http\Request)->duplicate($query,$request,$attributes,$cookies,$files,$server);
}
/**
 * Get the session associated with the request.
 *
 * @return \Illuminate\Session\Store
 *
 * @throws \RuntimeException
 */
static public function session ()  
{
 	 return (new Illuminate\Http\Request)->session();
}
/**
 * Get the session associated with the request.
 *
 * @return \Illuminate\Session\Store|null
 */
static public function getSession ()  
{
 	 return (new Illuminate\Http\Request)->getSession();
}
/**
 * Set the session instance on the request.
 *
 * @param  \Illuminate\Contracts\Session\Session  $session
 * @return void
 */
static public function setLaravelSession ( $session )  
{
 	 return (new Illuminate\Http\Request)->setLaravelSession($session);
}
/**
 * Get the user making the request.
 *
 * @param  string|null  $guard
 * @return mixed
 */
static public function user ( $guard =NULL)  
{
 	 return (new Illuminate\Http\Request)->user($guard);
}
/**
 * Get the route handling the request.
 *
 * @param  string|null  $param
 * @param  mixed   $default
 * @return \Illuminate\Routing\Route|object|string
 */
static public function route ( $param =NULL, $default =NULL)  
{
 	 return (new Illuminate\Http\Request)->route($param,$default);
}
/**
 * Get a unique fingerprint for the request / route / IP address.
 *
 * @return string
 *
 * @throws \RuntimeException
 */
static public function fingerprint ()  
{
 	 return (new Illuminate\Http\Request)->fingerprint();
}
/**
 * Set the JSON payload for the request.
 *
 * @param  \Symfony\Component\HttpFoundation\ParameterBag  $json
 * @return static|$this
 */
static public function setJson ( $json )  
{
 	 return (new Illuminate\Http\Request)->setJson($json);
}
/**
 * Get the user resolver callback.
 *
 * @return \Closure
 */
static public function getUserResolver ()  
{
 	 return (new Illuminate\Http\Request)->getUserResolver();
}
/**
 * Set the user resolver callback.
 *
 * @param  \Closure  $callback
 * @return static|$this
 */
static public function setUserResolver (Closure $callback )  
{
 	 return (new Illuminate\Http\Request)->setUserResolver($callback);
}
/**
 * Get the route resolver callback.
 *
 * @return \Closure
 */
static public function getRouteResolver ()  
{
 	 return (new Illuminate\Http\Request)->getRouteResolver();
}
/**
 * Set the route resolver callback.
 *
 * @param  \Closure  $callback
 * @return static|$this
 */
static public function setRouteResolver (Closure $callback )  
{
 	 return (new Illuminate\Http\Request)->setRouteResolver($callback);
}
/**
 * Get all of the input and files for the request.
 *
 * @return array
 */
static public function toArray ()  
{
 	 return (new Illuminate\Http\Request)->toArray();
}
/**
 * Determine if the given offset exists.
 *
 * @param  string  $offset
 * @return bool
 */
static public function offsetExists ( $offset )  
{
 	 return (new Illuminate\Http\Request)->offsetExists($offset);
}
/**
 * Get the value at the given offset.
 *
 * @param  string  $offset
 * @return mixed
 */
static public function offsetGet ( $offset )  
{
 	 return (new Illuminate\Http\Request)->offsetGet($offset);
}
/**
 * Set the value at the given offset.
 *
 * @param  string  $offset
 * @param  mixed  $value
 * @return void
 */
static public function offsetSet ( $offset , $value )  
{
 	 return (new Illuminate\Http\Request)->offsetSet($offset,$value);
}
/**
 * Remove the value at the given offset.
 *
 * @param  string  $offset
 * @return void
 */
static public function offsetUnset ( $offset )  
{
 	 return (new Illuminate\Http\Request)->offsetUnset($offset);
}
/**
 * Check if an input element is set on the request.
 *
 * @param  string  $key
 * @return bool
 */
static public function __isset ( $key )  
{
 	 return (new Illuminate\Http\Request)->__isset($key);
}
/**
 * Get an input element from the request.
 *
 * @param  string  $key
 * @return mixed
 */
static public function __get ( $key )  
{
 	 return (new Illuminate\Http\Request)->__get($key);
}
/**
 * @param array                $query      The GET parameters
 * @param array                $request    The POST parameters
 * @param array                $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
 * @param array                $cookies    The COOKIE parameters
 * @param array                $files      The FILES parameters
 * @param array                $server     The SERVER parameters
 * @param string|resource|null $content    The raw body data
 */
public function __construct (array $query =array (),array $request =array (),array $attributes =array (),array $cookies =array (),array $files =array (),array $server =array (), $content =NULL)  
{
 	 return (new Illuminate\Http\Request)->__construct($query,$request,$attributes,$cookies,$files,$server,$content);
}
/**
 * Sets the parameters for this request.
 *
 * This method also re-initializes all properties.
 *
 * @param array                $query      The GET parameters
 * @param array                $request    The POST parameters
 * @param array                $attributes The request attributes (parameters parsed from the PATH_INFO, ...)
 * @param array                $cookies    The COOKIE parameters
 * @param array                $files      The FILES parameters
 * @param array                $server     The SERVER parameters
 * @param string|resource|null $content    The raw body data
 */
static public function initialize (array $query =array (),array $request =array (),array $attributes =array (),array $cookies =array (),array $files =array (),array $server =array (), $content =NULL)  
{
 	 return (new Illuminate\Http\Request)->initialize($query,$request,$attributes,$cookies,$files,$server,$content);
}
/**
 * Creates a new request with values from PHP's super globals.
 *
 * @return static
 */
static public function createFromGlobals ()  
{
 	 return (new Illuminate\Http\Request)->createFromGlobals();
}
/**
 * Creates a Request based on a given URI and configuration.
 *
 * The information contained in the URI always take precedence
 * over the other information (server and parameters).
 *
 * @param string               $uri        The URI
 * @param string               $method     The HTTP method
 * @param array                $parameters The query (GET) or request (POST) parameters
 * @param array                $cookies    The request cookies ($_COOKIE)
 * @param array                $files      The request files ($_FILES)
 * @param array                $server     The server parameters ($_SERVER)
 * @param string|resource|null $content    The raw body data
 *
 * @return static
 */
static public function create ( $uri , $method ='GET', $parameters =array (), $cookies =array (), $files =array (), $server =array (), $content =NULL)  
{
 	 return (new Illuminate\Http\Request)->create($uri,$method,$parameters,$cookies,$files,$server,$content);
}
/**
 * Sets a callable able to create a Request instance.
 *
 * This is mainly useful when you need to override the Request class
 * to keep BC with an existing system. It should not be used for any
 * other purpose.
 *
 * @param callable|null $callable A PHP callable
 */
static public function setFactory ( $callable )  
{
 	 return (new Illuminate\Http\Request)->setFactory($callable);
}
/**
 * Returns the request as a string.
 *
 * @return string The request
 */
static public function __toString ()  
{
 	 return (new Illuminate\Http\Request)->__toString();
}
/**
 * Overrides the PHP global variables according to this request instance.
 *
 * It overrides $_GET, $_POST, $_REQUEST, $_SERVER, $_COOKIE.
 * $_FILES is never overridden, see rfc1867
 */
static public function overrideGlobals ()  
{
 	 return (new Illuminate\Http\Request)->overrideGlobals();
}
/**
 * Sets a list of trusted proxies.
 *
 * You should only list the reverse proxies that you manage directly.
 *
 * @param array $proxies          A list of trusted proxies
 * @param int   $trustedHeaderSet A bit field of Request::HEADER_*, to set which headers to trust from your proxies
 *
 * @throws \InvalidArgumentException When $trustedHeaderSet is invalid
 */
static public function setTrustedProxies (array $proxies ,int $trustedHeaderSet )  
{
 	 return (new Illuminate\Http\Request)->setTrustedProxies($proxies,$trustedHeaderSet);
}
/**
 * Gets the list of trusted proxies.
 *
 * @return array An array of trusted proxies
 */
static public function getTrustedProxies ()  
{
 	 return (new Illuminate\Http\Request)->getTrustedProxies();
}
/**
 * Gets the set of trusted headers from trusted proxies.
 *
 * @return int A bit field of Request::HEADER_* that defines which headers are trusted from your proxies
 */
static public function getTrustedHeaderSet ()  
{
 	 return (new Illuminate\Http\Request)->getTrustedHeaderSet();
}
/**
 * Sets a list of trusted host patterns.
 *
 * You should only list the hosts you manage using regexs.
 *
 * @param array $hostPatterns A list of trusted host patterns
 */
static public function setTrustedHosts (array $hostPatterns )  
{
 	 return (new Illuminate\Http\Request)->setTrustedHosts($hostPatterns);
}
/**
 * Gets the list of trusted host patterns.
 *
 * @return array An array of trusted host patterns
 */
static public function getTrustedHosts ()  
{
 	 return (new Illuminate\Http\Request)->getTrustedHosts();
}
/**
 * Normalizes a query string.
 *
 * It builds a normalized query string, where keys/value pairs are alphabetized,
 * have consistent escaping and unneeded delimiters are removed.
 *
 * @param string $qs Query string
 *
 * @return string A normalized query string for the Request
 */
static public function normalizeQueryString ( $qs )  
{
 	 return (new Illuminate\Http\Request)->normalizeQueryString($qs);
}
/**
 * Enables support for the _method request parameter to determine the intended HTTP method.
 *
 * Be warned that enabling this feature might lead to CSRF issues in your code.
 * Check that you are using CSRF tokens when required.
 * If the HTTP method parameter override is enabled, an html-form with method "POST" can be altered
 * and used to send a "PUT" or "DELETE" request via the _method request parameter.
 * If these methods are not protected against CSRF, this presents a possible vulnerability.
 *
 * The HTTP method can only be overridden when the real HTTP method is POST.
 */
static public function enableHttpMethodParameterOverride ()  
{
 	 return (new Illuminate\Http\Request)->enableHttpMethodParameterOverride();
}
/**
 * Checks whether support for the _method request parameter is enabled.
 *
 * @return bool True when the _method request parameter is enabled, false otherwise
 */
static public function getHttpMethodParameterOverride ()  
{
 	 return (new Illuminate\Http\Request)->getHttpMethodParameterOverride();
}
/**
 * Whether the request contains a Session which was started in one of the
 * previous requests.
 *
 * @return bool
 */
static public function hasPreviousSession ()  
{
 	 return (new Illuminate\Http\Request)->hasPreviousSession();
}
/**
 * Whether the request contains a Session object.
 *
 * This method does not give any information about the state of the session object,
 * like whether the session is started or not. It is just a way to check if this Request
 * is associated with a Session instance.
 *
 * @return bool true when the Request contains a Session object, false otherwise
 */
static public function hasSession ()  
{
 	 return (new Illuminate\Http\Request)->hasSession();
}
/**
 * Sets the Session.
 *
 * @param SessionInterface $session The Session
 */
static public function setSession (Symfony\Component\HttpFoundation\Session\SessionInterface $session )  
{
 	 return (new Illuminate\Http\Request)->setSession($session);
}
/**
 * @internal
 */
static public function setSessionFactory (callable $factory )  
{
 	 return (new Illuminate\Http\Request)->setSessionFactory($factory);
}
/**
 * Returns the client IP addresses.
 *
 * In the returned array the most trusted IP address is first, and the
 * least trusted one last. The "real" client IP address is the last one,
 * but this is also the least trusted one. Trusted proxies are stripped.
 *
 * Use this method carefully; you should use getClientIp() instead.
 *
 * @return array The client IP addresses
 *
 * @see getClientIp()
 */
static public function getClientIps ()  
{
 	 return (new Illuminate\Http\Request)->getClientIps();
}
/**
 * Returns the client IP address.
 *
 * This method can read the client IP address from the "X-Forwarded-For" header
 * when trusted proxies were set via "setTrustedProxies()". The "X-Forwarded-For"
 * header value is a comma+space separated list of IP addresses, the left-most
 * being the original client, and each successive proxy that passed the request
 * adding the IP address where it received the request from.
 *
 * If your reverse proxy uses a different header name than "X-Forwarded-For",
 * ("Client-Ip" for instance), configure it via the $trustedHeaderSet
 * argument of the Request::setTrustedProxies() method instead.
 *
 * @return string|null The client IP address
 *
 * @see getClientIps()
 * @see https://wikipedia.org/wiki/X-Forwarded-For
 */
static public function getClientIp ()  
{
 	 return (new Illuminate\Http\Request)->getClientIp();
}
/**
 * Returns current script name.
 *
 * @return string
 */
static public function getScriptName ()  
{
 	 return (new Illuminate\Http\Request)->getScriptName();
}
/**
 * Returns the path being requested relative to the executed script.
 *
 * The path info always starts with a /.
 *
 * Suppose this request is instantiated from /mysite on localhost:
 *
 * * http://localhost/mysite              returns an empty string
 * * http://localhost/mysite/about        returns '/about'
 * * http://localhost/mysite/enco%20ded   returns '/enco%20ded'
 * * http://localhost/mysite/about?var=1  returns '/about'
 *
 * @return string The raw path (i.e. not urldecoded)
 */
static public function getPathInfo ()  
{
 	 return (new Illuminate\Http\Request)->getPathInfo();
}
/**
 * Returns the root path from which this request is executed.
 *
 * Suppose that an index.php file instantiates this request object:
 *
 * * http://localhost/index.php         returns an empty string
 * * http://localhost/index.php/page    returns an empty string
 * * http://localhost/web/index.php     returns '/web'
 * * http://localhost/we%20b/index.php  returns '/we%20b'
 *
 * @return string The raw path (i.e. not urldecoded)
 */
static public function getBasePath ()  
{
 	 return (new Illuminate\Http\Request)->getBasePath();
}
/**
 * Returns the root URL from which this request is executed.
 *
 * The base URL never ends with a /.
 *
 * This is similar to getBasePath(), except that it also includes the
 * script filename (e.g. index.php) if one exists.
 *
 * @return string The raw URL (i.e. not urldecoded)
 */
static public function getBaseUrl ()  
{
 	 return (new Illuminate\Http\Request)->getBaseUrl();
}
/**
 * Gets the request's scheme.
 *
 * @return string
 */
static public function getScheme ()  
{
 	 return (new Illuminate\Http\Request)->getScheme();
}
/**
 * Returns the port on which the request is made.
 *
 * This method can read the client port from the "X-Forwarded-Port" header
 * when trusted proxies were set via "setTrustedProxies()".
 *
 * The "X-Forwarded-Port" header must contain the client port.
 *
 * @return int|string can be a string if fetched from the server bag
 */
static public function getPort ()  
{
 	 return (new Illuminate\Http\Request)->getPort();
}
/**
 * Returns the user.
 *
 * @return string|null
 */
static public function getUser ()  
{
 	 return (new Illuminate\Http\Request)->getUser();
}
/**
 * Returns the password.
 *
 * @return string|null
 */
static public function getPassword ()  
{
 	 return (new Illuminate\Http\Request)->getPassword();
}
/**
 * Gets the user info.
 *
 * @return string A user name and, optionally, scheme-specific information about how to gain authorization to access the server
 */
static public function getUserInfo ()  
{
 	 return (new Illuminate\Http\Request)->getUserInfo();
}
/**
 * Returns the HTTP host being requested.
 *
 * The port name will be appended to the host if it's non-standard.
 *
 * @return string
 */
static public function getHttpHost ()  
{
 	 return (new Illuminate\Http\Request)->getHttpHost();
}
/**
 * Returns the requested URI (path and query string).
 *
 * @return string The raw URI (i.e. not URI decoded)
 */
static public function getRequestUri ()  
{
 	 return (new Illuminate\Http\Request)->getRequestUri();
}
/**
 * Gets the scheme and HTTP host.
 *
 * If the URL was called with basic authentication, the user
 * and the password are not added to the generated string.
 *
 * @return string The scheme and HTTP host
 */
static public function getSchemeAndHttpHost ()  
{
 	 return (new Illuminate\Http\Request)->getSchemeAndHttpHost();
}
/**
 * Generates a normalized URI (URL) for the Request.
 *
 * @return string A normalized URI (URL) for the Request
 *
 * @see getQueryString()
 */
static public function getUri ()  
{
 	 return (new Illuminate\Http\Request)->getUri();
}
/**
 * Generates a normalized URI for the given path.
 *
 * @param string $path A path to use instead of the current one
 *
 * @return string The normalized URI for the path
 */
static public function getUriForPath ( $path )  
{
 	 return (new Illuminate\Http\Request)->getUriForPath($path);
}
/**
 * Returns the path as relative reference from the current Request path.
 *
 * Only the URIs path component (no schema, host etc.) is relevant and must be given.
 * Both paths must be absolute and not contain relative parts.
 * Relative URLs from one resource to another are useful when generating self-contained downloadable document archives.
 * Furthermore, they can be used to reduce the link size in documents.
 *
 * Example target paths, given a base path of "/a/b/c/d":
 * - "/a/b/c/d"     -> ""
 * - "/a/b/c/"      -> "./"
 * - "/a/b/"        -> "../"
 * - "/a/b/c/other" -> "other"
 * - "/a/x/y"       -> "../../x/y"
 *
 * @param string $path The target path
 *
 * @return string The relative target path
 */
static public function getRelativeUriForPath ( $path )  
{
 	 return (new Illuminate\Http\Request)->getRelativeUriForPath($path);
}
/**
 * Generates the normalized query string for the Request.
 *
 * It builds a normalized query string, where keys/value pairs are alphabetized
 * and have consistent escaping.
 *
 * @return string|null A normalized query string for the Request
 */
static public function getQueryString ()  
{
 	 return (new Illuminate\Http\Request)->getQueryString();
}
/**
 * Checks whether the request is secure or not.
 *
 * This method can read the client protocol from the "X-Forwarded-Proto" header
 * when trusted proxies were set via "setTrustedProxies()".
 *
 * The "X-Forwarded-Proto" header must contain the protocol: "https" or "http".
 *
 * @return bool
 */
static public function isSecure ()  
{
 	 return (new Illuminate\Http\Request)->isSecure();
}
/**
 * Returns the host name.
 *
 * This method can read the client host name from the "X-Forwarded-Host" header
 * when trusted proxies were set via "setTrustedProxies()".
 *
 * The "X-Forwarded-Host" header must contain the client host name.
 *
 * @return string
 *
 * @throws SuspiciousOperationException when the host name is invalid or not trusted
 */
static public function getHost ()  
{
 	 return (new Illuminate\Http\Request)->getHost();
}
/**
 * Sets the request method.
 *
 * @param string $method
 */
static public function setMethod ( $method )  
{
 	 return (new Illuminate\Http\Request)->setMethod($method);
}
/**
 * Gets the request "intended" method.
 *
 * If the X-HTTP-Method-Override header is set, and if the method is a POST,
 * then it is used to determine the "real" intended HTTP method.
 *
 * The _method request parameter can also be used to determine the HTTP method,
 * but only if enableHttpMethodParameterOverride() has been called.
 *
 * The method is always an uppercased string.
 *
 * @return string The request method
 *
 * @see getRealMethod()
 */
static public function getMethod ()  
{
 	 return (new Illuminate\Http\Request)->getMethod();
}
/**
 * Gets the "real" request method.
 *
 * @return string The request method
 *
 * @see getMethod()
 */
static public function getRealMethod ()  
{
 	 return (new Illuminate\Http\Request)->getRealMethod();
}
/**
 * Gets the mime type associated with the format.
 *
 * @param string $format The format
 *
 * @return string|null The associated mime type (null if not found)
 */
static public function getMimeType ( $format )  
{
 	 return (new Illuminate\Http\Request)->getMimeType($format);
}
/**
 * Gets the mime types associated with the format.
 *
 * @param string $format The format
 *
 * @return array The associated mime types
 */
static public function getMimeTypes ( $format )  
{
 	 return (new Illuminate\Http\Request)->getMimeTypes($format);
}
/**
 * Gets the format associated with the mime type.
 *
 * @param string $mimeType The associated mime type
 *
 * @return string|null The format (null if not found)
 */
static public function getFormat ( $mimeType )  
{
 	 return (new Illuminate\Http\Request)->getFormat($mimeType);
}
/**
 * Associates a format with mime types.
 *
 * @param string       $format    The format
 * @param string|array $mimeTypes The associated mime types (the preferred one must be the first as it will be used as the content type)
 */
static public function setFormat ( $format , $mimeTypes )  
{
 	 return (new Illuminate\Http\Request)->setFormat($format,$mimeTypes);
}
/**
 * Gets the request format.
 *
 * Here is the process to determine the format:
 *
 * * format defined by the user (with setRequestFormat())
 * * _format request attribute
 * * $default
 *
 * @param string|null $default The default format
 *
 * @return string|null The request format
 */
static public function getRequestFormat ( $default ='html')  
{
 	 return (new Illuminate\Http\Request)->getRequestFormat($default);
}
/**
 * Sets the request format.
 *
 * @param string $format The request format
 */
static public function setRequestFormat ( $format )  
{
 	 return (new Illuminate\Http\Request)->setRequestFormat($format);
}
/**
 * Gets the format associated with the request.
 *
 * @return string|null The format (null if no content type is present)
 */
static public function getContentType ()  
{
 	 return (new Illuminate\Http\Request)->getContentType();
}
/**
 * Sets the default locale.
 *
 * @param string $locale
 */
static public function setDefaultLocale ( $locale )  
{
 	 return (new Illuminate\Http\Request)->setDefaultLocale($locale);
}
/**
 * Get the default locale.
 *
 * @return string
 */
static public function getDefaultLocale ()  
{
 	 return (new Illuminate\Http\Request)->getDefaultLocale();
}
/**
 * Sets the locale.
 *
 * @param string $locale
 */
static public function setLocale ( $locale )  
{
 	 return (new Illuminate\Http\Request)->setLocale($locale);
}
/**
 * Get the locale.
 *
 * @return string
 */
static public function getLocale ()  
{
 	 return (new Illuminate\Http\Request)->getLocale();
}
/**
 * Checks if the request method is of specified type.
 *
 * @param string $method Uppercase request method (GET, POST etc)
 *
 * @return bool
 */
static public function isMethod ( $method )  
{
 	 return (new Illuminate\Http\Request)->isMethod($method);
}
/**
 * Checks whether or not the method is safe.
 *
 * @see https://tools.ietf.org/html/rfc7231#section-4.2.1
 *
 * @param bool $andCacheable Adds the additional condition that the method should be cacheable. True by default.
 *
 * @return bool
 */
static public function isMethodSafe ()  
{
 	 func_get_args();
	 return (new Illuminate\Http\Request)->isMethodSafe();
}
/**
 * Checks whether or not the method is idempotent.
 *
 * @return bool
 */
static public function isMethodIdempotent ()  
{
 	 return (new Illuminate\Http\Request)->isMethodIdempotent();
}
/**
 * Checks whether the method is cacheable or not.
 *
 * @see https://tools.ietf.org/html/rfc7231#section-4.2.3
 *
 * @return bool True for GET and HEAD, false otherwise
 */
static public function isMethodCacheable ()  
{
 	 return (new Illuminate\Http\Request)->isMethodCacheable();
}
/**
 * Returns the protocol version.
 *
 * If the application is behind a proxy, the protocol version used in the
 * requests between the client and the proxy and between the proxy and the
 * server might be different. This returns the former (from the "Via" header)
 * if the proxy is trusted (see "setTrustedProxies()"), otherwise it returns
 * the latter (from the "SERVER_PROTOCOL" server parameter).
 *
 * @return string
 */
static public function getProtocolVersion ()  
{
 	 return (new Illuminate\Http\Request)->getProtocolVersion();
}
/**
 * Returns the request body content.
 *
 * @param bool $asResource If true, a resource will be returned
 *
 * @return string|resource The request body content or a resource to read the body stream
 *
 * @throws \LogicException
 */
static public function getContent ( $asResource =false)  
{
 	 return (new Illuminate\Http\Request)->getContent($asResource);
}
/**
 * Gets the Etags.
 *
 * @return array The entity tags
 */
static public function getETags ()  
{
 	 return (new Illuminate\Http\Request)->getETags();
}
/**
 * @return bool
 */
static public function isNoCache ()  
{
 	 return (new Illuminate\Http\Request)->isNoCache();
}
/**
 * Returns the preferred language.
 *
 * @param array $locales An array of ordered available locales
 *
 * @return string|null The preferred locale
 */
static public function getPreferredLanguage (array $locales =NULL)  
{
 	 return (new Illuminate\Http\Request)->getPreferredLanguage($locales);
}
/**
 * Gets a list of languages acceptable by the client browser.
 *
 * @return array Languages ordered in the user browser preferences
 */
static public function getLanguages ()  
{
 	 return (new Illuminate\Http\Request)->getLanguages();
}
/**
 * Gets a list of charsets acceptable by the client browser.
 *
 * @return array List of charsets in preferable order
 */
static public function getCharsets ()  
{
 	 return (new Illuminate\Http\Request)->getCharsets();
}
/**
 * Gets a list of encodings acceptable by the client browser.
 *
 * @return array List of encodings in preferable order
 */
static public function getEncodings ()  
{
 	 return (new Illuminate\Http\Request)->getEncodings();
}
/**
 * Gets a list of content types acceptable by the client browser.
 *
 * @return array List of content types in preferable order
 */
static public function getAcceptableContentTypes ()  
{
 	 return (new Illuminate\Http\Request)->getAcceptableContentTypes();
}
/**
 * Returns true if the request is a XMLHttpRequest.
 *
 * It works if your JavaScript library sets an X-Requested-With HTTP header.
 * It is known to work with common JavaScript frameworks:
 *
 * @see https://wikipedia.org/wiki/List_of_Ajax_frameworks#JavaScript
 *
 * @return bool true if the request is an XMLHttpRequest, false otherwise
 */
static public function isXmlHttpRequest ()  
{
 	 return (new Illuminate\Http\Request)->isXmlHttpRequest();
}
/**
 * Indicates whether this request originated from a trusted proxy.
 *
 * This can be useful to determine whether or not to trust the
 * contents of a proxy-specific header.
 *
 * @return bool true if the request came from a trusted proxy, false otherwise
 */
static public function isFromTrustedProxy ()  
{
 	 return (new Illuminate\Http\Request)->isFromTrustedProxy();
}
/**
 * Determine if the given content types match.
 *
 * @param  string  $actual
 * @param  string  $type
 * @return bool
 */
static public function matchesType ( $actual , $type )  
{
 	 return (new Illuminate\Http\Request)->matchesType($actual,$type);
}
/**
 * Determine if the request is sending JSON.
 *
 * @return bool
 */
static public function isJson ()  
{
 	 return (new Illuminate\Http\Request)->isJson();
}
/**
 * Determine if the current request probably expects a JSON response.
 *
 * @return bool
 */
static public function expectsJson ()  
{
 	 return (new Illuminate\Http\Request)->expectsJson();
}
/**
 * Determine if the current request is asking for JSON.
 *
 * @return bool
 */
static public function wantsJson ()  
{
 	 return (new Illuminate\Http\Request)->wantsJson();
}
/**
 * Determines whether the current requests accepts a given content type.
 *
 * @param  string|array  $contentTypes
 * @return bool
 */
static public function accepts ( $contentTypes )  
{
 	 return (new Illuminate\Http\Request)->accepts($contentTypes);
}
/**
 * Return the most suitable content type from the given array based on content negotiation.
 *
 * @param  string|array  $contentTypes
 * @return string|null
 */
static public function prefers ( $contentTypes )  
{
 	 return (new Illuminate\Http\Request)->prefers($contentTypes);
}
/**
 * Determine if the current request accepts any content type.
 *
 * @return bool
 */
static public function acceptsAnyContentType ()  
{
 	 return (new Illuminate\Http\Request)->acceptsAnyContentType();
}
/**
 * Determines whether a request accepts JSON.
 *
 * @return bool
 */
static public function acceptsJson ()  
{
 	 return (new Illuminate\Http\Request)->acceptsJson();
}
/**
 * Determines whether a request accepts HTML.
 *
 * @return bool
 */
static public function acceptsHtml ()  
{
 	 return (new Illuminate\Http\Request)->acceptsHtml();
}
/**
 * Get the data format expected in the response.
 *
 * @param  string  $default
 * @return string
 */
static public function format ( $default ='html')  
{
 	 return (new Illuminate\Http\Request)->format($default);
}
/**
 * Retrieve an old input item.
 *
 * @param  string  $key
 * @param  string|array|null  $default
 * @return string|array
 */
static public function old ( $key =NULL, $default =NULL)  
{
 	 return (new Illuminate\Http\Request)->old($key,$default);
}
/**
 * Flash the input for the current request to the session.
 *
 * @return void
 */
static public function flash ()  
{
 	 return (new Illuminate\Http\Request)->flash();
}
/**
 * Flash only some of the input to the session.
 *
 * @param  array|mixed  $keys
 * @return void
 */
static public function flashOnly ( $keys )  
{
 	 func_get_args();
	 return (new Illuminate\Http\Request)->flashOnly($keys);
}
/**
 * Flash only some of the input to the session.
 *
 * @param  array|mixed  $keys
 * @return void
 */
static public function flashExcept ( $keys )  
{
 	 func_get_args();
	 return (new Illuminate\Http\Request)->flashExcept($keys);
}
/**
 * Flush all of the old input from the session.
 *
 * @return void
 */
static public function flush ()  
{
 	 return (new Illuminate\Http\Request)->flush();
}
/**
 * Retrieve a server variable from the request.
 *
 * @param  string  $key
 * @param  string|array|null  $default
 * @return string|array|null
 */
static public function server ( $key =NULL, $default =NULL)  
{
 	 return (new Illuminate\Http\Request)->server($key,$default);
}
/**
 * Determine if a header is set on the request.
 *
 * @param  string  $key
 * @return bool
 */
static public function hasHeader ( $key )  
{
 	 return (new Illuminate\Http\Request)->hasHeader($key);
}
/**
 * Retrieve a header from the request.
 *
 * @param  string  $key
 * @param  string|array|null  $default
 * @return string|array|null
 */
static public function header ( $key =NULL, $default =NULL)  
{
 	 return (new Illuminate\Http\Request)->header($key,$default);
}
/**
 * Get the bearer token from the request headers.
 *
 * @return string|null
 */
static public function bearerToken ()  
{
 	 return (new Illuminate\Http\Request)->bearerToken();
}
/**
 * Determine if the request contains a given input item key.
 *
 * @param  string|array  $key
 * @return bool
 */
static public function exists ( $key )  
{
 	 return (new Illuminate\Http\Request)->exists($key);
}
/**
 * Determine if the request contains a given input item key.
 *
 * @param  string|array  $key
 * @return bool
 */
static public function has ( $key )  
{
 	 func_get_args();
	 return (new Illuminate\Http\Request)->has($key);
}
/**
 * Determine if the request contains any of the given inputs.
 *
 * @param  string|array  $keys
 * @return bool
 */
static public function hasAny ( $keys )  
{
 	 func_get_args();
	 return (new Illuminate\Http\Request)->hasAny($keys);
}
/**
 * Determine if the request contains a non-empty value for an input item.
 *
 * @param  string|array  $key
 * @return bool
 */
static public function filled ( $key )  
{
 	 func_get_args();
	 return (new Illuminate\Http\Request)->filled($key);
}
/**
 * Determine if the request contains a non-empty value for any of the given inputs.
 *
 * @param  string|array  $keys
 * @return bool
 */
static public function anyFilled ( $keys )  
{
 	 func_get_args();
	 return (new Illuminate\Http\Request)->anyFilled($keys);
}
/**
 * Get the keys for all of the input and files.
 *
 * @return array
 */
static public function keys ()  
{
 	 return (new Illuminate\Http\Request)->keys();
}
/**
 * Get all of the input and files for the request.
 *
 * @param  array|mixed  $keys
 * @return array
 */
static public function all ( $keys =NULL)  
{
 	 func_get_args();
	 return (new Illuminate\Http\Request)->all($keys);
}
/**
 * Retrieve an input item from the request.
 *
 * @param  string|null  $key
 * @param  string|array|null  $default
 * @return string|array|null
 */
static public function input ( $key =NULL, $default =NULL)  
{
 	 return (new Illuminate\Http\Request)->input($key,$default);
}
/**
 * Get a subset containing the provided keys with values from the input data.
 *
 * @param  array|mixed  $keys
 * @return array
 */
static public function only ( $keys )  
{
 	 func_get_args();
	 return (new Illuminate\Http\Request)->only($keys);
}
/**
 * Get all of the input except for a specified array of items.
 *
 * @param  array|mixed  $keys
 * @return array
 */
static public function except ( $keys )  
{
 	 func_get_args();
	 return (new Illuminate\Http\Request)->except($keys);
}
/**
 * Retrieve a query string item from the request.
 *
 * @param  string  $key
 * @param  string|array|null  $default
 * @return string|array|null
 */
static public function query ( $key =NULL, $default =NULL)  
{
 	 return (new Illuminate\Http\Request)->query($key,$default);
}
/**
 * Retrieve a request payload item from the request.
 *
 * @param  string  $key
 * @param  string|array|null  $default
 *
 * @return string|array|null
 */
static public function post ( $key =NULL, $default =NULL)  
{
 	 return (new Illuminate\Http\Request)->post($key,$default);
}
/**
 * Determine if a cookie is set on the request.
 *
 * @param  string  $key
 * @return bool
 */
static public function hasCookie ( $key )  
{
 	 return (new Illuminate\Http\Request)->hasCookie($key);
}
/**
 * Retrieve a cookie from the request.
 *
 * @param  string  $key
 * @param  string|array|null  $default
 * @return string|array|null
 */
static public function cookie ( $key =NULL, $default =NULL)  
{
 	 return (new Illuminate\Http\Request)->cookie($key,$default);
}
/**
 * Get an array of all of the files on the request.
 *
 * @return array
 */
static public function allFiles ()  
{
 	 return (new Illuminate\Http\Request)->allFiles();
}
/**
 * Determine if the uploaded data contains a file.
 *
 * @param  string  $key
 * @return bool
 */
static public function hasFile ( $key )  
{
 	 return (new Illuminate\Http\Request)->hasFile($key);
}
/**
 * Retrieve a file from the request.
 *
 * @param  string  $key
 * @param  mixed  $default
 * @return \Illuminate\Http\UploadedFile|\Illuminate\Http\UploadedFile[]|array|null
 */
static public function file ( $key =NULL, $default =NULL)  
{
 	 return (new Illuminate\Http\Request)->file($key,$default);
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
 	 return (new Illuminate\Http\Request)->macro($name,$macro);
}
/**
 * Mix another object into the class.
 *
 * @param  object  $mixin
 * @return void
 *
 * @throws \ReflectionException
 */
static public function mixin ( $mixin )  
{
 	 return (new Illuminate\Http\Request)->mixin($mixin);
}
/**
 * Checks if macro is registered.
 *
 * @param  string  $name
 * @return bool
 */
static public function hasMacro ( $name )  
{
 	 return (new Illuminate\Http\Request)->hasMacro($name);
}
/**
 * Dynamically handle calls to the class.
 *
 * @param  string  $method
 * @param  array   $parameters
 * @return mixed
 *
 * @throws \BadMethodCallException
 */
static public function __callStatic ( $method , $parameters )  
{
 	 return (new Illuminate\Http\Request)->__callStatic($method,$parameters);
}
/**
 * Dynamically handle calls to the class.
 *
 * @param  string  $method
 * @param  array   $parameters
 * @return mixed
 *
 * @throws \BadMethodCallException
 */
static public function __call ( $method , $parameters )  
{
 	 return (new Illuminate\Http\Request)->__call($method,$parameters);
}

}
