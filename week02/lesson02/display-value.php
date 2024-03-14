<?php
/* 
> PHP is an interpreted language like JavaScript and Python
> It's a loosely-typed (weakly-typed) programming language like JS and Py
> variables are created by simply assigning a value without explicitly declaring a type.

Java and C# are strongly-typed language and are compiled languages

In PHP, we can implement "Strict typing", to learn more:
Link: https://www.php.net/manual/en/language.types.declarations.php#language.types.declarations.strict
*/

/* 
    Naming Conventions in different languages:
    camelCase => studentFirstName => for any variable / function
    PascalCase => StudentFirstName => class Student
    snake_case (Python) => student_first_name
    kebab-case => :-) main-test
*/

// Variable in php:

// Java Example => String firstName = "Alex";
// Java Example => String language = 'PHP' [X WRONG] 
// Java Example => char oneLetter = 'A' [OK VALID]
// In Java => String firstName = "Alex";

// Weakly type language 
$firstName = "Alex"; // double quotes
$lastName = 'Chow'; // single quotes

// In Java => int age = 65;
$age = 65;
$total = 55.72; // number can have decimal point using point but not comma
$avg = 25.67;

// Boolean Variable => Boolean values: true or false
$isValid = true;

// bad example of a variable name:
$middleName = 65;

// output => echo or print
// Hello World
// PHP functions: echo() or print()

/*
To recap:
method => a function written inside a class
function => written inside the main script (PHP, Python, and JavaScript)
*/
echo ("Hello World!");
print("Hello World!");
// Hello World!Hello World!

// print/echo html elements!
echo "<hr>"; // can be used without ()
echo "Hello World!<br>";
print "Hello World!";

echo ($firstName); 
// or without () => echo $firstName;
echo $firstName;
print ($firstName);
print $firstName;
// AlexAlexAlexAlex

// we can add any html content
echo "<hr>";
echo ($firstName);
echo("<br>");
print ($lastName);

echo "<hr>"; // double
echo '<hr>'; // single

echo ("<br>We all like PHP :-)");
print("<br>PHP is the main language for the web development!");

// with php function can sometimes used without ( and )
echo "<h1>I am the main heading</h1>";
print "<p>Here is the main paragraph</p>";

// In Java: System.out.println("Max number is: " + number);

// Concatenation => . 
// one line for display the value of $firstName and <br> element:
// IN JS, JAVA, C#, Python => + for concatenation
// In PHP => . 
echo($firstName."<br>");
print ($lastName);

echo "<hr>";
// firstName variable AND a literal space AND lastName variable
echo $firstName." ".$lastName;

echo "<hr>";
echo $firstName, "\n"; // for a "new line" or a "space"
echo 'The total of your invoice is: '.$total;

/*
	echo vs print:
    --------------
    - print can only display a single value
	- echo can display or can use a comma separated list
	as shown below:		
*/

// printing multiple values with commas:
// print "<br>", $firstName, " ", $age; // Error => syntax error, unexpected token ","
echo "<br>", $firstName, " ", $age; // works fine :-) => Alex 65


/* 
HTML elements can be rendered with ' or "
*/

/* checking the difference between using ' or " with echo/print */
// The two lines of code Below no difference between using ' or ":
echo '<br>We like PHP!';
echo "<br>We like PHP";
echo "<hr>";

// Task: output = > the age is 65 with echo

// using echo:
echo "<br> the age is $age"; // " " => the value for the variable $age
echo '<br> the age is $age'; // ' ' => the literal text $age (WRONG)
echo "<hr>";

// using print:
print "<br> the age is $age"; // " " => the value for the variable $age
print '<br> the age is $age'; // ' ' => the literal text $age (WRONG)
print "<hr>";

// concatenating with echo/print
echo "<br> the age is ".$age;  
print "<br> the age is ".$age;  

// or with print:
print '<br> the age is '. $age; 
print "<br> the age is ". $age;

// The following variables will not be seen/printed without print or echo
$firstName;
$age;
$total;
$avg;
$middleName;

// Task1: Declare 3 variables with any names you want:
/*
first variable has the value of "HTML and CSS"
second variable has the value of "JavaScript"
third variable has the value of "PHP"
*/
$subject1 = "HTML and CSS"; // in PHP string value either use " or ' like JS
$subject2 = "JavaScript";
$subject3 = "PHP";

echo "<hr>";
$docTitle = "Learning PHP";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $docTitle ?></title>
</head>
<body>
    
    <!-- Adding another block of PHP -->
    <?php
        echo "<hr>";
        // Data type => use a built-in function gettype()
        echo gettype($subject1)."<br>";
        echo gettype($age)."<br>";
        echo gettype($total)."<br>";
        echo gettype($isValid)."<br>";
    ?>

    <h1><em>Display</em>Data</h1>
    <!-- we can embed php code anywhere as inline element: -->
    <p>Hello Alex, your age is <?php echo $age ?></p>

    <!-- more examples -->
    <p>Hello, <?php echo $firstName ?>. Your age is <?php echo $age ?></p>
	
	<!-- SIMPLE EXAMPLE ABOUT UL => UNORDERED LIST: -->
    <ul>
        <li>Item1</li>
        <li>Item2</li>
        <li>Item3</li>
    </ul>

	<!-- 
        TASK: USING THE UL WITH PHP TO OUTPUT THE SUBJECTS AS A LIST?
    -->
    <ul>
        <li><?php echo $subject1 ?></li>
        <li><?php echo $subject2 ?></li>
        <li><?php echo $subject3 ?></li>
    </ul>

    <?php
     // using double quotes:
    echo "
    <ul> 
        <li>$subject1</li>
        <li>$subject2</li>
        <li>$subject3</li>    
    </ul>";

    // notice the mistake below:
    // using single quote will not output the values of the variables:
    echo '<ul>
        <li>$subject1</li>
        <li>$subject2</li>
        <li>$subject3</li>        
    </ul>';
    ?>


    <footer>
        <p>Designed and Developed by <?php echo $firstName; echo $lastName ?></p>
        <p>Designed and Developed by <?php echo $firstName." ".$lastName ?></p>
    </footer>
</body>
</html>