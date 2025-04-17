<?php
session_start();
require "connect.php";
// if(!isset($_SESSION["login"])){
//     header("location:register.php");
//   }


$query_con = "SELECT count(id) FROM product";
$result_con = mysqli_query($connect, $query_con);
$pro_con = mysqli_fetch_assoc($result_con);




$count = $pro_con["count(id)"];






$limit = 3;

if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}

if ($page < 1) {
    header("location:index.php?page=1");
}
$pages = $count / $page;
if ($page > $pages) {
    header("location:index.php?page=1");
}










$offset = ($page - 1) * $limit;




$query = "SELECT * FROM `product` limit $limit offset $offset";
$result = mysqli_query($connect, $query);
$pro = mysqli_fetch_all($result, MYSQLI_ASSOC);

if(isset($_SESSION["user_id"])){
    $user_id = $_SESSION["user_id"];
}else{
    $user_id = 0; 
}
// $user_id = $_SESSION["user_id"];


$query_item = "SELECT count(id) FROM cart WHERE `user_id` = $user_id ";
$result_item = mysqli_query($connect, $query_item);
$pro_item = mysqli_fetch_assoc($result_item);




$count_item = $pro_item["count(id)"];



$query_cart = "SELECT * FROM `cart` WHERE `user_id` = $user_id";

$result_cart = mysqli_query($connect, $query_cart);
$pro_1 = mysqli_fetch_all($result_cart, MYSQLI_ASSOC);





?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<!-- Mirrored from demo.graygrids.com/themes/shopgrids/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Dec 2022 23:35:35 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>ShopGrids - Bootstrap 5 eCommerce HTML Template.</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.svg" />

    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/LineIcons.3.0.css" />
    <link rel="stylesheet" href="assets/css/tiny-slider.css" />
    <link rel="stylesheet" href="assets/css/glightbox.min.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>


    <header class="header navbar-area">

        <div class="topbar">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-left">
                            <ul class="menu-top-link">
                                <li>
                                    <div class="select-position">
                                        <select id="select4">
                                            <option value="0" selected>$ USD</option>
                                            <option value="1">€ EURO</option>
                                            <option value="2">$ CAD</option>
                                            <option value="3">₹ INR</option>
                                            <option value="4">¥ CNY</option>
                                            <option value="5">৳ BDT</option>
                                        </select>
                                    </div>
                                </li>
                                <li>
                                    <div class="select-position">
                                        <select id="select5">
                                            <option value="0" selected>English</option>
                                            <option value="1">Español</option>
                                            <option value="2">Filipino</option>
                                            <option value="3">Français</option>
                                            <option value="4">العربية</option>
                                            <option value="5">हिन्दी</option>
                                            <option value="6">বাংলা</option>
                                        </select>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-middle">
                            <ul class="useful-links">
                                <li><a href="index.php">Home</a></li>
                                <li><a href="about-us.php">About Us</a></li>
                                <li><a href="contact.php">Contact Us</a></li>
                                <li><a href="logout.php">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <div class="top-end">
                            <div class="user">
                                <i class="lni lni-user"></i>
                                Hello
                            </div>
                            <ul class="user-login">
                                <li>
                                    <a href="login.php">Sign In</a>
                                </li>
                                <li>
                                    <a href="register.php">Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="header-middle">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-3 col-7">

                        <a class="navbar-brand" href="index.php">
                            <img src="assets/images/logo/logo.svg" alt="Logo">
                        </a>

                    </div>
                    <div class="col-lg-5 col-md-7 d-xs-none">

                        <div class="main-menu-search">

                            <div class="navbar-search search-style-5">
                                <div class="search-select">
                                    <div class="select-position">
                                        <select id="select1">
                                            <option selected>All</option>
                                            <option value="1">option 01</option>
                                            <option value="2">option 02</option>
                                            <option value="3">option 03</option>
                                            <option value="4">option 04</option>

                                        </select>
                                    </div>
                                </div>
                                <form action="search.php" method="POST">
                                    <div class="input-group">
                                        <div class="form-outline" data-mdb-input-init>
                                            <input type="search" name="search" id="form1" class="form-control" />

                                        </div>
                                        <button type="submit" class="btn btn-primary">search</button>
                                    </div>
                                </form>
                            </div>

                        </div>

                    </div>
                    <div class="col-lg-4 col-md-2 col-5">
                        <div class="middle-right-area">
                            <div class="nav-hotline">
                                <i class="lni lni-phone"></i>
                                <h3>Hotline:
                                    <span>(+100) 123 456 7890</span>
                                </h3>
                            </div>
                            <div class="navbar-cart">
                                <div class="wishlist">
                                    <a href="javascript:void(0)">
                                        <i class="lni lni-heart"></i>
                                        <span class="total-items">0</span>
                                    </a>
                                </div>
                                <div class="cart-items">
                                    <a href="javascript:void(0)" class="main-btn">
                                        <i class="lni lni-cart"></i>
                                        <span class="total-items"><?php echo $count_item  ?></span>
                                    </a>

                                    <div class="shopping-item">
                                        <div class="dropdown-cart-header">
                                            <span><?php echo $count_item  ?> Items</span>
                                            <a href="cart.php">View Cart</a>
                                        </div>
                                        <ul class="shopping-list">
                                            <?php foreach ($pro_1 as $key => $value) {

                                            ?>

                                                <li>
                                                    <a href="javascript:void(0)" class="remove" title="Remove this item"><i
                                                            class="lni lni-close"></i></a>
                                                    <div class="cart-img-head">
                                                        <a class="cart-img" href="product-details.php"><img
                                                                src="admin/images/<?php echo $value["image"] ?>" alt="#"></a>
                                                    </div>
                                                    <div class="content">
                                                        <h4><a href="product-details.php">
                                                                <?php echo $value["name"] ?></a></h4>
                                                        <p class="quantity"> <?php echo $value["quantity"] ?> * <span class="amount"><?php echo $value["price"] ?></span></p>
                                                    </div>
                                                </li>

                                            <?php }  ?>

                                        </ul>
                                        <div class="bottom">
                                            <div class="total">
                                                <span>Total</span>
                                                <?php


                                               
                                                $total = 0;
                                               

                                                if (isset($pro_1)) {
                                                    foreach ($pro_1 as $value) {
                                                        if (isset($value["price"])) {
                                                            
                                                            $total += $value["price"] * $value["quantity"];
                                                        }

                                                    
                                                    }
                                                }
                                                ?>
                                                <span class="total-amount">$<?php echo $total  ?></span>
                                            </div>
                                            <div class="button">
                                                <a href="checkout.php" class="btn animate">Checkout</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-6 col-12">
                    <div class="nav-inner">

                        <div class="mega-category-menu">
                            <span class="cat-button"><i class="lni lni-menu"></i>All Categories</span>
                            <ul class="sub-category">
                                <li><a href="product-grids.php">Electronics <i class="lni lni-chevron-right"></i></a>
                                    <ul class="inner-sub-category">
                                        <li><a href="product-grids.php">Digital Cameras</a></li>
                                        <li><a href="product-grids.php">Camcorders</a></li>
                                        <li><a href="product-grids.php">Camera Drones</a></li>
                                        <li><a href="product-grids.php">Smart Watches</a></li>
                                        <li><a href="product-grids.php">Headphones</a></li>
                                        <li><a href="product-grids.php">MP3 Players</a></li>
                                        <li><a href="product-grids.php">Microphones</a></li>
                                        <li><a href="product-grids.php">Chargers</a></li>
                                        <li><a href="product-grids.php">Batteries</a></li>
                                        <li><a href="product-grids.php">Cables & Adapters</a></li>
                                    </ul>
                                </li>
                                <li><a href="product-grids.php">accessories</a></li>
                                <li><a href="product-grids.php">Televisions</a></li>
                                <li><a href="product-grids.php">best selling</a></li>
                                <li><a href="product-grids.php">top 100 offer</a></li>
                                <li><a href="product-grids.php">sunglass</a></li>
                                <li><a href="product-grids.php">watch</a></li>
                                <li><a href="product-grids.php">man’s product</a></li>
                                <li><a href="product-grids.php">Home Audio & Theater</a></li>
                                <li><a href="product-grids.php">Computers & Tablets </a></li>
                                <li><a href="product-grids.php">Video Games </a></li>
                                <li><a href="product-grids.php">Home Appliances </a></li>
                            </ul>
                        </div>


                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler mobile-menu-btn" type="button" data-bs-toggle="collapse"
                                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                                <span class="toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul id="nav" class="navbar-nav ms-auto">
                                    <li class="nav-item">
                                        <a href="index.php" class="active" aria-label="Toggle navigation">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-2" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Pages</a>
                                        <ul class="sub-menu collapse" id="submenu-1-2">
                                            <li class="nav-item"><a href="about-us.php">About Us</a></li>
                                            <li class="nav-item"><a href="faq.php">Faq</a></li>
                                            <li class="nav-item"><a href="login.php">Login</a></li>
                                            <li class="nav-item"><a href="register.php">Register</a></li>
                                            <li class="nav-item"><a href="mail-success.php">Mail Success</a></li>
                                            <li class="nav-item"><a href="404.php">404 Error</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-3" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Shop</a>
                                        <ul class="sub-menu collapse" id="submenu-1-3">
                                            <li class="nav-item"><a href="product-grids.php">Shop Grid</a></li>
                                            <li class="nav-item"><a href="product-list.php">Shop List</a></li>
                                            <li class="nav-item"><a href="product-details.php">shop Single</a></li>
                                            <li class="nav-item"><a href="cart.php">Cart</a></li>
                                            <li class="nav-item"><a href="checkout.php">Checkout</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="dd-menu collapsed" href="javascript:void(0)" data-bs-toggle="collapse"
                                            data-bs-target="#submenu-1-4" aria-controls="navbarSupportedContent"
                                            aria-expanded="false" aria-label="Toggle navigation">Blog</a>
                                        <ul class="sub-menu collapse" id="submenu-1-4">
                                            <li class="nav-item"><a href="blog-grid-sidebar.php">Blog Grid
                                                    Sidebar</a>
                                            </li>
                                            <li class="nav-item"><a href="blog-single.php">Blog Single</a></li>
                                            <li class="nav-item"><a href="blog-single-sidebar.php">Blog Single
                                                    Sibebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="contact.php" aria-label="Toggle navigation">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>

                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">

                    <div class="nav-social">
                        <h5 class="title">Follow Us:</h5>
                        <ul>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-facebook-filled"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-twitter-original"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-instagram"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="lni lni-skype"></i></a>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

    </header>