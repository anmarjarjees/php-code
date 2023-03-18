<?php
// Focusing on PHP code, so need for HTML template in this file:

// user-defined function or custom function
/*
In PHP:
function functionName() {
    the code for this function
}

In Py:
def functionName():
    the code for this function

In Java (functions are called methods because they are written inside a class)
public void functionName() {
    the code for this function
}

In JS:
function functionName() {
    the code for this function
}
*/


// Create our first function to convert number of minutes to number of hours

/*
	The rule: 1 Hour = 60 minutes
	As a general rule, dividing your number of minutes by 60 will give you the same time in hours.

	The formula: hours = x min / 60 => the time in hour(s)
	hours = 120 min / 60 min
    hours = 180 min / 60 min
*/ 
/* 
in Java:
public double convertMinToHr(int minutes) {
    double hours = minutes / 60;
    return  hours;
}
*/

// Step1: Create our function
function convertMinToHr($minutes) {
    $hours = $minutes / 60;
    /*
    In JS, we use toFixed(),
    We can use PHP number_format() Function
    https://www.tutorialrepublic.com/php-reference/php-number-format-function.php
    */

    $hours = number_format( $hours , 1 );
    return $hours;
}

// just for fun :-)
function changeGroup($program, $section, $studentName, $currentGroup, $newGroup ) {

}


// Step2: Then we need to call our function:
convertMinToHr(180); // no output here => only returns a value

echo "<br> the hours for 60 min: " . convertMinToHr( 60 ); // $hours = 60 / 60 =>
echo "<br> the hours for 90 min: " . convertMinToHr( 90 ); // $hours = 90 / 60
echo "<br> the hours for 120 min: " . convertMinToHr( 120 ); // $hours = 120 / 60
echo "<br> the hours for 180 min: " . convertMinToHr( 180 ); // $hours = 180 / 60
echo "<br> the hours for 200 min: " . convertMinToHr( 200 ); // $hours = 200 / 60

/* 
NOTE:
We usually declare a function then call it later,
but the order can be changed, so we can for example call a function in line 10
while the function was written/declared in line 90
*/


/*
    Task:  like "Google" :-), create 2 functions:
    - to convert LB to KG
    - to convert KG to LB

    The equations:
    m ==> mass

    The official formulas:
    **********************
    1. To find the lb value:
    m(lb) = m(kg) / 0.45359237
    OR The formula: KG Value = Pound Value x 0.45359237

    2. To find the kg value:
    m(kg) = m(lb) × 0.45359237

    we can use the formulas above as we did with JS
    or we can use the formulas for an approximate result
*/

// Create our function first => convert lb to kg:
// this function accepts one value
function convertLbToKg( $pound ) {
    // Google: Formula for an approximate result, divide the mass value by 2.205
    $Kilogram = $pound / 2.205;
    return $Kilogram;
  }


// Then we need to call our function:
echo "<br>" . convertLbToKg( 26 );
echo "<br>" . convertLbToKg( 30 );

/* 
  Task: converting KG to LB function
  Google: Formula for an approximate result, divide the mass value by 2.205
*/

/*
Task: Create a function named "circleArea()" to find the area of any circle

In geometry, the area enclosed by a circle of radius r is π r2. 

so in other words, the Math formula to find the area for any circle: 
Area = PI * (radius value*radius value)
PI value is approximately equal to 3.14159

for example:
if the radius value of a circle is 8:
Area = 3.14159 * 8 * 8 
Area = 201.06

This function doesn't print or display anything, just return the value to the main script
*/ 

// more advanced examples:
/*
Task: Create a function that takes any list of numbers and return the total of these numbers:

the list of numbers => just an array that contains numeric values
this list of numbers (array) has to be created/populated first

- create a function that accept an array of numeric values
- this function should return the total of these numbers
- The main problem: to find a total of all the numbers in an array
*/

// Array of numbers:
$numbers = [ 25, 23, 54, 12, 8 ]; // hard coding the values
// Finding the total => exactly the "same logic" in JS or any programming language// the total = 25 + 23 + 54 + 12 + 8
// Bad way of coding! Because we should use for loop instead of repeating the same line x of times!
$theTotal = 0; // initial value for the sum container
$theTotal = $theTotal + $numbers[ 0 ]; // 0 + 25 = 25 => the current value of "theTotal" is 25
$theTotal = $theTotal + $numbers[ 1 ]; // 25 + 23 = 48;
$theTotal = $theTotal + $numbers[ 2 ];
$theTotal = $theTotal + $numbers[ 3 ];
$theTotal = $theTotal + $numbers[ 4 ];
echo "<br>My first total is: $theTotal"; // My first total is: 122

// use for loop instead (the standard logic that we used in JS):
$total = 0; // creating new variable named "total" with initial value of 0
for ( $i = 0; $i < count( $numbers ); $i++ ) {
    $total = $total + $numbers[ $i ]; // will run for i=0 to i=4
}
echo "<br>My second total is: $total";

// foreach:
$total = 0; // Reset the value of  "total" to the initial value of 0
foreach ($numbers as $number) {
    // $total = $total + $number;
    // OR:
    $total += $number;
}
echo "<br>My third total is: $total";

// Function Signiture 
function getArrayTotal($anyArray) {
    $total = 0; // creating new variable named "total" with initial value of 0
    foreach ($anyArray as $number) {
        $total += $number;        
    }
    return $total;
    // return statement will return a value and terminate my function
    // all these lines will be ignored
    echo "Hello, do you like php?";
    echo "Hello, I hope you like it";
}

// I want to find the total again for these two arrays:
$myExams = [ 89, 78, 90, 91, 85 ];
$myBookPrices = [ 45.74, 34.72, 32.12, 24.89 ];

// NOTE: The following 3 lines of calling our function 3 times will not display any value
// 1. Calling our function and passing the argument => our first array $numbers
getArrayTotal($numbers);
// 2. Calling our function and passing the argument => our second array $myExams
getArrayTotal($myExams);
// 3. Calling our function and passing the argument => our third array $myBookPrices
getArrayTotal($myBookPrices);

// We need to echo the returned value of each time we call our function:
echo "<hr>";
// call our function: we just need to echo the function for each array:
// 1.find the total for my "$numbers" array:
echo "<br> the total of my numbers is: ".getArrayTotal($numbers);

// 2.find the total for my "myExams" array:
echo "<br> the total of my exam is: ".getArrayTotal($myExams);

// 3.find the total for my "$myBookPrices" array:
echo "<br> the total of my book prices is: ".getArrayTotal($myBookPrices);

// In the assignment1 - part2:
// This function supposed to return the result of multiplying all the numbers inside any array
// so this function like our previous function "getArrayTotal()" also needs to have an array as parameter
function multiplyArrayValues($anyArray) {
    // we can can write our logic and run our for loop against the varaible "anyArray"
    // finding the result of multiplying all the numbers
    // return the result
}

/*
Hint: PHP has a built-in function named "is_numeric" to check if the value is numeric or not numeric.

example: 
is_numeric(45) => return true
is_numeric(abc) => return false
*/

// for testing and learning is_numeric function:
    echo "<br>" . is_numeric( 45 ); // 1 means true
    echo "<br>" . is_numeric( 45.78 ); // 1 means true
    echo "<br>" . is_numeric( "abc" ); // nothing means false

    $myInvoiceItems = [ 9.12, 8.19, 10.67, 1.8, 5.32 ];
    $myBookPrices = [ 45.74, 34.72, 32.12, 24.89 ];

/*
For learning and for assignment 1 hint:
Let's modify the same function from the previous example to check if the array has any text value so it should stop the function return "Invalid Input! 
Please Enter numeric values only" else finish the job:
*/  
function getTotalPrice( $anyArray ) {
  /*
  Task 1: Validate every element in the array, if any element contains a text value just terminate the function by returning 0, otherwise just continue to task 2
  */
  for ( $index = 0; $index < count( $anyArray ); $index++ ) {
    // We need to check if the current element is NOT numeric then return 0
     if (!is_numeric($anyArray[$index])) {
        echo "<p style='color: red; background-color:yellow'>Invalid Input! Please Enter numeric values only<p>";
        return 0;        
     }
  }

  /* 
  Task 2: Find the total 
  */
  $total = 0;
  for ( $index = 0; $index < count( $anyArray ); $index++ ) {
    $total += $anyArray[ $index ];
  } // end for loop2
  return $total;
}

$testingArray = [ 4, 5, 6, "ABC", 9, 2, 3 ];
echo "The total of testing array is: " . getTotalPrice($testingArray);

// Extra Example
// Modify the function getTotalPrice() to skip the not numeric values:
// let's name it getNumArrayTotal()
function getNumArrayTotal($anyArray) {
  $total = 0;
  foreach ($anyArray as $value) {
      // if this number is Not numeric then stop it!!!
      if (!is_numeric($value))   {
          continue;
      } 
      $total += $value;
  }
  return $total;
}

$testingArray = [ 1, 2, "ABC", 3 ];
echo "The total of testing array is: " . getTotalPrice($testingArray);


/*
Good to know!
Type declarations:
Type declarations can be added to function arguments, 
return values, and, as of PHP 7.4.0, class properties. 
They ensure that the value is of the specified type at call time, 
otherwise a TypeError is thrown.
PHP.NET: https://www.php.net/manual/en/language.types.declarations.php

Or check this article (advanced):
https://www.phpclasses.org/blog/post/1047-php-8-type-hinting.html#th_version
*/

