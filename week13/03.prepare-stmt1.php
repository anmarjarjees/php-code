<?php
require_once 'include/db_connect.php';
/* 
Setting the default fetch() method to be "PDO::FETCH_ASSOC"
by using setAttribute() method of the class PDO object
*/
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

/*
Our table "posts" has the following structure (fields/columns):
            1-	post_id
            2-	title	
            3-	body	
            4-	author
            5-	published
            6-  released
*/
$author = "Alex Chow";
// SQL: SELECT * FROM posts WHERE author = 'Alex Chow';

/*
Action#1: The Basic Way (With OUT using Prepared Statements/Bad Example)
---------
Getting information form the user and run them against our database
Let's use a variable to save the sql statement:
*/
$sql1 = "SELECT * FROM posts WHERE author ='$author'";


// Another task:
// Insert the following values into posts table:
// We should take them from an HTML form (assignment#2)
$title="PDO Prepared Statement";
$body="Yes, it's a long article!";
$author="PHP Superman";
$published=1;
$released="2021-10-05";
/* 
INSERT INTO posts (title,body,author,published,released) 
VALUES (...)
*/
$sql2 = "INSERT INTO posts (title,body,author,published,released) 
($title,$body,$author,$published,$released)";

echo "<p>the SQL statement is: $sql1</p>";
echo "<p>the SQL statement is: $sql2</p>";
echo "<hr>";


/*
Action#2: The Official Way (With using Prepared Statements)
---------
Two ways to implement the "Prepare Statement":
- Anonymous Positional Placeholder (?) => Also works with MySQLi
- Named Placeholders => ONLY for PDO
*/

// The simple SQL Statement: 
// SELECT * FROM posts WHERE author ='Martin Smith' OR title='Back-End Development with PHP and MySQL';
$sqlQuery = "SELECT * FROM posts WHERE author =? OR title=?";

/* 
To review about what we did before:
$query = $pdo->query($sqlQuery);
$row = $query->fetch();  
*/

// Stage#1: Prepare: 
// using PDO method named "prepared()"
// Saving the returned filtered/secured statement into a variable named stmt (for statement)
// This $stmt is the "PDOStatement" object that we need in order to run the execute() method
// prepare() method -> returns PDOStatement | false
$stmt = $pdo->prepare($sqlQuery);

// Fot testing:
// echo "<br>dump stmt:<br>";
// var_dump($stmt);
/* 
object(PDOStatement)#2 (1) { ["queryString"]=> string(46) "SELECT * FROM posts WHERE author =? OR title=?" }
*/

// Yes, it just an assumption (hard-coding), in real project we will receive values for the user's forms
$author = "Martin Smith";
$title = "Back-End Development with PHP and MySQL";

// Stage#2: Execute the statement:
// using PDO method named "execute()"
/*
Filling the placeholders "?" with these values $author and $title
Please be advised that order is matter here
Based on our sql statement, the first ? is for the "author" and the second ? is for the "title"
So we can pass these two values using array format:

NOTE: Don't forget that execute() method returns "true" on success or "false" on failure.
In such case, as programers we can take this nice feature as we are going to see in the next examples:-)
*/
$stmt->execute([$author, $title]);
echo "<hr>";

// Fot testing:
echo "<br>Second dump stmt:<br>";
var_dump($stmt);

/*
Output: Notice it's the same result we receive from using query() method, but this one is more secured/professional
object(PDOStatement)#2 (1) { 
    ["queryString"]=> string(46) "SELECT * FROM posts WHERE author =? OR title=?"
}
*/

$post = $stmt->fetch();
// for testing:
    echo "<br>First Select Result:<br>";
    print_r($post);



echo "<hr>";
// Let's try to search for another existing data using the same prepared statement:
// And also let's use different varaible names (no need to be the same as the column names)
$postAuthor = "Alex Chow"; // We have the author "Alex Chow"
$postTitle = "Back-End Development with PHP and MySQL";

$stmt->execute([$postAuthor, $postTitle]);
echo "<hr>";
// for testing:
echo "<br>Second Select Result:<br>";
print_r($post);
/*
Array ( [post_id] => 1 [title] => Why Learning JavaScript? [body] => JavaScript is the most important language that any developer or programmer should learn. [author] => Alex Chow [published] => 1 [released] => 2021-09-01 )
*/



/* 
Another example for all the steps, let's do it together :-)
Task: Selecting only the published articles:
Simple SQL Statement (MySQL) in phpMyAdmin: SELECT * FROM posts WHERE published=1;
*/

// 1: prepare => returns an object "PDOStatement Object"
$stmt=$pdo->prepare("SELECT * FROM posts WHERE published=?");

// 2: execute => accepts the required values as an array structure
// the number of the elements in this array is exactly the same as the number of the ? marks 
$stmt->execute([1]);

/*
Notice this query might return more than one single post,
We can use fetchAll();
Fetching all the records out of the "$stmt" which is PDO statement object:
Remember below, the default parameter for fetchAll() is "PDO::FETCH_ASSOC"
Based on what we have set initially
*/
$publishedPosts = $stmt->fetchAll();
// for testing:
// var_dump($publishedPosts); // :-)

/*
Based on the condition that we set for the WHERE clause in our SELECT statement and our data,
We will have 3 records (be carful this might be changed depending on what we have in our database)
*/

// for testing:
// var_dump($publishedPosts);

// Final example:
// Task: Selecting all the posts:
// Simple SQL Statement (MySQL) in phpMyAdmin: SELECT * FROM posts;

// 1) Prepare => 2) Execute => 3) Fetch
$stmt=$pdo->prepare("SELECT * FROM posts");
$stmt->execute();

/*
Remember if you like to try fetching the rows as objects
we can pass this mode as a argument to execute() method
*/
$allPosts = $stmt->fetchAll(PDO::FETCH_OBJ);



// Second Way: the named identifiers as placeholders: => In the next file :-)
// ===========
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Prepared Statement 1</title>
</head>
<body>
    <h1>PDO Prepared Statement</h1>
    <h2>Published Posts</h2>
    <!-- Render the posts array nicely for our clients: -->
    <?php
        foreach ($publishedPosts as $post) {
            /* 
            Thinking about the foreach logic:
            $publishedPosts => 3 associative arrays
            $post => 1 associative array
            */
            echo "<br>Title: ".$post['title']."<br>";
            echo "<br>Article: ". $post['body']. "</br>";
            echo "<br>Author: ". $post['author']. "</br>";
            echo "<br>Released: ". $post['released']. "</br>";
            echo "<hr>";
        }
    
        echo "<h2>All Posts</h2>";
        // allPosts is an object:
        foreach ($allPosts as $post) {
            echo "<br>Title: ".$post->title."<br>";
            echo "<br>Article: ". $post->body. "</br>";
            echo "<br>Author: ". $post->author. "</br>";
            echo "<br>Released: ". $post->released. "</br>";
            echo "<hr>";
        }
    ?>
</body>
</html>







