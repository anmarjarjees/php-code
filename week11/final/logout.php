<?php
/* 
This is page doesn't need a real full html content!!!!
ONLY PHP code to close/end (destroy) the session
*/

// We need to run this method also, otherwise:
// Warning: session_destroy(): Trying to destroy uninitialized session
session_start(); 

// session_destroy(): Destroys all data registered to a session
session_destroy(); 

/*
IMPORTANT NOTE:
--------------
If you want to remove certain session data, 
simply unset the corresponding key of the $_SESSION associative array, 
as shown in the following example:
*/
// Removing session data
/* 
if(isset($_SESSION["lastname"])){
    // using the built-in php unset()
    unset($_SESSION["lastname"]);
} 
*/

header("Location: index.php");
exit();

// no need to add contents!