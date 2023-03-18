<!-- Just pure PHP code on need for HTML in this file: -->
<?php
/*
in PHP we used some useful built-in functions:
examples:
phpinfo() ==> to output information about PHP's configuration
count() ==> to count the array element
strlen() ==> to count the number of characters in a string
*/

// phpinfo(); 

$days = [ 'Mon', 'Tue', 'Wed' ];
echo count( $days ) . "<br>"; // 3 elements in this array

$subject = "JavaScript";
echo strlen( $subject ) . "<br>"; // 10 Characters in JavaScript

/*
Review about JavaScript, Java, C#
In JS, everything is an object.
so string is an object
object can have: properties and methods()

To access the properties and methods of each object:
- objectName.property
- objectName.method()

Examples: Using the two string methods:
myString.toLowerCase() => to make all letters in lowercase
myString.toUpperCase() => to make all letters in uppercase

JS Task: Output the name "MARTIN" all in lowercase:
let name = 'martin';
Solution:
document.write(name.toLowerCase());
*/

echo '<br>';
/*
In PHP, NOT everything is an object like in JS or Java.
So The JS built-in methods that we have for arrays and strings
We have them as built-in function in PHP

Example:
strtolower => built-in function for converting all letters to small
strtoupper => built-in function for converting all letters to capital

function can take arguments
these function (strtolower and strtoupper) 
take one argument which the string that we want to change
*/

// String Functions:
$name = 'MARTIN';
echo $name; // MARTIN
echo '<br>';

// print MARTIN in lowercase "martin"
echo strtolower($name);

// strtoupper()

// Example:
$answer = 'Y';

if (strtolower($answer)=='y') {
    echo "Continue";
} else if (strtolower($answer)=='n'){
    echo "Stop";
} else {
    echo "Invalid Input!";
}

/* 
strtolower() => Make a string lowercase
strtoupper() => Make a string uppercase
*/

// To recap, we have used count() built-in function to count how many elements we have in an array:
$letters = array( 'D', 'C', 'A', 'E', 'B', 'G', 'F' );        
for ($i=0; $i<count($letters);$i++) {
    echo "<p> $letters[$i] </p>";
}
echo "<hr>";

// sort() built-in function to sort an array:
sort( $letters ); // to sort the array, the function sort will change the original array
foreach ( $letters as $letter ) {
    echo "<p> $letter </p>";
}

// We have 'frontend' that contains text and HTML elements:
$frontend = '
<ul>
    <li>HTML</li>
    <li>CSS</li>
    <li>JavaScript</li>
</ul>';

// Important Example:
// In HTML form we ask the user to input first name, age, date of birth, job title, etc...
// we asked the user to input his/her first name:
// $input ="Martin Smith";
$input ="<script>alert('Boom Boom!');</script>";
// echo $input; // <script>alert('Boom Boom!');</script>

echo strip_tags($input); // alert('Boom Boom!'); => the opening/closing tags (<script> and </script>) wil be removed

/* 
trim()
Removes whitespace (or other characters) from the beginning and end of a string.
*/

/*
You can learn more about built functions for string in PHP:
https://www.tutorialrepublic.com/php-reference/php-string-functions.php
*/


