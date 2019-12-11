<?php 
    session_start();
?>
<?php if(isset($_SESSION['adminID'])):?>
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
        <script src="./Public/script/jquery.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="./Public/script/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .management a{
                color: white;
                font-weight: 500;
                font-size: 1.2em;
                text-decoration: none;
            }
            .management:hover{
                background-color: black;
                
            }
            #left{
                width: 25%;
                float: left;
                height: 1000px;
            }
            #right{
                width: 75%;
                float:left;
            }
            .row{
                margin: 0px !important;
                padding: 0px !important;
            }
            .breadcrumb-item a{
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <div id="left" class= "bg-dark" >
            <div class="row" style="background-color: black">
                <div class="col-lg-4 pt-2 pb-3"><a href="admin.php"><img src="Public/images/Homepage/logoBK.png" style="width: 100%" alt="bklogo"></a></div>
                <div class="col-lg-7 text-light pt-3"><p style="font-size: 1.5em; font-weight:500"><a href="admin.php" style="text-decoration:none;color:white">BK COMPUTER ADMINTRATOR</a></p></div>
            </div>
            <div class="row management" id="ADMIN">
                <a href="admin.php" class="pt-3 pl-3 pb-3"><i class="fa fa-key" aria-hidden="true"></i></i> Admin Management</a>
            </div>
            <div class="row management" id="USER">
                <a href="admin_user_managerment.php" class="pt-3 pl-3 pb-3"><i class="fa fa-users fa-lg" aria-hidden="true"></i> User Management</a>
            </div>
            <div class="row management" id="PROD">
                <a href="admin_product_managerment.php" class="pt-3 pl-3 pb-3"><i class="fa fa-laptop" aria-hidden="true"></i> Products Management</a>
            </div>
        </div>
        <div id="right" >
            <div id = "admin-right">
                <div class="row">
                    <div class="col-lg-6 mt-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb container" style="background-color: white">
                                <li class="breadcrumb-item"><a href="admin.php" style="color: black;font-weight:700">ADMINTRATOR</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Admin Management</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-lg-6 mt-3">
                        <form action="includes/admin.logout.inc.php" method="POST">
                            <button class="btn btn-dark ml-2" style="float: right">LOGOUT</button>
                        </form>
                        
                        <h3 style="float: right">Hello <span><?php echo $_SESSION['adminName']?></span></h3>
                    </div>
                </div>
                <div style="padding-left: 35px">
                    <div class="row">
                        <div class="col-lg-6 mt-3 pl-0 float-right">
                            <div class="row">
                                <button class ="btn btn-primary" data-toggle="modal" data-target="#addData">NEW ADMIN</button>
                                <div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="addLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">ADD NEW ADMIN</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="includes/admin_action.inc.php" method="POST">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="name" class="col-form-label">NAME:</label>
                                                    <input type="text" class="form-control" name="name" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="email" class="col-form-label">EMAIL:</label>
                                                    <input type="email" class="form-control" name="email">
                                                </div>
                                                <div class="form-group">
                                                    <label for="dob" class="col-form-label">DOB:</label>
                                                    <input type="text" class="form-control" name="dob">
                                                </div>
                                                <div class="form-group">
                                                    <label for="pass" class="col-form-label">PASSWORD:</label>
                                                    <input type="password" class="form-control" name="pass">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" name="btn_create_new_admin" class="btn btn-success">Create</button>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <table class="table mt-2">
                            <thead>
                                <tr class="text-center">
                                    <th  width="10%">NAME</th>
                                    <th  width="30%">EMAIL</th>
                                    <th  width="20%">DOB</th>
                                    <th  width="20%">EDIT</th>
                                    <th  width="20%">DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                require 'includes/dbh.inc.php';
                                $result = $conn->query("SELECT * FROM admin") or die($conn->error);   
                                while($row = $result->fetch_assoc()): ?>
                                    <tr class="text-center">
                                        <td><?php echo $row['adminName']?></td>
                                        <td><?php echo $row['adminEmail']?></td>
                                        <td><?php echo $row['adminDob']?></td>
                                        <td >
                                            <button data-toggle="modal" data-target="#editData" id = "edit<?php echo $row['id']?>" class="btn btn-warning " name="edit_admin">EDIT</button>
                                            <div class="modal fade" id="editData" tabindex="-1" role="dialog" aria-labelledby="addLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">EDIT ADMIN</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="includes/admin_action.inc.php" method="POST">
                                                        <div class="modal-body text-left">
                                                            <input type="hidden" name="id" value="<?php echo $row['id'] ?>">    
                                                            <div class="form-group">
                                                                <label for="name" class="col-form-label">NAME:</label>
                                                                <input type="text" class="form-control" name="name" value="<?php echo $row['adminName'] ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="email" class="col-form-label">EMAIL:</label>
                                                                <input type="email" class="form-control" name="email" value="<?php echo $row['adminEmail'] ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="dob" class="col-form-label">DOB:</label>
                                                                <input type="text" class="form-control" name="dob" value="<?php echo $row['adminDob'] ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="pass" class="col-form-label">PASSWORD:</label>
                                                                <input type="password" class="form-control" name="pass" value="<?php echo $row['admminPassword'] ?>">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" name="btn_update_admin" class="btn btn-success">Update</button>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <form action="includes/admin_action.inc.php" method="POST">
                                                <input type="hidden" name="id_hidden" value="<?php echo $row['id']?>">
                                                <button id = "delete<?php echo $row['id']?>" class="btn btn-danger " name="delete_admin">DELETE</button>
                                            </form>
                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </body>
    </html>
    <?php 
        if(isset($_GET['signup'])){
            if($_GET['signUp'] == "success"){
                echo '<script>alert("Add New Admin Successfully")</script>';
            }
        }
        if(isset($_GET['delete'])){
            if($_GET['delete'] == "success"){
                echo '<script>alert("Delete Admin Successfully")</script>';
            }
        }
        if(isset($_GET['update'])){
            if($_GET['update'] == "success"){
                echo '<script>alert("Update Admin Successfully")</script>';
            }
        }
    ?>                                  
<?php else:?>
    <?php header("Location: ../Ass/adminlogin.php");?>
<?php endif;?>