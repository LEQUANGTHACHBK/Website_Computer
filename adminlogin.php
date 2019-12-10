<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="./Public/script/jquery.js"></script>
    <link rel="stylesheet" href="./Public/styles/font-awesome.min.css">
    <link rel="stylesheet" href="./Public/styles/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="./Public/script/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="container">
    <div class="row d-flex justify-content-center" style="padding: 200px 0px;">
        <div class="col-lg-4 col-md-6 col-sm-12 col-12 text-center">
            <form action="includes/admin.login.inc.php" method="POST">
                <div class="form-group">
                    <img src="Public/images/Homepage/logoBK.png" width="20%" alt="logobk"><h1 style="color:blue">BK ADMINTRATOR</h1>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="ADMIN NAME OR EMAIL" name="admin_name">
                </div>
                <div class="form-group">
                    <input type="password"  class="form-control" placeholder="PASSWORD" name="admin_pass">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-warning" value="LOG IN" name="btn_admin_login">
                </div>
            </form>
            <?php 
                if(isset($_GET['error'])){
                    if($_GET['error'] == "wrongpassword"){
                        echo '<h3 style="color:red;font-weight:700">Wrong Admin Password!</h3>';
                    }
                    else if($_GET['error'] == "noUser"){
                        echo '<h3 style="color:red;font-weight:700">Admin Not Exist!</h3>';
                    }
                    else if($_GET['error'] == "emptyfields"){
                        echo '<h3 style="color:red;font-weight:700">Please Fill All Fields!</h3>';
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>