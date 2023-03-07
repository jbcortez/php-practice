<?php include 'db.php'; ?>
<?php include 'functions.php'; ?>

<?php
if(isset($_POST['submit'])) {
    createRows();
}

?>

<?php include "includes/header.php" ?>
<body>
    <div class="container">
        <div class="col-xs-6">
            <h2>Create</h2>
            <form action="login_create.php" method='POST'>
                <div class="form-group mb-2">
                    <label for="username" class="fw-bold">Username</label>
                    <input type="text" class="form-control mb-2 " name='username'>
                    <label for="password" class="fw-bold">Password</label>
                    <input type="password" class="form-control mb-2 " name='password'>
                </div>
                <input type="submit" name='submit' value='Submit' class='btn btn-primary'>
            </form>
        </div>

<?php include "includes/footer.php" ?>
