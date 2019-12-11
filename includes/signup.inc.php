<?php
    if(isset($_POST['btn_register'])){

        // Connect to database
        require 'dbh.inc.php';

        //Get data from Register Form
        $userName = $_POST['name_register'];
        $userEmail = $_POST['email_register'];
        $userPassword = $_POST['pass_register'];
        $userPasswordRepeat = $_POST['re_pass_register'];

        if(empty($userName) || empty($userEmail)|| empty($userPassword)||empty($userPasswordRepeat)){
            header("Location: ../signup.php?error=emptyfields&name_register=".$userName."&email_register=".$userEmail);
            exit();
        }
        else if(!filter_var($userEmail,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$userName)){
            header("Location: ../signup.php?error=invalidemailandname");
            exit();
        }
        else if(!filter_var($userEmail,FILTER_VALIDATE_EMAIL)){
            header("Location: ../signup.php?error=invalidemail&name_register=".$userName);
            exit(); 
        }
        else if(!preg_match("/^[a-zA-Z0-9]*$/",$userName)){
            header("Location: ../signup.php?error=invalidname&email_register=".$userEmail);
            exit(); 
        }
        else if($userPassword !== $userPasswordRepeat){
            header("Location: ../signup.php?error=passwordcheck&name_register=".$userName."&email_register=".$userEmail);
            exit();
        }
        else{
            $sql = "SELECT userName FROm users WHERE userName = ?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt,$sql)) {
                header("Location: ../signup.php?error=sqlerror1");
                exit(); 
            }
            else{
                mysqli_stmt_bind_param($stmt,"s",$userName);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $requltCheck=mysqli_stmt_num_rows($stmt);
                if($requltCheck>0){
                    header("Location: ../signup.php?error=usertaken&email_register=".$userEmail);
                    exit(); 
                }
                else{
                    $sql = "INSERT INTO users (userName,userEmail,userPass) VALUES  (?,?,?)";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt,$sql)) {
                        header("Location: ../signup.php?error=sqlerror2");
                        exit(); 
                    }
                    else{
                        $hashedPassword = password_hash($userPassword,PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt,"sss",$userName,$userEmail,$hashedPassword);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../signup.php?signUp=success");
                        exit();
                    }
                }
            }
        } 
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
?>