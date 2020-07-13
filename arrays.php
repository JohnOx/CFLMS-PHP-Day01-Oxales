<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="hw.css">
    <title>arrays</title>
</head>
<body>
    <?php
    // Exercise 5 foreach
        /* $numbers = array(1,23,7,89,5,41,96);
        
        foreach ($numbers as $numero)
        {
            echo "<p id='test'>value is $numero <br /></p>";
        } */
        
    // Exercise 6 associative
            /* $characters = array (
                "anime" => "Son Goku",
                "nintendo" => "Super Mario",
                "cartoon" => "Mickey Mouse"
            );
            foreach ($characters as $c )
            {
                echo "<ul><li>$c</li></ul>";
            } */

    // Multidimensional Array

    $marks = array(
        "Son Goku" => array
        (
        "physics" => 35,
        "maths" => 30,
        "chemistry"  => 39
        ),
        "Super Mario" =>  array
        (
        "physics" => 30,
        "maths" => 32,
        "chemistry"  => 29
        ),
        "Mickey MMouse" =>  array
        (
        "physics" => 31 ,
        "maths" => 22,
        "chemistry" => 39
        )
        );

        for ($i=0; $i<sizeof($marks); $i++) {
            
            foreach ($marks as $m) {
                echo "Marks for Son Goku in physics : ";
                echo $marks[ 'Son Goku']['physics'] . "<br />" ;
            };
            
        }
    ?>
    
</body>
</html>

