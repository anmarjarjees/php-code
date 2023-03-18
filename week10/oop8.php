<?php
// Overloading:
/* 
The other type of polymorphism beside "Method Overriding" is "Method Overloading"

Method Overloading:
- Defining multiple methods with the same name inside the same class
- These methods have to be different in:
    - number of parameters
    OR
    - data type of parameters
    OR
    - both in number and type
*/

/*
Classes can inherit the properties and methods of another class using the "extends" keyword.
*/
class Member {
    // setting a private properties:
    private $name;
    private $email;
    private $hobby;
    
    private $province="On";
    private $city="Toronto";

    // NOTE: Method overloading cannot be implemented using the traditional ways of Java or C#!
    /* 
    public function __construct($name) {
        
    } 

    public function __construct($name, $email, $hobby) {
        
    } 

    public function __construct() {
        
    } 
    */
    // Error For the code below: Cannot redeclare Member::__construct()

    
    /* 
    For simplicity, it's much easier and practical to use the idea of default values 
    to create multiple constructors than using method overloading! :-)
    */
    public function __construct($name="", $email="", $hobby="") {
        $this->name = $name;
        $this->email = $email;
        $this->hobby = $hobby;
        echo 'The class "' . __CLASS__ . '" was initiated!<br>';
    } 

    /*    
    Method Overloading can be implemented in PHP using a magic function "__call()":
    __call() is triggered when invoking inaccessible methods in an object context
    __callStatic() is triggered when invoking inaccessible methods in a static context

    this magic function(s) needs two parameters:
    - function name
    - number of arguments => Array Data Type

    the syntax:
    function __call($name, $arguments) {
        // overload the function(s)
    }

    1. Check the function name
    2. Count the number of arguments

    Link: https://www.php.net/manual/en/language.oop5.overloading.php#language.oop5.overloading.methods
    */

    // put it in action :-)
    function __call($name, $args) {
        // test:
        // echo"<hr><br>function(method) Name: $name";
        // echo"<br>function(method) argument value: $args";
        // Error: Warning: Array to string conversion 

        // test:
        // echo "<br>function(method) argument value: <br>";
        // print_r($args);

        if ($name=="showInfo") {
            // Adding switch statement:
                $argsLen = count($args);
                switch ($argsLen) {
                    case 1:
                        echo "<br>Full Name: ".$this->name;
                        break;
                    case 2: 
                        echo "<br>Full Name: ".$this->name;
                        echo "<br>Email: ".$this->email;
                        break;
                    case 3: 
                        echo "<br>Full Name: ".$this->name;
                        echo "<br>Email: ".$this->email;
                        echo "<br>Hobby: ".$this->hobby;
                        break;
                    default:
                        echo "";
                } 
        } else if ($name=="getAverage")  {
            $argsLen = count($args);
            // $args an array that contains the passing arguments!
            // we need to define and initialize $result to be globally available outside switch:
            $result=0; 
            switch ($argsLen) {
                case 2:
                    $result = ($args[0]+$args[1])/2;
                    break;
                case 3:
                    $result = ($args[0]+$args[1]+$args[2])/3;
                    break;
                case 4:
                    $result= ($args[0]+$args[1]+$args[2]+$args[3])/4;
                    break;
                default:
                    echo "Error: Invalid number of parameters: 2, 3, or 4 is allowed";   
            } // end switch
            return $result;
            // write the code for calculate average function
        } 
        // you can add if block for another function and so on...
    } // end __call

    // Adding Getters and Setters:
    // 1. getters:
    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getHobby() {
        return $this->hobby;
    }

    // 2. setters:
    public function setName($name) {
        $this->name = $name;
    }

    public function setEmail($email) {
        $this->email = $email;
    }
    
    public function setHobby($hobby) {
        $this->hobby = $hobby;
    }

    // overloading method for finding the average of two, three, or four numbers
    /*       
        public function getAverage($x,$y) {
            return ($x+$y)/2;
        }

        public function getAverage($x,$y,$z) {
            return ($x+$y+$z)/3;
        }

        public function getAverage($a,$b,$c,$d) {
            return ($a+$b+$c+$d)/4;
        } 
    */

    // just adding another custom (user-defined) method
    public function displayInfo() {
        $msg = "<br> Member Name: ".$this->name;
        $msg .= "<br> Member Email: ".$this->email;
        echo "$msg<br>";
    }
    
} // end main class

$member1 = new Member(); // no arguments to pass
$member2 = new Member("Alex Chow");
$member3 = new Member("Martin Smith", "msmith@lovephp.ca");
$member4 = new Member("Sam Simpson", "samsim@lovephp.ca","music");

echo "<hr>";

echo "<br>member1: ".$member1->getName();
echo "<br>member2: ".$member2->getName();
echo "<br>member3: ".$member3->getName()." - ".$member3->getEmail();
echo "<br>member4: ".$member4->getName()." - ".$member4->getEmail()." - ".$member4->getHobby();

echo "<hr><hr><hr>";
echo"<br>All Members:<br>";
$member1->showInfo(1);
echo "<hr>";
$member2->showInfo(1,2);
echo "<hr>";
$member3->showInfo(1,2);
echo "<hr>";
$member4->showInfo(1,2,3);

echo "<hr>";
echo "<br>".$member1->getAverage(80,87);
echo "<br>".$member1->getAverage(80,87,90);
echo "<br>".$member1->getAverage(80,87,90,85);


// test => call another method: