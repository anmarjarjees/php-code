<?php

for ($loopCounter = 1; $loopCounter <= 10; $loopCounter++) {
    // the for loop code goes here
    // This code/message will be printed 10 times!
    // don't forget that in PHP we use the . for concatenation not + like JS :-)
    // To recap:
    echo $loopCounter . "<br>"; // Works fine
    // Or using this PHP way with ":
    echo "$loopCounter <br>"; // Works fine
    echo '$loopCounter <br>'; // the literal text "$loopCounter" not the variable value!
}


for ($i = 10; $i >= 1; $i--) {
    echo "<br>$i";
}

echo "<hr>";
// Task: write a for loop to print only the even numbers from 0 to 10
for ( $i = 0; $i <= 10; $i += 2 ) {
    echo "<br>$i";
  }

// if you have no intention to HTML code, we can omit the closing ? >