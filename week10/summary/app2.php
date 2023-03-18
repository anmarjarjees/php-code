<?php
// require "Song.php"; // no need!
require "MainSong.php";

$mySong = new MainSong();

$mySong->setTitle("Dancing Queen");
$mySong->setSinger("ABBA");

echo "<br>My Song Title: ".$mySong->getTitle(); // "Dancing Queen"
echo "<br>My Song Band: ".$mySong->getSinger(); // "ABBA"
echo "<br>My Song Intro Verse: ".MainSong::$introVerse; 

echo "<hr>";


/*
Polymorphism: 
- Overriding 
- Overloading
*/
