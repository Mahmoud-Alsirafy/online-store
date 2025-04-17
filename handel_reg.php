<?php
session_start();
require "connect.php";
extract($_POST);

if (isset($_POST["register"])) {
    $errors = [];

    if (empty($first_name)) {
        $errors["first_name"] = "First name is req";
    } elseif (is_numeric($first_name)) {
        $errors["first_name"] = "First name must be string";
    } elseif (strlen($first_name) < 2) {
        $errors["first_name"] = "First name must be more than 2 cart";
    }
    if (empty($last_name)) {
        $errors["last_name"] = "Last name is req";
    } elseif (is_numeric($last_name)) {
        $errors["last_name"] = "Last name must be string";
    } elseif (strlen($last_name) < 2) {
        $errors["last_name"] = "Last name must be more than 2 cart";
    }
    if (empty($email)) {
        $errors["email"] = "Email is req";
    } elseif (is_numeric($email)) {
        $errors["email"] = "Email must be string";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Email must be Example@example";
    }
    if (empty($phone)) {
        $errors["phone"] = "Phone is req";
    } elseif (!is_numeric($phone)) {
        $errors["phone"] = "Phone must be num";
    } elseif (strlen($phone) < 10) {
        $errors["phone"] = "Phone must be more than 10 cart";
    }

    if (empty($password)) {
        $errors["password"] = "Password is req";
    } elseif (!is_numeric($password)) {
        $errors["password"] = "Password must be num";
    } elseif (strlen($password) < 5) {
        $errors["password"] = "Password must be more than 5 cart";
    }
    if (empty($confirm_password)) {
        $errors["confirm_password"] = "Confirm Password is req";
    } elseif (!is_numeric($confirm_password)) {
        $errors["confirm_password"] = "Confirm Password must be num";
    } elseif (strlen($confirm_password) < 5) {
        $errors["confirm_password"] = "Confirm Password must be more than 5 cart";
    } elseif ($confirm_password !== $password) {
        $errors["confirm_password"] = "Confirm Password not Like password";
    }
    $role = "user";
    $genders = ["male", "female"];
    if (!in_array($gender, $genders)) {
        $errors["gender"] = "Gender Must Be Male Or Female";
    }
    $q = "SELECT * FROM `user` WHERE email = '$email' LIMIT 1";
    $r = mysqli_query($connect, $q);
    if (mysqli_num_rows($r) == 0) {
        if (empty($errors)) {
            $pass = password_hash($password, PASSWORD_DEFAULT);
            $query = "INSERT INTO `user`( `firstName`, `lastName`, `email`, `password`, `phone` , `role` , `gender`) VALUES ('$first_name','$last_name','$email','$pass','$phone','$role','$gender')";
            $result = mysqli_query($connect, $query);
            if ($result) {
                header("location:login.php");
                $_SESSION["user_id"] = mysqli_insert_id($connect);
                $_SESSION["login"] = "login";
            } else {
                header("location:register.php");
                $_SESSION["errors"] = $errors;
            }
        } else {
            $_SESSION["errors"] = $errors;
            header("location:register.php");
        }
    } else {
        $_SESSION["email"] = "Email Is Arrady Token"; 
        header("location:register.php");
    }
}
