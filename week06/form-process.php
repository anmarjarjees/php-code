<?php

// Just for testing => output a simple text:
    echo "Da! da! you submitted the from! Congratulation!";
    echo "<hr>";

/*
Using our lovely function var_dumps()
Dumps information about a variable
*/
// testing: output the array $_GET()
var_dump($_GET); // Empty => array(0) { }
echo "<hr>";

// testing: output the array $_GET()
var_dump($_GET); // Is not empty, it has all the form input values 
/*
array(5) { 
    ["name"]=> string(9) "Alex Chow" 
    ["email"]=> string(22) "alexchow@abcschoolcom"  
    ["phone"]=> string(8) "12345678" 
    ["comments"]=> string(18) "No thing important" 
    ["send"]=> string(13) "Send Comments" 
}
*/


// 1. Getting the user full name:
$fullName = $_GET['name'];

echo "<br>Thank you, $fullName for submitting the form!";

// based on what we have learnt before, we can NOT output the array object in between " " Error:
// echo "<br>We will use this email $_GET['email'] to send you your authentication code.";

// Below is the solution, we need to concatenate both text and variables:
echo "<br>We will use this email ".$_GET['email']." to send you your authentication code.";

// OR using this way if you have the intention to reuse the value this field more than our time!
$email = $_GET['email'];
echo "<br>Notice that this email address: $email will not be shared with other clients.";


// We can have more fun or more examples:
// let's try to save each value of the user into an indexed array!
$userInfo=[];
foreach ($_GET as $value) {
    $userInfo[] = $value; 
}
echo "<hr>";

// For testing - to output any array, we can use print_r() or var_dump():
print_r($userInfo);
/*
Array ( 
    [0] => Alex Chow 
    [1] => alexchow@abcschool.com 
    [2] => 12345678 
    [3] => No thing important 
    [4] => Send Comments
)
*/

echo "<br>Ok, ".$info['name'].", please to contact us if you have any question!";
// OR:
echo "<br>Ok, ".$userInfo[0].", please to contact us if you have any question!";