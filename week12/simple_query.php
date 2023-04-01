<?php
// Include config file for connecting to our database:
// require ('includes/db_connect.php');    
// OR:
require_once 'includes/db_connect.php';

/*
For quick demo, we will use this direct way which is the "PDO Query" to get the data.
In a real application, it's better to use a "prepared statement" as we will do later
*/

// SELECT * FROM posts
$sql='SELECT * FROM posts';

/* 
PDO::query() prepares and executes an SQL statement in a single function call, returning the statement as a "PDOStatement object".
query() => returns PDOStatement | false 
*/
$query = $pdo->query($sql);
// Returns a PDOStatement object or false on failure.

// let's check/examine the variable $query (checking its value and its datatype):
/* 
echo "<br>Our variable query:";
var_dump($query); 

OUTPUT:
object(PDOStatement)#2 (1) { ["queryString"]=> string(19) "SELECT * FROM posts" }
*/

echo "<hr>";
// Let's use print_r()
// print_r($query);
// Output: PDOStatement Object ( [queryString] => SELECT * FROM posts )

/* 
Q) How to render/display the content to our page:
A) Remember that query() method will return a PDOStatement object that contains the results from the database, We can call a PDO method named "fetch()" to fetch the data in a format that we can parse as PHP developers then display it to the end user!

Link: https://www.php.net/manual/en/pdostatement.fetch

=======================================
The fetch() method: PDOStatement::fetch 
=======================================
> Fetches the "next row" from a result set
> Controls how the next row will be returned to the caller.
> The returned value of this method must be one of the PDO::FETCH_* constants,

fetch() method can accept parameters to determine the returned type:
The three commonly used returned types of fetch() method based on these parameters:

1. PDO::FETCH_BOTH (default):
returns an array indexed by both column name and 0-indexed column number as returned in your result set

2. PDO::FETCH_ASSOC:
returns an array indexed by column name as returned in your result set

3. PDO::FETCH_OBJ:
returns an anonymous object with property names that correspond to the column names returned in your result set

By default the value will be PDO::ATTR_DEFAULT_FETCH_MODE (which defaults to PDO::FETCH_BOTH)

NOTES:
- For a PDOStatement object representing a scrollable cursor, this value determines which row will be returned to the caller.
- The return value of this function on success depends on the fetch type. In all cases, false is returned on failure.

:-( Oh! what's going on!?
*/

/*
In other easy words :-)
***********************
We can use built-in method for the PDOStatement Object the contains the result set. 
In our case, the result set is saved to an object and we call it "$query".
This method is called fetch().

So the simplest pattern could be: $query->fetch()

NOTE: fetch() method can fetch "one record" at a time from our table.

fetch() like any other method/function, it can accept parameters, so it returns different values based on the arguments we pass to the function,
but we can focus on these 3 values:
1. PDO::FETCH_BOTH (default): Both "indexed" array and an "associative" array for each record in our database
2. PDO::FETCH_ASSOC: an associative array for each record in our database (the most commonly used)
3. PDO::FETCH_OBJ: an object for each record in our database

We will be checking the 3 ways of using PDO fetch() method of our Result Set object "query":
- $query->fetch()
- $query->fetch(PDO::FETCH_ASSOC)
- $query->fetch(PDO::FETCH_OBJ)

As programmers, we can determine which value we want to receive,
In general, the argument "PDO::FETCH_ASSOC" is more commonly used
because it returns the a row (record) in readable php format (associative array) that we can use as programmes
*/

/*
1. PDO::FETCH_BOTH (default) => Calling the fetch() method without passing any arguments
This will return an Both: indexed array and an associative array for each record in our database
*/
$oneRow1=$query->fetch(); // oneRow => one row at a time + 1 => only the first record

var_dump($oneRow1);
/* 
Array ( 
    [post_id] => 1 
    [0] => 1 
    
    [title] => Why Learning JavaScript? 
    [1] => Why Learning JavaScript? 
    
    [body] => JavaScript is the most important language that any developer or programmer should learn.     
    [2] => JavaScript is the most important language that any developer or programmer should learn. 
    
    [author] => Alex Chow 
    [3] => Alex Chow 
    
    [published] => 1 
    [4] => 1 
    
    [released] => 2021-09-01 
    [5] => 2021-09-01 )
*/


// 2. PDO::FETCH_ASSOC: (Most Commonly Used)
echo "<hr>";
echo "Using fetch() with argument: PDO::FETCH_ASSOC: <br>";
$oneRow2=$query->fetch(PDO::FETCH_ASSOC);
print_r($oneRow2); // We will get the second record after running the fetch() for the second time
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

// 3. PDO::FETCH_OBJ:
echo "<hr>";
echo "Using fetch() with argument: PDO::FETCH_OBJ: <br>";
$oneRow3=$query->fetch(PDO::FETCH_OBJ);
print_r($oneRow3); // we will get the third record after running the fetch() for the third time
/*
    Output:
    object(stdClass)#3 (6) { 
        ["post_id"]=> int(3) 
        ["title"]=> string(14) "HTML5 and CSS3" 
        ["body"]=> string(74) "Working with HTML5 which is the last version of HTML and using CSS Level 3" 
        ["author"]=> string(14) "Alex Stevenson" 
        ["published"]=> int(0) ["released"]=> string(10) "2021-09-06" }
*/

echo "<hr>";
// if we continue, we will get the record number 4:
echo "Using fetch() with argument: PDO::FETCH_ASSOC (Again): <br>";
$oneRow4 = $query->fetch(PDO::FETCH_ASSOC);
print_r($oneRow4); // We will get the forth record   


echo "<hr>";
// if we continue, we will get the record number 5 (but we only have 4 records):
echo "Using fetch() with no arguments:<br>";
$oneRow5 = $query->fetch(PDO::FETCH_ASSOC);
print_r($oneRow5); // No record 5 => will be just empty
var_dump($oneRow5); // bool(false)

/* 
NOTE: 
To reset the pointer/cursor to return to the first record:
We can run the query again: $query = $pdo->query('SELECT * FROM posts');
Otherwise, we get nothing
*/

/*
Finally: In all these examples we just returned one record as a single row,
we will use while loop to return all the records in the next file
*/

/*
Conclusion:
-----------
1- fetch() method can return only one record at a time. 
To retrieve all records we can place the fetch() in while loop, so we can just loop through this PDOStatement object and display all its element(s)

2- fetch() method can accept arguments, the three main arguments
- No arguments => PDO::FETCH_BOTH => returns (indexed and associative) arrays
- PDO::FETCH_ASSOC => returns associative array
- PDO::FETCH_OBJ: => returns an object
3- every time we run the fetch() will stop in the next row
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Introduction</title>
</head>
<body>
    <!-- Display the contents for the first (associative and indexed) array: oneRow1 -->
    <ul>
    <?php 
    foreach ($oneRow1 as $key=>$value) {
        echo "<li>$key: $value</li>";
    }
    ?>
    </ul>

    <hr>
    <!-- Display the contents for the second associative array: oneRow2 -->
    <ul>
    <?php
        foreach ($oneRow2 as $key=>$value) {
            echo "<li> $key: $value </li>";
        }
    ?>
    </ul>

    <hr>
    <!-- Display the contents for the third object: oneRow3 -->
    <ul>
    <?php
        foreach ($oneRow3 as $key=>$value) {
            echo "<li> $key: $value </li>";
        }
    ?>
    </ul>
</body>
</html>