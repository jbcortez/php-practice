<?php include 'db.php'?>
<?php include 'functions.php'?>

<?php include "includes/header.php" ?>

<body>
    <div class="container">
        <div class="col-xs-6 mt-5">
           <?php 
            readRows();
           ?>
        </div>
        
<?php include "includes/footer.php" ?>
