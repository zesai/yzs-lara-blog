<?php 
class Crypt {
/**
 * Create a new encrypter instance.
 *
 * @param  string  $key
 * @param  string  $cipher
 * @return void
 *
 * @throws \RuntimeException
 */
public function __construct ( $key , $cipher ='AES-128-CBC')  
{
 	 return (new Illuminate\Encryption\Encrypter)->__construct($key,$cipher);
}
/**
 * Determine if the given key and cipher combination is valid.
 *
 * @param  string  $key
 * @param  string  $cipher
 * @return bool
 */
static public function supported ( $key , $cipher )  
{
 	 return (new Illuminate\Encryption\Encrypter)->supported($key,$cipher);
}
/**
 * Create a new encryption key for the given cipher.
 *
 * @param  string  $cipher
 * @return string
 */
static public function generateKey ( $cipher )  
{
 	 return (new Illuminate\Encryption\Encrypter)->generateKey($cipher);
}
/**
 * Encrypt the given value.
 *
 * @param  mixed  $value
 * @param  bool  $serialize
 * @return string
 *
 * @throws \Illuminate\Contracts\Encryption\EncryptException
 */
static public function encrypt ( $value , $serialize =true)  
{
 	 return (new Illuminate\Encryption\Encrypter)->encrypt($value,$serialize);
}
/**
 * Encrypt a string without serialization.
 *
 * @param  string  $value
 * @return string
 */
static public function encryptString ( $value )  
{
 	 return (new Illuminate\Encryption\Encrypter)->encryptString($value);
}
/**
 * Decrypt the given value.
 *
 * @param  mixed  $payload
 * @param  bool  $unserialize
 * @return mixed
 *
 * @throws \Illuminate\Contracts\Encryption\DecryptException
 */
static public function decrypt ( $payload , $unserialize =true)  
{
 	 return (new Illuminate\Encryption\Encrypter)->decrypt($payload,$unserialize);
}
/**
 * Decrypt the given string without unserialization.
 *
 * @param  string  $payload
 * @return string
 */
static public function decryptString ( $payload )  
{
 	 return (new Illuminate\Encryption\Encrypter)->decryptString($payload);
}
/**
 * Get the encryption key.
 *
 * @return string
 */
static public function getKey ()  
{
 	 return (new Illuminate\Encryption\Encrypter)->getKey();
}

}
