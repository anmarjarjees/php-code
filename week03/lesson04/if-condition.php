<?php
// if condition in PHP like JS
/*
    if (condition) {
        my code if the condition is true
    } else {
        my code if the condition is false
    }

    Conditional statements operators are the same as "JS"
    The comparison operators:
    == both values are equal => 1 == "1" 
    === both values are identical (same value and same data type) 1==='1' ==> false
    !== the values are NOT identical
    >= greater or equal to
    <= less than or equal to
    >
    <
    != not equal to
*/
echo "<br>";
$booleanValue = true; // change it true/false
if ($booleanValue) {
    echo "<br>True: booleanValue variable is true";
    echo "<br>True: booleanValue variable is".true; // 1
} else {
    echo "<br>True: booleanValue variable is false";
    echo "False: booleanValue variable is".false; // nothing
}

echo "<br>";
$isValid =true;
if ($isValid==true) {
    echo "Is valid!";
} else {
    echo "Is not valid!";
}

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
    echo "False: myStr variable has an empty string";
}

echo "<br>";


$myArray = []; // or $myArray = array();
if ( $myArray ) {
    echo "True: My array is not empty";
  } else {
    echo "False: My array is empty";
}

/* 
In math: even number divided by 2 has 0 remainder
to get the remainder value => %
*/
if ( $myNumber % 2 == 0 ) {
    echo "<p>Even Number</p>";
  } else {
    echo "<p>Odd Number</p>";
  }
  
// Or the same logic:
if ( $myNumber % 2 != 0 ) {
    echo "<p>Odd Number</p>";
  } else {
    echo "<p>Even Number</p>";
  }


  // Thee variables:
$exam1 = 80;
$exam2 = 82;
$exam3 = 88;
$average = round (( $exam1 + $exam2 + $exam3 ) / 3, 2); 

if ( $average >= 50 ) {
    echo "<p>Your average is $average. Well Done!</p>";
  } else {
    echo "<p>Your average is $average. Try again</p>";
}

echo "<hr>";
// Look at the one of the common mistake below
// using = instead of == or ===
$currentModule = "Python";
if ( $currentModule == 'JS' ) {
  echo "We are still in JavaScript";
} elseif ( $currentModule == 'PHP' ) {
  echo "We are in the third week of PHP!";
} else {
  echo "Your current module $currentModule";
}

echo "<hr>";
$value1=100; // 100 as a value => int data type
$value2="100"; // 100 as a value => string data type
/* 
=== both sides are identical in value and data type
*/
if ($value1===$value2) {
    echo "<br>Both are equals";
} else {
    echo "<br>Not equal";
}
echo "<hr>";

/*
logical operators (also the same like JS :-) ):
AND ==> &&
OR ==> ||
NOT ==> !
*/
echo "<hr>";
$userName="martin";
if ($userName=="alexchow" && $password=="alex1234") {
    echo "Thank you $userName, You can check below all our products";
} else {
    echo "Invalid Credentials!";
}

echo "<hr>";
/* 
example: to register with Toronto Public Library:
either one is true:
- living in Toronto
- studying in Toronto
- working in Toronto
*/
$isLiving = false;
$isStudying = false;
$isWorking = true;
if ($isLiving || $isStudying || $isWorking) {
    echo "You can register for free in TPL";
} else {
    echo "You need to pay";
}
echo "<hr>";

// Excellent (Honors) ==> 90 - 100
if ( $average >= 90 && $average <= 100 ) {
    print( "<p>Your final average is : $average. Your grade is: A+</p>" );
} elseif ( $average >= 80 && $average <= 89.99 ) {
    print( "<p>Your final average is $average. Your grade is: B</p>" );
} elseif ( $average >= 70 && $average <= 79.99 ) {
    print( "<p>Your final average is $average. Your grade is: C</p>" );
} elseif ( $average >= 60 && $average <= 69.99 ) {
    print( "<p>Your final average is $average. Your grade is: D</p>" );
} else {
    print( "<p>Your final average is $average. Your grade is: F</p>" );
}

if ( $average >= 90 && $average <= 100 ) {
    print( "<p>Your final average is : $average. Your grade is: A+</p>" );
} else if ( $average >= 80 && $average <= 89 ) {
    print( "<p>Your final average is $average. Your grade is: B</p>" );
} else if ( $average >= 70 && $average <= 79 ) {
    print( "<p>Your final average is $average. Your grade is: C</p>" );
} else if ( $average >= 60 && $average <= 69 ) {
    print( "<p>Your final average is $average. Your grade is: D</p>" );
} else {
    print( "<p>Your final average is $average. Your grade is: F</p>" );
}

/*
below is the modern way for using alternative syntax with "elseif":
1- by replacing the opening "{" with ":"
2- remove the closing "}" or we don't have } because we don't have {
3- The last change, we need to add the keyword "endif" at the end of the all if conditions

This way is used intensively when the condition block contains too many html code
In Python: elif => for else if
*/
if ( $average >= 90 && $average <= 100 ) :
    print( "<p>Your final average is : $average. Your grade is: A+</p>" );
elseif ( $average >= 80 && $average <= 89 ) :
    print( "<p>Your final average is $average. Your grade is: B</p>" );
elseif ( $average >= 70 && $average <= 79 ) :
    print( "<p>Your final average is $average. Your grade is: C</p>" );
elseif ( $average >= 60 && $average <= 69 ) :
    print( "<p>Your final average is $average. Your grade is: D</p>" );
else :
    print( "<p>Your final average is $average. Your grade is: F</p>" );
endif;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>