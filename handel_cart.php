<?php
session_start();
require "connect.php";

 $id = $_GET["id"];
extract($_POST);
$q = "SELECT * FROM `product` WHERE id='$id' ";
$r = mysqli_query($connect, $q);
$pro_1 = mysqli_fetch_assoc($r);
$name = $pro_1["name"];
$price = $pro_1["price"];
$old_price = $pro_1["old_price"];
$image = $pro_1["image"];
$cat = $pro_1[ "cat"];
$product_quant = $pro_1["quantity"];
$user_id = $_SESSION["user_id"];
if($quantity > $product_quant){
    header("location:product-details.php");
    $_SESSION["pro_id"]=$id;
    $_SESSION["error_quantity"] = "Quantity Not Available";
}else{

$query = "INSERT INTO `cart`( `name`, `price`, `old_price`, `image`, `cat`,  `quantity`, `user_id`)
 VALUES 
 ('$name','$price','$old_price','$image','$cat ', '$quantity', '$user_id')";
$result = mysqli_query($connect , $query);
if($result) {
    header("location:cart.php");
}else{
    header("location:product-details.php");
}
}

 