<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Greatest number</title>
    </head>

    <body>
        <h2>Largest number among three numbers</h2>
        <form action="" method="post">
            <input type="number" name="num1" placeholder="Enter first number">
            <input type="number" name="num2" placeholder="Enter second number">
            <input type="number" name="num3" placeholder="Enter third number">
            <input type="submit" name="submit" value="submit">
        </form>
        <?php
        if (isset($_POST['submit'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];
            function largest($num1, $num2, $num3)
            {
                if ($num1 == $num2 || $num1 == $num3 || $num2 == $num3) {
                    echo "Two or more numbers are equal <br>";
                }
                if ($num1 > $num2 && $num1 > $num3) {
                    echo "The largest number is $num1";
                } elseif ($num2 > $num3) {
                    echo "The largest number is $num2";
                } else {
                    echo "The largest number is $num3";
                }
            }
            largest($num1, $num2, $num3);
        }
        ?>
    </body>

</html>