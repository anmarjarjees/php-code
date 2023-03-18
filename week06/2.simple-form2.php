<?php
// my php code to handle the form is written here (instead of using another/external php file):
// I want to handle the form (manipulate the user input) in this same page (file):

// testing: output the array $_GET()
// var_dump($_POST); // array(0) { }

/* 
array(5) {
["name"]=> string(12) "Martin Smith"
["email"]=> string(16) "masmith@yahoo.ca"
["phone"]=> string(7) "1324567"
["comments"]=> string(8) "nothing important!"
["send"]=> string(13) "Send Comments"
}
*/
echo "<hr>";

// Checking if the form is submitted => start manipulating the form:
// One of the ways (not the ideal solution or not the only one, we will check another one later):
// We can use if condition to check if $_POST() has any value then we can start getting the user input
// OR else if $_GET[] has any value then we can start getting the user input

// if POST Array has a value (or if it's true)
// if $_POST array has any value =>  the form is submitted
// so when $_POST is empty => it means the form is not submitted yet  
if ($_POST) { // Since we used method="POST" => $_POST has some data => TRUE
    // put ALL our code here inside the if block:
    // 1. Getting the user full name:
    $fullName = $_POST['name'];
    // 2. Getting the user email:
    $email = $_POST['email'];
    echo "<hr>";
    echo "<br>Thank you, $fullName for submitting the form!";
    echo "<br>Notice that this email address: $email will not be shared with other clients.";
} elseif ($_GET) { // Since we used method="GET" => $_GET has no data (empty) => FALSE
    print_r( $_GET );
} // end elseif of the main if block

// Please don't write any code for handling the form outside the if block!!!!
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Simple Form Handling 2</title>
</head>
<body>
    <!-- 

    - action = "form-process.php" => a file named form-process.php will handle the form
     as did in the previous example
    
    OR instead of submitting the form into a different PHP file where we need to write our code,
    we can simply submit the form to the same page (our php code is written in the same page at the top)
    [As you will do in your second assignment (no need to create a separate file!)]
    
    Three options/solutions or three possible values for "action" attribute:
    ************************************************************************
    Option 1: action = "" 
    => it will submit the form to the same page (Not recommended with HTML5)*
    * Yes, it works fine with PHP, but not with HTML5 validation
    * Note: In html5, the action attribute MUST always have a value!
    * HTML5 validation will complaint about having the attribute "action" without any value
    * Error: Bad value for attribute action on element form: Must be non-empty.

    Option 2: action ="same file name" 
    in our example, the file name is 2.simple-form2.php
    so the action value will be: action="2.simple-form2.php"

    Option 3: (ideal choice): action = $_SERVER['PHP_SELF']
    remember the super global array $_SERVER contains all the information about the server
    and the current file!
	
	To summarize:
	1: action="" <= Against HTML Validation
    2: action="2.simple-form2.php" <= writing the file name <= typo issues, or rename the file 
    3: action="< ?php echo $_SERVER['PHP_SELF'] ?>" <= using  $_SERVER Array
 
    We have the key named "PHP_SELF" => this key returns the file name with its full path!
    $_SERVER['PHP_SELF'] => this value will be the file name with its full path
    -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" id="my-from" class="main-form">
        <div>
            <label for="name">Full Name:</label>
            <input type="text" name="name" id="name">
        </div>

       <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
        </div>

        <div>
            <label for="phone">Phone:</label>
            <input type="tel" name="phone" id="phone">
        </div>

        <div>
            <label for="comments">Comments:</label>
            <textarea name="comments" id="comments"></textarea>
        </div>
        
        <div>
            <!-- 
                In order to submit this form which means to be sent to the server side,
                we have to use the type of "submit"
             -->
            <input type="submit" name="send" id="send" value="Send Comments">
                <!-- 
                    we don't need to add: name="reset" for the reset button! 
                    even if we add it, it will be ignored by PHP
                -->
            <input type="reset" id="reset" value="Clear Form">
        </div>
    </form>

    
</body>
</html>