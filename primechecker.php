<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prime Checker</title>
</head>
<body>
    <form action="" method="post">
        <label for="number">Enter the number:</label>
        <input type="number" name="number" id="number">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    if (isset($_POST['submit'])) {
        $number = $_POST['number'];
        
        function isPrime($n) {
            for ($i = 2; $i <= $n / 2; $i++) {
                if ($n % $i == 0) {
                    return false;
                }
            }
            return true;
        }

        if (isPrime($number)) {
            echo "$number is a prime number";
        } else {
            echo "$number is not a prime number";
        }
    }
    ?>
</body>
</html>
