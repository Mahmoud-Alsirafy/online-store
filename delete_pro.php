<?php
    session_start();
    require "connect.php";

    $id = $_GET["id"];


    $query = "DELETE FROM `cart` WHERE id = '$id'";
    $result = mysqli_query($connect, $query);

    if ($result) {
       
        header("location:cart.php");
        $_SESSION["delete_success"] = "Success Deleted User";
    } else {
        header("location:cart.php");
        $_SESSION["delete_error"] = "Something Went Wrong";
    }