<?php
class Member {
       // setting a private property:
       private $name;
       private $email; 
/* 
    To recap, We have 3 common/major access modifiers:
        > public — public properties or methods can be accessed anywhere, from within the class and outside.
        This is the default visibility for all class members in PHP.

        > protected — protected properties or methods can only be accessed from within the class itself or in child or inherited classes i.e. classes that extend that class.

        > private — private properties or methods is accessible only from within the class that defines it. 
        Even child or inherited classes cannot access private properties or methods.
*/

    public function __construct($name="", $email="") {
        // $this => Refers to the current object
        // we can use the same name for both: the property name and its value varaible:
        // LHS: (class property) Member.name by using the keyword "$this" 
        // RHS: (function parameter) $name
        $this->name = $name;
        $this->email = $email;
        echo 'The class "' . __CLASS__ . '" was initiated!<br>';
    }

    // getters and setters
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = name;
    } 


} // end class

$member1 = new Member('Martin Smith','msmith@cbc.ca');

echo "<br>".$member1->getName();
// echo "<br>".$member1->getEmail();


