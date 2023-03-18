<?php

Class Song {
    protected $title;
    protected $genre;
    protected $singer;

     // We override the constructor when we want to assign some value to the created object
    public function __construct() {
        // populate the values of the class (object) properties
        // Example:Reset or initialize the properties
    }

    // Error For the code below: Cannot redeclare Song::__construct()
    /* 
    public function __construct($songTitle) {
        // populate the values of the class (object) properties
    } 
    */
    // Link: https://www.php.net/manual/en/language.oop5.overloading.php#language.oop5.overloading.methods

    public function getTitle() {
        return $this->title;
    }
    
    public function getGenre() {
        return $this->genre;
    }

    public function getSinger() {
        return $this->singer;
    }

    public function setTitle($songTitle) {
        // Yes, you can add a validation before setting any value to a property
        // Let's try to validate the title of the song => must maximum 40 character
        if (strlen($songTitle)<=40) {
           $this->title=$songTitle;           
        }
    }
    
    public function setGenre($songGenre) {
        $this->genre=$songGenre;
    }

    public function setSinger($songSinger) {
        $this->singer=$songSinger;
    }
} // end class Song