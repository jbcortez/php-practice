<?php
include "db.php";

function showAllData() {
    global $connection;

    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('Query failed');
    }

    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value=$id>$id</option>";
    }
}

function updateData() {
    global $connection;

        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];

        $query = "UPDATE users SET ";
        $query .= "username = '$username', ";
        $query .= "password = '$password' ";
        $query .= "WHERE id = $id";

        $result = mysqli_query($connection, $query);

        if(!$result) {
            die("Query failed");
        }
}
    
function deleteRows() {
    global $connection;

    $id = $_POST['id'];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die("Query failed");
    }
}

function createRows() {
    global $connection;
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

    $hashFormat = "$2y$10$";
    $salt = "sdfiebu983kd920do48edd";
    $hashAndSalt = $hashFormat . $salt;
    $password = crypt($password, $hashAndSalt);

    $query = "INSERT INTO users(username, password)";
    $query .= "VALUES ('$username', '$password');";

    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('Query failed');
    }
}

function readRows() {
    global $connection;

    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);

    if(!$result) {
        die('Query failed');
    }

    while($row = mysqli_fetch_row($result)) {
        ?>

        <pre class='bg-light rounded-1 p-4'>
            <?php
                print_r($row);
            ?>
        </pre>
        <?php
    }
}
?>