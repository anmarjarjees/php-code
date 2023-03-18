<?php

/* 
class
class members
constructor

Access Modifiers:
    - public => the default => if nothing is specified
    - private
    - protected
    
    Java - default (rare) => if nothing is specified
*/

class Client {
    // fields, attributes, properties:
    // Class Properties (attributes):
    public $name; /* We set the $name to be public, however it's public by default also! */
    public $city = "Toronto"; /* We are declaring a property and setting its value to "Toronto" */
    public $email; /* We haven't specify any type of "Access Modifiers", so by default it will be set to be "public" */

    // Let's try using "private":
    private $age=65; // give it a default/initial value of 65
    private $province="Ontario"; // give it a default/initial value of "Ontario"
  
    // Let's try using "protected":
    protected $memberShipType = "Basic";

    // action, behaviours => methods (a function inside a class)

    // defining a method (same design as function)
    // class members are public by default
    function welcomeMember() {
        // like any function: printing a result or returning a value
        return 'Welcome to our club!';
    }

    // creating another method to output any text message:
    public function showClubTime() {
        echo "<br>Club Time:<br> Monday to Friday: from 9:00 AM to 9:00 PM";
    }

    // creating another method to return the value of the city property:
    function showCity() {
        return $this->city;
    }
}

$client1 = new Client();

// for testing:
    var_dump($client1);
    echo "<hr>";

/* 
In any OOP:

objectName->property
objectName->method()
*/

echo $client1->welcomeMember();
$client1->showClubTime();

// end of first example:

class Member {
    // This class has two public properties:
    public $name;
    public $email;
    // Parameters
    public function __construct($memberName, $memberEmail) {
        $this->name = $memberName;
        $this->email = $memberEmail;
    }

    public function welcomeMember() {
        // Adding the current member name using the class/object property:
        echo '<br>Welcome '.$this->name.' to our club!';
    }
}

// Arguments
$member1 = new Member('Alex Chow','alexchow@idontknow.ca');
// end of second example:


class User {
    // setting a private property:
    private $name;
    private $email; 

    public function __construct($name="", $email="") {
        // $this => Refers to the current object
        // we can use the same name for both: the property name and its value varaible:
        // LHS: (class property) Member.name by using the keyword "$this" 
        // RHS: (function parameter) $name
        $this->name = $name;
        $this->email = $email;
        echo 'The class "' . __CLASS__ . '" was initiated!<br>';
    }  

    public function welcomeUser() {
        // Adding the current member name using the class/object property:
        echo '<br>Welcome '.$this->name.' to our club!';
    }

    // Getters and Setters:
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }
}

$user1 = new User('Martin Smith','msmith@cbc.ca');
$user1->welcomeUser();
// echo "<br>Name: ".;
// var_dump($user1->name); // Fatal error: Uncaught Error: Cannot access private property User::$name 
// echo "<br>User1 Name: ".$user1->name; // Fatal error: Uncaught Error: Cannot access private property
/* 
$user1->name="Max Maxons";
Cannot access private property User::$name
*/
echo "<hr>";
$user1->setName('Sam Simpson');
echo "<br>Name: ".$user1->getName();