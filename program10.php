<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Program 10</title>
    </head>

    <body>
        <?php
        $newarray = array();
        for ($i = 0; $i < 3; $i++) {
            $newarray[$i] = array();

            for ($j = 0; $j < 3; $j++) {
                $newarray[$i][$j] = rand(10, 99);
            }
        }
        for ($i = 0; $i < count($newarray); $i++) {
            for ($j = 0; $j < count($newarray[$i]); $j++) {
                echo $newarray[$i][$j] . "  ";
            }
            echo "<br><br>";
        }
        ?>
    </body>

</html>