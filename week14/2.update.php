<?php
// Include database config file => to get our PDO object 
require_once 'include/db_connect.php';


// Updating a record:
// Assuming that we will update the record (post) with id value of "4"
$postId = 4; // This is the post id for the record that we need to update

// Remember the post tile is "Learning Python"
// We will change it with the new value of this postTitle variable:
$pTitle = "Python Language";

// UPDATE table_name SET column = any_value WHERE column= any_value

// Prepare:
$stmt = $pdo->prepare('UPDATE posts SET title =:postTitle WHERE post_id=:postId');

/*
IMPORTANT NOTE:
The following code is NOT useful => $isUpdated will be always be "true"
if the SQL Statement are run successfully even if no record has been updated!

You can try it by passing id that doesn't exist, the varaible isUpdated will be "true"!
*/
// $isUpdated = $stmt->execute(['postTitle'=>$pTitle, 'postId'=>$postId]);
/* if ($isUpdated) {
    echo "<br>Yes, Post has been Updated!";
} else {
    echo "<br>No update!";
}
echo "<hr>"; */

$stmt->execute(['postTitle'=>$pTitle, 'postId'=>$postId]);

//  rowCount() Returns the number of rows affected by the last SQL statement
$count = $stmt->rowCount(); # either 0 or 1 in this cases

if ($count==1) {
    echo "<br>Post has been updated";
} else {
    echo "<br>Sorry updating post is not done!";
}

echo "<hr>";
// Or using Ternary Operator :-)
echo (($count==1) ? "<br>Post has been updated!" : "<br>Sorry updating post is not done!");

