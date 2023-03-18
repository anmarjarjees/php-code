<?php
// php.net
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

// indexed array:
$colors = ["red", "green", "blue", "yellow"];

foreach ($colors as $color) {
  echo "$color<br>";
}


// another indexed array:
$actors = array( 'Martin', 'Alex', 'Dave', 'Marvin', 'Steve' );

// Use for loop to print the items in this array:
// iterate 
for ( $i = 0; $i < count( $actors ); $i++ ) {
    echo "<br> $actors[$i]";
}

// Or:
// $actors: this is the name of our array
// $actor: this is just a general variable with any descriptive name
foreach ($actors as $actor) {
    echo "<br>$actor";
}

echo "<hr>";


$ages = array(
    // $key => $value
    "Alex" => 35,
    "Martin" => 37,
    "Sarah" => 43
);
// Our $array_name = $ages
// $key: it's just a variable name that refer to the keys of the $ages array =>  "Alex", "Martin", "Sarah"
// $value: it's just a variable name that refer to the value of each key => 35, 37, 43

echo "<br>" . $ages[ 'Alex' ]; // 35 
foreach ($modules as $value) {
      echo "<br>$value";
}

// foreach loop to display the elements (not the keys)
foreach ($ages as $age) {
    echo "<br>$age";
}


$modules = [
    // $key => $value
    "module1" => "HTML and CSS",
    "module2" => "JavaScript",
    "module3" => "PHP"
];

foreach ($modules as $value) {
    echo "<br>$value";
}
echo "<hr>";

// Loop to print the keys and their corresponding values:
foreach ($ages as $key=>$value) {
   /*  echo "<br>$key";
    echo "<br>$value"; */
    echo "<br> the key is $key, the value of this key is $value";
}

echo "<hr>";
foreach ($modules as $key[$value]) {
    echo "<br>$value";
}


