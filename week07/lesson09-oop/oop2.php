<?php

class Member {
    // This class has two public properties:
    public $name;
    public $email;

    /* 
    Adding Class Constructor:
    A special method of the class
    */
    public function __construct($memberName, $memberEmail) {
    // Java :-)
    // name = memberName
        $this->name = $memberName;
        $this->email = $memberEmail;

     /*
        PHP Magic Constants: https://www.tutorialrepublic.com/php-tutorial/php-magic-constants.php

        The __CLASS__ constant returns the name of the current class.
        is a magic constant which contains the name of the class in which it is occur. 
        It is empty, if it occurs outside of the class. (check the line at the end of this file)
     */
        echo '<br>The class "' . __CLASS__ . '" was instantiated!<br>'; // The class "Member" was initiated!
    }

    public function welcomeMember() {
        // Adding the current member name using the class/object property:
        echo '<br>Welcome '.$this->name.' to our club!';
    }

    /*
    the magic method __destruct() (known as destructor) is executed automatically when the object is destroyed. 
    A destructor function cleans up any resources allocated to an object once the object is destroyed.
    */
    // Destructor:
    public function __destruct(){
        echo '<br>The class "' . __CLASS__ . '" was destroyed.<br>';
    }
} // end class Member

$member2 = new Member('Alex Chow', 'achow@cbc.ca');


