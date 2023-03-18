<?php
// Loops - Iteration Structure:


// break ends execution of the current for, foreach, while, do-while or switch structure.
$x=1;
while ($x<10) {
    echo "$x ";
    if ($x==5) {
        break;
    } 

    $x++; // ignoring this statement => infinite loop
}

echo "<hr>";
// Loops with Indexed Arrays:
$arr = array('one', 'two', 'three', 'four', 'stop', 'five');

for ($i = 0; $i < sizeof($arr) ; ++$i) {
    print "$arr[$i]\n"; // 1 2 3 4 6 7 8 9 10
}

foreach ($arr as $val) {
    if ($val == 'stop') {
        break;    /* You could also write 'break 1;' here. */
    }
    echo "$val<br />\n";
}

/* 
continue is used within looping structures to skip the rest of the current loop iteration and continue execution at the condition evaluation and then the beginning of the next iteration.
*/
echo "<hr>";
for ($i = 1; $i < 11; ++$i) {
    if ($i == 5) {
        continue;
    }
    print "$i\n"; // 1 2 3 4 6 7 8 9 10
}


// Associative Array:
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
foreach ($modules as $key=>$value) {
    /*  echo "<br>$key";
     echo "<br>$value"; */
     echo "<br> the key is $key, the value of this key is $value";
 }




