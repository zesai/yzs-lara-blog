<?php 
class Validator {
/**
 * Create a new Validator factory instance.
 *
 * @param  \Illuminate\Contracts\Translation\Translator  $translator
 * @param  \Illuminate\Contracts\Container\Container|null  $container
 * @return void
 */
public function __construct (Illuminate\Contracts\Translation\Translator $translator ,Illuminate\Contracts\Container\Container $container =NULL)  
{
 	 return (new Illuminate\Validation\Factory)->__construct($translator,$container);
}
/**
 * Create a new Validator instance.
 *
 * @param  array  $data
 * @param  array  $rules
 * @param  array  $messages
 * @param  array  $customAttributes
 * @return \Illuminate\Validation\Validator
 */
static public function make (array $data ,array $rules ,array $messages =array (),array $customAttributes =array ())  
{
 	 return (new Illuminate\Validation\Factory)->make($data,$rules,$messages,$customAttributes);
}
/**
 * Validate the given data against the provided rules.
 *
 * @param  array  $data
 * @param  array  $rules
 * @param  array  $messages
 * @param  array  $customAttributes
 * @return array
 *
 * @throws \Illuminate\Validation\ValidationException
 */
static public function validate (array $data ,array $rules ,array $messages =array (),array $customAttributes =array ())  
{
 	 return (new Illuminate\Validation\Factory)->validate($data,$rules,$messages,$customAttributes);
}
/**
 * Register a custom validator extension.
 *
 * @param  string  $rule
 * @param  \Closure|string  $extension
 * @param  string|null  $message
 * @return void
 */
static public function extend ( $rule , $extension , $message =NULL)  
{
 	 return (new Illuminate\Validation\Factory)->extend($rule,$extension,$message);
}
/**
 * Register a custom implicit validator extension.
 *
 * @param  string  $rule
 * @param  \Closure|string  $extension
 * @param  string|null  $message
 * @return void
 */
static public function extendImplicit ( $rule , $extension , $message =NULL)  
{
 	 return (new Illuminate\Validation\Factory)->extendImplicit($rule,$extension,$message);
}
/**
 * Register a custom dependent validator extension.
 *
 * @param  string  $rule
 * @param  \Closure|string  $extension
 * @param  string|null  $message
 * @return void
 */
static public function extendDependent ( $rule , $extension , $message =NULL)  
{
 	 return (new Illuminate\Validation\Factory)->extendDependent($rule,$extension,$message);
}
/**
 * Register a custom validator message replacer.
 *
 * @param  string  $rule
 * @param  \Closure|string  $replacer
 * @return void
 */
static public function replacer ( $rule , $replacer )  
{
 	 return (new Illuminate\Validation\Factory)->replacer($rule,$replacer);
}
/**
 * Set the Validator instance resolver.
 *
 * @param  \Closure  $resolver
 * @return void
 */
static public function resolver (Closure $resolver )  
{
 	 return (new Illuminate\Validation\Factory)->resolver($resolver);
}
/**
 * Get the Translator implementation.
 *
 * @return \Illuminate\Contracts\Translation\Translator
 */
static public function getTranslator ()  
{
 	 return (new Illuminate\Validation\Factory)->getTranslator();
}
/**
 * Get the Presence Verifier implementation.
 *
 * @return \Illuminate\Validation\PresenceVerifierInterface
 */
static public function getPresenceVerifier ()  
{
 	 return (new Illuminate\Validation\Factory)->getPresenceVerifier();
}
/**
 * Set the Presence Verifier implementation.
 *
 * @param  \Illuminate\Validation\PresenceVerifierInterface  $presenceVerifier
 * @return void
 */
static public function setPresenceVerifier (Illuminate\Validation\PresenceVerifierInterface $presenceVerifier )  
{
 	 return (new Illuminate\Validation\Factory)->setPresenceVerifier($presenceVerifier);
}

}
