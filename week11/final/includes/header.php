<?php
// session_start(); => Start a new or resume existing session
// This function is needed anytime we use session
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Session</title>
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <header>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <!-- 
                        Remember that this page "Client" is only for the members or the registered client (logged-in)! 
                    -->
                    <!-- <li><a href="client.php">Client</a></li> -->

                    <?php
                        // if there is a logged-in user => make the link visible
                        
                        // The code below using 3 if statements!
                        /*
                        if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
                            echo '<li><a href="client.php">Client</a></li>';
                        } 

                        if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
                            echo '<li><a href="logout.php">Logout</a></li>';
                        }

                        if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
                            echo '<li><a href="register.php">Register</a></li>';
                        }   
                        */

                        /* 
                        NOTE:
                        Since these two navigation list items that we want to toggle are contiguous (besides each other), We can combine them if/else:
                        */
                        if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
                            echo '<li><a href="client.php">Client</a></li>';                    
                        } else {
                            echo '<li><a href="register.php">Register</a></li>';
                        }
                    ?>

                    <!-- 
                        The issue#1:  
                        Remember that this menu item "Register" should only appear if there is NO logged-in user!

                        if some has already logged in
                        This full <li> line of "Register" should not be executed

                        But no one has logged-in
                        We need to execute the line for this <li> of register option
                        
                        The issue#2: 
                        Remember that this menu item "Logout" should only appear if there is logged-in user!

                        if there is no one has logged in
                        This full <li> line of "Logout" should not be executed

                        But if there is some one who has already logged-in
                        We need to execute the line for this <li> of logout option         
                    -->
                    <li><a href="contact.php">Contact Us</a></li>

                    <?php
                    // if there are username and password kes for the $_SESSION:
                    if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
                        echo '<li><a href="logout.php">Logout</a></li>';
                    } else {
                        // remember that our index.php page has the login form:
                        echo '<li><a href="index.php">Login</a></li>';
                    }
                    ?>
                </ul>
            </nav>
        </header>
        <main class="main-content">