<!-- Write a PHP program to illustrate Indexed Arrays -->
<html>

    <head>
        <title>PHP Indexed Arrays</title>
    </head>

    <body>
        <?php
        $cars = array("Range Rover", "SUV", 2022);
        echo "<h2>Printing the type and length of the array: </h2>";
        echo var_dump($cars), "<br>";

        echo "<h2>Printing the array content: </h2>";
        print_r($cars);

        $cars2 = array("Bentley", "Continental GT", 2019);
        echo "<h2>Printing the array using loops: </h2>";

        for ($i = 0; $i < count($cars2); $i++) {
            echo $cars2[$i], "<br>";
        }
        ?>
    </body>

</html>