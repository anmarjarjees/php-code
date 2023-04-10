<?php
/* 
For practicing what we have in a real-world project, 
we modified the phpMyAdmin to change its default settings
by adding a simple password instead of using an empty default one

For testing and demonstration, we  used the password "root123"
please refer to my in-class notes for changing/modifying the password

Credentials:
username: root (the same by default)
password: root123

These will be the "global" credential (username and password) to access all the databases in
phpMyAdmin of "localhost" server.

IMPORTANT NOTE:
To connect to a database for creating CRUD application, we need the following 4 things:
    - host => the website address (the URL)
    - the username
    - the password
    - the database name
*/


// $host= 'localhost'; // the default value for most of you (you will use this value)
// in my pc, the phpMyAdmin => Server: 127.0.0.1:3307

/*
USING PDO:
In our code example we will focus on using PDO API (refer to my in-class notes for for details)
PDO can support many databases: https://www.php.net/manual/en/pdo.drivers.php#pdo.drivers
*/

/*
with using PDO, as a php programmer, we have two options:
Option1: Attaching the port number to the localhost
$host='localhost:3307'; // Only for me! you can remove the 3307

Option2: we can leave the host name to be "localhost" but we have to identify/add the port number to the "dsn"
I will show this option later.
*/


// First Way: We can save all the above mentioned needed info into simple php variables:
$host='localhost';
$user='root';
$password = 'root123'; 
$dbname='pdo_intro';

// Second Way: The other nice way is to save these information into constants!
// In PHP, constants are written in UPPERCASE by convention
// Required Database credentials as Constants values:
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root123');
define('DB_NAME', 'pdo_intro');


/*
Setting the DSN:
DSN is for "Data Source Name" which is a nice way to save the required information
for initializing our pdo object to connect to our database

The DSN is just a string varaible that contains the following information as a string value:
1- The Database type (Prefix), if using MySQL, we have to specify => databaseType:
    example: mysql:
2- The host name => host = ?
3- The database => dbname = ?

DSN value contains text and varaible, we need to concatenate them
In PHP we can use either one of these following two ways to create a dsn, please pick only one for sure!
for demo and learning purposes I put the two ways below:
*/

// Creating the DSN varaible (using different format of coding ways):

// #1: We can set the variables and values of "dsn" variable using concatenating with .:
$dsn = 'mysql:host='.$host.';dbname='.$dbname;

// #2: Or you can just use the ":
$dsn = "mysql:host=$host;dbname=$dbname";

/*
If your port number is not the default one which is 3306
And you didn't add your port number to the local host like "localhost:3307"
We have to specify it with the dsn value by adding another parameter name "port":
*/
$dsn = "mysql:host=$host;dbname=$dbname; port=3307"; // notice that this $dsn will override the previous ones

// Some of you might like to create the DSN as Constant!
// let's do it :-), we can name this constant to be "PDO_DSN"
// using define() function:
// define(DSN Constant Name, DSN string value)
define('PDO_DSN',"mysql:host=$host;dbname=$dbname"); // don't forget the port number:

// try to connect to our database then check if there is an error => catch this error!
try {
    // You can comment one of them and try the other two just for learning and demo:
    $pdo = new PDO($dsn,$user,$password);
    // $pdo = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
    // $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);

    // testing:
    // var_dump($pdo); // object(PDO)#1 (0) { }

    echo "Database Connection Done!";
    /*
        NOTE: 
        Since we are using PDO code,
        so most of the exception/error that might occur will be related to PDO
        and that's why we are using the specific exception called "PDOException"
        
        Yes, you can also use the general exception called "Exception"
        and it will work fine also :-)
    */
} catch(PDOException $e) {
    /*     
    using the class PDOException and assign any returned error (exception) 
    to an object named $e then using its method getMessage()
    we can output the error message and continue loading our application
        in such case we can use a simple echo message  
    */
    echo "Database Connection failed: " . $e->getMessage();
}

