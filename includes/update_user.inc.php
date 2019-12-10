<?php
    if(isset($_POST['btn_update_user'])){

        // Connect to database
        require 'dbh.inc.php';

        //Get data from Register Form
        $userName = $_POST['name_user'];
        $userDof = $_POST['dob'];
        $userPhone = $_POST['phone'];

        $sql = "UPDATE users SET userPhone = ?, userDob = ? WHERE userName = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location: ../user.php?error=sqlerror");
            exit(); 
        }
        else{
            mysqli_stmt_bind_param($stmt,"sss",$userPhone, $userDof, $userName);
            mysqli_stmt_execute($stmt);
            header("Location: ../user.php");
            exit();
        } 
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
?>