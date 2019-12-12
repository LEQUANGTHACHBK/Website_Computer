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
                                <li class="breadcrumb-item active" aria-current="page">User Management</li>
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
                                <button class ="btn btn-primary" data-toggle="modal" data-target="#addData">NEW PRODUCT</button>
                                <div class="modal fade" id="addData" tabindex="-1" role="dialog" aria-labelledby="addLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">ADD NEW PRODUCT</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <form action="includes/admin_action.inc.php" method="POST">
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="type" class="col-form-label">TYPE:</label>
                                                    <input type="text" class="form-control" name="type" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="name" class="col-form-label">NAME:</label>
                                                    <input type="text" class="form-control" name="name" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="images" class="col-form-label">IMAGE:</label>
                                                    <input type="text" class="form-control" name="images" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="price" class="col-form-label">PRICE:</label>
                                                    <input type="text" class="form-control" name="price" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="start" class="col-form-label">START:</label>
                                                    <input type="text" class="form-control" name="start" >
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="branch" class="col-form-label">BRANCH:</label>
                                                    <input type="text" class="form-control" name="branch" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="status" class="col-form-label">STATUS:</label>
                                                    <input type="text" class="form-control" name="status" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="monitor" class="col-form-label">MONITER:</label>
                                                    <input type="text" class="form-control" name="moniter" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="cpu" class="col-form-label">CPU:</label>
                                                    <input type="text" class="form-control" name="cpu" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="ram" class="col-form-label">RAM:</label>
                                                    <input type="text" class="form-control" name="ram">
                                                </div>
                                                <div class="form-group">
                                                    <label for="pin" class="col-form-label">PIN:</label>
                                                    <input type="text" class="form-control" name="pin">
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" name="btn_create_new_product" class="btn btn-success">Create</button>
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
                                    <th  width="10%">TYPE</th>
                                    <th  width="45%">NAME</th>
                                    <th  width="5%">IMAGE</th>
                                    <th  width="10%">PRICE</th>
                                    <th  width="10%">BRANCH</th>
                                    <th  width="10%">EDIT</th>
                                    <th  width="10%">DELETE</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                require 'includes/dbh.inc.php';
                                $result = $conn->query("SELECT * FROM products") or die($conn->error);   
                                while($row = $result->fetch_assoc()): ?>
                                    <tr class="text-center">
                                        <td><?php echo $row['Type']?></td>
                                        <td><?php echo $row['Name']?></td>
                                        <td><?php echo $row['Images']?></td>
                                        <td><?php echo $row['Price']?></td>
                                        <td><?php echo $row['Branch']?></td>
                                        <td >
                                            <button data-toggle="modal" data-target="#edit<?php echo $row['Id']?>" id ="<?php echo $row['Id']?>" class="btn btn-warning " name="edit_admin">EDIT</button>
                                            <div class="modal fade" id="edit<?php echo $row['Id']?>" tabindex="-1" role="dialog" aria-labelledby="addLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">EDIT PRODUCT</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="includes/admin_action.inc.php" method="POST">
                                                        <div class="modal-body text-left">
                                                            <input type="hidden" name="id" value="<?php echo $row['Id'] ?>">
                                                            <div class="form-group">
                                                                <label for="type" class="col-form-label">TYPE:</label>
                                                                <input type="text" class="form-control" name="type" value="<?php echo $row['Type'] ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name" class="col-form-label">NAME:</label>
                                                                <input type="text" class="form-control" name="name" value="<?php echo $row['Name'] ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="images" class="col-form-label">IMAGES:</label>
                                                                <input type="text" class="form-control" name="images" value="<?php echo $row['Images'] ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="price" class="col-form-label">PRICE:</label>
                                                                <input type="text" class="form-control" name="price" value="<?php echo $row['Price'] ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="start" class="col-form-label">START:</label>
                                                                <input type="text" class="form-control" name="start" value="<?php echo $row['Start'] ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="branch" class="col-form-label">BRANCH:</label>
                                                                <input type="text" class="form-control" name="branch" value="<?php echo $row['Branch'] ?>">
                                                            </div> 
                                                            <div class="form-group">
                                                                <label for="status" class="col-form-label">STATUS:</label>
                                                                <input type="text" class="form-control" name="status" value="<?php echo $row['Status'] ?>">
                                                            </div>  
                                                            <div class="form-group">
                                                                <label for="monitor" class="col-form-label">MONITOR:</label>
                                                                <input type="text" class="form-control" name="monitor" value="<?php echo $row['Monitor'] ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="cpu" class="col-form-label">CPU:</label>
                                                                <input type="text" class="form-control" name="cpu" value="<?php echo $row['Cpu'] ?>">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="ram" class="col-form-label">RAM:</label>
                                                                <input type="text" class="form-control" name="ram" value="<?php echo $row['Ram'] ?>">
                                                            </div> 
                                                            <div class="form-group">
                                                                <label for="pin" class="col-form-label">PIN:</label>
                                                                <input type="text" class="form-control" name="pin" value="<?php echo $row['Pin'] ?>">
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" name="btn_update_product" class="btn btn-success">Update</button>
                                                        </div>
                                                    </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <form action="includes/admin_action.inc.php" method="POST">
                                                <input type="hidden" name="id_hidden" value="<?php echo $row['Id']?>">
                                                <button id = "delete<?php echo $row['id']?>" class="btn btn-danger " name="delete_product">DELETE</button>
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
        if(isset($_GET['add'])){
            if($_GET['add'] == "success"){
                echo '<script>alert("Add New Product Successfully")</script>';
            }
        }
        if(isset($_GET['delete'])){
            if($_GET['delete'] == "success"){
                echo '<script>alert("Delete Product Successfully")</script>';
            }
        }
        if(isset($_GET['update'])){
            if($_GET['update'] == "success"){
                echo '<script>alert("Update Product Successfully")</script>';
            }
        }
    ?>                                  
<?php else:?>
    <?php header("Location: ../Ass/adminlogin.php");?>
<?php endif;?>





