<?php

require "Song.php";

class IntroSong extends Song {
    public static $introVerse="Welcome Theme"; // Setting a default value "Welcome Theme"
    
    /* 
    This function works if "introVerse" was NOT static:
    public function getIntroVerse() {
        return $this->introVerse;
    }
 */
    public function showSongInfo() {
        $msg = "<br>Title: ".$this->title;
        $msg .= "<br>Artist: ".$this->singer;
        /* 
        Error: 
        Accessing static property IntroSong::$introVerse as non static
        > $this->introVerse
        */
        // $msg .= "<br>Introduction Verse: ".$this->introVerse; // ERROR
        $msg .= "<br>Introduction Verse: ".self::$introVerse; // CORRECT
        echo "<br>$msg<br>";
    }

   /* 
   Error:
   Abstract function MainSong::showStoreInfo() cannot contain body
   */
    /*    
    abstract public function showStoreInfo() {
        echo "<p>HMV Main Store</p>";
    } 
    */

    /* 
    Error: 
    Class IntroSong contains 1 abstract method 
    and must therefore be declared abstract or implement the remaining methods 
    */
    // abstract public function testing();
}