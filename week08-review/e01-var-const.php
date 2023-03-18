<?php

// Varaibles:
$firstName = "Alex"; // double quotes
$lastName = 'Tonies'; // single quotes
$strNum = "100"; // "100"+"100" = 100100
$age = 65;
$total = 55.72; // number can have decimal point using point but not comma
$avg = 25.67;
$exam1=90;

$isValid = true;

// Types:
// https://www.php.net/manual/en/function.gettype.php

// Define a constant
/* 
A constant is an identifier (name) for a simple value. 
As the name suggests, that value cannot change during the execution of the script
Link: https://www.php.net/manual/en/language.constants.php
*/


    // Valid constant names
    define("FOO",     "something");
    define("FOO2",    "something else");
    define("FOO_BAR", "something more");

    // Invalid constant names
    define("2FOO",    "something");

    // IN JS, JAVA, C#, Python => + for concatenation
    // In PHP => . 
    echo 'The total of your invoice is: '.$total; 
    
    // echo, print, printf

    /*
	echo vs print:
    --------------
    - print can only display a single value
	- echo can display or can use a comma separated list
	as shown below:	
    
    - printf
    link: https://www.php.net/manual/en/function.printf.php
    */

    // using echo:
    echo "<br> the age is $age"; // " " => the value for the variable $age
    echo '<br> the age is $age'; // ' ' => the literal text $age (WRONG)
    echo "<hr>";

    // using print:
    print "<br> the age is $age"; // " " => the value for the variable $age
    print '<br> the age is $age'; // ' ' => the literal text $age (WRONG)
    print "<hr>";

    echo $firstName, $lastName, $age;  // output a list of values/variables with commas
    
    // print $firstName, $lastName;    
    // syntax error, unexpected token ","


    // Arrays:
    // indexed
    $firstQuarter = array('January', 'February', 'March');
    print_r($firstQuarter);
    // OR:
    $employees = [ 'Sam Simpson', 'Martin Smith', 'Alex Chow' ]; // same as we do JavaScript

    // Associative
    $descriptions = [
        'HTML' => 'Display the page content',
        'CSS' => 'Style the page content',
        'JavaScript' => 'Interact with the user input',
        'PHP' => 'Create Dynamic Pages',
        // more example:
        'isImportant' => True,
        'hours' => 42
    ];  
    
   // Math:
   echo"<hr>";
   $value1=2;      
   // variable++ or ++variable  
   
   $result = $value1++ * 2;  // 2 * 2 = 4 => result 
   // => then PHP will increment value1 after!!!!
   echo "<br>result: $result"; // result: 4
   echo "<br>our value1: $value1"; // our value1: 3  

   $number = 2;
   $final = ++$number * 2; // (2+1) => 3 * 2 = 6
   echo "<br>final: $final";  // final: 6

    // Using the built-in function isset():
    echo $middleName; // Undefined variable $middleName 

    $middleName="Sam";

    
    // isset(): Determine if a variable is declared and is different than NULL
    // bool => True => 1
    // bool => False => empty
    echo "<br>middle name has a value: ". isset($middleName);

    // Using strip_tags()
    // Strip HTML and PHP tags from a string
    $input = "<script>alert('Just Testing');</script>";

    // echo ($input); // for testing

    echo "<br>".strip_tags($input);

    // String Functions
    // Using string functions: lower/upper
	// Links:
	// https://www.php.net/manual/en/function.strtolower.php
	// https://www.php.net/manual/en/function.strtoupper.php

    $upperFName = strtoupper($firstName);

    // Trim:
    // Strip whitespace (or other characters) from the beginning and end of a string
    $initialText ="   Hi there, we are learning PHP!       Do you like it?";
    echo "<br>Initial Text: $initialText";
    echo "<br>Initial Text Length: ". strlen($initialText)." character(s)";

    $finalText = trim($initialText);
    echo "<br>Final Text: $finalText";
    echo "<br>Final Text Length: ". strlen($finalText)." character(s)";

    // explode => Split a string by a string
    $initialArray = explode(" ",$initialText);
    //  explode() expects at least 2 arguments, 
    $finalArray = explode(" ",$finalText);

    /* 
    var_dump()
    print_r()
    */
    echo "<hr>";    
    print_r($initialArray);
    echo "<hr>";  
    print_r($finalArray);

    $docTitle = "PHP Language";

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php  echo $docTitle  ?></title>
</head>
<body>
        <p>   
            Hi there,
              
            we are learning         PHP!



        </p>
</body>
</html>


    

