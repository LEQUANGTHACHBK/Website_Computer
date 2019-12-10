<?php 
    require './LayOut/header.php'
?>
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-lg-4 bg-light pb-5" style="min-height: 80vh">
            <div class="row mt-5 d-flex justify-content-center" >
                <img class="col-lg-5 " src="Public/images/team/3.PNG" alt="user_image" style="width:80%;border-radius:50%">   
            </div>
            <?php 
                 require 'includes/dbh.inc.php';
                 $name = $_SESSION['userName'];
                 $result = $conn->query("SELECT * FROM users WHERE userName = '$name'") or die($conn->error);
                 while($row = $result->fetch_assoc()): ?>

            <div class="row mt-2 d-flex justify-content-center" >
                <h3><?php echo $row['userName']?> <span><i class="fa fa-check" style="color:white;background-color:blue; border-radius:50%" aria-hidden="true"></i></span></h3>
            </div>
            <div class="row  d-flex justify-content-center" >
                <a href="#" style="text-decoration: none">View Profile</a>
            </div>
            <div class="row mt-2 d-flex justify-content-left  p-3" >
                <div style="margin-left:80px"><a href="#" style="text-decoration:none" id="ACCOUNT"><i class="fa fa-user fa-2x mr-3" aria-hidden="true"></i><span style="font-weight: 700;font-size:1em">ACCOUNT</span><i class="fa fa-chevron-right ml-3" aria-hidden="true"></i></a></div>
            </div>
            <div class="row mt-2 d-flex justify-content-left  p-3" >
                <div style="margin-left:80px"><a href="#" style="text-decoration:none" id="CHANGE"><i class="fa fa-lock fa-2x mr-3" aria-hidden="true"></i><span style="font-weight: 700;font-size:1em">CHANGE PASSWORD</span><i class="fa fa-chevron-right ml-3" aria-hidden="true"></i></a></div>
            </div>
            <div class="row mt-2 d-flex justify-content-left  p-3" >
                <div style="margin-left:80px"><a href="includes/logout.inc.php" style="text-decoration:none"><i class="fa fa-sign-out fa-2x mr-3" aria-hidden="true"></i><span style="font-weight: 700;font-size:1em">LOG OUT</span><i class="fa fa-chevron-right ml-3" aria-hidden="true"></i></a></div>
            </div>
        </div>
        <div class="col-lg-4 bg-light" id="update_account">
            <h3 class="mt-5 d-flex justify-content-center text-primary" >ACCOUNT</h3>
            <form action="includes/update_user.inc.php" class="mt-3" method="POST">
               <div class="form-group">
                    <label for="name_user" style="font-weight:600">NAME</label>
                    <input type="text" class="form-control" name="name_user"  value=<?php echo $row['userName'] ?>>
                </div>
                <div class="form-group">
                    <label for="email_user" style="font-weight:600">EMAIL</label>
                    <input type="email" class="form-control" name="email_user"  value=<?php echo $row['userEmail'] ?> >
                </div>
                <div class="form-group">
                    <label for="dob" style="font-weight:600">BIRTH DAY</label>
                    <input type="text" class="form-control" name="dob" value=<?php echo $row['userDob'] ?> >
                </div>
                <div class="form-group">
                    <label for="phone" style="font-weight:600">PHONE</label>
                    <input type="text" class="form-control" name="phone" value=<?php echo $row['userPhone'] ?> >
                </div>
                <button type="submit" class="btn btn-primary" name="btn_update_user" >UPDATE</button>
            </form>
        </div>
        <?php endwhile; ?>
        <div class="col-lg-4 bg-light" id="update_password" style="display:none">
            <h3 class="mt-5 d-flex justify-content-center text-primary" >UPDATE PASSWORD</h3>
            <form action="" class="mt-3" method="POST">
                <div class="form-group">
                    <label for="password" style="font-weight:600">PASSWORD</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="form-group">
                    <label for="new_password" style="font-weight:600">NEW PASSWORD</label>
                    <input type="password" class="form-control" id="new_password">
                </div>
                <div class="form-group">
                    <label for="re_new_password" style="font-weight:600">REPEAT NEW PASSWORD</label>
                    <input type="password" class="form-control" id="re_new_password">
                </div>
                <button type="submit" class="btn btn-primary" >CHANGE</button>
            </form>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#ACCOUNT').click(function(){
            $('#update_account').show();
            $('#update_password').hide();
        })
        $('#CHANGE').click(function(){
            $('#update_account').hide();
            $('#update_password').show();
        })
    })
</script>

<?php 
    require './LayOut/footer.php'
?>