<?php
    if(isset($_POST['btn_new_admin'])){

        // Connect to database
        require 'dbh.inc.php';

        //Get data from Register Form
        $adminName = $_POST['admin_name'];
        $adminEmail = $_POST['admin_email'];
        $adminPassword = $_POST['admin_pass'];
        $adminPasswordRepeat = $_POST['re_admin_pass'];

        if(empty($adminName) || empty($adminEmail)|| empty($adminPassword)||empty($adminPasswordRepeat)){
            header("Location: ../admin.php?error=emptyfields");
            exit();
        }
        else if(!filter_var($adminEmail,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$adminName)){
            header("Location: ../admin.php?error=invalidemailandname");
            exit();
        }
        else if(!filter_var($adminEmail,FILTER_VALIDATE_EMAIL)){
            header("Location: ../admin.php?error=invalidemail");
            exit(); 
        }
        else if(!preg_match("/^[a-zA-Z0-9]*$/",$adminName)){
            header("Location: ../admin.php?error=invalidname");
            exit(); 
        }
        else if($adminPassword !== $adminPasswordRepeat){
            header("Location: ../admin.php?error=passwordcheck");
            exit();
        }
        else{
            $sql = "SELECT adminName FROm admin WHERE adminName = ?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt,$sql)) {
                header("Location: ../admin.php?error=sqlerror");
                exit(); 
            }
            else{
                mysqli_stmt_bind_param($stmt,"s",$adminName);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $requltCheck=mysqli_stmt_num_rows($stmt);
                if($requltCheck>0){
                    header("Location: ../admin.php?error=usertaken");
                    exit(); 
                }
                else{
                    $sql = "INSERT INTO admin (adminName,adminEmail,adminPassword) VALUES  (?,?,?)";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt,$sql)) {
                        header("Location: ../admin.php?error=sqlerror");
                        exit(); 
                    }
                    else{
                        mysqli_stmt_bind_param($stmt,"sss",$adminName,$adminEmail,$adminPassword);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../admin.php?admin=success");
                        exit();
                    }
                }
            }
        } 
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
    else{
        header("Location: ../admin.php");
        exit();
    }
?>