<!-- We need to embed the header (include/header.php) at the top -->
<?php
require 'includes/header.php';

if (true) {
     // if the user is not logged-in, we have to redirect them to the home page or the login page
}
?>

<!-- here is the HTML content of this page -->
<h1>Welcome to our amazing features</h1>
<p>This page is only for our client!</p>
<p>Username: <?php ?></p>
<!-- 
    NOTE:
    You will receive this error: Warning: Undefined variable $_SESSION in...
 -->

<!-- We need to embed the footer (include/footer.php) at the bottom -->
<?php
require 'includes/footer.php';
?>
