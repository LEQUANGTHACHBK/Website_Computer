<?php

    if(isset($_POST['btn_admin_login'])){

        require 'dbh.inc.php';

        $emaillogin = $_POST['admin_name'];
        $passlogin = $_POST['admin_pass'];
        
        if(empty($emaillogin)||empty($passlogin)){
            header("Location: ../adminlogin.php?error=emptyfields");
            exit(); 
        }
        else{
            $sql  = "SELECT * FROM admin WHERE adminEmail = ? OR adminName=?;";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: ../adminlogin.php?error=sqlerror");
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt,"ss",$emaillogin,$emaillogin);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if ($row = mysqli_fetch_assoc($result)) {
                    if($passlogin != $row['adminPassword']){
                        header("Location: ../adminlogin.php?error=wrongpassword");
                        exit();
                    }
                    else{
                        session_start();
                        $_SESSION['adminID']= $row['id'];
                        $_SESSION['adminName']= $row['adminName'];
                        header("Location: ../admin.php");
                        exit();
                    }
                }
                else{
                    header("Location: ../adminlogin.php?error=noUser");
                    exit();
                }
            }
        }
    }
    else{
        header("Location: ../adminlogin.php");
        exit(); 
    }
?>