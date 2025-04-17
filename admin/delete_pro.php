 <?php
    session_start();
    require "connect.php";

    $id = $_GET["id"];
    $q_img = "SELECT * FROM `product` WHERE id= '$id'";
    $r_img = mysqli_query($connect, $q_img);
    $p_img = mysqli_fetch_assoc($r_img);

    $old_img = $p_img["image"];

    $query = "DELETE FROM `product` WHERE id = '$id'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        unlink("images/$old_img");
        header("location:product.php");
        $_SESSION["delete"] = "Success Deleted User";
    } else {
        header("location:product.php");
    //    echo $id = $_GET["id"];
    }