<?php
// Ternary Operator:
// ****************  

// take a simple  example using if statement:
    $avg = 50;
    if ($avg>=60) {
        $result1="You passed the module.";
    } else {
        $result1="You can have supplementary assignment.";
    } 

    echo $result1;

    // The syntax template: 
    // $variable = (condition) ? the value if the condition is true : the value if it's false;
    $result2 = ($avg>=60) ? "You passed the module." : "You can have another assignment.";


?>