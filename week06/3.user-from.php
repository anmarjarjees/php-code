<?php
// Step1: Check if the form is submitted first
// Step2: handle the form


/*
To continue with our real answer to handle the form:
Since we have all the form elements saved into the $_POST[] array 
including the submit button that has name="submit";

**************************************************************************************
We can test if the submit button is clicked or not clicked by testing $_POST['submit']
**************************************************************************************

PHP has a built-in function named "isset()":
isset() function => checks whether a variable has a value or not!
> isset() => return 1 if it's true (the variable has a value) => we can handle the form
> isset() => return empty it's false ==> skip this code
*/

// Step1: Check if the form is submitted first
if (isset($_POST['submit'])) {
    // Step2: handle the entire form inside the if block
    echo "Wow! you submitted the form, finally!" ; 

    // We can use the same $_POST[] array to access each value for every form field
    // Or we can assign the value of each element in $_POST[] to a simple PHP variable:
    $fName = $_POST['first-name'];
    $lName = $_POST['last-name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $province = $_POST[ 'province' ];
    $membership = $_POST[ 'membership' ];	

     // Then we can print all of them within HTML elements:
     echo "<p>Thank you $fName $lName for submitting the form</p>";
     echo "<p>email: $email</p>";
     echo "<p>Address: $address</p>";
     echo "<p>City: $city</p>";
     echo "<p>Province: $province</p>";
     echo "<p>Membership Type: $membership</p>";

    /*
    We can place the membership name in the "value" attribute for html from element
    so instead of value="pm" we can put the full word value="Premium"

    but for simple HTML code, we used pm, sm, bm
	We can use if condition to display the full official titles:
	*/
    if ( $membership == "pm" ) {
        echo "<p>Membership Type: Premium</p>";
    } else if ( $membership == "sm" ) {
        echo "<p>Membership Type: Standard </p>";
    } else {
        echo "<p>Membership Type: Basic</p>";
    }
    echo "<hr>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Info Form</title>
</head>
<body>
        <!--      
        Note:
        You can write POST or post or GET or get using Capital is more common

        Notice that since we are going to submit the form to the same page 
        because we placed all the PHP code to handle the form at the 
        top within the same file "03.user-form.php",
        so in such case you can use the proper way which to echo $_SERVER['PHP_SELF']    
    -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <!-- 
        In order for PHP to be able to take the values of all the form
        elements (controls), each form element has to have the "name" 
        attribute with a unique value.
        -->
        <div> 
            First Name:
            <input type="text" id="first-name" required maxlength="30" name="first-name" placeholder="First Name">
        </div>

        <div> 
            Last Name:
            <input type="text" id="last-name" maxlength="30" name="last-name" placeholder="Last Name">
        </div>

        <div> 
            Email Address:
            <input type="email" id="email" maxlength="50" name="email" placeholder="Email Address">
        </div>

        <div> 
            Address:
            <input type="text" id="address" maxlength="80" name="address" placeholder="Address">
        </div>

        <div> 
            City:
            <input type="text" id="city" maxlength="20" name="city" placeholder="City">
        </div>

        <div> 
            Province:
            <input type="text" id="province" maxlength="20" name="province" placeholder="Province">
        </div>
        
        <div> 
            Membership: <br>
            <!-- 
                At least one item and only one item should be selected in radio buttons
            -->
            <input type="radio" name="membership" checked value="pm">
            Premium Membership <br>
            <input type="radio" name="membership" value="sm">
            Standard Membership <br>
            <input type="radio" name="membership" value="bm">
            Basic Membership 
        </div>
        <br>

        <div>
        <!-- 
            Very Important Note:
            with PHP we do need to have the input type to be:
            input="submit" instead of input="button"
            <input type="submit"> automatically submits the form
            <input type="button"> does not automatically submit the form, you need to use JavaScript to submit it
        -->
        <input type="submit" value="Submit" name="submit">
        <!-- 
        No need to add "name" attribute for reset button
        because this button is just for clearing the form
        Even if we add name="reset", PHP will ignore it
        it will not add it to $_POST[] array
        -->
        <input type="reset" name="reset" value="Cancel">
        </div> 
    </form>
</body>
</html>