<?php 
    date_default_timezone_set('Asia/Kolkata');

    if(isset($_COOKIE['fstvisit'])) {
        $fstvisit = $_COOKIE['fstvisit'];
        echo "Last visited: " . $fstvisit . "<br>";
    } else {
        $fstvisit = date('Y-m-d H:i:s');
        setcookie('fstvisit', $fstvisit, time() + 60*60*24*30);
        echo "This is your first visit. <br>";
    }    
?>