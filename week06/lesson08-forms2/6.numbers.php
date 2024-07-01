<?php
    // if the form is submitted:
    /*
        we can check if the form is submitted if there is a 'submit' value
        inside the $_POST[] array using a php built-in function named "isset()"
        since the submit button has name="submit" so we can use it
        print_r($_POST);
        if there is any value is set to $_POST['send']
    */
    print_r($_POST);
    if (isset($_POST['send'])) {
    /*
    all the code to handle the form has to be placed here!
    so all your assignment answer must be here :-)
  
    NOTE:
    *****
    Since the form is using POST method,  
    we have to use $_POST[] array to access the form fields

  
    $_POST[] is an associative array
    that contains all the names attributes values of the submitted form

    $_POST[
        'numbers' => values that user typed in this input field of name="numbers,
        'crud'=> value that user has checked for this input field of name="crud"
        'submit' => value when the user clicks the submit button for this field of name="submit",
        'result' => is empty no value 
    ]
    */

    
  // Step 1: we need to take the user input (a string of spaces and numbers):
  // remember that all the user's input fields and value are saved into $_POST[]
  // based on our HTML form, the input field for the user's number
  // has the name of "numbers" => name="numbers"
  // so we can access the values through this key: $_POST['numbers']

  // A.	Getting the user input (the string of numbers) and save it into a variable with any name:
  // B.	Trim the spaces before and after the user input in case if there is any, you will use the required PHP built-in function:
  // C. We do need to convert this string of numbers into an array of numbers

  // remove the spaces before/after the input by using "trim()" function
  // trim(): Strip whitespace (or other characters) from the beginning and end of a string
  // $myVariable = trim("myText")
  // it's a string (text) that contains spaces and numbers: "8 10 12 45 80 70"

  $numberString = trim($_POST['numbers']); // getting and trimming the value at the same line

  
  /*
  Step 2:
  Imagine if we can take this string "8 10 12 45 80 70"
  and convert it into any array = [8,10,12,45,80,70]
  PHP has a built-in function named "explode":
  explode() function will return an array
  Because we put spaces between numbers:
  so we will use a space as the first argument for explode function

  "4 5 7 89 10" as a string ==> array using explode() function ==> [4, 5, 7, 89, 10]
  > first parameter is the delimiter (the symbol that we put in between the numbers)
  > second parameter is the string that we want to explode
  
  Example from php.net:
  $pizza  = "piece1 piece2 piece3 piece4 piece5 piece6";
  $pieces = explode(" ", $pizza);
  echo $pieces[0]; // piece1
  echo $pieces[1]; // piece2
  $pieces[2]; // piece3
  */
  $numbersArray = explode(' ', $numberString);

  /* 
  Problem to be solved: 
  *********************
  What if the user adds more than one space between any two numbers!
  
  Consequences:
  *************
  The minimum built-in function will not work and also you will have empty elements in your array!

  Solution:
  *********
  We can create another array out of the current one but with no spaces
  using the same idea of the first assignment-part 1

  This step is important for your second assignment:
  */
  $finalNumbersArr=[]; // define a new empty array to be populated later on the fly through the loop
      // start looping through the original array "$numbersArray"
      for ($i=0; $i<count($numbersArray); $i++) {
        // if the current item/element is not empty and is numeric then do the if block
        if ($numbersArray[$i]!="" && is_numeric($numbersArray[$i])) { 
          // notice that we don't have to specify an index value for finalNumbersArr
          // we can just leave it empty [] and php will figure out the current index automatically
          $finalNumbersArr[]= $numbersArray[$i];          
          /*
          In JS, the answer: finalNumberArr.push(numbersArray[i]);
          In PHP, there is a built-in function named push( arrayName, value)
          */
          // push( $finalNumbersArr, $numbersArray[$i]);
        } // end if condition
      } // end for loop
   
      // for testing:
      echo "<hr> Our Final Array: ";
      var_dump($finalNumbersArr);

  // for testing:
  var_dump($numberString); 

    // The rest of the code is the same logic as we had before:
    // we need to get the value of the radio button
    // we have all the values inside $_POST[] array
    $choice = $_POST['crud'];
    
    // the user choice is saved into a variable named $choice
    // $choice = c ==> if the user clicked the "Create" radio button
    // $choice = r ==> if the user clicked the "Read" radio button
    // and so on...
     
      // for testing:
      // echo "<br> The operation value is: " . $op;

      // use switch statement:

        switch ($choice) {
            case 'c':
                $answer = "Creating a record with these numbers";
                break;

            case 'r':
                $answer = "Reading a record with these numbers";
                break;

            case 'u':
                $answer = "Update the record of these numbers";
                break;
            
            default: // for delete
                    $answer = "Delete all these numbers";
            break;
        } // switch

        /*
	    JavaScript Review:
        Here is the code of JS second assignment:
	    numberStr = numberStr.trim(); // to remove the extra spaces before/after the user input
        var numberArr = numberStr.split(' '); // to convert this string to an array object

        In php is the same logic:
        - these are built-in methods for string object in JS: .trim() and .split()
        - these are built-in functions for string object in PHP: trim() and explode()
	    */
        
        echo "<br>";
        // echo "Answer: ".$answer;
    } // main if
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numbers</title>
</head>
<body>
    <!-- 
    Task of this PHP file Example:
    1. Using HTML form to ask the user to enter all his/her numeric values.
    2. Using PHP to take these values and remove the white spaces before and after 
    3. (You will do it) find the total, multiplication of these values based on the user choice.
    --> 
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
    <label for="numbers">Enter your all numeric values with spaces:</label>
    <!-- 
        inside the php block for "value" attribute
        We can write this code: 
        
        if (isset($finalNumbersArr)) { 
        echo $finalNumbersArr; 
        }
        
        So using the ternary operator might be a better choice in this case:
        
        echo (our condition)? the code if it's true : the code if it's false
        echo isset($numberString) ?  $numberString : ""
    -->
    <input type="text" name="numbers" id="numbers" value="
    <?php 
      echo isset($numberString) ?  $numberString : "" 
    ?>">
  <br>
        
        <div>
            CRUD Operation<br>
            <input type="radio" name="crud" id="" value="c" checked>Create
            <br>
            <input type="radio" name="crud" id="" value="r">Read
            <br>
            <input type="radio" name="crud" id="" value="u">Update
            <br>
            <input type="radio" name="crud" id="" value="d">Delete
        </div>

        <div class="output"> 
        <!-- 
            using php block with if condition to print the value of the variable answer if it's available 
            value=" writing our PHP code here "
        -->
            Answer: 
        <!-- 
            Below we are outputting (echo statement) the value of $answer,
            When the page is opened for the first time, $answer var has no value
            So it will give us an error "Undefined variable".

            We can repeat the same function "isset()" to check:
            if the variable has any value => then echo it
        --> 
            <input type="text" name="result" readonly value="
            <?php 
                /* if there is any value is set to $answer then echo it! */
                if (isset($answer)) echo $answer;
            ?>">

            <!-- Or it could be written using "Ternary Operator", try it :-) -->
        </div>

        <div>
        <!-- 
        we need to add name attribute for the submit button
		to check if the form is submitted or not
	    -->
           <input type="submit" name="send" id="send" value="Send">
           <input type="reset" id="reset" value="Clear Form">
        </div>
    </form>
</body>
</html>