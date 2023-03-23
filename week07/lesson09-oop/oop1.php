<?php
    /*
    Any Class in any OOP can have two members:
    - class member: fields / attributes / properties
    - class member: methods / behaviours / actions <==> functions inside a class

    So any class can have properties and methods:
    - properties: are attributes in the from of variables (like any normal PHP varaible)
    variables inside a class are called "properties"
    
    Examples:
    member's name => $memberName
    member's age => $memberAge, 
    data of birth, address, etc.

    - methods: are just functions inside a class

    PHP Access Modifiers (Visibility):
    - public
    - private
    - protected (later)
    - Only in Java => default (if nothing is set) 
    */
class Member { 
    // Class Properties (attributes):
    public $name; /* We set the $name to be public, however it's public by default also! */
    public $city = "Toronto"; /* We are declaring a property and setting its value to "Toronto" */
    public $email; /* We haven't specify any type of "Access Modifiers", so by default it will be set to be "public" */

    // Let's try using "private":
    private $age=65; // give it a default/initial value of 65
    private $province="Ontario"; // give it a default/initial value of "Ontario"

    // Let's try using "protected":
    protected $memberShipType = "Basic";

    // defining a method (same design as function)
    // members are public by default
    function welcomeMember() {
        // like any function: printing a result or returning a value
        return 'Welcome to our club!';
    }

    // creating another method to output any text message:
    public function showClubTime() {
        echo "<br>Club Time:<br> Monday to Friday: from 9:00 AM to 9:00 PM";
    }

    // creating another method to return the value of the city property:
    /* 
    Using the keyword $this
    $this => refers to the current instance/object
    $this => is used to access the instance variables (fields) inside the class
    $this => can NOT be used to access the class variables
    */
    function getCity() {
        return $this->city;
    }

} // end class 

// Below is our main code (script):

// Checks if the class has been defined => class_exists()
if (class_exists('Person')) {
    echo "The class has been defined<br>";
} else {
    echo "The class has not been defined<br>";
}
echo "<hr>";


// using "new" operator to construct an object
$member1 = new Member();

// for testing:
var_dump($member1);
echo "<hr>";

echo $member1->welcomeMember();
$member1->showClubTime();

echo "<hr>";
echo $member1->getCity(); // Toronto

