<?php 
require "style/nav.php";
print_r($_SESSION); 
?>


<div class="breadcrumbs">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="breadcrumbs-content">
                    <h1 class="page-title">Login</h1>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <ul class="breadcrumb-nav">
                    <li><a href="index-2.html"><i class="lni lni-home"></i> Home</a></li>
                    <li>Login</li>
                </ul>
            </div>
        </div>
    </div>
</div>


<div class="account-login section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                <!--               -->
                <form action="handel_login.php" class="card login-form" method="POST">
                    <div class="card-body">
                        <div class="title">
                            <h3>Login Now</h3>
                            <p>You can login using your social media account or email address.</p>
                        </div>
                        <div class="social-login">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-12"><a class="btn facebook-btn"
                                        href="javascript:void(0)"><i class="lni lni-facebook-filled"></i> Facebook
                                        login</a></div>
                                <div class="col-lg-4 col-md-4 col-12"><a class="btn twitter-btn"
                                        href="javascript:void(0)"><i class="lni lni-twitter-original"></i> Twitter
                                        login</a></div>
                                <div class="col-lg-4 col-md-4 col-12"><a class="btn google-btn"
                                        href="javascript:void(0)"><i class="lni lni-google"></i> Google login</a>
                                </div>
                            </div>
                        </div>
                        <div class="alt-option">
                            <span>Or</span>
                        </div>
                        <?php
                            if (isset($_SESSION["user"])) { ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo $_SESSION["user"]; ?>
                                </div>
                            <?php }
                            unset($_SESSION["user"])
                            ?>
                        <div class="form-group input-group">
                            <label for="reg-fn">Email</label>
                            <input class="form-control" name="email" type="email" id="reg-email" required>
                        </div>
                        <div class="form-group input-group">
                            <label for="reg-fn">Password</label>
                            <input class="form-control" name="password" type="password" id="reg-pass" required>
                        </div>
                        <div class="d-flex flex-wrap justify-content-between bottom-content">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input width-auto" id="exampleCheck1">
                                <label class="form-check-label">Remember me</label>
                            </div>
                            <a class="lost-pass" href="account-password-recovery.html">Forgot password?</a>
                        </div>
                        <div class="button">
                            <button class="btn" type="submit" name="login">Login</button>
                        </div>
                        <p class="outer-link">Don't have an account? <a href="register.php">Register here </a>
                        </p>
                    </div>
                </form>
                <!--               -->
            </div>
        </div>
    </div>
</div>

<?php
require "style/footer.php";
?>