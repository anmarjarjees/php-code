<?php
require_once('include/db_connect.php');

// query() method => returns PDOStatement | false 
$query = $pdo->query('SELECT * FROM posts');

/* 
ClassName::ConstantName 
PDO::FETCH_ASSOC => Associative Array
PDO::FETCH_NUM => Indexed Array
PDO::BOTH (default) => Indexed Array and Associative Array 
PDO::FETCH_OBJ => Object
*/
$row1 = $query->fetch(PDO::FETCH_ASSOC);
// first record/row => running for the first time
print_r($row1);
echo "<br><br>";
/* 
Array ( 
    [post_id] => 1 
    [title] => Why Learning JavaScript? 
    [body] => JavaScript is the most important language that any developer or programmer should learn. 
    [author] => Alex Chow 
    [published] => 1 
    [released] => 2021-09-01 
)
*/

// running fetch() for the second time => returns the second record/row
$row2 = $query->fetch(PDO::FETCH_ASSOC);  
print_r($row2);
echo "<br><br>";

// running fetch() for the third time => returns the third record/row
$row3 = $query->fetch(PDO::FETCH_ASSOC);
print_r($row3);
echo "<br><br>";

// running fetch() for the fourth time => returns the fourth record/row
$row4 = $query->fetch(PDO::FETCH_ASSOC);
print_r($row4);
echo "<br><br>";

// Below there is no record#5
// running fetch() for the fifth time => returns FALSE
$row5 = $query->fetch(PDO::FETCH_ASSOC);
print_r($row5); // it will just show the boolean value of "false" which is nothing

/* 
for testing, we can use gettype() function:
https://www.w3schools.com/php/func_var_gettype.asp 
*/
print(gettype($row5)); // boolean
echo "row5 value: $row5 <br>";
echo "<br><br>";

/*
We need to use while loop to loop through all the table records and fetch them all,
not only the first/second/etc... records!

Using the same technique as the above examples, 
just by placing the syntax inside the while() loop condition:

    while (the condition is true) {
        // keep repeating the same code
    }
*/

echo "<hr><hr>";
$query = $pdo->query('SELECT * FROM posts');
// PDO::FETCH_NUM => will fetch an indexed array
while ($row = $query->fetch(PDO::FETCH_NUM)) {
    /* 
    first iteration#1: $row = [ first record as an indexed array ]
    second iteration#2: $row = [ second record as an indexed array ]
    and so on...
    */
    echo "<br>$row[1] by $row[3]"; // output: post title and author name
}

echo "<hr><hr>";
// Yes, we do need to run our query again to reset the fetch() counter to go to the first record:
$query = $pdo->query('SELECT * FROM posts'); // having a new result set into the variable $query

// for us as programmers: print_r()
while($row = $query->fetch(PDO::FETCH_ASSOC)) {
    // remember each $row will be just simple associative array!
    print_r($row);
    echo "<br><br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Posts</title>
    <style>
        table, td, th {
            border: 1px solid #000;
        }

        td, th {
            padding: 5px;
        }
    </style>
</head>
<body>
    <!-- lets' try to output all the fields in very simple/plain format: -->
	<h2>Fetch as an associative array</h2>
    <?php
    // Again :-) don't forget to rerun the query method:
    $query = $pdo->query('SELECT * FROM posts'); // having a new result set into the variable $query
    while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
        // the keys of the Associative array => the columns/field title
        echo "Post ID: ".$row['post_id'];
        echo "<br>Post Title: ".$row['title'];
        echo "<br>Post Article: ".$row['body'];
        echo "<br>Post Is Published: ".$row['published'];
        echo "<br>Post Release Date: ".$row['released'];
        echo "<br><br>";
    }

    echo "<hr>";
    echo "<h2>Fetch as an object</h2>";
    // But again we do need to rerun the query:
    $query = $pdo->query('SELECT * FROM posts');
    // Or we can fetch the content as objects
    while ($row = $query->fetch(PDO::FETCH_OBJ)) {
        // remember each $row will be just simple object (PDO::FETCH_OBJ)!
        
        // echo "Post ID: ".$row['post_id'];
        // Fatal error: Uncaught Error: Cannot use object of type stdClass as array 
        echo "Post ID: ".$row->post_id;
        echo "Post Title: ". $row->title. "<br>";
        echo "Post Article: ". $row->body ."<br>";
        echo "Post Author: ". $row->author. "<br>";
        echo "Post Is Published: ". $row->published. "<br>";
        echo "Post Release Date: ". $row->released. "<br>";
        echo "<br><br>";
    }
    ?>

    <!-- Or we can use a table (more advanced formatting) -->
    <table>
        <tr>
            <th>Post Title</th>
            <th>Post Article</th>
            <th>Post Author</th>
            <th>Post Release Date</th>
        </tr>
        
        <tr>
        <?php
           // Again :-) don't forget to rerun the query method:
            $query = $pdo->query('SELECT * FROM posts'); // having a new result set into the variable $query
            while ($row = $query->fetch(PDO::FETCH_ASSOC)) { 
                // We need to concatenate them properly :-)
                echo "<tr>";
                echo "<td>". $row['title']. "</td>";
                echo "<td>". $row['body']. "</td>";
                echo "<td>". $row['author']. "</td>";
                echo "<td>". $row['released']. "</td>";
                echo "</tr>";
            }
        ?>
        </tr>
    </table>

    <!-- Maybe using definition list (dl) might be better than using table, you can try it (enjoy) :-) -->
</body>
</html>

