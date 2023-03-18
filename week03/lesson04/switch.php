<?php
$grade="C";
    // using if for review:
if ( $grade == "A" ) {
    echo "Well Done";
  } else if ( $grade == "B" ) {
    echo "Above Average";
  } else if ( $grade == "C" ) {
    echo "Average";
  } else if ( $grade == "D" ) {
    echo "Below Average";
  } else if ( $grade == "F" ) {
    echo "Try Again";
  } else {
    echo "Invalid Grade";
  }
  echo "<hr>";

echo "<hr>";

  switch ($grade) {
    case "A": echo "<br>Well Done";
    break;
    case "B": echo "<br>Above Average";
    break;
    case "C": echo "<br>Average";
    break;
    case "D": echo "<br>Below Average";
    break;
    case "F": echo "<br>Try Again";
    break;
    default:  echo "<br>Invalid Grade";
  }

  echo "<hr>";
  $fruit = "orange";
  switch ( $fruit ) {
      // in case if the value of $fruit is "orange"then run the code of this case:
      case 'orange': // with text values => we use either " or '
        echo 'So your favourite fruit is orange';
        break; // stop the code of going any further and jumping the next case!
  
      case 'apple':
        echo 'So your favourite fruit is apple';
        break;
  
      case 'banana':
        echo 'So your favourite fruit is banana';
        break;
  
      default:
        echo 'So your favourite fruit is ' . $fruit;
    } // end of switch 
?>
