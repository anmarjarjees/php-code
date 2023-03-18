<?php

// Associative array:
/*
The first key "module1" => has the value of "HTML and CSS"
The second key "module2" => has the value of "JavaScript"
The third key "module3" => has the value of "PHP"
*/
$modules = [
    // $key => $value
    "module1" => "HTML and CSS",
    "module2" => "JavaScript",
    "module3" => "PHP"
];
echo "<hr>";

/*
foreach loop:
- can be use with associative arrays and indexed array
- can target the "values" and the "keys" of an associative array
- foreach ==> handling array and certain types of objects
- The template/pattern of "foreach":

foreach ($arrayName as $value) {
    // place our code to be run against the array
    // doing something with this value
}
*/

foreach ($modules as $value) {
    echo "<br>$value";
}

// More examples about using foreach loop with indexed array:
$users = ['Arthur Smith','Alex Chow','Sarah Grandson'];

foreach ($users as $user) {
    echo "<br>$user";
}
echo "<hr>";

// Imagine writing the same task using our classical "for" loop:
for ( $i = 0; $i < count( $users ); $i++ ) {
    echo "<br> $users[$i]";
}   
echo "<hr>";

// another indexed array:
$colors = ["red", "green", "blue", "yellow"];

echo "<hr>";
foreach ($colors as $key=>$value) {
    echo "<br>$key: $value";
}
/* 
Output:
0: red
1: green
2: blue
3: yellow
*/
echo "<hr>";


/*
php.net
To access the array keys and the value of each array element:

foreach ($arrayName as $key=>$value) {
	// do something
}
*/

foreach ($modules as $key=>$value) {
	echo "<br> the key is $key, the value of this key is $value";
}

// more examples:
$definitions = array(
    'HTML' => 'Display the page content',
    'CSS' => 'Style the page content',
    'JavaScript' => 'Interact with the user input',
    'PHP' => 'Create Dynamic Pages to talk to the database server'
);
echo "<hr>";
var_dump($definitions);

// Since we have HTML contents below, we do need to close php tag
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foreach Loop</title>

        <!-- Internal CSS -->
        <style>
        /* Adding some styles to dt elements of a definition list: */
        dl dt {
            font-weight: bold;
        }

        /* Adding some styles to dd elements of a definition list: */
        dl dd {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <!-- 
        Lists in HTML:
            - ul => li
            - ol => li
            - dl => dt => dd      
        
        Creating a definition list: just a review :-) 
            dl => definition list [like ul with unordered list or ol with ordered list]
            dt => definition title
            dd => definition data
    -->

    <!-- Simple Example/Review about <dl> -->
    <dl>
        <dt>HTML</dt>
        <dd>Display the page content</dd>
        <dt>CSS</dt>
        <dd>Style the page content</dd>
         <!-- going got the rest!!! -->
    </dl>

    <hr>
    <!-- Using PHP loop with HTML dl to display them: -->
    <dl>
        <!-- since we need to invoke a php code, we have to add php tags -->
        <?php
            foreach ($definitions as $key=>$value) {
                // DL => dt and dd
                echo "<dt>$key:</dt> <dd>$value</dd>";
                // Or in two lines:
               /*  
               echo "<dt>$key:</dt>";
                echo "<dd>$value</dd>"; 
                */
            }
        ?>
    </dl>


</body>
</html>