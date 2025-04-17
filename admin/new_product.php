<?php

require_once "style/nav.php";
require_once "style/sidebar.php";

?>


<form action="handel_add_product.php" method="POST" class="row g-3 p-5" enctype="multipart/form-data">
    

    <div class="col-md-6">
        <label for="validationDefault01" class="form-label"> name</label>
        <?php
        if (isset($_SESSION["errors"]["name"])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION["errors"]["name"]; ?>
        </div>
        <?php }
        unset($_SESSION["errors"]["name"])
        ?>
        <input type="text" name="name" class="form-control" id="validationDefault01">
    </div>


    <div class="col-md-6">
        <label for="validationDefaultUsername" class="form-label">price</label>
        <?php
        if (isset($_SESSION["errors"]["price"])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION["errors"]["price"]; ?>
        </div>
        <?php }
        unset($_SESSION["errors"]["price"])
        ?>
        <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend2">$</span>
            <input type="text" name="price" class="form-control" id="validationDefaultUsername"
                aria-describedby="inputGroupPrepend2">
        </div>


    </div>
    <div class="col-md-6">
        <label for="validationDefaultUsername" class="form-label">old_price</label>
        <?php
        if (isset($_SESSION["errors"]["old_price"])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION["errors"]["old_price"]; ?>
        </div>
        <?php }
        unset($_SESSION["errors"]["old_price"])
        ?>
        <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend2">$</span>
            <input type="text" name="old_price" class="form-control" id="validationDefaultUsername"
                aria-describedby="inputGroupPrepend2">
        </div>


    </div>

    <div class="col-md-6">
        <label for="validationDefaultUsername" class="form-label">image</label>
        <?php
        if (isset($_SESSION["errors"]["image"])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION["errors"]["image"]; ?>
        </div>
        <?php }
        unset($_SESSION["errors"]["image"])
        ?>
        <div class="input-group">
            <input type="file" name="image" class="form-control" id="validationDefaultUsername"
                aria-describedby="inputGroupPrepend2">
        </div>


    </div>
    <div class="col-md-6">
        <label for="validationDefault03" class="form-label">cat</label>
        <?php
        if (isset($_SESSION["errors"]["cat"])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION["errors"]["cat"]; ?>
        </div>
        <?php }
        unset($_SESSION["errors"]["cat"])
        ?>
        <input type="text" name="cat" class="form-control" id="validationDefault03">
    </div>

    <div class="col-md-6">
        <label for="validationDefault03" class="form-label">quantity</label>
        <?php
        if (isset($_SESSION["errors"]["quantity"])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION["errors"]["quantity"]; ?>
        </div>
        <?php }
        unset($_SESSION["errors"]["quantity"])
        ?>
        <input type="text" name="quantity" class="form-control" id="validationDefault03">
    </div>

    <div class="col-12 mt-3">
        <button name="add" class="btn btn-primary" type="submit">Add Product</button>
        <a href="product.php" class="btn btn-success">View Products</a>
    </div>
</form>

<?php
require "style/footer.php"
?>