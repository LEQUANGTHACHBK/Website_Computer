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
            header("Location: ../admin_user_managerment.php?error=invalidemail");
            exit(); 
        }
        else if(!preg_match("/^[a-zA-Z0-9]*$/",$adminName)){
            header("Location: ../admin_user_managerment.php?error=invalidname");
            exit(); 
        }
        else{
            $sql = "SELECT adminName FROm admin WHERE adminName = ?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt,$sql)) {
                header("Location: ../admin_user_managerment.php?error=sqlerror");
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

<!-- For USER -->



<?php
    if(isset($_POST['btn_create_new_user'])){

        // Connect to database
        require 'dbh.inc.php';

        //Get data from Register Form
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $userPhone = $_POST['phone'];
        $userDoB = $_POST['dob'];
        $userPassword = $_POST['pass'];

        if(empty($userName) || empty($userEmail)|| empty($userPassword)){
            header("Location: ../admin_user_managerment.php?error=emptyfields");
            exit();
        }
        else if(!filter_var($userEmail,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$userName)){
            header("Location: ../admin_user_managerment.php?error=invalidemailandname");
            exit();
        }
        else if(!filter_var($userEmail,FILTER_VALIDATE_EMAIL)){
            header("Location: ../admin_user_managerment.php?error=invalidemail&name_register");
            exit(); 
        }
        else if(!preg_match("/^[a-zA-Z0-9]*$/",$userName)){
            header("Location: ../admin_user_managerment.php?error=invalidname&email_register");
            exit(); 
        }
        else{
            $sql = "SELECT userName FROm users WHERE userName = ?";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt,$sql)) {
                header("Location: ../admin_user_managerment.php?error=sqlerror");
                exit(); 
            }
            else{
                mysqli_stmt_bind_param($stmt,"s",$userName);
                mysqli_stmt_execute($stmt);
                mysqli_stmt_store_result($stmt);
                $requltCheck=mysqli_stmt_num_rows($stmt);
                if($requltCheck>0){
                    header("Location: ../admin_user_managerment.php?error=usertaken");
                    exit(); 
                }
                else{
                    $sql = "INSERT INTO users (userName,userEmail,userPhone,userDoB,userPass) VALUES  (?,?,?,?,?)";
                    $stmt = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($stmt,$sql)) {
                        header("Location: ../admin_user_managerment.php?error=sqlerror");
                        exit(); 
                    }
                    else{
                        $hashedPassword = password_hash($userPassword,PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt,"sssss",$userName,$userEmail,$userPhone, $userDoB,$hashedPassword);
                        mysqli_stmt_execute($stmt);
                        header("Location: ../admin_user_managerment.php?signUp=success");
                        exit();
                    }
                }
            }
        } 
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }

    if(isset($_POST['btn_update_user'])){

        // Connect to database
        require 'dbh.inc.php';

        //Get data from Register Form
        $userId = $_POST['id'];
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $userPhone = $_POST['phone'];
        $userDoB = $_POST['dob'];

        if(empty($userName) || empty($userEmail)){
            header("Location: ../admin_user_managerment.php?error=emtyfields");
            exit();
        }
        else if(!filter_var($userEmail,FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$userName)){
            header("Location: ../admin_user_managerment.php?error=invalidemailandname");
            exit();
        }
        else if(!filter_var($userEmail,FILTER_VALIDATE_EMAIL)){
            header("Location: ../admin_user_managerment.php?error=invalidemail");
            exit(); 
        }
        else if(!preg_match("/^[a-zA-Z0-9]*$/",$userName)){
            header("Location: ../admin_user_managerment.php?error=invalidname");
            exit(); 
        }
        else{
            
            $sql = "UPDATE users SET userName = ?, userEmail = ?, userPhone = ?, userDoB=? WHERE Id = ?;";
            $stmt = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($stmt,$sql)) {
                header("Location: ../admin_user_managerment.php?error=sqlerror");
                exit(); 
            }
            else{
                mysqli_stmt_bind_param($stmt,"sssss",$userName,$userEmail,$userPhone,$userDoB,$userId);
                mysqli_stmt_execute($stmt);
                header("Location: ../admin_user_managerment.php?update=success");
                exit();
            }
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }




    if(isset($_POST['delete_user'])){

        // Connect to database
        require 'dbh.inc.php';

        //Get data from Register Form
        $adminId= $_POST['id_hidden'];
        $sql = "DELETE FROM users WHERE id = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location: ../admin_user_managerment.php?error=sqlerror");
            exit(); 
        }
        else{
            mysqli_stmt_bind_param($stmt,"s",$adminId);
            mysqli_stmt_execute($stmt);
            header("Location: ../admin_user_managerment.php?delete=success");
            exit(); 
        } 
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
  
    

    // FOR PRODUCT 

    if(isset($_POST['btn_create_new_product'])){

        // Connect to database
        require 'dbh.inc.php';

        //Get data from Register Form
        $producttype = $_POST['type'];
        $productname = $_POST['name'];
        $productimages = $_POST['images'];
        $productprice = $_POST['price'];
        $productstart = $_POST['start'];
        $productbranch = $_POST['branch'];
        $productstatus = $_POST['status'];
        $productmonitor = $_POST['monitor'];
        $productcpu = $_POST['cpu'];
        $productram = $_POST['ram'];
        $productpin = $_POST['pin'];

        $sql = "INSERT INTO products (Type,Name,Images,Price,Start,Branch,Status,Monitor,Cpu,Ram,Pin) VALUES  (?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location: ../admin_product_managerment.php?error=sqlerror");
            exit(); 
        }
        else{
            mysqli_stmt_bind_param($stmt,"sssssssssss",$producttype,$productname,$productimages,$productprice,$productstart,$productbranch,$productstatus,$productmonitor,$productcpu,$productram,$productpin);
            mysqli_stmt_execute($stmt);
            header("Location: ../admin_product_managerment.php?add=success");
            exit();
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }

    if(isset($_POST['btn_update_product'])){

        // Connect to database
        require 'dbh.inc.php';

        //Get data from Register Form
        $productid = $_POST['id'];
        $producttype = $_POST['type'];
        $productname = $_POST['name'];
        $productimages = $_POST['images'];
        $productprice = $_POST['price'];
        $productstart = $_POST['start'];
        $productbranch = $_POST['branch'];
        $productstatus = $_POST['status'];
        $productmonitor = $_POST['monitor'];
        $productcpu = $_POST['cpu'];
        $productram = $_POST['ram'];
        $productpin = $_POST['pin'];

        $sql = "UPDATE products SET Type = ?, Name = ?, Images = ?, Price=? , Start = ?, Branch = ?, Status = ?, Monitor = ?, Cpu = ?, Ram = ?, Pin = ? WHERE Id = ?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location: ../admin_product_managerment.php?error=sqlerror");
            exit(); 
        }
        else{
            mysqli_stmt_bind_param($stmt,"ssssssssssss",$producttype,$productname,$productimages,$productprice,$productstart,$productbranch,$productstatus,$productmonitor,$productcpu,$productram,$productpin,$productid);
            mysqli_stmt_execute($stmt);
            header("Location: ../admin_product_managerment.php?update=success");
            exit();
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }

    if(isset($_POST['delete_product'])){

        // Connect to database
        require 'dbh.inc.php';

        //Get data from Register Form
        $productId= $_POST['id_hidden'];
        $sql = "DELETE FROM products WHERE Id = ?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt,$sql)) {
            header("Location: ../admin_product_managerment.php?error=sqlerror");
            exit(); 
        }
        else{
            mysqli_stmt_bind_param($stmt,"s",$productId);
            mysqli_stmt_execute($stmt);
            header("Location: ../admin_product_managerment.php?delete=success");
            exit(); 
        } 
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }

?>