<!-- finding the largest number in a 2 dimentional array using php by taking the array input from the user with forms -->

<!-- take input like this: [1,2,3; 4,5,6] where ; is the end of the row and , is the end of the column -->

<!DOCTYPE html>
<html>

    <head>
        <title>Largest number in 2D Array</title>
    </head>

    <body>
        <form method="post">
            <label>Enter the array: </label>
            <input type="text" name="arr">
            <input type="submit" name="submit" value="Submit">
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $arr = $_POST['arr'];
            $arr = explode(";", $arr);
            $max = 0;
            for ($i = 0; $i < count($arr); $i++) {
                $arr[$i] = explode(",", $arr[$i]);
                for ($j = 0; $j < count($arr[$i]); $j++) {
                    if ($arr[$i][$j] > $max) {
                        $max = $arr[$i][$j];
                    }
                }
            }
            echo "The largest number is $max";
        }
        ?>
    </body>

</html>