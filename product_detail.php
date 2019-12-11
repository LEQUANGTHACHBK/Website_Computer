<?php require_once 'LayOut/header.php' ?>
    <!--Banner-->
    <div class="mb-5" style="background-color:#008744">
        <div class="container">
          <div class="row pt-3">
            <div class="col-lg-4 d-none d-lg-block">
              <p style="color:white;font-weight:500"><img src="https://img.icons8.com/nolan/50/000000/open-sign.png"> Open 9am-9pm, Sun 9am-4pm</p>
            </div>
            <div class="col-lg-4">
            </div>
            <div class="col-lg-2 pb-2 col-md-6 col-sm-6 col-6">
              <?php  if(isset($_SESSION['userId'])): ?>
                <div class="nav-item dropdown">
                  <a class=" nav-link dropdown-toggle pt-0 pl-0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; text-decoration:none;font-weight:500"><img src="https://img.icons8.com/ios-filled/32/000000/user.png"> <?php echo $_SESSION['userName']?></a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:white;">
                    <button class="btn-light dropdown-item account" type="button" ><a href="user.php"><img src="https://img.icons8.com/nolan/32/000000/user-male.png">ACCOUNT</a></button>
                    <form action="includes/logout.inc.php" method="POST">
                      <button class=" btn btn-light dropdown-item account" type="submit" style="color:black;font-weight:600" ><img src="https://img.icons8.com/nolan/32/000000/exit.png">LOGOUT</button>
                    </form>
                  </div>
                </div>
        
              <?php else:?>
                <div class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle pt-0 pl-0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; text-decoration:none;font-weight:500"><img src="https://img.icons8.com/ios-filled/32/000000/user.png"> Account</a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:white;">
                    <button class="btn-light dropdown-item account" type="button" ><a href="login.php"><img src="https://img.icons8.com/nolan/32/000000/login-rounded-right.png"> LOGIN</a></button>
                    <button class="btn-light dropdown-item account" type="button" ><a href="signup.php"><img src="https://img.icons8.com/nolan/32/000000/add-user-male.png"> SIGNUP</a></button>
                  </div>
              </div>
              <?php endif;?>
          </div>
          <div class="col-lg-2 pb-2 col-md-6 col-sm-6 col-6">
              <a href="#"style="color: white; text-decoration:none;font-weight:500"><img src="https://img.icons8.com/ios/32/000000/online-store.png"> Store</a>
            </div>
          </div>
        </div>
        <hr style="border:none; border-bottom:solid 2px white;margin:0px 0px">
        <div class="container">
          <div class="row pt-2 pb-2">
            <div class="col-lg-3 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
              <a href="index.php" style="color:white; font-size:2em; font-weight:600;text-decoration:none">BK COMPUTER</a>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12 col-12">
            <form class="form-inline my-2 my-lg-0" >
              <input class="form-control mr-sm-2" style="width:70%" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" style="width:25%" type="submit">Search</button>
            </form>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-6">
            <img src="https://img.icons8.com/ios-filled/32/000000/ringing-phone.png"><a href="$" style="color: white; text-decoration:none;font-weight:500" > (028)123456789</a>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6 col-6">
              <a style= "color: white; text-decoration:none;font-weight:500" id="cart-popover" data-placement="bottom" title="shopping cart">
              <img src="https://img.icons8.com/wired/32/000000/add-shopping-cart.png">
                <span class="badge bg-dark text-white" style="border-radius: 40%"></span>
                <span>Products</span>
              </a>
            </div>
          </div>
        </div>
    </div>
    <?php 
        $product_id = $_GET['product_id'];
        require 'includes/dbh.inc.php';
        $result = $conn->query("SELECT * FROM products WHERE Id = $product_id") or die($conn->error);   
        while($row = $result->fetch_assoc()): ?>
          <div class="container">
            <div class="row">
              <div class="col-lg-3 col-md-4">
                <div class="d-flex justify-content-center">
                  <img src="Public/images/products/<?php echo $row["Images"]?>" style="width:100%" title="<?php echo $row['Name']?>">
                </div>
              </div>
              <div class="col-lg-5 col-md-8">
                <h3><?php echo $row['Name']?></h3>
                <div class="start">
                  <?php for($i = 0; $i < $row["Start"];$i++):?>
                    <span class="fa fa-star checked"></span>
                  <?php endfor; ?>
                </div>
                <p>Thương hiệu: <span style="color:#008744;font-weight:700"><?php echo $row['Branch']?></span> |<span> Tình Trạng: <span style="color:#008744;font-weight:700"><?php echo $row['Status']?></span></span></p>
                <p style="font-size: 1.5em; color:#008744; font-weight:700"><?php echo $row['Price']?></p>
                <p><img src="https://img.icons8.com/color/32/000000/checked-checkbox.png"><?php echo $row['Monitor']?></p>
                <p><img src="https://img.icons8.com/color/32/000000/checked-checkbox.png"><?php echo $row['Cpu']?></p>
                <p><img src="https://img.icons8.com/color/32/000000/checked-checkbox.png"><?php echo $row['Ram']?></p>
                <p><img src="https://img.icons8.com/color/32/000000/checked-checkbox.png"><?php echo $row['Pin']?></p>
                <div class="row">
                  <div class="col-6">
                    <button class="btn btn-success" style="width:100%; font-weight:700">MUA NGAY
                    <br> <span style="font-size:0.7em;font-weight:500"> Giao hàng miễn phí tận nơi</span>
                    </button>
                  </div>
                  <div class="col-6">
                    <button class="btn btn-dark" style="width:100%; font-weight:700">GỌI ĐẶT HÀNG
                    <br> <span style="font-size:0.7em;font-weight:500">Vui lòng gọi (028)12345678</span>
                    </button>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 d-none d-lg-block ">
                <div class="d-flex justify-content-center">
                  <img src="Public/images/products/product_detail.PNG" alt="">
                </div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>  
    <br>
    <div class="container mb-5">
      <div class="row ml-0 mb-2"><h2>MÔ TẢ SẢN PHẨM</h2></div>
      <div class="col-lg-10 col-md-12 col-sm-12 col-12">
        <img src="Public/images/products/Thongso.PNG" style="width:100%"alt="">
      </div>
    </div>                
    <?php require_once 'LayOut/footer.php' ?>