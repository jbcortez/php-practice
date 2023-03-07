<?php 
    include "db.php";
    include "functions.php";

    if(isset($_POST['submit'])) {
        updateData();
    }
?>

<?php include "includes/header.php" ?>
<body>
    <div class="container">
        <div class="col-xs-6">
        <h2>Update</h2>
        <form action="login_update.php" method='POST'>
                <div class="form-group mb-2">
                    <label for="username" class="fw-bold">Username</label>
                    <input type="text" class="form-control mb-2 " name='username'>
                    <label for="password" class="fw-bold">Password</label>
                    <input type="password" class="form-control mb-2 " name='password'>
                </div>
                <div class="form-group">
                    <select name="id" id="" class="mb-2">
                        <?php
                            showAllData();
                        ?>
                    </select>
                </div>
                <input type="submit" name='submit' value='Update' class='btn btn-primary'>
            </form>
        </div>
        <?php include "includes/footer.php" ?>
