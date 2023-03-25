<!-- We need to embed the header (includes/header.php) at the top -->
<?php
require 'includes/header.php';

// session_start(); => it's included/executed in the header.php template

// var_dump($_SESSION); // array(0) { }

/* 
Validate if there is NO logged-in user => redirect the user to the home page
otherwise => display the client page
if NO user is logged-in => go to other page, for example: index.php
*/
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
     // if the user is not logged-in, we have to redirect them to the home page or the login page
     // redirect the user:
     header('Location: index.php');
     // exit the current page
     exit();
}     
?>

<!-- here is the HTML content of this page -->
<h1>Welcome to our amazing features</h1>
<p>This page is only for our client!</p>
<p>Username: <?php echo $_SESSION['username'] ?></p>
<!-- 
    NOTE:
    You will receive this error: Warning: Undefined variable $_SESSION in...
    If we don't run the function session_start() first!
 -->

<!-- We need to embed the footer (includes/footer.php) at the bottom -->
<?php
require 'includes/footer.php';
?>
