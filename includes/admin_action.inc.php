<?php
    if(isset($_POST['btn_create_new_admin'])){

        // Connect to database
        require 'dbh.inc.php';

        //Get data from Register Form
        $adminName = $_POST['name'];
        $adminEmail = $_POST['email'];
        $adminDob = $_POST['dob'];
        $adminPassword = $_POST['pass'];

        if(empty($adminName) || empty($adminEmail)|| empty($adminDob)||empty($adminPassword)){
            header("Location: ../admin.php?error=emtyfields");
            exit();
        }
        else if(!filter_var($adminEmail,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$adminName)){
            header("Location: ../admin.php?error=invalidemailandname");
            exit();
        }
        else if(!filter_var($adminEmail,FILTER_VALIDATE_EMAIL)){
            header("Location: ../signup.php?error=invalidemail");
            exit(); 
        }
        else if(!preg_match("/^[a-zA-Z0-9]*$/",$adminName)){
            header("Location: ../signup.php?error=invalidname");
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
                    header("Location: ../admin.php?error=admintaken");
                    exit(); 
                }
                else{
                    $sql = "INSERT INTO admin (adminName,adminEmail,adminDob,admminPassword) VALUES  (?,?,?,?)";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt,$sql)) {
                        header("Location: ../admin.php?error=sqlerror");
                        exit(); 
                    }
                    else{
                        mysqli_stmt_bind_param($stmt,"ssss",$adminName,$adminEmail,$adminDob,$adminPassword);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../admin.php?signUp=success");
                        exit();
                    }
                }
            }
        } 
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }


    if(isset($_POST['btn_update_admin'])){

        // Connect to database
        require 'dbh.inc.php';

        //Get data from Register Form
        $adminId = $_POST['id'];
        $adminName = $_POST['name'];
        $adminEmail = $_POST['email'];
        $adminDob = $_POST['dob'];
        $adminPassword = $_POST['pass'];

        if(empty($adminName) || empty($adminEmail)|| empty($adminDob)||empty($adminPassword)){
            header("Location: ../admin.php?error=emtyfields");
            exit();
        }
        else if(!filter_var($adminEmail,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$adminName)){
            header("Location: ../admin.php?error=invalidemailandname");
            exit();
        }
        else if(!filter_var($adminEmail,FILTER_VALIDATE_EMAIL)){
            header("Location: ../signup.php?error=invalidemail");
            exit(); 
        }
        else if(!preg_match("/^[a-zA-Z0-9]*$/",$adminName)){
            header("Location: ../signup.php?error=invalidname");
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
                    header("Location: ../admin.php?error=admintaken");
                    exit(); 
                }
                else{
                    $sql = "UPDATE admin SET adminName = ?, adminEmail = ?,adminDob=?,admminPassword=? WHERE id = ?;";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt,$sql)) {
                        header("Location: ../admin.php?error=sqlerror");
                        exit(); 
                    }
                    else{
                        mysqli_stmt_bind_param($stmt,"sssss",$adminName,$adminEmail,$adminDob,$adminPassword,$adminId);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../admin.php?update=success");
                        exit();
                    }
                }
            }
        } 
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }




    if(isset($_POST['delete_admin'])){

        // Connect to database
        require 'dbh.inc.php';

        //Get data from Register Form
        $adminId= $_POST['id_hidden'];
        $sql = "DELETE FROM admin WHERE id = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location: ../admin.php?error=sqlerror");
            exit(); 
        }
        else{
            mysqli_stmt_bind_param($stmt,"s",$adminId);
            mysqli_stmt_execute($stmt);
            header("Location: ../admin.php?delete=success");
            exit(); 
        } 
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
    
?>