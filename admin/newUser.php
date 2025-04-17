<?php


require_once "style/nav.php";
require_once "style/sidebar.php";

?>


<?php
    if (isset($_SESSION["email"])) { ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $_SESSION["email"]; ?>
    </div>
    <?php }
    unset($_SESSION["email"])
    ?>
<form action="handel_add_user.php" method="POST" class="row g-3 p-5">

    <div class="col-md-4">
        <label for="validationDefault01" class="form-label"> firstName</label>
        <?php
        if (isset($_SESSION["errors"]["firstName"])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION["errors"]["firstName"]; ?>
        </div>
        <?php }
        unset($_SESSION["errors"]["firstName"])
        ?>
        <input type="text" name="firstName" class="form-control" id="validationDefault01">
    </div>
    <div class="col-md-4">
        <label for="validationDefault01" class="form-label"> lastName</label>
        <?php
        if (isset($_SESSION["errors"]["lastName"])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION["errors"]["lastName"]; ?>
        </div>
        <?php }
        unset($_SESSION["errors"]["lastName"])
        ?>
        <input type="text" name="lastName" class="form-control" id="validationDefault01">
    </div>





    <div class="col-md-4">
        <label for="validationDefaultUsername" class="form-label">Email</label>
        <?php
        if (isset($_SESSION["errors"]["email"])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION["errors"]["email"]; ?>
        </div>
        <?php }
        unset($_SESSION["errors"]["email"])
        ?>
        <div class="input-group">
            <span class="input-group-text" id="inputGroupPrepend2">@</span>
            <input type="text" name="email" class="form-control" id="validationDefaultUsername"
                aria-describedby="inputGroupPrepend2">
        </div>


    </div>
    <br>
    <div class="col-md-6">
        <label for="validationDefault03" class="form-label">phone</label>
        <?php
        if (isset($_SESSION["errors"]["phone"])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION["errors"]["phone"]; ?>
        </div>
        <?php }
        unset($_SESSION["errors"]["phone"])
        ?>
        <input type="text" name="phone" class="form-control" id="validationDefault03">
    </div>



    <div class="col-md-3 ">
        <label for="validationDefault04" class="form-label ">role</label>
        <?php
        if (isset($_SESSION["errors"]["role"])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION["errors"]["role"]; ?>
        </div>
        <?php }
        unset($_SESSION["errors"]["role"])
        ?>
        <select name="role" class="form-control" id="validationDefault04">
            <option value="user">user</option>
            <option value="admin">admin</option>
        </select>
    </div>




    <div class="col-md-3 ">
        <label for="validationDefault04" class="form-label">gender</label>
        <?php
        if (isset($_SESSION["errors"]["gender"])) { ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $_SESSION["errors"]["gender"]; ?>
        </div>
        <?php }
        unset($_SESSION["errors"]["gender"])
        ?>
        <select class="form-control" name="gender" id="validationDefault04">
            <option value="male">male</option>
            <option value="female">female</option>
        </select>
    </div>










    <div class="col-12 mt-3">
        <button name="add" class="btn btn-primary" type="submit">Add User</button>
        <a href="user.php" class="btn btn-success">View Users</a>
    </div>
</form>

<?php
require "style/footer.php"
?>