<!-- 
    JS, Py, PHP
    Weakly typed languages

    Java and C# 
 -->
<?php
    /* 
    Array is a variable that can hold multiple values of any data types
    */
	
    // Two types of arrays:
    // Indexed Array (we did the same in JavaScript)
    // Associative Array

    // Indexed Array Review: 
    // --------------------
    // 1. Each element/item in the array has a unique numeric id or value called "index"
    // 2. The first index value is 0 (counting from 0 not from 1) for the first element/item in the array

    $myLuckyNumber1=10;
    $myLuckyNumber2=12;
    $myLuckyNumber3=7;
    
	// like in JS:
    $myLuckyNumbers = [90, 34, 17, 21, 12];  // hard coding the values
    // OR:
    $myExams = array (90,89,87,92,91);

     // print ($myExams);
     // Array to string conversion in
     // echo ($myExams);
	
    // echo $myLuckyNumbers;
    // Warning: Array to string conversion 

    // for quick test by developers, we can use print_r()
    print_r($myExams);
    //  Array ( [0] => 90 [1] => 89 [2] => 87 [3] => 92 [4] => 91 )

    $users = array('Arthur Smith','Alex Chow','Sarah Grayson'); // the traditional way for creating an array in PHP
    
    // More Examples:
    $employees = [ 'Sam Simpson', 'Martin Smith', 'Alex Chow' ];

    echo "<hr>";
    var_dump($users);

    echo "<hr>";
    // Creating an array that contains elements of different data type!
    // In Java and C# => WE CANNOT DOT IT
    $mixedArray = [true, 67.89, 90, "ABC"];
    var_dump($mixedArray);

    $users[]="Martin Smith";
    echo "<hr>";
    var_dump($users);

    $users[]='Sally Wilson';
    echo "<hr>";
    print_r($users);

    // Creating just an empty array:
    /*
    The code in JS:
    let myExams = [];  // just declaring an empty array
    myExams.push(92);
    OR:
    userExams[0] = 90; 
    userExams[1] = 94; 
    userExams[2] = 82; 
    userExams[3] = 75;
    userExams[4] = 78;
    
    In Py:
    my_exams = []
    my_exams.append(92)
    */

    $userExams = [];
    echo "<hr>";
    var_dump($userExams);
	 /* 
    adding values:
    */
    // To add an element to an array in PHP => We don't have to specify the index value
    $userExams[] = 90; // PHP will automatically place 90 in the first index 0
    $userExams[] = 94; // PHP will automatically place 94 in the second index 1
    $userExams[] = 82; // and so on the rest...
    $userExams[] = 75;
    $userExams[] = 78;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed Arrays</title>
</head>
<body>
    <h2>Main Users</h2>
    <ul>
        <!-- output the first user -->
        <li><?php echo $users[0]; ?></li>

        <!-- output the second user -->
        <li><?php echo $users[1]; ?></li>

        <!-- output the third user -->
        <li><?php echo $users[2]; ?></li>

        <!-- so on... -->
        <li><?php echo $users[3]; ?></li>
        <li><?php echo $users[4]; ?></li>
    </ul>
	
	 <h1>Exams Marks</h1>
	 <ul>
        <!-- out the value of the first exam (first item/element) -->
        <li><?php echo $myExams[0] ?></li>
        <!-- out the value of the second exam  -->
        <li><?php echo $myExams[1] ?></li>
        <!-- out the value of the third exam  -->
        <li><?php echo $myExams[3] ?></li>
        <!-- and so on... -->
    </ul>
</body>
</html>