<?php
require "style/nav.php";
?>


<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Registration</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="index-2.html"><i class="lni lni-home"></i> Home</a></li>
                    <li>Registration</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="account-login section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                <div class="register-form">
                    <div class="title">
                        <h3>No Account? Register</h3>
                        <p>Registration takes less than a minute but gives you full control over your orders.</p>
                    </div>
                    <?php
    if (isset($_SESSION["email"])) { ?>
    <div class="alert alert-danger" role="alert">
        <?php echo $_SESSION["email"]; ?>
    </div>
    <?php }
    unset($_SESSION["email"])
    ?>
                    <!--                     -->
                    <form action="handel_reg.php" class="row" method="POST">
                        <div class="col-sm-6">
                            <?php
                            if (isset($_SESSION["errors"]["first_name"])) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_SESSION["errors"]["first_name"]; ?>
                                </div>
                            <?php }
                            unset($_SESSION["errors"]["first_name"])
                            ?>
                            <div class="form-group">
                                <label for="reg-fn">First Name</label>
                                <input class="form-control" name="first_name" placeholder="First Name" type="text" id="reg-fn">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <?php
                            if (isset($_SESSION["errors"]["last_name"])) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_SESSION["errors"]["last_name"]; ?>
                                </div>
                            <?php }
                            unset($_SESSION["errors"]["last_name"])
                            ?>
                            <div class="form-group">
                                <label for="reg-ln">Last Name</label>

                                <input class="form-control" name="last_name" placeholder="Last Name" type="text" id="reg-ln">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <?php
                            if (isset($_SESSION["errors"]["email"])) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_SESSION["errors"]["email"]; ?>
                                </div>
                            <?php }
                            unset($_SESSION["errors"]["email"])
                            ?>
                            <div class="form-group">
                                <label for="reg-email">E-mail Address</label>

                                <input class="form-control" name="email" type="email" placeholder="Email" id="reg-email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <?php
                            if (isset($_SESSION["errors"]["phone"])) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_SESSION["errors"]["phone"]; ?>
                                </div>
                            <?php }
                            unset($_SESSION["errors"]["phone"])
                            ?>
                            <div class="form-group">
                                <label for="reg-phone">Phone Number</label>

                                <input class="form-control" name="phone" type="text" placeholder="Phone" id="reg-phone">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <?php
                            if (isset($_SESSION["errors"]["password"])) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_SESSION["errors"]["password"]; ?>
                                </div>
                            <?php }
                            unset($_SESSION["errors"]["password"])
                            ?>
                            <div class="form-group">
                                <label for="reg-pass">Password</label>

                                <input class="form-control" name="password" type="password" placeholder="Password" id="reg-pass">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <?php
                            if (isset($_SESSION["errors"]["confirm_password"])) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_SESSION["errors"]["confirm_password"]; ?>
                                </div>
                            <?php }
                            unset($_SESSION["errors"]["confirm_password"])
                            ?>
                            <div class="form-group">
                                <label for="reg-pass-confirm">Confirm Password</label>

                                <input class="form-control" name="confirm_password" placeholder="Confirm Password" type="password"
                                    id="reg-pass-confirm">
                            </div>
                        </div>
                        <div class="form-group">
                            <?php
                            if (isset($_SESSION["errors"]["gender"])) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_SESSION["errors"]["gender"]; ?>
                                </div>
                            <?php }
                            unset($_SESSION["errors"]["gender"])
                            ?>
                            <label for="reg-gender" class="form-label ">Gender</label>


                            <select name="gender" class="form-control" id="reg-gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>
                        <div class="button">
                            <button class="btn" name="register" type="submit">Register</button>
                        </div>
                        <p class="outer-link">Already have an account? <a href="login.php">Login Now</a>
                        </p>
                    </form>
                    <!--                      -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require "style/footer.php";
?>