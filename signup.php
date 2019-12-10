<?php 
    require './LayOut/header.php'
?>
    <div class="container" style="padding:150px 0px">
        <div class="row" id="signupForm">
            <div class="formpart col-lg-6 col-md-12 col-sm-12 col-12 mt-5">
                <div></div>
                <form method="POST" class="register-form" id="register-form" action="includes/signup.inc.php">
                    <h2 class="form-title mb-3">Sign up</h2>
                    <?php 
                        if(isset($_GET['error'])){
                            if($_GET['error'] == "emptyfields"){
                                echo '<p style="color:red;font-weight:700">Please Fill In ALL Fields!</p>';
                            }
                            else if($_GET['error'] == "invalidemailandname"){
                                echo '<p style="color:red;font-weight:700">Invalid Email And NAME!</p>';
                            }
                            else if($_GET['error'] == "invalidemail"){
                                echo '<p style="color:red;font-weight:700">Invalid E-mail!</p>';
                            }
                            else if($_GET['error'] == "invalidname"){
                                echo '<p style="color:red;font-weight:700">Invalid Name!</p>';
                            }
                            else if($_GET['error'] == "passwordcheck"){
                                echo '<p style="color:red;font-weight:700">Your Passwords Do Not Match!</p>';
                            }
                            else if($_GET['error'] == "usertaken"){
                                echo '<p style="color:red;font-weight:700">Username Is Already Taken!</p>';
                            }
                        }
                        if(isset($_GET["signUp"])){
                            if($_GET['signUp']=="success"){
                                echo '<p style="color:green;font-weight:700">SignUp Successfull!</p>';
                            }
                        }
                        
                    ?>
                    <div class="form-group formElement">
                        <label for="name"><i class="fa fa-user" aria-hidden="true"></i>&nbsp;&nbsp;</label>
                        <input type="text" name="name_register" id="name" placeholder="Your Name" size="37"/>
                    </div>
                    <div class="form-group formElement">
                        <label for="email"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;</label>
                        <input type="email" name="email_register" id="email" placeholder="Your Email" size="37"/>
                    </div>
                    <div class="form-group formElement">
                        <label for="pass"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;&nbsp;</label>
                        <input type="password" name="pass_register" id="pass" placeholder="Password" size="37"/>
                    </div>
                    <div class="form-group formElement">
                        <label for="re-pass"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;&nbsp;</label>
                        <input type="password" name="re_pass_register" id="re_pass" placeholder="Repeat your password" size="37"/>
                    </div>
                    <div class="form-group mt-3 d-flex justify-content-left">
                        <button class="btn btn-primary btn-account" name="btn_register">Register</button>
                    </div>
                </form>
            </div>
            <div class="imagesform col-lg-6 col-md-12 col-sm-12 col-12">
                <div class="row d-flex flex-row justify-content-center">
                    <div  class="imgdiv d-flex flex-row justify-content-center">
                        <img src="./Public/images/Account/signup-image.jpg" alt="signin-image.jpg">
                    </div>
                    <div class="d-flex justify-content-center">
                        <a href="login.php" class="signup-image-link mb-2">I am already member</a>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
<?php 
    require './LayOut/footer.php'
?>