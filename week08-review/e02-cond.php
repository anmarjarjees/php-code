<?php

// If condition:
echo "<br>";
$hasAnything = null; // true/false?
if ($hasAnything) {
    echo "True: hasAnything variable has a value";
} else {
    echo "False: hasAnything variable is null";
}
// the keyword "null" is false

echo "<br>";
$myNumber = 0; // true/false?
if ($myNumber) {
    echo "True: myNumber variable has a number (negative or positive)";
} else {
    echo "False: myNumber variable has the value of 0";
}

// the value of 0 is false
// the positive/negative numbers are true

echo "<br>";
$myStr = ""; // true/false?
if ($myStr) {
    echo "True: myStr variable has a string";
} else {
    echo "False: myStr variable has nothing just empty string";
}

echo "<br>";
$myArray = []; // or $myArray = array();
if ( $myArray ) {
    echo "True: My array is not empty";
  } else {
    echo "False: My array is empty";
}

$num =8;
if ( $num % 2 == 0 ) {
    $text = "Even Number";
} else {
    $text = "Odd Number";
} 

// Or without }{ 
if ( $num % 2 == 0 ) $text = "Even Number";
else $text = "Odd Number";



// Ternary Operator:
$text = ($num % 2 == 0) ? "Even Number" : "Odd Number";

echo "<hr>";
$number1=100; // 100 as a value => int data type
$number2="100"; // 100 as a value => string data type

if ($number1==$number2) {
    echo "<br>Both are equals either as values, datatype, or both!";
} else {
    echo "<br>Not equal";
}
echo "<hr>";

/* 
=== both sides are identical in value and data type
*/
if ($number1==$number2) {
    echo "<br>Both are equals as values AND datatype";
} else {
    echo "<br>Not equal";
}
echo "<hr>";

// Switch:
echo "<hr>";
$fruit = "orange";
switch ( $fruit ) {
    // in case if the value of $fruit is "orange"then run the code of this case:
    case 'orange': // with text values => we use either " or '
      echo 'So your favourite fruit is orange';
      break; // stop the code of going any further and jumping the next case!

    case 'apple':
      echo 'So your favourite fruit is apple';
      break;

    case 'banana':
      echo 'So your favourite fruit is banana';
      break;

    default:
      echo 'So your favourite fruit is ' . $fruit;
  } // end of switch 

  



