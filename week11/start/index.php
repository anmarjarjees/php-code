<!-- We need to embed the header (include/header.php) at the top -->
<?php
// include() will continue loading the page even if the file is not found
// require() will NOT load/render the page if the file is not found
require 'includes/header.php';

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
	
	// Associative Array => represents one record from our table in the DB:
    // Hard coding the values! 
    $oneRecord = [
		"user_id" => 2,
		"username" => "alexchow",
        "password" => "alex123"
    ];
	/* 
    FYI: 
    We are using MySQL with PHP
    There are other type of Databases that:
    - doesn't use SQL languages
    - is not built on tables
    Like: MongoDB
    MongoDB is uses with JS frameworks:
    - Angular
    - React
    - Vue

    That's why we have these terms:
    - MEAN 
    - MERN 
    - MEVN 
    
    > Angular, React, Vue (JS Framework) => JS with MongoDB
    > E = Express
    > N => Node.js
    */   


    if ($userName == $oneRecord['username'] && $password== $oneRecord['password']) {
       echo"<br>Credentials are ok!";
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

<!-- We need to embed the footer (include/footer.php) at the bottom -->
<?php
require 'includes/footer.php';
?>