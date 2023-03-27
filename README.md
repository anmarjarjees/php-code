# PHP-Lectures-Code:
PHP Lecture (In-Class) Code

The contents of this repository is based on my main and original repo ["PHP-Class"](https://github.com/anmarjarjees/php-class)

# Week12: PDO - PART 1
Connecting to Databases

File Sequence:
- Include folder
- 01.query1.php


## General Notes for any Relational Database Driven Website:
The very first steps to do always is to connect our current php app. to our database, we need to have these information ready:
a- the server name (hosting name) => usually "localhost" by default
b- the database name => Our current example: "pdo_intro"
c- the database credentials: the username and the password
    > -- username: root (by default when installing XAMPP) => User: root@localhost
    > -- password: "" (Null by default installing XAMPP)

For practising what we have in a real world project, we will modify the phpMyAdmin to change its default settings. We will add a simple password instead of using an empty one
for simplicity, we will use this simple password for example: "root123". please refer to my in-class notes for changing/modifying the password

As conclusion:
- username: root (the same by default)
- password: root123 (Just for local demonstration and learning purposes)

These will be the "global" credential (username and password) to access all the databases in phpMyAdmin of "localhost".

IMPORTANT NOTE:
Please be advised that I had to set a different PORT number/value to run MySQL DBMS.
The default PORT Number that is used by XAMPP to run MySQL (PHPMyAdmin) is: 3306
But I had to change it to 3307 because 3306 is used by MySQL Workbench DBMS
For this reason, my host value will be 'localhost:3307' instead of just 'localhost'

## PHP and MySQL:
PHP provides **three different** ways to connect to MySQL database. The technical term is **API (Application Programming Interface)**, so PHP provides three APIs to connect to MySQL. In a nutshell, API is just a set of built-in functions that define or specify the way the we as developer can use the software.

Database APIs in PHP:
-	First: (the original one since PHP 2) MySQL API: mysql 
    - The basic way to connect to MySQL (became obsolete since PHP 7)
-	Second: The improved API: msyqli 
    - The improved version of the first one (Since PHP 5)
    - Preconfigured to work only with MySQL database ONLY
    - Supports: 
        - Procedural Programming (Procedural Interfaces)
        - Object-Oriented programming (Object-Oriented Interfaces)
- Third: The PDO API: PDO 
    - PHP Data Objects (Since PHP 5.1)
    - Preconfigured to work with any database
    - Supports only Object-Oriented programming (Object-Oriented Interfaces)

NOTE: Using the Object-Oriented Interface, even with MySQLi is a modern way of coding since the code will be more concise (short/brief) and this will make our code easier to read and maintain.

## USING PDO:
In our code example we will focus on using PDO API (refer to my in-class notes for for details)
PDO can support many databases: https://www.php.net/manual/en/pdo.drivers.php#pdo.drivers

### Prepared Statements:
-	Both MySQLi and PDO support something in PHP called **"Prepared Statements"** that can add more security features when we communicate to our database.
-	It's a template for SQL query (SQL Statement) that uses/includes values from the user input or hard-coded values
-	It contains what it's called “Placeholders” for the values that we store in variables. These placeholders could be just the symbol (?) when using MySQLi or with PDO, it could be also the colon (:) and the identifier name which is just any variable name that we can pick to refer to the values we want to use with the query (we learn later)
-	It prevents a good protection against SQL injection as this “prepared statement” automatically escapes characters before executing any query (SQL Statement)
-	It helps to rerun our query (SQL Statement) more than once if needed

PDO can support all the following listed Databases:
-	CUBRID (PDO)
-	Firebird (PDO)
-	IBM (PDO)
-	Informix (PDO)
-	MySQL (PDO)  PHP/Python
-	MS SQL Server (PDO)  .NET Framework
-	Oracle (PDO)  Java
-	ODBC and DB2 (PDO)
-	PostgreSQL (PDO)
-	SQLite (PDO)

## Connect to the database
Creating folder named "include" that contains the php file for connecting our application to the required database.
There is a folder named "includes" that has the file(s) for connecting to the database

We can use any meaningful name for this file, examples:
- db_connect.php
- db_link.php
- db_config.php
- pdo_connect.php


## Important Notes About PDO:
1- (To recap) In Object Oriented Programming (OOP), classes can have:
    - Properties (Are just variables inside a class)
    - Methods (Are just functions inside a class)
    - CONSTANTS (Are variables that CANNOT be changed, are written all in capital by convention)


2- Class constants are often used as arguments

In our database file, we used a built-in class named "PDO":
    > $pdo = new PDO($dsn,$user,$password); 

PDO (Native PHP Class) has many "static" constants. To access one of the predifined constants of the PDO, we can use this the OOP template: 
    > ClassName::CONSTANT_NAME

The PHP Class name is "PDO" so our code will be:
    > PDO::CONSTANT_NAME
    > the double colon :: is called or known as the "Scope Resolution Operator"
    > https://www.w3schools.com/php/php_oop_constants.asp
    
PDO class has many methods:
- Calling any of the PDO methods will return an object
- This returned object contains the result of a query or a prepared statement

---

# Week13: PDO - PART 2