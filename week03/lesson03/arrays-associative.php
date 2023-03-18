<?php
// associative array is built on Key-Value pairs of elements
// Dictionary: key : value

/* 
   array(
            key1  => value1,
            key2 => value2,
            key3 => value3,
            ...
        )
*/

	// Creating an associative array using way#1: array()
    /*
        A list of courses, each with its classroom number:
        APA Program going to class# 7
        CP Program going to class# 8
        PM Program going to class# 13
        SE Program going to class# 9
        WD Program going to class# 11
        ------------------------------
        
        key = Program Name
        value = classroom number
        */
    $classroomNumbers = array(
        "APA" => 7, // key => value pair
        "CP" => 8,
        "PM" => 13,
        "SE" => 9, 
        "FSSD" => 11
    );

    // Creating an associative array using way#2: [ ]
    // a list of modules
    $modules = [
        "module1" => "HTML and CSS",
        "module2" => "JavaScript",
        "module3" => "PHP"
    ];

    // a list of descriptions for these languages:
        $descriptions = [
            'HTML' => 'Display the page content',
            'CSS' => 'Style the page content',
            'JavaScript' => 'Interact with the user input',
            'PHP' => 'Create Dynamic Pages'
        ];

        echo '<hr>';
        print_r( $descriptions );
        echo "<br>";
        var_dump( $descriptions );
        echo '<hr>';

        $cars = array(
            'Honda' => 'Made in Japan',
            'Kia' => 'Made in Korea',
            'Dodge' => 'Made in USA'
          );
          print_r( $cars );

          $modules['module4']="Python";
          echo "<br>";
          var_dump( $modules );

         $cars[ 'BMW' ] = 'Made in Germany';
        echo '<hr>';
        print_r( $cars );

        // again using the . for concatenation like + in JS,Java,Python
        echo "<br>Honda is a good car! ".$cars['Honda']." It's made in Japan."; // Honda is a good car! Made in Japan
        echo "<br> Honda is a good car! {$cars['Honda']}"; 

  

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Internal CSS -->
	<style>
        table {
            border: 2px solid darkred;
        }

        th,
        td {
            border: 1px solid blue;
            padding: 5px;
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>My Modules</th>
        </tr>
        <tr>
            <td>
                <?php echo $modules["module1"] ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $modules["module2"] ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php echo $modules["module3"] ?>
            </td>
        </tr>
    </table>
</body>
</html>