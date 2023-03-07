<?php 
    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');

    if(!$connection) {
        die('we are not connected');
    } 
?>