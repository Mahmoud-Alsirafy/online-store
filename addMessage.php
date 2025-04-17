<?php
require "connect.php";

extract($_POST);

$query = "INSERT INTO `message`
( `name`, `email`, `phone`, `message`, `status`) 
VALUES 
('$name','$email','$phone','$message','0')";
$result =mysqli_query($connect , $query);
if($result) {
    echo "<div class='alert alert-success'>inserted</div>";
}
?>  