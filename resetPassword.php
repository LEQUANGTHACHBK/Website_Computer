<?php 
    require './LayOut/header.php'
?>
    <div class="container bg-light pt-2 pb-5">
        <div class="row d-flex justify-content-center">
            <h1>Reset Your Password</h1>
        </div>
        <div class="row justify-content-center">
            <p>An e-mail will be send to you with instructions on how to reset your password.</p>
        </div>
        <form action="includes/reset-request.inc.php" method="POST">
            <div class="form-group row justify-content-center">
                <input type="text" name="email" class="form-control form-control-lg col-lg-4 col-sm-8 col-md-6 col-8" placeholder="Enter your e-mail address">
            </div>
            <div class="form-group row justify-content-center">
                <button class="btn btn-dark" name= "btn-resetPassword" type="submit" style="padding: 10px 20px">RECEIVE NEW PASSWORD BY EMAIL</button>
            </div>
        </form>
    </div>
</body>
</html>