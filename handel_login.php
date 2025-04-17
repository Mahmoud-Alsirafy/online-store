<?php
session_start();
require "connect.php";

extract($_POST);


$email = $_POST["email"];

if (isset($_POST["login"])) {
    
    $qu = "SELECT * FROM `user` WHERE email = '$email' LIMIT 1";
    
    $login = mysqli_query($connect, $qu);
    
    if (mysqli_num_rows($login) == 1) {
        $user = mysqli_fetch_assoc($login);
        $pass_user = $user["password"];
        $role = $user["role"];
        $user_id = $user["id"];

        $_SESSION["user_id"]=$user_id;
            $_SESSION["login"]="login";

        if (password_verify($password, $pass_user)) {
            if ($role == "user") {
                header("location:index.php");
            } else {
                header("location:admin/index.php");
            }
        }
    } else {
        header("location:login.php");
        $_SESSION["user"]="User Or Password Is Un Correct";
    }

  
}



