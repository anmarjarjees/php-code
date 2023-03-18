<?php
    // our php code
    // include ('script.php'); // We can write include as a function with ( )
    include 'script.php';

    /* 
    require() to be covered later
    */   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- 
        Content => HTML
        Style => CSS
        Behaviour => JS
     -->

     <!-- linking to external CSS: -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <p>Our current course is <?php echo $myCourse; ?></p>
    <p>your number is <?php echo $num ?>.</p>
    <p><?php echo $result ?></p>

    <!-- calling an external js file: -->
    <script src="script.js"></script>
</body>
</html>