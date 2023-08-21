<!-- Write a PHP program to illustrate Associative Arrays -->
<html>

    <head>
        <title>PHP Associative Arrays</title>
    </head>

    <body>
        <?php
        $cars = array("Range Rover" => 30.2, "Bentley" => 18.9, "Hyundai" => 45.6);
        echo var_dump($cars), "<br>";

        echo "<h2>Printing the array using loops: </h2>";
        foreach ($cars as $key => $value) {
            echo "My $key has ", $value, " mileage.<br>";
        }
        ?>
    </body>
</html>
