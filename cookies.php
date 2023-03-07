<?php

$name = 'ACookie';
$value = 'Justin';
$expiration = time() + (60*60*24*7*52*2);

setcookie($name, $value, $expiration);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $name = $_COOKIE['ACookie'];
    if($name) {
        echo "<h1>$name</h1>";
    }

    ?>
</body>
</html>