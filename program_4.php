
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Program 4</title>
</head>
<body>
    <form method="post">
        <label for="number">Enter a number: </label>
        <input type="number" name="number" id="number">
        <input type="submit" value="Submit">
    </form>
    <?php
        if (isset($_POST['number'])) {
            $number = $_POST['number'];
            for ($i = 1; $i <= 10; $i++) {
                echo $number . " X " . $i . " = " . $number * $i . "<br>";
            }
        }
    ?>
</body>
</html>