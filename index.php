<?php
    include("database.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="form-body">
        <h1>LOGIN</h1>
        <form action="check.php" method="post">
            <label for="username">Username:</label><br>
            <input type="text" name="username"><br>
            <label for="username">Password:</label><br>
            <input type="password" name="password"><br>
            <input type="submit" name="login" value="Log In">
        </form>
        <form action="register.php">
            <input type="submit" name="register" value="Register">
        </form>
    </div>
</body>
</html>