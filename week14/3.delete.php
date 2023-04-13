<?php
// Include database config file => to get our PDO object 
require_once 'include/db_connect.php';


// Deleting a record:
// Assuming that we will delete the record (post) with id value of "6" or any other value you try
$postId = 6; // This is the post id for the record that we need to delete

// Prepare:
// For simplicity, developers use the same names of the table columns for their name identifiers
$stmt = $pdo->prepare('DELETE FROM posts WHERE post_id=:post_id');

// Execute:
$stmt->execute(['post_id'=>$postId]);

$count1 = $stmt->rowCount();

/* 
Remember in PHP the value of 0 => False
any other numeric value => True
*/
echo (($count1) ?  "<br>Post with id value of $postId has been deleted!" : "<br>Sorry no post has been deleted!");

echo "<hr>";

// One more example for more clarifications :-)
/*
Task: Delete any record whose author name has the text "Alex"
in our database, we have two records with first name "Alex":
- Alex Chow
- Alex Stevenson
- Alex White
*/

/*
Simple SQL Statement: DELETE FROM post WHERE author LIKE "%alex%";

Delete any name that has these 4 letters "alex" at the beginning, middle, or end 
whatever the letter case (DB is insensitive)

Using the like operator with the wildcard "%" 
searching for the word "alex" => %alex%

Notice it's not case sensitive Alex or alex is the same in searching for data in the database
*/

// Overriding the previous PDOStatement object:
// Prepare:
$stmt = $pdo->prepare('DELETE FROM posts WHERE author LIKE :name');

$name="alex"; // again hard coding for quick demo
// Execute:
$stmt->execute(['name'=>'%'.$name.'%']);

$count2 = $stmt->rowCount();

echo (($count2) ? "<br>$count2 record(s) has/have been deleted!" : "<br>Nothing happened!");
