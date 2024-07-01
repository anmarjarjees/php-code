<?php

// Very Important Examples for part 1 assignment 1:
// ************************************************
/*
Array of all the exam results named "$examResults"
each exam is out of 10 (10 is maximum)

Exam mark is 5 or more ==> pass
Exam mark is less then 5 ==> fail
*/
$examResults = [ 6, 7, 4, 2, 8, 9, 10, 5, 2, 6, 3 ];
/*
we need to loop through the examResults array
to scan each value

if the value (mark) >= 5 ==> add the value into another 
array named "passExams"

if the value (mark) <5 ==> add the value into another 
array named "failExams"

So we will populate the two new arrays on the fly using for loop as we did in the previous example
*/

// it's a good practice to prepare the two arrays
// like JS we should declare the two empty arrays
// before start using them
$passExams = [];
$failExams = [];

// looping through the examResult array
// tip: use PHP count() function inside the loop condition
for ( $i = 0; $i < count( $examResults ); $i++ ) {
	// the main logic goes here
	if ( $examResults[ $i ] >= 5 ) {
		// since this element is > or = 5
		// we need to add it to passExams array
		// in PHP we can leave it empty[] like $passExams[]
		// and PHP will add the index automatically
		$passExams[] = $examResults[ $i ];
	} else { // else ==> mark < 5
		// add the value into "failExams"
		$failExams[] = $examResults[ $i ];
	}
}

// Last step, just to print the two arrays:
// notice below, we used ' and NOT " to print the text only
// we can use " if we want to print the values also
echo '<br> $examResults';
print_r( $examResults );
echo '<br> $passArray: ';
print_r( $passExams );
echo '<br> $failArray: ';
print_r( $failExams );

echo "<hr><hr>";

echo is_int(90);
// true = 1 , 

echo is_int(90.78); // false = nothing

// Task: Creating an array that is mixed of "letters" like "a","b" and "integers" like 1,2,3
// in other words, this array has text values and numeric values
// we can name it "letIntArray" for "letters and Integers Array":
$letIntArray = [ 'a', 4, 'c', 75, 122, 'y', 100, 88, 'b', 'k', 'm', 7 ,'g'];

/*
Task:
1. We will create two new empty arrays:
- $intArray => for an array that contains only integer values
- $letterArray => for an array that contains only letter/string values

2. Populate (putting) the values of two these arrays on the fly (using for loop):
- $intArray => will contain only the integer numbers (values) of $letIntArray
$intArray => 4, 75, 122, 100, 88, 7

- $letterArray => will contain only the letters (values) of $letIntArray
$letterArray => 'a', 'c', 'y', 'b', 'k', 'm', 'g'

HINT: for point (2) we will loop through the $letIntArray to scan each item:
- if the item is an integer number => add it to the intArray
- otherwise => add it to the letterArray
*/

$intArray = [];
$letterArray = [];

// loop the initial array:

for ($i=0; $i<count($letIntArray);$i++){
    // echo "<br>$letIntArray[$i]";
    if (is_int($letIntArray[ $i ])) {
        // what to do if the current element is an integer data type (number)
        $intArray[] = $letIntArray[$i];
    }
    else {
        // what to do if the current element is not integer
        $letterArray[] = $letIntArray[$i];
    }
}


// Last step is to print all the arrays:
echo "<hr>";
echo "The mixed array (letters and numbers):<br>";
print_r( $letIntArray );
echo "<br>";

echo "<br>int array values:<br>";
print_r( $intArray );
echo "<br>";

echo "<br>letter array values:<br>";
print_r( $letterArray );


// More examples (php.net):
$numbers = array(2, 4, 6, 8);
echo "sum(numbers) = " . array_sum($numbers) . "\n";

// using our logic without a function:
$total = 0;
for ( $i = 0; $i < count( $numbers ); $i++ ) {
    $total += $numbers[$i];
}

/*
To learn more about arrays:
https://www.php.net/manual/en/function.array

Or:
https://www.w3schools.com/php/func_array.asp
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop Advanced Examples</title>
</head>
<body>
    <h2>Numbers</h2>
    <!-- printing the letters array as ul elements -->
    <!-- 
        unordered list to display the intArray array: 
        Unordered list => ul and li
    -->
    <!-- 
        Bad way of coding to print them one by one! 
        - We should avoid code duplicate 
        - We need to make flexible by looping according to the number of elements
    -->
    <ul>
        <li><?php echo $intArray[0] ?></li>
        <li><?php echo $intArray[1] ?></li>
        <li><?php echo $intArray[2] ?></li>
        <!-- and so on!!! -->
    </ul>

    <!-- The correct way is looping: -->
    <ul>
       <?php 
            for ($i = 0; $i < count($intArray); $i++) {
                echo "<li>$intArray[$i]</li>";
            }
       ?> 
    </ul>

    <h2>Letters</h2>
    <!-- 
        printing the letters array as ul elements 
        you can do this task:
    -->
    <ul>
        <li>NA</li>
    </ul>
	
	
	<h2>Pass Exams</h2>
    <!-- output the values of the passing exams array -->
    <!-- Bad Example: -->
    <ul>
        <li><?php echo $passExams[0] ?></li>
        <li><?php echo $passExams[1] ?></li>
        <li><?php echo $passExams[2] ?></li>
        <li><?php echo $passExams[3] ?></li>
    </ul>

    <!-- Good Example: -->
    <h2>Pass Exams</h2>
    <ul>
        <?php
            for ( $i = 0; $i < count( $passExams ); $i++ ) {
                echo "<li>$passExams[$i]</li>";
            }
        ?>
    </ul>

    <!-- Fail Exams -->
</body>
</html>