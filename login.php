<?php 
    require './LayOut/header.php'
?>
    <div class="container" style="padding:150px 0px">
        <div class="row" id="signupForm">
            <div class="imagesform col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="row d-flex flex-row justify-content-center">
                    <div  class="imgdiv d-flex flex-row justify-content-center">
                        <img src="./Public/images/Account/signin-image.jpg" alt="login-image.jpg">
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="signup.php" class="signup-image-link mb-2">Create An Account</a>
                    </div>
                </div>
            </div>
            <div class="formpart col-lg-6 col-md-12 col-sm-12 col-12 mt-5">
                <form method="POST" class="register-form" id="register-form" action="includes/login.inc.php">
                    <h2 class="form-title mb-3">Login</h2>
                    <?php 
                        if(isset($_GET['error'])){
                            if($_GET['error'] == "wrongpassword"){
                                echo '<p style="color:red;font-weight:700">Wrong Password!</p>';
                            }
                            else if($_GET['error'] == "noUser"){
                                echo '<p style="color:red;font-weight:700">User Not Exist!</p>';
                            }
                        }
                    ?>
                    <div class="form-group formElement">
                        <label for="email"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;</label>
                        <input type="text" name="email_login" id="email" placeholder="Your Email" size="37"/>
                    </div>
                    <div class="form-group formElement">
                        <label for="pass"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;&nbsp;</label>
                        <input type="password" name="pass_login" id="pass" placeholder="Password" size="37"/>
                    </div>
                    <div class="form-group mt-3">
                        <button class="btn btn-primary btn-account" name="btn_login">Login</button>
                    </div>
                    <div class="form-group mt-3">
                        <a class = "signup-image-link" href="resetPassword.php">Forgot Your Password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php 
    require './LayOut/footer.php'
?>