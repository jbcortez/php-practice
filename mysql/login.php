<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="col-xs-6">
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
    </div>
</body>
</html>
