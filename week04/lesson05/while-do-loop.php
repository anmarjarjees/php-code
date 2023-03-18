<?php
for ($i=1; $i<11; $i++) {
    echo "$i<br>"; // the right code to write the numbers with line break
    // echo '$i<br>'; // this will give us: $i
    // if you want to use single quote ':
    // echo $i.'<br>'; // Also the right code to write the numbers with line break
}
echo "<hr>";

$x=1;
while ($x<11) {
	echo "$x<br>";
    // increment the loop counter equation is written inside while() loop
    $x++; // $i=2, $i=3, $i=4, and soon but $i=11 => 11<11 => False => stop loop
}
echo "<hr>";

// This do/while loop will always run one time at least!
$i = 20; // set the value of $i to 20
do {
    echo "$i<br>"; // 20
    // increment the loop counter
    $i++; // 21
} while ( $i < 20 ); // this condition is false => this loop will stop