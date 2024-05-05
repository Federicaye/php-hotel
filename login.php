<?php 
include __DIR__ . "/Controller/auth.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH' crossorigin='anonymous'>
</head>
<body>
    <?php  if (!empty($_GET['error']))
    { echo "<div class='alert alert-danger'> Email o password errati </div>"; }; ?>
<div class="d-flex justify-content-center align-items-center">
        <form id="loginform" action="login.php" method="POST">
    
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating mb-4">
                <input type="text" class="form-control" id="email" placeholder="name@example.com" name="email">
                <label for="email">Email address</label>
            </div>
            <div class="form-floating mb-4">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                <label for="password">Password</label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>

        </form>
        </div>
</body>
</html>