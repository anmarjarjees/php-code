<?php
/*
Working with Inheritance:
Classes can inherit the properties and methods of another class using the "extends" keyword.
*/
class Member {
    // setting a private properties:
    private $name;
    private $email;
    
    private $province="On";
    private $city="Toronto";

    public function __construct($name="", $email="") {
        // Java this.name
        // Py self.name
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
    
    // just adding another custom (user-defined) method
    public function displayInfo() {
        $msg = "<br> Member Name: ".$this->name;
        $msg .= "<br> Member Email: ".$this->email;
        // $msg = <br> Member Name: Alex Chow <br> Member Email:achow@email.ca
        echo "$msg<br>";
    }
} // end main class

// $member1 = new Member("Sally Grayson","sgrayson@tryourcode.ca");
// var_dump($member1);

/* 
As we assumed before, we have 3 types of membership:
- Basic Membership => BasicMember class
- Standard Membership => StandardMember class
- Premium Membership => PremiumMember class

Creating a basic (derived/child/sub-class) named "BasicMember" from the base (parent) (superclass) class "Member"

Inheritance General and Common Terms:
-------------------------------------
Subclass extends Superclass
Derived class extends Base class
Child class extends Parent class
*/
class BasicMember extends Member {

    // Adding a new method that only belongs to BasicMember
    public function listBasicOptions() {
        $msg = "<br><br> List of all the available options for Basic Member:";
        // In JS we used the +, we have to use . in PHP :-)
        $msg .= "<br> All the restaurants";
        $msg .= "<br> The meeting room B";
        $msg .= "<br> The Exercise room";
        echo $msg;
    } 

    public function welcomeMsg() {
        /* 
        Accessing private properties from the parent class:
        - $this->name
        - $this->email
        ERROR: These are private properties/attributes:
        */
        // echo "<br>Welcome ".$this->name." to our club!";
        // echo "<br>We will send you our e-newsletter to ".$this->email; 

        /*
        Accessing private properties from the parent class by their getters:
        - getName()
        - getEmail()
        ERROR: Fatal error: Uncaught Error: Call to undefined function getName() / getEmail()
        */
        // echo "<br>Welcome ".getName()." to our club!";
        // echo "<br>We will send you our e-newsletter to ".getEmail(); 

        /* 
            parent:: => allows access to the inherited class
            Any method inside the parent class
            can be run/executed using this template:
            parent::functionName()
        */
        echo "<br>Welcome ".parent::getName()." to our club!";
        echo "<br>We will send you our e-newsletter to ".parent::getEmail(); 
    }
}

class StandardMember extends Member {
    // Adding a new method that only belongs to StandardMember
    public function listStandardOptions() {
        $msg = "<br><br> List of all the available options for Standard Member:";
        // In JS we used the +, we have to use . in PHP :-)
        $msg .= "<br> All the restaurants";
        $msg .= "<br> The meeting room A and B";
        $msg .= "<br> The Exercise room";
        $msg .= "<br> The Pool";
        echo $msg;
    } 
}

class PremiumMember extends Member {
    // Adding a new method that only belongs to PremiumMember
    public function listPremiumOptions() {
        $msg = "<br><br> List of all the available options for Premium Member:";
        // In JS we used the +, we have to use . in PHP :-)
        $msg .= "<br> All the restaurants";
        $msg .= "<br> The meeting room A and B and VIP room";
        $msg .= "<br> The Exercise room";
        $msg .= "<br> The Pool";
        $msg .= "<br> The Golf Club";
        echo $msg;
    } 
}
// Ending of all classes

// MAIN SCRIPT - CODE
$member1 = new BasicMember("Sally Grayson","sgrayson@tryourcode.ca");
$member2 = new StandardMember("Alex Chow","achow@futuredesign.ca");
$member3 = new PremiumMember("Martin Smith","msmith@advanedservices.ca");

// calling the getters from the parent class "Member":
echo "<br>Member1 Name: ".$member1->getName();
echo "<br>Member2 Name: ".$member2->getName();
echo "<br>Member3 Name: ".$member3->getName();

echo "<hr>";
$member1->displayInfo();
$member2->displayInfo();
$member3->displayInfo();

// listBasicOptions()
$member1->listBasicOptions(); // this method will echo the result
$member2->listStandardOptions(); // this method will echo the result
$member3->listPremiumOptions(); // this method will echo the result

$member1->welcomeMsg();
