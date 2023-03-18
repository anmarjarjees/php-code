<?php
$myTextBook="Learning JavaScript";
$myTextBook='Learning PHP';

// define (title,value)
define('COLLEGE','ABC Advanced Technology');

echo "My college is COLLEGE";  // Notice that php will treat it as a literal text
echo "<br>My college is ".COLLEGE;
// or with p element:
echo "<p>My college is ".COLLEGE."</p>";

// COLLEGE = "Seneca"; // error


/* 
Student's Question:
Could you just create a variable in uppercase so whoever reads it assumes it's a constant or is this not the best practice?
*/
$COMPANY = "XYZ Construction";
$COMPANY = "ABC"; // but we can still change it either intentionally or by mistake!
// so it's not a good coding practice

    
/* 
Student's Question:
Is it possible to print a constant variable inside an echo statement? 
For example: define("PIZZA" , "Corn Pizza"). echo("I Like".PIZZA);
*/
echo "<br>";
define("PIZZA" , "Corn Pizza");
// with concatenating:
echo("I Like ".PIZZA);
// OR:
echo "<br>";
echo "I Like ".PIZZA;

/* 
if we write the constant "PIZZA" in double quotes => will print the literal constant name:
*/
echo "<br>";
echo "I Like PIZZA"; // I Like PIZZA

/* 
For more info:
> https://www.php.net/manual/en/language.constants.php
> https://www.w3schools.com/php/php_constants.asp
*/

/* 
Constants are automatically global and can be used across the entire main script or inside any function
*/
?>

<!-- Ignore the HTML template -->

<?php echo "<br>"; echo COLLEGE ?>

<?php print "<br>"; print COLLEGE ?>

<!-- no output for the php code below => no echo/print statement -->
<?php COLLEGE ?>


