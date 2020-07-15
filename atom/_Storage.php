<?php 
class Storage {
const VISIBILITY_PUBLIC = _CLASS_::VISIBILITY_PUBLIC;
const VISIBILITY_PRIVATE = _CLASS_::VISIBILITY_PRIVATE;
/**
 * Create a new filesystem adapter instance.
 *
 * @param  \League\Flysystem\FilesystemInterface  $driver
 * @return void
 */
public function __construct (League\Flysystem\FilesystemInterface $driver )  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->__construct($driver);
}
/**
 * Assert that the given file exists.
 *
 * @param  string|array  $path
 * @return static|$this
 */
static public function assertExists ( $path )  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->assertExists($path);
}
/**
 * Assert that the given file does not exist.
 *
 * @param  string|array  $path
 * @return static|$this
 */
static public function assertMissing ( $path )  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->assertMissing($path);
}
/**
 * Determine if a file exists.
 *
 * @param  string  $path
 * @return bool
 */
static public function exists ( $path )  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->exists($path);
}
/**
 * Get the full path for the file at the given "short" path.
 *
 * @param  string  $path
 * @return string
 */
static public function path ( $path )  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->path($path);
}
/**
 * Get the contents of a file.
 *
 * @param  string  $path
 * @return string
 *
 * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
 */
static public function get ( $path )  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->get($path);
}
/**
 * Create a streamed response for a given file.
 *
 * @param  string  $path
 * @param  string|null  $name
 * @param  array|null  $headers
 * @param  string|null  $disposition
 * @return \Symfony\Component\HttpFoundation\StreamedResponse
 */
static public function response ( $path , $name =NULL,array $headers =array (), $disposition ='inline')  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->response($path,$name,$headers,$disposition);
}
/**
 * Create a streamed download response for a given file.
 *
 * @param  string  $path
 * @param  string|null  $name
 * @param  array|null  $headers
 * @return \Symfony\Component\HttpFoundation\StreamedResponse
 */
static public function download ( $path , $name =NULL,array $headers =array ())  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->download($path,$name,$headers);
}
/**
 * Write the contents of a file.
 *
 * @param  string  $path
 * @param  string|resource  $contents
 * @param  mixed  $options
 * @return bool
 */
static public function put ( $path , $contents , $options =array ())  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->put($path,$contents,$options);
}
/**
 * Store the uploaded file on the disk.
 *
 * @param  string  $path
 * @param  \Illuminate\Http\File|\Illuminate\Http\UploadedFile  $file
 * @param  array  $options
 * @return string|false
 */
static public function putFile ( $path , $file , $options =array ())  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->putFile($path,$file,$options);
}
/**
 * Store the uploaded file on the disk with a given name.
 *
 * @param  string  $path
 * @param  \Illuminate\Http\File|\Illuminate\Http\UploadedFile  $file
 * @param  string  $name
 * @param  array  $options
 * @return string|false
 */
static public function putFileAs ( $path , $file , $name , $options =array ())  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->putFileAs($path,$file,$name,$options);
}
/**
 * Get the visibility for the given path.
 *
 * @param  string  $path
 * @return string
 */
static public function getVisibility ( $path )  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->getVisibility($path);
}
/**
 * Set the visibility for the given path.
 *
 * @param  string  $path
 * @param  string  $visibility
 * @return bool
 */
static public function setVisibility ( $path , $visibility )  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->setVisibility($path,$visibility);
}
/**
 * Prepend to a file.
 *
 * @param  string  $path
 * @param  string  $data
 * @param  string  $separator
 * @return bool
 */
static public function prepend ( $path , $data , $separator ='')  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->prepend($path,$data,$separator);
}
/**
 * Append to a file.
 *
 * @param  string  $path
 * @param  string  $data
 * @param  string  $separator
 * @return bool
 */
static public function append ( $path , $data , $separator ='')  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->append($path,$data,$separator);
}
/**
 * Delete the file at a given path.
 *
 * @param  string|array  $paths
 * @return bool
 */
static public function delete ( $paths )  
{
 	 func_get_args();
	 return (new Illuminate\Filesystem\FilesystemAdapter)->delete($paths);
}
/**
 * Copy a file to a new location.
 *
 * @param  string  $from
 * @param  string  $to
 * @return bool
 */
static public function copy ( $from , $to )  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->copy($from,$to);
}
/**
 * Move a file to a new location.
 *
 * @param  string  $from
 * @param  string  $to
 * @return bool
 */
static public function move ( $from , $to )  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->move($from,$to);
}
/**
 * Get the file size of a given file.
 *
 * @param  string  $path
 * @return int
 */
static public function size ( $path )  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->size($path);
}
/**
 * Get the mime-type of a given file.
 *
 * @param  string  $path
 * @return string|false
 */
static public function mimeType ( $path )  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->mimeType($path);
}
/**
 * Get the file's last modification time.
 *
 * @param  string  $path
 * @return int
 */
static public function lastModified ( $path )  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->lastModified($path);
}
/**
 * Get the URL for the file at the given path.
 *
 * @param  string  $path
 * @return string
 *
 * @throws \RuntimeException
 */
static public function url ( $path )  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->url($path);
}
/**
 * {@inheritdoc}
 */
static public function readStream ( $path )  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->readStream($path);
}
/**
 * {@inheritdoc}
 */
static public function writeStream ( $path , $resource ,array $options =array ())  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->writeStream($path,$resource,$options);
}
/**
 * Get a temporary URL for the file at the given path.
 *
 * @param  string  $path
 * @param  \DateTimeInterface  $expiration
 * @param  array  $options
 * @return string
 *
 * @throws \RuntimeException
 */
static public function temporaryUrl ( $path , $expiration ,array $options =array ())  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->temporaryUrl($path,$expiration,$options);
}
/**
 * Get a temporary URL for the file at the given path.
 *
 * @param  \League\Flysystem\AwsS3v3\AwsS3Adapter  $adapter
 * @param  string $path
 * @param  \DateTimeInterface $expiration
 * @param  array $options
 * @return string
 */
static public function getAwsTemporaryUrl ( $adapter , $path , $expiration , $options )  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->getAwsTemporaryUrl($adapter,$path,$expiration,$options);
}
/**
 * Get a temporary URL for the file at the given path.
 *
 * @param  \League\Flysystem\Rackspace\RackspaceAdapter  $adapter
 * @param  string  $path
 * @param  \DateTimeInterface  $expiration
 * @param  array  $options
 * @return string
 */
static public function getRackspaceTemporaryUrl ( $adapter , $path , $expiration , $options )  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->getRackspaceTemporaryUrl($adapter,$path,$expiration,$options);
}
/**
 * Get an array of all files in a directory.
 *
 * @param  string|null  $directory
 * @param  bool  $recursive
 * @return array
 */
static public function files ( $directory =NULL, $recursive =false)  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->files($directory,$recursive);
}
/**
 * Get all of the files from the given directory (recursive).
 *
 * @param  string|null  $directory
 * @return array
 */
static public function allFiles ( $directory =NULL)  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->allFiles($directory);
}
/**
 * Get all of the directories within a given directory.
 *
 * @param  string|null  $directory
 * @param  bool  $recursive
 * @return array
 */
static public function directories ( $directory =NULL, $recursive =false)  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->directories($directory,$recursive);
}
/**
 * Get all (recursive) of the directories within a given directory.
 *
 * @param  string|null  $directory
 * @return array
 */
static public function allDirectories ( $directory =NULL)  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->allDirectories($directory);
}
/**
 * Create a directory.
 *
 * @param  string  $path
 * @return bool
 */
static public function makeDirectory ( $path )  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->makeDirectory($path);
}
/**
 * Recursively delete a directory.
 *
 * @param  string  $directory
 * @return bool
 */
static public function deleteDirectory ( $directory )  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->deleteDirectory($directory);
}
/**
 * Flush the Flysystem cache.
 *
 * @return void
 */
static public function flushCache ()  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->flushCache();
}
/**
 * Get the Flysystem driver.
 *
 * @return \League\Flysystem\FilesystemInterface
 */
static public function getDriver ()  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->getDriver();
}
/**
 * Pass dynamic methods call onto Flysystem.
 *
 * @param  string  $method
 * @param  array  $parameters
 * @return mixed
 *
 * @throws \BadMethodCallException
 */
static public function __call ( $method ,array $parameters )  
{
 	 return (new Illuminate\Filesystem\FilesystemAdapter)->__call($method,$parameters);
}

}
