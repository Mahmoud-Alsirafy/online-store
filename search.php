<?php 
require "style/nav.php";
$search = $_POST["search"];

if (isset($_POST["search"])) {
    $query = "SELECT * FROM `product` WHERE name LIKE '%$search%'";
    $result = mysqli_query($connect, $query);
    $pro = mysqli_fetch_all($result, MYSQLI_ASSOC);
}
?>

<div class="row">
    <?php foreach ($pro as $ket => $val) {
                    $id = $val["id"]  ?>
    <div class="col-lg-3 col-md-6 col-12">

        <div class="single-product">
            <div class="product-image h-50">
                <img src="admin/images/<?php echo $val["image"] ?>" class="h-75 img-fluid" alt="#">
                <div class="button">
                    <a href="product-details.php?id=<?php echo $id ?>" class="btn"><i class="lni lni-cart"></i>
                        Add
                        to Cart</a>
                </div>
            </div>
            <div class="product-info">
                <span class="category"><?php echo $val["cat"] ?></span>
                <h4 class="title">
                    <a href="product-grids.php"><?php echo $val["name"] ?></a>
                </h4>
                <ul class="review">
                    <li><i class="lni lni-star-filled"></i></li>
                    <li><i class="lni lni-star-filled"></i></li>
                    <li><i class="lni lni-star-filled"></i></li>
                    <li><i class="lni lni-star-filled"></i></li>
                    <li><i class="lni lni-star"></i></li>
                    <li><span>4.0 Review(s)</span></li>
                </ul>
                <div class="price">
                    <span>$<?php echo $val["price"] ?></span>
                </div>
            </div>
        </div>

    </div>
    <?php
                };
                ?>


</div>

<?php
require "style/footer.php";