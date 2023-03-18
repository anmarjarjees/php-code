<?php

/*
Creating an array for program codes:
*/
$allSubjectsCode = [ 890, 100, 500, 750, 200, 250,300 ];

for ($i = 0; $i < 7; $i++) {
    echo "<br>$allSubjectsCode[$i]";
}

/* 
the loop counter => array index
array is a 0 based index => starts with 0

count how many elements we have in this array => 5

In JS => arrayName.length
In Py => len(arrayName)
In PHP => count(arrayName)
*/

for ($i = 0; $i < count($allSubjectsCode); $i++) {
    echo "<br>$allSubjectsCode[$i]";
}


$employees = [ 'Sam Simpson', 'Martin Smith', 'Alex Chow', "Sarah Grayson", "Sally Grand", "James Dean" ];

// Printing them all one by one!!!
echo "<br>$employees[0]";
echo "<br>$employees[1]";
echo "<br>$employees[2]";
echo "<br>$employees[3]";
echo "<br>$employees[4]";
echo "<br>$employees[5]";

// but array size will change we can't hard code
for ($i=0; $i<count($employees); $i++ ) {
    echo " $employees[$i]";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>For Loop with Arrays</title>
</head>
<body>
<h1>Our Employees</h1>
    <!-- bad way -->
    <ul>
        <li><?php echo $employees [0] ?></li>
        <li><?php echo $employees [1] ?></li>
        <li><?php echo $employees [2] ?></li>
        <li><?php echo $employees [3] ?></li>
        <li><?php echo $employees [4] ?></li>
        <li><?php echo $employees [5] ?></li>
    </ul>


    <!-- the correct logic is to use a loop -->
    <ul>
        <?php
            for ($i=0; $i<count($employees); $i++ ) {
                echo "<li>$employees[$i]</li>";
            }
        ?>
    </ul>
</body>
</html>


