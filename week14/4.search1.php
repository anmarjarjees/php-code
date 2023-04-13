<?php
// Include database config file => to get our PDO object 
require_once 'include/db_connect.php';

$firstName = "martin";

// Searching for any name that has "martin"
// Using Anonymous Positional Parameters:
// Prepare:
$stmt = $pdo->prepare('SELECT * FROM posts WHERE author LIKE ?');

// Execute:
/*
Please, don't forget that execute() will return true
even if MySQL statement returned an empty result set!
true => only means that the SQL statement has been run successfully
*/

// I will leave this code for leaning and demo (useless to check the returned bool of execute())
// Yes Funny to use $isFound
$isFound = $stmt->execute(['%'.$firstName.'%']);
// testing:
echo "<br>Dumping isFound: ";
var_dump($isFound); 
echo "<br>";

// Below we are re-executing the SQL statement for the second use of fetch method
$stmt->execute(['%'.$firstName.'%']);

// The official accurate correct way is using rowCount():
$count = $stmt->rowCount();

if ($count) {
    echo "<h3>Selected Posts</h3>";
    // Remember: fetch() => for one record and fetchAll() => for many records
    $posts = $stmt->fetchAll(); // return a list of array(s)
    // $posts = is a list of 1 or many associative array(s)

    foreach ($posts as $post) {
        /* 
        NOTE:
        Remember: $post => will represent an individual associative array for each record
        
        echo "<br>".$post;
        Warning: Array to string conversion
        */
        echo $post['title'].'<br>';
        echo $post['author'].'<br>';
        // and so on for the rest...
    }
} else {
    // 1) save any custom message to a variable:
    $result="<br>No record found!";
    // 2) then echo the variable inside the HTML body (when you have a full page)
    echo $result;
}


// Task: Try to repeat the same code bu with using the keyword "LIMIT"
$rec_limit=1;

// we will skip the HTML template => we can skip the closing php tag