<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 12</title>
</head>
<body>
    <?php 
        $url = 'https://www.opportunitiesforyouth.org/wp-content/uploads/2021/04/Atomic_Habits_by_James_Clear-1.pdf';
        $file_name = basename($url);
        if (file_put_contents($file_name, file_get_contents($url))) {
            echo "$file_name downloaded successfully.";
        } else {
            echo "Download failed.";
        }
    ?>
</body>
</html>