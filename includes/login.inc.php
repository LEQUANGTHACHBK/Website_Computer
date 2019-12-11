<?php

    if(isset($_POST['btn_login'])){

        require 'dbh.inc.php';

        $emaillogin = $_POST['email_login'];
        $passlogin = $_POST['pass_login'];
        
        if(empty($emaillogin)||empty($passlogin)){
            header("Location: ../login.php?error=emptyfields");
            exit(); 
        }
        else{
            $sql  = "SELECT * FROM users WHERE userEmail = ? OR userName=?;";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt,$sql)){
                header("Location: ../login.php?error=sqlerror");
                exit();
            }
            else{
                mysqli_stmt_bind_param($stmt,"ss",$emaillogin,$emaillogin);
                mysqli_stmt_execute($stmt);
                $result = mysqli_stmt_get_result($stmt);
                if ($row = mysqli_fetch_assoc($result)) {
                    $passCheck = password_verify($passlogin,$row['userPass']);
                    if($passCheck == false){
                        header("Location: ../login.php?error=wrongpassword");
                        exit();
                    }
                    else if ($passCheck == true){
                        session_start();
                        $_SESSION['userId']= $row['Id'];
                        $_SESSION['userName']= $row['userName'];
                        header("Location: ../accessories.php");
                        exit();
                    }
                    else{
                        header("Location: ../login.php?error=wrongpassword");
                        exit();
                    }
                }
                else{
                    header("Location: ../login.php?error=noUser");
                    exit();
                }
            }
        }
    }
    else{
        header("Location: ../login.php?a");
        exit(); 
    }
?>