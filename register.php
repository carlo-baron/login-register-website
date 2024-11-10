<?php
    include("database.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <div class="form-body">
        <h1>REGISTER</h1>
        <form action="register.php" method="post">
            <label for="username">Username:</label><br>
            <input type="text" name="username" required><br>
            <label for="username">Password:</label><br>
            <input type="password" name="password" required><br>
            <input type="submit" name="register" value="Register">
        </form>
        <form action="index.php">
            <input type="submit" name="login" value="Log In">
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST["register"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
        

        if($username == null || $password == null){
            echo "<script>alert('Enter Username and Password')'";
        }else{
            $check_username = "SELECT * FROM datas WHERE username = '$username'";
            $result = mysqli_query($connection, $check_username);

            if(mysqli_num_rows($result) > 0){
                echo "<script>alert('Already Registerd')</script>";
            }else{
                $sql = "INSERT INTO datas (username, password)
                VALUES ('$username', '$hashed_password')";
                mysqli_query($connection,$sql);

                echo "<script>alert('Successfully Registered')</script>";
            }
        }
    }

    mysqli_close($connection);
?>