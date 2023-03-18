<?php
// calling our class file "Song.php"
require "Song.php";

// Fatal error: Uncaught Error: Class "Song" not found
$song1 = new Song();

$song1->setTitle("Tragedy");
$song1->setSinger("BEE GEES");
$song1->setGenre('Pop');


// Output the song information:
    echo "<br>Song Info:";
    echo "<br>Title: ".$song1->getTitle();
    echo "<br>Genre: ".$song1->getGenre();
    echo "<br>Singer/Band: ".$song1->getSinger();

/*
In the line below, we are adding a new property named "rank" and setting it with a new value to our object "song1"!
Our class "Song" doesn't have a property named "rank"!
But in PHP is doable :-)
So any new property we add to our object (doesn't exist in our class),
PHP will automatically add this property and give it the access modifier (keyword) of "public"
which allow us to write to it.

Although it's valid in PHP but it's NOT a good coding practice!
*/
    $song1->rank=8;