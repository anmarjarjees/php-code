<?php

/* 
***********************************
Quick Review About Variable Scopes:
***********************************
*/

// declaring a global variable (inside the main script Not inside a function)
$course="PHP"; 

function printAddition($x,$y) {
    // for testing:
    echo "<br>The 'course' global variable inside the function: $course"; // works fine
    // declaring a local variable (inside the function)
    // it can be only accessed/used inside this function itself
    $addition = $x + $y;
    echo "<br>The 'addition' local variable inside its function: $addition";
}

printAddition();

// Error: Undefined variable $addition 
echo "<br>The 'addition' local variable outside the function: $addition"; // Error => local variable => local scope

/*
Super Global Variables (Associative Arrays):
They are like associative arrays (in written in capital letters)
- $_GET => a super global associative array: with HTML form if the method="GET" 
- $_POST => a super global associative array: with HTML form if the method="POST"
- $_SERVER => a super global associative array: to refer to the hosting server for our website and the current file
- $_SESSION => a super global associative array: to save the user session between different pages of the same website

These two super global arrays will be used with the HTML form to get the user input
Depending the method attribute value of the form element:
- method="POST" OR method="post" 
- method="GET" OR method="get" 

Just remember if there is no method="post" or no method="get"
By default the form will use method="get"
*/
echo "<hr><hr>";

// for testing:
var_dump($_GET); // array(0) { }
echo "<hr>";
var_dump($_POST); // array(0) { }
echo "<hr>";
var_dump($_SERVER); // ["PHP_SELF"] => string(40) "/comp1006/201/w06/0.super-global-var.php" 
// $_SERVER["PHP_SELF"]
echo "<hr>";

// Undefined variable $check => this variable is not declared
var_dump($check);