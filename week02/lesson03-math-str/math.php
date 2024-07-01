<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math in PHP</title>
</head>
<body>
    <?php
    /* 
    PEDMAS OR BEDMAS
        P => Parenthesis: ( and ) OR B => Brackets
        E => Exponent => example: 5 to the power of 2 which means 5 x 5 = 25
        D => Division
        M => Multiplication
        A => Addition
        S => Subtraction

         In PHP we have 5 operations (symbols) like JS:
        + for addition
        - for subtraction
        * for multiplication
        / for division
        % for the remainder of the division (modulo)
    */

    $exam1 = 90;
    $exam2 = 88;
    $avg =  ($exam1 + $exam2) / 2;

    $result2 = 5 % 2; // = 1 ==> Modulo division ==> the result 1, it is odd (number=5)
    $result3 = 4 % 2; // = 0 ==> Modulo division ==> the result 0, it is even (number=4)

    /*
    Increment and Decrement Operators (Like JS):
    i++ => i = i + 1 => i +=1
    i-- => i = i - 1 => i -=1
    
    $variableName++ => $variableName = $variableName + 1
    $variableName-- => $variableName = $variableName - 1
    */

    echo "<br>";
    $myNumericValue1 = 10;
    // $myNumericValue1 = $myNumericValue1  +1;
    $myNumericValue1++;

    $myNumericValue2 = 20;
    $myNumericValue2--;

    $num1 = 10;
    // add 3 to the same variable $num1 to 10?
    $num1 +=3;

    echo"<hr>";
    $value1=2;

    $result = $value1++ * 2; // 2 * 2 => 4 => result => then increment value1 after!!!!
    echo "<br>result: $result"; // result: 4
    echo "<br>our value1: $value1"; // our value1: 3
    /* 
    PHP will do/run the formula/equation first,
    then increment the number later... 
    because the ++ on the right!
    */

    $number = 2;
    $final = ++$number * 2; // (2+1) => 3 * 2 = 6
    echo "<br>result2: $final";  // result2: 6

    // Q) The output will be:
    // 1. final: 7
    // 2. final: 6
    // 3. final: 4
    // 4. final: 2

    // More Practice:
    $a=20;
    // adding 2 to 20
    // $a++ => 20+1
    $a = $a + 2; // $a=22;

    $b = 30; // adding 2,3,....
    $b += 2;

    $a *=3; // $a*3

    $a /=4;
    ?>
</body>
</html>