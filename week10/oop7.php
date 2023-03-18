<?php
/* 
The keyword "final":
adding the keyword "final" before class Member
will make this class restricted from being extended (Cannot be inherited)
no other class can extend:

final class Member {
    ....
}

In OOP, we also have the keyword "abstract",
adding the keyword "abstract" before any class, for example:
abstract class Member {
    ...
}
> will make this class restricted from being instantiated (cannot create an object from it)
> abstract class can only be inherited
> must have at least one abstract method (a method that has declaration only without body)
> all abstracted functions must be defined in the child class 
abstract class Member {
    ...
}
*/
class Member {
    public $age; // can be accessed in the child class / main script / world
    /*
    Access Modifier "protected":
    Using protected, we can access these two properties "name" and "email"
    in the sub-classes using our normal syntax:
    $this->name;
    $this->email;

    In other words,
    we cannot access/use them anywhere outside their class "Member"
    we can ONLY access/use them within their class OR in the child/subclass 
    */
    protected $name;
    protected $email;
    
    /* 
    private => they can only be used/accessed inside their class "Member"
    - cannot be accessed by the main script (anywhere outside the class)
    - cannot be accessed by the sub-classes
    */
    private $province="On";
    private $city="Toronto";

    public function __construct($name="", $email="") {
        /* 
        Through the constructor,
        we can set the values for the "protected" properties: name and email
        as we cannot access them outside this class,
        only through its child class
        */
        $this->name = $name;
        $this->email = $email;
        echo 'The class "' . __CLASS__ . '" was initiated!<br>';
    }

    // Adding Getters and Setters:
    // 1. getters:
    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    // 2. setters:
    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    // This method will be overridden by all the subclasses
    public function displayInfo() {
        $msg = "<br> Member Name: ".$this->name;
        $msg .= "<br> Member Email: ".$this->email;
        // $msg = <br> Member Name: Alex Chow <br> Member Email:achow@email.ca
        echo $msg;
    }

    // define a method with the keyword "final"
    // a method that has "final" CANNOT be overridden by the child class
    final public function welcomeMsg() {
        // $name and $email are private properties (fields)
        echo "<br>Welcome ".$this->name." to our club! Your ID:".$this->memberID;
        echo "<br>We will send you our e-newsletter to ".$this->email;
    }
} // end main class

class BasicMember extends Member {
    private $memberID; // for the class BasicMember

    public function __construct($name="", $email="", $memberID) {
        /* 
            Any method in the parent class
            can be run/executed using this template:
            parent::functionName()
        */
        parent::__construct($name, $email);
        $this->memberID = $memberID;
        echo 'The class "' . __CLASS__ . '" was initiated!<br>';
    }

    // Error Message: Cannot override final method Member::welcomeMsg()
    /*  
        public function welcomeMsg() {
                
        } 
    */

    /* 
        OOP: A PIE 
        Polymorphism IN OOP:
        - Override (overriding)
        - Overload
    */
    // Polymorphism (Overriding): Override the function displayInfo():
    public function displayInfo() {
        /* $msg = "<br><br> Member Name: ".$this->name;
        $msg .= "<br> Member Email: ".$this->email; */
        parent::displayInfo();
        $msg = "<br> Employee ID: ".$this->memberID;
        $msg .="<br>Membership Type: Basic Member ";
        echo "$msg<br>";
    }
}

class StandardMember extends Member {
    private $compName; // for the class "StandardMember"
    function __construct($name="", $email="", $companyName) {
        parent::__construct($name,$email);
        $this->compName = $companyName;
    }

    // Polymorphism (Overriding): Override the function displayInfo(): 
    public function displayInfo() {
        parent::displayInfo();
        $msg = "<br> Company Name: ".$this->compName;
        $msg .="<br> Membership Type: Standard Member ";
        echo $msg;
    }
}

class PremiumMember extends Member {
    public function displayInfo() {
        parent::displayInfo();        
        echo "<br>Membership Type: Premium Member ";
    }
}

/* 
IMPORTANT NOTE ABOUT "Overloading":
***********************************
In PHP function overloading is done with the help of magic function __call().

Overloading in PHP provides means to dynamically create properties and methods. These dynamic entities are processed via magic methods one can establish in a class for various action types.

Link: https://www.php.net/manual/en/language.oop5.overloading.php#language.oop5.overloading

Link: https://www.geeksforgeeks.org/function-overloading-and-overriding-in-php/?ref=rp
*/


// starting our main script:
// *************************
$member1 = new BasicMember("Alex Chow","ac@email.ca","E1782");
// echo "<br>".$member1->name;
// Fatal error: Uncaught Error: Cannot access protected property BasicMember::$name
// $member1->name = "anything!";
// echo "<br>".$member1->name;
$member2 = new StandardMember('Sam Simpson','ss@nothing.ca',"XYZ Constructions");
$member3 = new PremiumMember("Martin Smith","msmith@advanedservices.ca");

// calling the getters from the parent class "Member":
echo "<br>Member1 Name: ".$member1->getName();
echo "<br>Member2 Name: ".$member2->getName();
echo "<br>Member3 Name: ".$member3->getName();

$member1->welcomeMsg();

echo "<hr>";
$member1->displayInfo();
$member2->displayInfo();
$member3->displayInfo();

// Accessing the public property "$age":
$member1->age = 48;
echo "<br>Member1 Age: ".$member1->age;

// Try to access these protected properties: name and email:
// Fatal error: Uncaught Error: Cannot access protected property BasicMember::$name in
/* 
echo "<hr><br>Name: ".$member1->name;
echo "<hr><br>Email: ".$member1->email;
 */


