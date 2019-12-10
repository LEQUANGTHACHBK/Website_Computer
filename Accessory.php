<?php 
  require './LayOut/header.php'
?>
    <!--BreadCum-->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb container">
        <li class="breadcrumb-item"><a href="index.php" style="color: black">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Accessory</li>
        </ol>
    </nav>
    <!--End of breadCum-->

    <!--Title-->
    <div class="container mb-5">
      <div class="row">
        <?php  require './LayOut/leftContentAccess.php' ?>
        

        <div class="col-lg-9 col-md-12 col-sm-12 col-12" style="padding-right:0px">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12"><p style="font-weight: bold;">TOP USB</p></div>
          <!--SortProduct--> <?php require_once './Layout/SortProduct.php'?> <!--SortProduct-->
          </div>
          <!--Grid View-->
          <div class="row" id="grid" style="display:reset">
            <?php 
                require 'includes/dbh.inc.php';
                $result = $conn->query("SELECT * FROM products WHERE type = 'usb'") or die($conn->error);   
                while($row = $result->fetch_assoc()): ?>
                <div class="col-lg-3 col-md-3 col-sm-4  col-6 ssd d-flex justify-content-center ">
                  <div class="card" style="height: 24rem;">
                    <img src="Public/images/products/<?php echo $row["Id"]?>.jpg"  class="card-img-top" title="<?php echo $row["Name"] ?>">
                    <div class="card-body"> 
                      <p class="card-text text-justify"><a href="#"><?php echo $row["Name"]?></a> </p>
                      <input type="hidden" name="hidden_name" id="name<?php echo $row["Id"]?>" value="<?php echo $row["Name"] ?>" />
                      <p class="text-justify price"><?php echo $row["Price"]?><sup style="text-decoration:underline">đ</sup>&nbsp<span style="color:black;text-decoration:line-through;font-weight:500"><?php echo $row["Price"]*1.5?><sup style="text-decoration:underline">đ</sup></span></p>
                      <input type="hidden" name="hidden_price" id="price<?php echo $row["Id"]?>" value=<?php echo $row["Price"]?> />
                      <div class="start">
                        <?php for($i = 0; $i < $row["Start"];$i++):?>
                          <span class="fa fa-star checked"></span>
                        <?php endfor; ?>
                      </div>
                      <div class="row">
                        <a href="#" class="btn btn-success btnshow mr-1 add_to_cart" type="button" id=<?php echo $row["Id"]?> style="width:75%" title="Mua Nhanh">Buy Now</a>
                        <a href="#quickview" class="btn btn-success btnshow openmodal" id=<?php echo $row["Id"]?> onclick="showmodal()"style="width:20%" title="Xem Nhanh"><i class="fa fa-eye" aria-hidden="true" ></i></a>
                      </div>
                    </div>
                  </div>
                </div>
            <?php endwhile; ?>
          </div>
          <!--End Grid View-->
          <!-- List View -->
          <div class="row" id="list" style="display:none;">
            <?php 
              $result = $conn->query("SELECT * FROM products WHERE type = 'usb'") or die($conn->error);   
              while($row = $result->fetch_assoc()): ?>
                <div class="card mb-3">
                  <div class="row no-gutters">
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12 d-flex justify-content-center">
                      <div class="col-lg-8 col-md-8 col-sm-6 col-6">
                        <img src="../images/Usb/<?php echo $row["Id"]?>.jpg" class="card-img" title="<?php echo $row["Name"] ?>">
                      </div>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-6 col-12">
                      <div class="card-body">
                        <h5 class="card-title text-justify" ><a href="#" style="font-size:1.3em;line-height:1.5em"><?php echo $row["Name"]?></a></h5>
                        <p class="card-text text-justify"><?php  echo $row["Descr"]?></>
                        <div>
                          <?php for($i = 0; $i < $row["Start"];$i++):?>
                            <span class="fa fa-star checked"></span>
                          <?php endfor; ?>
                        </div>
                        <p class="text-justify price"><?php echo $row["Price"]?><sup style="text-decoration:underline">đ</sup>&nbsp<span style="color:black;text-decoration:line-through;font-weight:500"><?php echo $row["Price"]*1.5?><sup style="text-decoration:underline">đ</sup></span></p>
                        <div class="row">
                          <a href="#" class="btn btn-success listshow mr-1 listshow" style="width:150px;margin-left:15px" title="Mua Nhanh"><b style="color:white">Buy Now</b></a>
                          <a href="#" class="btn btn-success listshow" style="width:50px" title="Xem Nhanh"><i class="fa fa-eye" aria-hidden="true" style="color:white" ></i></a>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr style="width: 100%;height: 2px;">
              <?php endwhile; ?>
          </div>
          <!-- End List View -->
          <!--Pagination-->
          <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
              <li class="page-item">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item">
                <a class="page-link" href="#">Next</a>
              </li>
            </ul>
          </nav>
          <!--End Of Pagination-->
        </div>
        
      </div>
    </div>
    <!--End of Title-->
    <script>
      function listView(){
        $('#grid').attr("style","display:none");
        $('#list').attr("style","display:reset");
      }
      function gridView(){
        $('#grid').attr("style","display:reset");
        $('#list').attr("style","display:none");
      }
    </script>            
<?php 
  require './LayOut/footer.php'
?>