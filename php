PHP: Hypertext Preprocessor

<script language="php">    <!-- latest version of PHP removes support -->
    echo "Hello World!";
</script>

<? ?> // supported by the server

language construct???? (e.g. echo) (cosas particulares del lenguage)

//, /**/ -> comments

variable
	starts with letter or underscore
	no starts with number
	only contains alpha-numeric and underscore
	case sensitive
	
constants
	can not be changed or undefined
	starts with letter or underscore
	
	define(name, value, case-insensitive)
		case-insensitive -> should be case-insensitive (default - false)
		
data types
	String, Integer, Float, Boolean, Array, Object, NULL, Resource (referencia a un recurso externo)
	
	string \n, \r, \, \, \, \, \, 
		"" escapa 
		'' solo escapa \\ y \' (los demas son tratados como string)
	int = positive, negative
	
	$str = "10"; // converts to correct type
	$int = 20;
	$sum = $str + $int; // 30
	
scope
	local, global
	
variable variables
	$a = 'hello';
	$hello = "Hi!";
	echo $$a;
	The value of $a is equal to "hello". The resulting variable is $hello, which holds the value "Hi!
	
operators
	+, -, *, /, % (floating point numbers with the modulus, converted to integers before the operation)
	
increment & decrement
	post-increment returns the original value before it changes the variable
	pre-increment changes the variable first and then returns the value
	
assigment
	+=, -=, *=, /=, %=
	
comparison
	==
	=== (same type)
	!=, <>
	!== (same type)
	< , >, <=, >=
	
logic
	and, &&
	or, ||
	xor (either, but not both)
	!
	
arrays
	numeric/indexed (can be assigned auto, starts with zero)
	associative (named keys)
	
multi-dimensional
	1 o + arrays
	
control structures
	if(condition){true}else{false}, if(condition){true}elseif(condition){true}
		only one statement X {}
	while(condition){true}
	do{once, then if true} while(condition)
	for(init; condition; increment){true} (Each of the parameter expressions can be empty or contain 
										   multiple expressions that are separated with commas)
	foreach(array as value){}, foreach(array as key => value){} (only in arrays)
	switch(n){ case val1: // break; default:} (break -> code keeps running next case statements, 
											   even doesn't match)
	break (ends -> for, foreach, while, do-while, switch, stop the script)
	continue (skipping remains of the current loop iteration... all looping structures)
	include/require (insertion of the content, before the server executes it, absolute/relative path)
		vs ---> require produces a fatal error
		
functions
	start with letter, underscore
	not number or special symbol
	
	parameters -> value passed
	argument -> value you pass
	
	return (stops execution, send value)... empty -> null??
	
predefinen variables
	superglobal (always accessible)
	$_SERVER (array headers, paths, and script locations... created by the web server)
	$GLOBALS
	$_REQUEST
	$_POST
	$_GET
	$_FILES
	$_ENV
	$_COOKIE
	$_SESSION
	
forms
	$_POST --> access by name elements (invisible to others.. embedded within the body of the HTTP request
				supports multi-part binary input.. not bookmark)
	$_GET --> access by name elements (visible to everyone in URL... limit 2000 characters, no pass)
	action (attribute -> when the form is submitted)
	method (post, get)
	$_SESSION --> (across multiple pages... default, last until the user closes the browser)
		session_start() -->  very first thing in your document
		session_unset() --> remove
		session_destroy() --> destroy
	$_COOKIE --> (identify the user, small file on the user's computer, )
		setcookie(name, value, expire, path, domain, secure, httponly) ... BEFORE the <html> tag
			 name (required)
			expire (in seconds)  ... 86,400 * 30, in which 86,400 seconds = one day
			secure (transmitted over a secure, HTTPS connection)
			httponly (accessible only through the HTTP protocol.. reduce identity theft using XSS)
			
files
	fopen() (creates or opens a file)
		r: Opens read only.
		w: Opens write only. Erases contents file or new file if doesn't exist.
		a: Opens write only.
		x: new file for write only.
		r+: Opens file for read/write.
		w+: Opens file for read/write. Erases contents file or new file if it doesn't exist.
		a+: Opens file for read/write. new file if the file doesn't exist
		x+: Creates new file for read/write
	fwrite(file(resource), string) 
	fclose() (close file.. TRUE on success or FALSE on failure)






config.php
