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
            <form class="form-inline my-2 my-lg-0" action="accessories.php" method="POST" >
              <input class="form-control mr-sm-2" style="width:70%" name="searchtext" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" name="btn_search" style="width:25%" type="submit">Search</button>
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
    <div class="container ">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-12 d-flex justify-content-center banner">
          <img src="Public/images/Banner/banner_1.png" alt="banner1" title="Ổ cứng SSD Samsung 860 EVO" />
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12 d-flex justify-content-center banner">
          <img src="Public/images/Banner/banner_2.png" alt="banner2" title="Thẻ nhớ Ngoài Đa Năng "/>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12 ">
          <div class="row">
            <div class="col-lg-12 banner d-flex justify-content-center">
              <img src="Public/images/Banner/banner_3.jpg" title="Ram Máy Tính" />
            </div>
            <div class="col-lg-12 banner d-flex justify-content-center">
              <img  src="Public/images/Banner/banner_4.png" title="Ổ Cứng Di Động WD"/>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End of Banner-->
        
    <!--TopSell-->
    <div class="container">
      <div class="row mt-2">
        <div class="col-lg-12">
          <div class="text-center ">
            <h2>
              <a href="#" id="hotdeal">CYBER MONDAY</a>
            </h2>
          </div>
        </div>
      </div>
    </div>
    <!--End Of TopSale-->
    
    <?php if(isset($_POST['btn_search'])&& !empty($_POST['searchtext'])):?>
              
      <div class="col-lg-12 col-md-12 col-sm-12 col-12" id="search_laptop_area">
        <div class="row">
        <?php 
            require 'includes/dbh.inc.php';
            $searchText = $_POST['searchtext'];
            $result = $conn->query("SELECT * FROM products WHERE Name LIKE '$searchText' OR Branch LIKE '$searchText' AND type = 'ssd'") or die($conn->error);   
            if(mysqli_num_rows($result) <= 0){
              echo '<h1>NOT FOUND</h1>';
            }else{
              while($row = $result->fetch_assoc()): ?>
                <div class="col-lg-3 col-md-3 col-sm-4  col-6  d-flex justify-content-center ">
                <div class="card" style="height: 24rem;">
                    <img src="Public/images/products/<?php echo $row["Images"]?>"  class="card-img-top" title="<?php echo $row["Name"] ?>">
                    <div class="card-body"> 
                    <p class="card-text text-justify"><a href="product_detail.php?product_id=<?php echo $row["Id"] ?>" id="name<?php echo $row["Id"]?>" class="product_name" ><?php echo $row["Name"]?></a></p>
                    <input type="hidden" name="hidden_price" id="nameh<?php echo $row["Id"]?>" value="<?php echo $row["Name"]?>" />
                    <p class="text-justify price"><?php echo $row["Price"]?><sup style="text-decoration:underline"> đ</sup></p>
                    <input type="hidden" name="hidden_price" id="priceh<?php echo $row["Id"]?>" value=<?php echo $row["Price"]?> />
                    <div class="start">
                        <?php for($i = 0; $i < $row["Start"];$i++):?>
                        <span class="fa fa-star checked"></span>
                        <?php endfor; ?>
                    </div>
                    <div class="row ">
                        <button href="#" class="btn btn-success mr-1 add_to_cart" id=<?php echo $row["Id"]?> style="width:100%" title="Mua Nhanh">Add To Cart</button>
                    </div>
                    </div>
                </div>
                </div> 
                <?php endwhile; ?>  
            <?php } ?>
            
        </div>
        
      </div>


    <?php else: ?>




    <!--SSD-->
    <div class = "container mt-2" id="ssd_area">
      <div class="col-12 cover ">
        <h2 style="margin: 0px; padding: 0px;"><a class="rounded-top" href="#ssd_area" id="ssd"> SSD </a></h2>
      </div>
      <div >
        <div class="row">
          <div class="col-lg-3 d-none d-lg-block">
            <a href="#"><img style="padding-top: 50px;" src="./Public/images/Ssd/banner_ssd.png" alt="" title="SSD chuẩn kết nối PCls"></a>
          </div>
          <div class="col-lg-9 col-md-12 col-sm-12 col-12">
            <div class="row">
              <?php 
                require 'includes/dbh.inc.php';
                $result = $conn->query("SELECT * FROM products WHERE type = 'ssd'") or die($conn->error);   
                while($row = $result->fetch_assoc()): ?>
                  
                  <div class="col-lg-3 col-md-3 col-sm-4  col-6  d-flex justify-content-center ">
                  <div class="card" style="height: 24rem;">
                    <img src="Public/images/products/<?php echo $row["Images"]?>"  class="card-img-top" title="<?php echo $row["Name"] ?>">
                    <div class="card-body"> 
                      <p class="card-text text-justify"><a href="product_detail.php?product_id=<?php echo $row["Id"] ?>" id="name<?php echo $row["Id"]?>" class="product_name" ><?php echo $row["Name"]?></a></p>
                      <input type="hidden" name="hidden_price" id="nameh<?php echo $row["Id"]?>" value="<?php echo $row["Name"]?>" />
                      <p class="text-justify price"><?php echo $row["Price"]?><sup style="text-decoration:underline"> đ</sup></p>
                      <input type="hidden" name="hidden_price" id="priceh<?php echo $row["Id"]?>" value=<?php echo $row["Price"]?> />
                      <div class="start">
                        <?php for($i = 0; $i < $row["Start"];$i++):?>
                          <span class="fa fa-star checked"></span>
                        <?php endfor; ?>
                      </div>
                      <div class="row ">
                        <button href="#" class="btn btn-success mr-1 add_to_cart" id=<?php echo $row["Id"]?> style="width:100%" title="Mua Nhanh">Add To Cart</button>
                      </div>
                    </div>
                  </div>
                </div> 
                <?php endwhile; ?>  
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--End of SSD-->

    <!--SSD_HDD REMOTE-->
    <div class = "container mt-2" id="sdd_hdd_area">
        <div class="col-12 cover ">
          <h2 style="margin: 0px; padding: 0px;"><a class="rounded-top" id= "hddssd" href="#sdd_hdd_area">SDD & HDD REMOTE</a></h2>
        </div>
        <div>
          <div class="row">
            
            <div class="col-lg-9 col-md-12 col-sm-12 col-12">
              <div class="row">
                <?php 
                  require 'includes/dbh.inc.php';
                  $result = $conn->query("SELECT * FROM products WHERE type = 'hdd'") or die($conn->error);   
                  while($row = $result->fetch_assoc()): ?>
                    
                    <div class="col-lg-3 col-md-3 col-sm-4  col-6  d-flex justify-content-center ">
                    <div class="card" style="height: 24rem;">
                      <img src="Public/images/products/<?php echo $row["Images"]?>"  class="card-img-top" title="<?php echo $row["Name"] ?>">
                      <div class="card-body"> 
                        <p class="card-text text-justify"><a href="product_detail.php?product_id=<?php echo $row["Id"] ?>" id="name<?php echo $row["Id"]?>" class="product_name" ><?php echo $row["Name"]?></a></p>
                        <input type="hidden" name="hidden_name" id="nameh<?php echo $row["Id"]?>" value="<?php echo $row["Name"] ?>" />
                        <p class="text-justify price"><?php echo $row["Price"]?><sup style="text-decoration:underline"> đ</sup></p>
                        <input type="hidden" name="hidden_price" id="priceh<?php echo $row["Id"]?>" value=<?php echo $row["Price"]?> />
                        <div class="start">
                          <?php for($i = 0; $i < $row["Start"];$i++):?>
                            <span class="fa fa-star checked"></span>
                          <?php endfor; ?>
                        </div>
                        <div class="row ">
                          <button href="#" class="btn btn-success mr-1 add_to_cart" type="button" id=<?php echo $row["Id"]?> style="width:100%" title="Mua Nhanh">Add To Cart</button>
                        </div>
                      </div>
                    </div>
                  </div> 
                  <?php endwhile; ?>  
              </div>
            </div>               

            <div class="col-lg-3 d-none d-lg-block">
              <a href="#"><img style="padding-top: 20px;" src="./Public/images/remote/banner1.png" alt="" title="Ổ cứng di động Western Digital My Passport"></a>
              <a href="#"><img  src="./Public/images/remote/banner2.png" alt="" title="Mua ổ cứng di động tặng chuột Wifi"></a>
            </div>
          </div>
        </div>
    </div>
    <!--END OF SDD HDD REMOTE-->

    <!--DISK-->
    <div class="container" id="disk_area">
      <div class="col-12 cover ">
        <h2 style="margin: 0px; padding: 0px;"><a class="rounded-top" href="#disk_area" id= "disk" >DISK</a></h2>
      </div>
      <div class="row ">
        <div class="col-lg-3 d-none d-lg-block diskleft mt-5">
          <div class="col-12"><img src="./Public/images/Disk/banner1.png" alt="" title="Thẻ nhớ điện thoại microSD Sandisk Ultra 400GB"></div>
        </div>
        
        <div class="col-lg-9 col-md-12 col-sm-12 col-12">
          <div class="row">
            <?php 
              require 'includes/dbh.inc.php';
              $result = $conn->query("SELECT * FROM products WHERE type = 'disk'") or die($conn->error);   
              while($row = $result->fetch_assoc()): ?>
                
                <div class="col-lg-3 col-md-3 col-sm-4  col-6  d-flex justify-content-center ">
                <div class="card" style="height: 24rem;">
                  <img src="Public/images/products/<?php echo $row["Images"]?>"  class="card-img-top" title="<?php echo $row["Name"] ?>">
                  <div class="card-body"> 
                    <p class="card-text text-justify"><a href="product_detail.php?product_id=<?php echo $row["Id"] ?>" id="name<?php echo $row["Id"]?>" class="product_name" ><?php echo $row["Name"]?></a></p>
                    <input type="hidden" name="hidden_name" id="nameh<?php echo $row["Id"]?>" value="<?php echo $row["Name"] ?>" />
                    <p class="text-justify price"><?php echo $row["Price"]?><sup style="text-decoration:underline"> đ</sup></p>
                    <input type="hidden" name="hidden_price" id="priceh<?php echo $row["Id"]?>" value=<?php echo $row["Price"]?> />
                    <div class="start">
                      <?php for($i = 0; $i < $row["Start"];$i++):?>
                        <span class="fa fa-star checked"></span>
                      <?php endfor; ?>
                    </div>
                    <div class="row ">
                      <button href="#" class="btn btn-success mr-1 add_to_cart" type="button" id=<?php echo $row["Id"]?> style="width:100%" title="Mua Nhanh">Add To Cart</button>
                    </div>
                  </div>
                </div>
              </div> 
              <?php endwhile; ?>  
          </div>
        </div>               

      </div>
    </div>
    <!--End OF DISK-->

    <!--USB-->
    <div class="container mt-2 mb-5" id="usb_area">
      <div class="col-12 cover ">
        <h2 style="margin: 0px; padding: 0px;"><a class="rounded-top" href="#usb_area" id= "usb" >USB</a></h2>
      </div>
      <div>
        <div class="row mt-5">
        <?php 
              require 'includes/dbh.inc.php';
              $result = $conn->query("SELECT * FROM products WHERE type = 'usb'") or die($conn->error);   
              while($row = $result->fetch_assoc()): ?>
                <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                  <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                      <div class="col-md-4">
                        <img src="Public/images/products/<?php echo $row["Images"]?>"  class="card-img-top" title="<?php echo $row["Name"] ?>">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title"><p class="card-text text-justify"><a href="product_detail.php?product_id=<?php echo $row["Id"] ?>" id="name<?php echo $row["Id"]?>" class="product_name" ><?php echo $row["Name"]?></a></p></h5>
                          <input type="hidden" name="hidden_name" id="nameh<?php echo $row["Id"]?>" value="<?php echo $row["Name"]?>" />
                          <p class="text-justify price"><?php echo $row["Price"]?><sup style="text-decoration:underline"> đ</sup></p>
                          <input type="hidden" name="hidden_price" id="priceh<?php echo $row["Id"]?>" value=<?php echo $row["Price"]?> />
                          <div class="start">
                            <?php for($i = 0; $i < $row["Start"];$i++):?>
                              <span class="fa fa-star checked"></span>
                            <?php endfor; ?>
                          </div>
                          <div class="row ">
                            <button href="#" class="btn btn-success mr-1 add_to_cart" type="button" id=<?php echo $row["Id"]?> style="width:100%" title="Mua Nhanh">Add To Cart</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endwhile; ?> 
        </div>
      </div>
    </div>
    <!--End of USB-->

    <!--Top Branch-->
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-4 d-none d-md-block">
          <hr style="border-width:3px; background-color: black;">
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
          <h2 class="title-head text-center"><a href="#" id="branch">TOP BRANCH</a></h2>
        </div>
        <div class="col-lg-4 col-md-4 d-none d-md-block">
          <hr style="border-width:3px; background-color: black;">
        </div>
      </div>
      <div class="mb-5">
        <div class="row">
          <div class="col-lg-2 col-md-3 col-sm-4 col-6"><a href="#topbranch"><img src="./Public/images/Branch/brand_1.png" alt="" title="KingSton"></a></div>
          <div class="col-lg-2 col-md-3 col-sm-4 col-6"><a href="#topbranch"><img src="./Public/images/Branch/brand_2.png" alt="" title="Crucial"></a></div>
          <div class="col-lg-2 col-md-3 col-sm-4 d-none d-sm-block"><a href="#topbranch"><img src="./Public/images/Branch/brand_3.png" alt="" title="SamSung"></a></div>
          <div class="col-lg-2 col-md-3 d-none d-md-block"><a href="#topbranch"><img src="./Public/images/Branch/brand_4.png" alt="" title="WD"></a></div>
          <div class="col-lg-2 d-none d-lg-block"><a href="#topbranch"><img src="./Public/images/Branch/brand_5.png" alt="" title="Intel"></a></div>
          <div class="col-lg-2 d-none d-lg-block"><a href="#topbranch"><img src="./Public/images/Branch/brand_6.png" alt="" title="Seagate"></a></div>
        </div>
      </div>
    </div>    
    <!--End Top Branch-->
    <?php endif; ?>


    <div id="popover_content_wrapper" style="display: none">
      <span id="cart-details"></span>
      <div class="mb-5">
        <div class="float-right ml-2">
            <a href="#" class="btn btn-dark" id="clear_cart">
              <i class="fa fa-trash fa-lg"></i> Clear
            </a>
          </div>
        <div class="float-right">
          <a href="checkout.php" class="btn btn-success" id="check-out-cart" >
            <i class="fa fa-shopping-cart fa-lg"></i> Check out
          </a>
        </div>
        
      </div>
    </div>


    <script>
      $(document).ready(function () {
        
        function load_cart_data(){
          $.ajax({
            url:'includes/fetch_cart.php',
            method: 'POST',
            dataType: "json",
            success:function(data){
              $('#cart-details').html(data.cart_details);
              $('.badge').text(data.total_item);
            }
          })
        }
        load_cart_data();
        
        $.fn.popover.Constructor.Default.whiteList.table = [];
        $.fn.popover.Constructor.Default.whiteList.tr = [];
        $.fn.popover.Constructor.Default.whiteList.td = ['colspan','align'];
        $.fn.popover.Constructor.Default.whiteList.th = [];
        $.fn.popover.Constructor.Default.whiteList.div = [];
        $.fn.popover.Constructor.Default.whiteList.tbody = [];
        $.fn.popover.Constructor.Default.whiteList.thead = [];
        $.fn.popover.Constructor.Default.whiteList.table = [];
        $.fn.popover.Constructor.Default.whiteList.button = [];
        
        $('#cart-popover').popover({
          html : true,
          container: 'body',
          content:function(){
            return $('#popover_content_wrapper').html();
          }
        });
        $(document).on('click', '.add_to_cart', function(){
          var product_id = $(this).attr("id");
          var product_name = $('#nameh'+product_id+'').val();
          var product_price = $('#priceh'+product_id+'').val();
          var product_quantity = 1;
          console.log(product_quantity)
          var action = "add";
          $.ajax({
            url:"includes/action.php",
            method:"POST",
            data:{product_id:product_id, product_name:product_name, product_price:product_price, product_quantity:product_quantity, action:action},
            success:function(data)
            {
              load_cart_data();
              alert("Item has been Added into Cart");
            }
          });
        });
        //Remove item from shopping card
        $(document).on('click', '.delete', function(){
          var product_id = $(this).attr("id");
          var action = 'remove';
          if(confirm("Are you sure you want to remove this product?"))
          {
            $.ajax({
              url:"includes/action.php",
              method:"POST",
              data:{product_id:product_id, action:action},
              success:function()
              {
                $('#cart-popover').popover('hide');
                load_cart_data();
                alert("Item has been removed from Cart");
              }
            })
          }
          else
          {
            return false;
          }
	      });
        //Clear cart
        $(document).on('click', '#clear_cart', function(){
          var action = 'empty';
          $.ajax({
            url:"includes/action.php",
            method:"POST",
            data:{action:action},
            success:function()
            {
              load_cart_data();
              $('#cart-popover').popover('hide');
              // alert("Your Cart has been clear");
            }
          });
        });
      })  
      
      
    </script>                          

    
    <?php require_once 'LayOut/footer.php' ?>

    
  </body>
</html>