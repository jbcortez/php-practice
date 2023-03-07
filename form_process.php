<?php
    
        if(isset($_POST['submit'])){
            $username = $_POST['name'];
            $password = $_POST['password'];

            if(strlen($username) < 5) {
                echo "<span class='error'>Username has to be more than 5 characters</span>";
            }
        }

    ?>