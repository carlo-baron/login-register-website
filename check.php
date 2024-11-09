<?php
    include("database.php");

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == null || $password == null){
            header('Location: index.php');
        }else{
            $sql = "SELECT * FROM datas WHERE username = '$username'";
            $result = mysqli_query($connection, $sql);

            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                $verify_password = password_verify($password, $row['password']);

                if($verify_password){
                    echo "Successfully Logged In";
                }else{
                    echo "Incorrect Password";
                }
            }else{
                echo "Incorrect Username";
            }
        }
    }
    mysqli_close($connection);
?>