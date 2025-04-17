<?php
require "style/nav.php";
if (isset($_GET["page"])) {
    $page = $_GET["page"];
} else {
    $page = 1;
}

if ($page < 1) {
    header("location:product-grids.php?page=1");
}
$pages = $count / $page;
if ($page > $pages) {
    header("location:product-grids.php?page=1");
}


?>


<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Shop Grid</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="index-2.html"><i class="lni lni-home"></i> Home</a></li>
                    <li><a href="javascript:void(0)">Shop</a></li>
                    <li>Shop Grid</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<section class="product-grids section">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12">
                <div class="product-grids-head">
                    <div class="product-grid-topbar">
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-md-8 col-12">
                                <div class="product-sorting">
                                    <label for="sorting">Sort by:</label>
                                    <select class="form-control" id="sorting">
                                        <option>Popularity</option>
                                        <option>Low - High Price</option>
                                        <option>High - Low Price</option>
                                        <option>Average Rating</option>
                                        <option>A - Z Order</option>
                                        <option>Z - A Order</option>
                                    </select>
                                    <h3 class="total-show-product">Showing: <span>1 - 12 items</span></h3>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-4 col-12">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="nav-grid-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-grid" type="button" role="tab" aria-controls="nav-grid"
                                            aria-selected="true"><i class="lni lni-grid-alt"></i></button>
                                        <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-list" type="button" role="tab" aria-controls="nav-list"
                                            aria-selected="false"><i class="lni lni-list"></i></button>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-grid" role="tabpanel"
                            aria-labelledby="nav-grid-tab">
                          
                            <div class="row">
                                <div class=" d-flex justify-content-around col-lg-12 col-md-6 col-12 ">
                                    <?php foreach ($pro as $ket => $val) {
                                        $id = $val["id"]  ?>

                                        <div class="single-product">
                                            <div class="product-image h-50">
                                                <img src="admin/images/<?php echo $val["image"] ?>" class="h-100 img-fluid" alt="#">
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
                                                <div class="quantity mt-3">
                                                    Quantity <?php echo $val["quantity"] ?>
                                                </div>
                                                <div class="price">
                                                    <span>$<?php echo $val["price"] ?></span>
                                                </div>
                                            </div>
                                        </div>

                                    <?php
                                    };
                                    ?>
                                </div>

                                <div class="text-center w-25 mt-5 d-block">
                                    <nav aria-label="Page navigation example">
                                        <ul class="pagination">
                                            <li class="page-item"><a class="page-link"
                                                    href="product-grids.php?page=<?php echo $page + 1 ?>">Next</a>
                                            </li>
                                            <li class="page-item"><a class="page-link"
                                                    href="product-grids.php?page=<?php echo $page - 1 ?>">Previous</a>
                                            </li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>

                        </div>
                        <div class="tab-pane fade" id="nav-list" role="tabpanel" aria-labelledby="nav-list-tab">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-12">

                                    <div class="single-product">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="product-image">
                                                    <img src="assets/images/products/product-1.jpg" alt="#">
                                                    <div class="button">
                                                        <a href="product-details.html" class="btn"><i
                                                                class="lni lni-cart"></i> Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div class="product-info">
                                                    <span class="category">Watches</span>
                                                    <h4 class="title">
                                                        <a href="product-grids.html">Xiaomi Mi Band 5</a>
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
                                                        <span>$199.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-12 col-md-12 col-12">

                                    <div class="single-product">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="product-image">
                                                    <img src="assets/images/products/product-2.jpg" alt="#">
                                                    <span class="sale-tag">-25%</span>
                                                    <div class="button">
                                                        <a href="product-details.html" class="btn"><i
                                                                class="lni lni-cart"></i> Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div class="product-info">
                                                    <span class="category">Speaker</span>
                                                    <h4 class="title">
                                                        <a href="product-grids.html">Big Power Sound Speaker</a>
                                                    </h4>
                                                    <ul class="review">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><span>5.0 Review(s)</span></li>
                                                    </ul>
                                                    <div class="price">
                                                        <span>$275.00</span>
                                                        <span class="discount-price">$300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-12 col-md-12 col-12">

                                    <div class="single-product">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="product-image">
                                                    <img src="assets/images/products/product-3.jpg" alt="#">
                                                    <div class="button">
                                                        <a href="product-details.html" class="btn"><i
                                                                class="lni lni-cart"></i> Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div class="product-info">
                                                    <span class="category">Camera</span>
                                                    <h4 class="title">
                                                        <a href="product-grids.html">WiFi Security Camera</a>
                                                    </h4>
                                                    <ul class="review">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><span>5.0 Review(s)</span></li>
                                                    </ul>
                                                    <div class="price">
                                                        <span>$399.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-12 col-md-12 col-12">

                                    <div class="single-product">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="product-image">
                                                    <img src="assets/images/products/product-4.jpg" alt="#">
                                                    <span class="new-tag">New</span>
                                                    <div class="button">
                                                        <a href="product-details.html" class="btn"><i
                                                                class="lni lni-cart"></i> Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div class="product-info">
                                                    <span class="category">Phones</span>
                                                    <h4 class="title">
                                                        <a href="product-grids.html">iphone 6x plus</a>
                                                    </h4>
                                                    <ul class="review">
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><i class="lni lni-star-filled"></i></li>
                                                        <li><span>5.0 Review(s)</span></li>
                                                    </ul>
                                                    <div class="price">
                                                        <span>$400.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-12 col-md-12 col-12">

                                    <div class="single-product">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-4 col-12">
                                                <div class="product-image">
                                                    <img src="assets/images/products/product-7.jpg" alt="#">
                                                    <span class="sale-tag">-50%</span>
                                                    <div class="button">
                                                        <a href="product-details.html" class="btn"><i
                                                                class="lni lni-cart"></i> Add to
                                                            Cart</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-12">
                                                <div class="product-info">
                                                    <span class="category">Headphones</span>
                                                    <h4 class="title">
                                                        <a href="product-grids.html">PX7 Wireless Headphones</a>
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
                                                        <span>$100.00</span>
                                                        <span class="discount-price">$200.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">

                                    <div class="pagination left">
                                        <ul class="pagination-list">
                                            <li><a href="javascript:void(0)">1</a></li>
                                            <li class="active"><a href="javascript:void(0)">2</a></li>
                                            <li><a href="javascript:void(0)">3</a></li>
                                            <li><a href="javascript:void(0)">4</a></li>
                                            <li><a href="javascript:void(0)"><i class="lni lni-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
require "style/footer.php";
?>