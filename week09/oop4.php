<?php
// Creating our class:
class Member {
    // setting private properties:
    private $name;
    private $email;
    
    // Adding more properties:
    private $province="On";
    private $city="Toronto";
    private $memberShipType; // assuming we have: Basic, Standard, Premium

    public function __construct($name="", $email="") {
        $this->name = $name;
        $this->email = $email;
        echo 'The class "' . __CLASS__ . '" was initiated!<br>';
    }

    /* 
    Link: https://www.php.net/manual/en/language.oop5.overloading.php#language.oop5.overloading.members

    public __set(string $name, mixed $value): void
    public __get(string $name): mixed
    */


    // getters and setters => 10 functions (5 => get, 5 set)
    public function __get($propertyName) {
        // echo "<br>";
        // var_dump($propertyName);
		// Link: https://www.php.net/manual/en/function.property-exists.php
        // return $this->name; // only for the name property
        // property_exists(object|string $object_or_class, string $property): bool
        if (property_exists($this, $propertyName )) {
            return $this->$propertyName;
        } else {
            return "Invalid property: ".$propertyName ;
        }
    } // end __get() 

    public function __set($propertyName, $value) {
        if (property_exists($this,$propertyName)) {
            // same logic just by adding the assignment operator to assign a value to the existing property:
            $this->$propertyName = $value;
        } else {
            return "Invalid property: ".$propertyName ;
        }
    } // end __set()

} // end class Member

// instantiate our class:
$member1 = new Member('Sarah Grayson','sgrayson@globalnews.ca');

echo "<br>".$member1->__get('name'); // passing the argument "name" which is an existing property names
echo "<br>".$member1->__get('email');
echo "<br>".$member1->__get('province');
echo "<br>".$member1->__get('city');
echo "<br>".$member1->__get('age'); // We don't have such property name "age" => Invalid property name!
echo "<br>".$member1->__get('jobTitle'); // We don't have such property name "jobTitle" => Invalid property name!

echo "<hr>";
// let's try to use __set()
$member1->__set('name','Sarah Chow');
$member1->__set('email','schow@abccollege.com');

// echo "<br>var dump the object:<br>:";
// var_dump($member1);
echo "<br>".$member1->__get('name');





