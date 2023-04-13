<?php
// Include database config file => to get our PDO object 
require_once 'include/db_connect.php';

/* 
Task: 
- Insert a new post to posts table
> Assignment: (register a new user)

- Check if the post title is available or not 
> Assignment: (check if the email is exist or not)
*/

$postTitle = "Dreamweaver Introduction"; // $_POST['title']
$postBody ="Adobe Dreamweaver is an integrated development environment. 
It can be used by pure designers who don't know how to write HTML 
or by developer who want to focus on writing their code.";
$postAuthor = "Stephanie Stephens";
$isPublished = 0;
$postCreatedDate = "2021-10-07";


$stmt = $pdo->prepare('SELECT * FROM posts WHERE title=:title');
// Assignment: Selecting from users if email exist

$stmt->execute(['title'=>$postTitle]);

$count = $stmt->rowCount();

if ($count) {
    echo "Sorry this title is exist";
} else {
    // insert the new record 
    $sql='INSERT INTO posts (title, body, author, published, released)
    values(:title, :article, :author, :published, :released)';

    $stmt=$pdo->prepare($sql);

    $isInserted = $stmt->execute(
        [
            'title'=>$postTitle,
            'article' => $postBody ,
            'author' => $postAuthor ,
            'published'=> $isPublished,
            'released'=> $postCreatedDate
        ]);
    
    if ($isInserted) {
        echo "<br>A new post has been added!";
    } else {
        echo "<br>Sorry Inserting a new post is failed!";
    }
} // end else
 
