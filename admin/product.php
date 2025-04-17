<?php
require "style/nav.php";
require "style/sidebar.php";
require "connect.php";


?>
<div class="container-fluid page-body-wrapper full-page-wrapper ">

<?php
    if (isset($_SESSION["success"])) { ?>
    <div class="alert alert-success " role="alert">
        <?php echo $_SESSION["success"]; ?>
    </div>
    <?php }
    unset($_SESSION["success"])
    ?>

    <table class="table w-100">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">price</th>
                <th scope="col">old_price</th>
                <th scope="col">image</th>
                <th scope="col">cat</th>
                <th scope="col">quantity</th>
                <th scope="col"> Edit / delete </th>
            </tr>
        </thead>
        <tbody>


            <?php
            $query = "SELECT * FROM `product`";
            $result = mysqli_query($connect, $query);
            $product = mysqli_fetch_all($result, MYSQLI_ASSOC);
            foreach ($product as $key => $value) {
                $id = $value["id"];
                
            ?>
            <tr>
                <td scope="col"><?php echo ++$key  ?></td>
                <td scope="col"><?php echo $value["name"] ?></td>
                <td scope="col"><?php echo $value["price"] ?></td>
                <td scope="col"><?php echo $value["old_price"] ?></td>
                <td scope="col" class="w-25"><img src="images/<?php echo $value["image"] ?>" class=" w-75 img-fluid" alt=""></td>
                <td scope=" col"><?php echo $value["cat"] ?></td>
                <td scope=" col"><?php echo $value["quantity"] ?></td>

                <td class="d-flex">
                    <a href="edit_product.php?id=<?php echo $id ?>" class="btn btn-primary">edit</a>
                    <a href="delete_pro.php?id=<?php echo $id ?>" class="btn btn-danger">Delete</a>


                </td>
            </tr>
            <?php } ?>




        </tbody>
    </table>

    <?php
    if (isset($_SESSION["delete"])) { ?>
    <div class="alert alert-success" role="alert">
        <?php echo $_SESSION["delete"]; ?>
    </div>
    <?php }
    unset($_SESSION["delete"])
    ?>
    <a href="new_product.php" class="btn btn-primary justify-content-center">add product</a>
</div>