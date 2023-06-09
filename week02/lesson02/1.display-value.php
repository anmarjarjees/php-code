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
$firstName = "Alex"; // double quotes
$lastName = 'Tonies'; // single quotes
$age = 65;
$total = 55.72; // number can have decimal point using point but not comma
$avg = 25.67;

$isValid = true;

// bad example of a variable name:
$middleName = 65;

// output => echo or print
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

// one line for display the value of $firstName and <br> element:
// IN JS, JAVA, C#, Python => + for concatenation
// In PHP => . 
echo($firstName."<br>");
print ($lastName);

echo "<hr>";
echo $firstName." ".$lastName;

echo $firstName, "\n"; // for a "new line" or a "space"
echo 'The total of your invoice is: '.$total;

/*
	echo vs print:
    --------------
    - print can only display a single value
	- echo can display or can use a comma separated list
	as shown below:		
*/

// print "<br>", $firstName, " ", $age; // Error => syntax error, unexpected token ","
echo "<br>", $firstName, " ", $age; // works fine :-)

// echo:
/* checking the difference between using ' or " with echo */
// The two lines of code Below no difference between using ' or ":
echo '<br>We like PHP';
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

// Data type
echo gettype($subject1)."<br>";
echo gettype($age)."<br>";
echo gettype($total)."<br>";

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
    <h1><em>Display</em>Data</h1>
    <p>Hello Alex, your age is <?php echo $age ?></p>

    <!-- more examples -->
    <p>Hello, <?php echo $firstName ?>. Your age is <?php echo $age ?></p>

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
</body>
</html>