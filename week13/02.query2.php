<?php
// Include database config file => to get our PDO object 
require_once 'include/db_connect.php';

/* 
    We can also add a predefined attributes to the PDO object:
    **********************************************************
    These predefined attributes can help us as programmers to control how PDO object is going to behave in certain ways

    PDO::setAttribute => Sets an attribute on the database handle
    Description: bool PDO::setAttribute ( $attribute, $value );
    setAttribute(ATTRIBUTE, OPTION);
    - setAttribute() is a method that belongs to the PDO object 
    - This method is used to set a predefined PDO attribute or a custom driver attribute
    - Returns true on success or false on failure

    We need to use this table in PHP.NET to learn/understand which attribute we can use and what are its possible values:
    https://www.php.net/manual/en/pdo.setattribute.php

    Also you can learn more about "PDO::setAttribute":
    https://docs.microsoft.com/en-us/sql/connect/php/pdo-setattribute?view=sql-server-ver15
*/

// Set the case in which to return column_names.
/* 
PDO::ATTR_DEFAULT_FETCH_MODE
Set the default fetch mode. A description of the modes and how to use them is available in the
*/

// setAttribute(ATTRIBUTE, OPTION)
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

// Yes, we do need to run our query again to reset the fetch() counter to go to the first record:
$query = $pdo->query('SELECT * FROM posts'); // having a new result set into the variable $query

// for us as programmers: print_r()
while($row = $query->fetch()) {
    // remember each $row will be just simple associative array!
    print_r($row);
    echo "<br><br>";
}
