<?php

require "style/nav.php";
require "connect.php";
if(isset($_SESSION["user_id"])){
    $user_id = $_SESSION["user_id"];
}else{
    $user_id = 0; 
}
$query = "SELECT * FROM `cart` WHERE `user_id` = $user_id";

$result = mysqli_query($connect, $query);
$pro_1 = mysqli_fetch_all($result, MYSQLI_ASSOC);


?>

<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Cart</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="index-2.php"><i class="lni lni-home"></i> Home</a></li>
                    <li><a href="index-2.php">Shop</a></li>
                    <li>Cart</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="shopping-cart section">
    <div class="container">
        <div class="cart-list-head">
            <?php if (isset($_SESSION["delete_success"])) { ?>
                <div class="alert alert-success " role="alert">
                    <?php echo $_SESSION["delete_success"]; ?>
                </div>
            <?php }
            unset($_SESSION["delete_success"])
            ?>
            <?php if (isset($_SESSION["delete_error"])) { ?>
                <div class="alert alert-daneger " role="alert">
                    <?php echo $_SESSION["delete_error"]; ?>
                </div>
            <?php }
            unset($_SESSION["delete_error"])
            ?>
            <div class="cart-list-title">
                <div class="row">
                    <div class="col-lg-1 col-md-1 col-12">
                    </div>
                    <div class="col-lg-4 col-md-3 col-12">
                        <p>Product Name</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>price</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>old_price</p>
                    </div>
                    <div class="col-lg-2 col-md-2 col-12">
                        <p>Quantity</p>
                    </div>
                    <div class="col-lg-1 col-md-2 col-12">
                        <p>Remove</p>
                    </div>
                </div>
            </div>

            <div class="cart-single-list ">
                <?php
                foreach ($pro_1 as $key => $value) {
                    // $sql = "SELECT SUM(price*quantity)AS total_price FROM cart";
                    // $result_price = $connect->query_price($sql);
                    // $row = $result_price->fetch_assoc();
                ?>
                    <div class="row align-items-center mt-3">
                        <div class="col-lg-1 col-md-1 col-12">
                            <a href="product-details.php"><img src="admin/images/<?php echo $value["image"] ?>" alt="#"></a>
                        </div>
                        <div class="col-lg-4 col-md-3 col-12">
                            <h5 class="product-name"><a href="product-details.php">
                                    <?php echo $value["name"] ?></a></h5>

                        </div>

                        <div class="col-lg-2 col-md-2 col-12">
                            <p><?php echo $value["price"] ?></p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p><?php echo $value["old_price"] ?></p>
                        </div>
                        <div class="col-lg-2 col-md-2 col-12">
                            <p><?php echo $value["quantity"] ?></p>
                        </div>
                        <div class="col-lg-1 col-md-2 col-12">
                            <a href="delete_pro.php?id=<?php echo $value["id"] ?>" class=" btn btn-light">delete</a>
                        </div>
                    </div>
                <?php
                }; ?>
            </div>




        </div>
        <div class="row">
            <div class="col-12">

                <div class="total-amount">
                    <div class="row">
                        <div class="col-lg-8 col-md-6 col-12">
                            <div class="left">
                                <div class="coupon">
                                    <form action="#" target="_blank">
                                        <input name="Coupon" placeholder="Enter Your Coupon">
                                        <div class="button">
                                            <button class="btn">Apply Coupon</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <div class="right">
                                <?php


                                $subtotal = 0;
                                $total = 0;
                                $saved = 0;

                                if (isset($pro_1)) {
                                    foreach ($pro_1 as $value) {
                                        if (isset($value["price"])) {
                                            $subtotal += $value["price"] * $value["quantity"];
                                            $total += $value["price"] * $value["quantity"];
                                        }

                                        if (isset($value["old_price"])) {
                                            $saved += ($value["old_price"] - $value["price"]) * $value["quantity"];
                                        }
                                    }
                                }
                                ?>

                                <ul>
                                    <li>Cart Subtotal <span>$<?php echo $subtotal ?></span></li>
                                    <li>Shipping <span>Free</span></li>
                                    <li>Save <span>$<?php echo $saved ?></span></li>
                                    <li class="last">You Pay <span>$<?php echo $total ?></span></li>
                                </ul>
                                <div class="button">
                                    <a href="checkout.php" class="btn">Checkout</a>
                                    <a href="product-grids.php" class="btn btn-alt">Continue shopping</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
require "style/footer.php";
?>


<?php


if (isset($_SESSION['cart'])) {
    foreach ($_SESSION['cart'] as $value) {
        if (isset($value["price"])) {
            $subtotal += $value["price"] * $value["quantity"];
            $total += $value["price"] * $value["quantity"];
        }

        if (isset($value["old_price"])) {
            $saved += ($value["old_price"] - $value["price"]) * $value["quantity"];
        }
    }
}
?>