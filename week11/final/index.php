<!-- We need to embed the header (includes/header.php) at the top -->
<?php
// include() will continue loading the page even if the file is not found
// require() will NOT load/render the page if the file is not found
require 'includes/header.php';

echo "<br>Session Info:</br>";
var_dump($_SESSION);
// Warning: Undefined global variable $_SESSION => if you not run session_start()
// var_dump($_GET);

if (isset($_POST['submit'])) {
    // for checking/testing/reviewing:
    print_r($_POST);
    /*
        Output:
        Array ( [username] => alexchow [password] => alex123 [submit] => Login )
    */

    $userName = $_POST['username'];
    $password = $_POST['password'];
	// echo "$userName and $password";
	
	
	// Our Associative Array for only one record:
	$oneRecord = [
		"user_id" => 2,
		"username" => "alexchow",
        "password" => "alex123"
    ];
	   
    if ($userName == $oneRecord['username'] && $password== $oneRecord['password']) {
        // echo"<br>Credentials are ok!";

        // It's better to use the keys as string values (Associative Array):
        $_SESSION['username']=$userName;
        $_SESSION['password']=$password;

        // leaving this page "index.php" and jumping to "client.php"
        // You can simply use the PHP header() function to redirect a user to a different page.
        // The syntax: header("location: URL") 
        // URL: Relative Address (Same Website)
        // URL: Absolute Address (Different Website)
        // https://www.tutorialrepublic.com/faq/how-to-make-a-redirect-in-php.php
        header("Location: client.php");
        exit();
    } else {
        echo "<br>Invalid Credentials!";
    }
} // end if form is submitted
?>

<!-- here is the HTML content of this page -->
<h1>Welcome to our company</h1>
<p>You will find all your hardware needs!</p>
<!-- simple html form for the user to login-->
<p>If you are already a member, you can login now to access your portfolio:</p>

<!-- 
   PHP form needs two attributes:
   method
   action		
-->
    <!-- PHP.net endif -->
    <?php if (!isset($_SESSION['username']) && !isset($_SESSION['password'])): ?>        
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <!-- 
            form elements need one attribute: name
        -->
            <div>
                <input type="text" name="username" placeholder="Your Username">
                <br>
                <input type="password" name="password" placeholder="Your Password">
            </div>
            <div>
                <input type="submit" name="submit" value="Login">
                <input type="reset" value="Clear">
            </div>
        </form>
           
        <p>You can <a href="register.php">register</a> for free to enroll yourself in our website.</p>
    <?php endif; ?>

<!-- We need to embed the footer (includes/footer.php) at the bottom -->
<?php
require 'includes/footer.php';
?>