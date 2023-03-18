<!-- 
	  Problem:
	  1. Using HTML form to ask the user to enter/input two numeric values.
    2. Using PHP to take these two values and remove the white spaces before and after each one
    3. find the total, subtraction, multiplication, or division of these two values based on the user choice
-->

<?php

if (isset($_POST['submit'])) {
    // write my code for the form
    // var_dump($_POST);

    // all the code to handle the form has to be inside this if condition:
    // Good idea to save the input into simple php variables
    /* 
    NOTE:
    Remember that <input> of type="text for both num1 and num2
    so the with addition => "4" + "2" => 42!
    we can cast the values to int/float
    Link: https://www.php.net/manual/en/language.types.type-juggling.php#language.types.typecasting
    */
    $num1 = (float) $_POST[ 'num1' ];
    /*
    In JS, we used .trim() as a "method" for a "string object" to remove extra spaces before and after.
    Because remember that everything is an object is JavaScript

    Example: myString.trim()

    In PHP, we use a built-in function named trim()
    trim() function => remove the extra spaces before/after the value
    */

    /*
    Below we are writing this extra line just to use the trim() function
    while we can use them at the same line above
    */
    $num1 = trim( $num1 );

    // or we can attach/call trim function here when we get the user input (at the same line):
    $num2 = trim((float) $_POST[ 'num2' ]);

      // testing:
    echo "<br>First Number: $num1 and it's type ".gettype($num1 );
      // echo "<br>First Number: $_POST[ 'num2' ]";
    echo "<br>Second Number: ".$_POST[ 'num2']." and it's type ". gettype($num2);
    echo "<hr>";

      /*
      Let's try to review user-defined (custom) functions by creating 4 different functions
      to find the result for the required operation (+,-,*,/)

      each function needs two numeric values to find the result like x and y
      (two arguments) then return the result

      so each function has a specific job to do the required operation.
      then just return the value (no echo statement - no printing)
      */

    // 1. create the function to add the two numbers
    function addNumbers($x, $y) {
        $result = $x + $y;
        return $result;
    }

        // 2. create the function to subtract the two numbers
    function subNumbers($x, $y) {
        // we can also combine the two lines in one
        return $x - $y;
    }

    // 3. create the function to multiply the two numbers
    function mulNumbers($x, $y) {
        return $x * $y;
        // Just for learning, the following statements (code) will not run
        // because it's written after the return keyword (like JS)
        alert("I am the alert function!"); // JS!!! :-)
        echo "<h1>Here is my heading</h1>";
    }

    // 4. create the function to divide the two numbers
    function divNumbers($x, $y) {
        /*
        If $y will have the value of 0
        PHP will give us Warning: Division by zero in line....
        Because dividing by zero is undefined in math
        */
        if ($y==0) {
          return "Division by zero!"; // the function will stop at this line
          /*
          To recap, the return keyword has two actions:
          1- return any result => in this example returning the text "Division by zero!"
          2- Terminate (stop) my function, any code that come after the return will be ignored
          */
        }
        return $x / $y;
    }

     /*
  	based on the HTML form the user should see only the result for the selected operation (radio button):

  	if "Addition" radio button is selected => execute/call the function addNumbers()

  	if "Subtraction" radio button is selected => execute/call the function subNumbers()

    if "Multiplication" radio button is selected => execute/call the function multNumbers()

  	if "Division" radio button is selected => execute/call the function divNumbers()

  	first step: we need to scan or get the value of operation (we need to know which operation is selected)

  	so we will use the same $_POST[] array
  	Let's name our PHP variable for the operation: $op
  */
    $op = $_POST[ 'operation' ]; // the variable $op will be: 1, 2, 3, or 4


    switch ( $op) {
        // NOTE: In php comparing 1 and "1" as values only so we can write case "1": or case 1:
        case 1: // or writing case "1": with quotations
            // add the numbers
            $answer = addNumbers($num1,$num2);
        break;

        case 2:
            // sub the numbers
            $answer = subNumbers( $num1, $num2 );
        break;

        case 3:
            $answer = mulNumbers( $num1, $num2 );
        break;


        case 4:
            $answer = divNumbers( $num1, $num2 );
        break;

        /* 
        No Need for default in this case
        */
    } // end switch

    // Placing the echo for printing the $answer below (it was used just for a quick test):
    // echo "<h3>The result is: $answer </h3>";
    // We don't want to echo/print/write HTML5 elements outside the body!!!
} // end of the main if block

// NOTE: We don't place any PHP code regarding the form outside the main if condition!!!!
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiply and Add Numbers</title>
</head>
<body>
  <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <!-- NOTE: Yes, it's better to use <label> elements as we did before -->
    Enter your first numeric value:
    <input type="text" name="num1" required="required">
    <br>
    <br>
    Enter your second numeric value:
    <input type="text" name="num2" required>
  <br>
    <!--
      With radio button we need to have at least one option selected or checked

      the new way of HTML5 ==> checked
      the classical way ==> checked="checked"

      since the user will not type anything with type="radio" like input="text".
      so it's our own responsibility to add the values by hard coding
      value="1" , or value="add", or value="addition"
      so we will use:
      1 ==> for addition
      2 ==> for subtraction
      and so on...
      -->
        <input type="radio" name="operation" checked value="1">
        Addition <br>
        <input type="radio" name="operation" value="2">
        Subtraction <br>
        <input type="radio" name="operation" value="3">
        Multiplication <br>
        <input type="radio" name="operation" value="4">
        Division <br>
        <br>
        <input type="submit" name="submit" value="Start the Calculation">
        <br>
        <br>
      <!-- 
        We can use a readonly input field just to output the result:
        <input type="text" name="result" readonly>
      -->
      <br><br>
      The result: 
      <?php 
      if (isset($answer)) {  // if this condition is true, then print the answer
        echo $answer; 
      } 
      ?>
      <br>
      <!-- OR: with ternary operator :-) -->
      <br>
      The result: <?php echo isset($answer) ? $answer : ''; ?>
  </form>
</body>
</html>