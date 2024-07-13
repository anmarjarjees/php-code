<?php
// require "Song.php"; // no need!
require "IntroSong.php";

$mySong = new IntroSong();

$mySong->setTitle("Dancing Queen");
$mySong->setSinger("ABBA");

echo "<br>My Song Title: ".$mySong->getTitle(); // "Dancing Queen"
echo "<br>My Song Band: ".$mySong->getSinger(); // "ABBA"
echo "<br>My Song Intro Verse: ".IntroSong::$introVerse; 

echo "<hr>";

$mySong->showSongInfo();

/*
Polymorphism: 
- Overriding 
- Overloading
*/
