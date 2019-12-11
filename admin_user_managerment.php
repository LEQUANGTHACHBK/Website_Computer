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
            <div id = "user-right">
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
                <div>
                    <div class="row">
                        <form action="">
                            <button class="btn btn-success" id="create_new_user">NEW USER</button>
                        </form>
                    </div>
                    <div class="row">
                        <table class="table mt-2">
                            <thead>
                                <tr class="text-center">
                                    <th  width="10%">ID</th>
                                    <th  width="30%">NAME</th>
                                    <th  width="40%">EMAIL</th>
                                    <th  width="20%">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                require 'includes/dbh.inc.php';
                                $result = $conn->query("SELECT * FROM users") or die($conn->error);   
                                while($row = $result->fetch_assoc()): ?>
                                    <tr class="text-center">
                                        <td><?php echo $row['Id']?></td>
                                        <td><?php echo $row['userName']?></td>
                                        <td><?php echo $row['userEmail']?></td>
                                        <td class="row">
                                            <button id = "<?php echo $row['id']?>" class="btn btn-warning edit_admin mr-2">EDIT</button>
                                            <form action="includes/admin_action.inc.php" method="POST">
                                                <input type="hidden" name="id_user_hidden" value="<?php echo $row['Id']?>">
                                                <button id = "<?php echo $row['Id']?>" class="btn btn-danger " name="delete_user">DELETE</button>
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

<?php else:?>
    <?php header("Location: ../Ass/adminlogin.php");?>
<?php endif;?>