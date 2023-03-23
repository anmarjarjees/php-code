<?php
/* 
Accessing any "static" member (Property or Method)
is not relative or related or connected to an object/instance of that class!
it's relative/related to the class itself
To access any static member:
- ClassName::property
- ClassName::method()

Access (Visibility) Modifiers:
- private
- public
- protected (later)
- default (In Java)
*/
class Member {
    // Static Methods & Properties
    // setting different properties:
    private $name;
    private $email;
    public $hobby;

    // Adding the keyword "static" for the following properties
    public static $minAge = 20;
    public static $location = "GTA";
    
    // we also need the password as programmers to register every member in our database:
    // $minPassLength = 8; // Error
    public static $minPassLength = 8;  

    // We can declare a constant inside a class using the "const" keyword.
    const CLUB='ABC Members Club';
    /*
        NOTES:
        - CONSTANT are global
        - We can access a constant from outside the class by using:
        The class name followed by the "Scope Resolution Operator" (::) 
        followed by the constant name

        :: double colon is used to access "class" related assets

        Read more: https://www.w3schools.com/php/php_oop_constants.asp
    */
    
    // in Java => Access Modifier - Static - return type - Method Name 
    public static function validatePassword($password) {
        // Uncaught Error: Using $this when not in object context
        if (strlen($password) >= self::$minPassLength )
            return true;
        else false;
    }

    // more examples:
    /*
    let's add another function and also make it "static"
    so no need to instantiate an object in order to access this function,
    we can just access it by identify its class in our main script
    */
    public static function getLocation() {
        /*
        This syntax which the one we used: $this->location
        will not work here because the property "location" is set to be static
        return $this->location;
        */

        // we can still use the same syntax that we use inside the main script to access any static property inside the class:
        // return Member::$location;  
        
        // But since we want to access this static property "location" within the class itself, we can use the keyword "self"
        // let's think like "self" means the class "Member" itself (or any class name)      
        return self::$location; 
    }
} // end class

$member1 = new Member();
/* 
In Java:
to access static method:
Member.validatePassword()

In PHP:
Member::$hobby
Member::$minPassLength 
Member::validatePassword()
*/
// The syntax: ClassName::staticPropertyName
// The syntax: ClassName::staticMethodName()
// The syntax: ClassName::staticCONSTANT

echo Member::$minPassLength; // 8
// Review: Below are different techniques to out our text:

// First Way: Concatenating:
echo "<br>1. Your password must be at least ".Member::$minPassLength." characters!<br>";

// Second Way: Using simple variable with ":
$pl= Member::$minPassLength;
echo "<br>2. Your password must be at least $pl characters!<br>";

// Third Way: Using printf (exactly like Python): 
printf ("<br>3. Your password must be at least %s characters!<br>", Member::$minPassLength);

// another example of using "printf":
printf ("<br>To register in our website, you have to be at least %s years old. Your password must be at least %s characters!<br>", Member::$minAge, Member::$minPassLength);

// Fourth Way: Complex Syntax (like in JavaScript => ` and ${ })
// Checking the use of { } with string "complex syntax"
// The complex syntax can be recognized by the curly braces surrounding the expression.
// You can read more: https://www.php.net/manual/en/language.types.string.php#language.types.string.parsing
// Example (PHP.NET):

$juice = "apple";
echo "<br>He drank some juice made of ${juice}.<br>";

// Now applying the same logic (syntax/template) to our code:
$age = Member::$minAge;
echo "<br>To register in our website, you have to be at least ${age} years old!<br>";

// Finally: Accessing the class constant "CLUB"
/*
To recap:
We can access a constant from outside the class by using:
The class name followed by the "Scope Resolution Operator" (::) followed by the constant name
*/
echo "<br>Our club name is: ".Member::CLUB;

echo "<hr>";
echo Member::validatePassword("sdfasdlfkjkdsfj");



