<?php

require "Song.php";

class MainSong extends Song {
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
        $msg .= "<br>Introduction Verse: ".$this->introVerse;
        echo "<br>$msg<br>";
    }
}