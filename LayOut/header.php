<?php 
  session_start()
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title></title>
    <link rel="stylesheet" href="./Public/styles/indexCss.css">
    <script src="./Public/script/jquery.js"></script>
    <link rel="stylesheet" href="./Public/styles/font-awesome.min.css">
    <link rel="stylesheet" href="./Public/styles/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- <script src="./Public/script/popper.min.js"></script> -->
    <script src="./Public/script/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    .popover{
      width: 100%;
      max-width: 800px;
    }
    </style>
  </head>
  <body data-spy ="scroll" data-target="#navbarResponsive">
    <!--NavBar-->
    <nav class="navbar navbar-expand-md navbar-dark <?php 
      if($_SERVER['REQUEST_URI'] == "/Ass/index.php"||$_SERVER['REQUEST_URI'] == "/Ass/"){
        echo "fixed-top";
      }
    ?>">
      <a class="navbar-brand" href="index.php"><img src="./Public/images/Homepage/logoBK.png" alt="logo" style="width: 50px;"/></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"  aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
              <table class="table table-borderless table-lg table-responsive text-left" style="width: 500px">
                <thead>
                  <tr>
                    <th scope = "col" style="width: 150px"><a href="Public/page/pc.php">PC</a></th>
                    <th scope = "col" style="width: 150px"><a href="Public/page/laptop.php">LAPTOP</a></th>
                    <th scope = "col" style="width: 200px"><a href="accessories.php">ACCESSORIES</a></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="Public/page/desktop.php">Desktop</a></td>
                    <td><a href="Public/page/macbook.php">MacBook</a></td>
                    <td><a href="ssd.php">HDD, SSD</a></td>                       
                  </tr>
                  <tr>
                    <td><a href="Public/page/">DELL</a></td>
                    <td><a href="#">DELL</a></td>
                    <td><a href="#">Caddy Bay</a></td> 
                  </tr>
                  <tr>
                    <td><a href="#">INTEL</a></td>
                    <td><a href="#">LENOVO</a></td>
                    <td><a href="disk.php">Disks</a></td> 
                  </tr>
                  <tr>
                    <td><a href="#">GIGABYTE</a></td>
                    <td><a href="#">ASUS</a></td>
                    <td><a href="usb.php">USB</a></td> 
                  </tr>
                  <tr>
                    <td><a href="#">MSI</a></td>
                    <td><a href="#">MSI</a></td>
                  </tr>
                  <tr>
                    <td><a href="#">ACER</a></td>
                    <td><a href="#">HP</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact" >Contact</a>
          </li>
          <!--Login Logout-->
          <!-- <div style="margin-left:550px !important"> -->

         
          <?php  if(isset($_SESSION['userId'])): ?>
            <li class="nav-item dropdown" >
              <a class="nav-link dropdown-toggle " href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> <?php echo $_SESSION['userName']?></a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:white;">
                <button class="btn-light dropdown-item account" type="button" ><a href="user.php">ACCOUNT</a></button>
                <form action="includes/logout.inc.php" method="POST">
                  <button class=" btn btn-light dropdown-item account" type="submit" style="color:black;font-weight:600" >LOGOUT</button>
                </form>
              </div>
            </li>
        
          <?php else:?>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i> Account</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color:white;">
                <button class="btn-light dropdown-item account" type="button" ><a href="login.php">LOGIN</a></button>
                <button class="btn-light dropdown-item account" type="button" ><a href="signup.php">SIGNUP</a></button>
              </div>
            </li>
            
          <?php endif;?>
          <!-- </div> -->
          <li class="nav-item" >
            <a class="btn btn-light" id="cart-popover" data-placement="bottom" title="shopping cart">
              <span><i class="fa fa-shopping-cart fa-lg"></i></span>
              <span class="badge bg-dark text-white" style="border-radius: 40%"></span>
              <!-- <span class="total_price">$0.00</span> -->
            </a>
          </li>
        </ul>
      </div>
    </nav>
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
        load_cart_data();
        function load_cart_data(){
          $.ajax({
            url:'includes/fetch_cart.php',
            method: 'POST',
            dataType: "json",
            success:function(data){
              $('#cart-details').html(data.cart_details);
              $('.total_price').text(data.total_price);
              $('.badge').text(data.total_item);
            }

          })
        }

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
          var product_name = $('#name'+product_id+'').val();
          var product_price = $('#price'+product_id+'').val();
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
                load_cart_data();
                $('#cart-popover').popover('hide');
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
              alert("Your Cart has been clear");
            }
          });
        });


      })  
      
      
    </script>
    <!--End of NavBar-->