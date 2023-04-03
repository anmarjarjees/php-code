<?php
require_once 'include/db_connect.php';
/* 
Setting the default fetch() method to be "PDO::FETCH_ASSOC"
by using setAttribute() method of the class PDO object
*/
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

/*
Second Way: the named placeholders
A named placeholder begins with a colon (:) followed by an identifier (column name)
Below we are filling the placeholders "column_name = :identifier" with these values $author and $tile

Below we will named placholders, each one with a unique name:
Previously, we used only two ? marks, but now we use names
*/

// The simple SQL Statement: 
// SELECT * FROM posts WHERE author ='Martin Smith' OR title='Back-End Development with PHP and MySQL';
$sqlQuery = "SELECT * FROM posts WHERE author =:post_author OR title=:post_title";
/* 
$post_author = the named placeholder for a variable that has the author's name ($author)
$post_title = the named placeholder for a variable that has the title's name ($title)
*/

$author = "Martin Smith";
$title = "Back-End Development with PHP and MySQL";

$stmt = $pdo->prepare($sqlQuery); // the same statement as we did the positional placeholders
$stmt->execute(['post_author'=>$author, 'post_title'=>$title]);

$post = $stmt->fetch();
// for testing:
echo "<br>First Select Result:<br>";
print_r($post);
/*
Output:
Array ( 
    [post_id] => 2 
    [title] => PHP and MySQL 
    [body] => PHP is the language that was designed to create web applications. it's compatible to work with MySQL. 
    [author] => Martin Smith 
    [published] => 1 
    [released] => 2021-09-01
)
*/

echo "<hr>";
echo "<br>Second Example:<br>";
// Another Example:
// Select the record/row/post with that has the title "PHP and MySQL"
// The simple SQL statement: 
// SELECT * FROM posts WHERE title='PHP and MySQL'

// our PHP variable to have the value of "PHP and MySQL" as hard-coded value
// the variable is named $pTitle short for "post title"
$pTitle = "PHP and MySQL"; // In real application => $pTitle = $_POST['post_title'];

// You can try to change it to:
// $pTitle = "PHP and MySQL Programming"; // We don't have a post with this title

// Notice below, the identifier name is ":title" as the column name to speed the process
// we can name it $x, $y, etc...
$sql = 'SELECT * FROM posts WHERE title = :title';

// 1. using PDO method named "prepared()"
$stmt = $pdo->prepare($sql);

// 2. using PDO method named "execute()"
$stmt->execute(['title'=>$pTitle]);

/* 
Trying something else,
Remember that execute() returns a boolean value:
> "true" on success when it found the record(s)
> "false" on failure when no matching records.
*/
$isFound = $stmt->execute(['title'=>$pTitle]);

// $post=false; // no need for this line
if ($isFound) {
    $titlePost = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Prepared Statement 2</title>
</head>
<body>
    <h1>PDO Examples Inside Our HTML Official Template (inside the body element)</h1>
    <?php
        // $post will be an associative array for the selected record
        // if $post has any value then go ahead and print them 
        if ($titlePost) {
            echo "<br>Title: ".$titlePost['title']."<br>";
            echo "<br>Content: ".$titlePost['body']."<br>";
            echo "<br>Author: ".$titlePost['author']."<br>";
            echo "<br>Date: ".$titlePost['released']."<br>";
        } else {
            echo "Sorry, there is no such title/article in our database!";
        }
    ?>
</body>
</html>


