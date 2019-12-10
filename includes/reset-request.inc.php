<?php 

    if(isset($_POST['btn-resetPassword'])){
        $selector = bin2hex(random_bytes(8));
        $token = random_bytes(32);

        $url = "http://localhost:8080/Ass/create-new-password.php?selecter=". $selector . "&validator=" . bin2hex($token);
        
        $expires = date("U") + 1800;

        require 'dbh.inc.php';

        $userEmail = $_POST['email'];
        
        $sql = "DELETE FROM passwordreset WHERE pwResetEmail = ?";

        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$sql)){
            echo "There was an error whrn delete passwordreset!";
            exit(); 
        }else{
            mysqli_stmt_bind_param($stmt,"s",$userEmail);
            mysqli_stmt_execute($stmt);
        }

        $sql = "INSERT INTO passwordreset(pwResetEmail,pwResetSelector,pwResetToken,pwResetExpires) VALUES (?,?,?,?);";

        $stmt = mysqli_stmt_init($conn);

        if(!mysqli_stmt_prepare($stmt,$sql)){
            echo "There was an error when insert to passwordreset!";
            exit();
        }else{
            $hashedToken = password_hash($token,PASSWORD_DEFAULT);
            mysqli_stmt_bind_param($stmt,"ssss",$userEmail,$selector,$hashedToken,$expires);
            mysqli_stmt_execute($stmt);
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);

        $to = $userEmail;
        $subject = 'Reset your password for BK_Computer';
        $message = '<p>We received a password reset request. The link to reset your password make this request, you can ignore this email</p>';
        $message .= '<Here is your password reset link: <br>';
        $message .= '<a href="'. $url .'">' . $url . '</a></p>';
    }else{
        header("Location: ../index.php");
    }
?>