<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>SSD-HDD</title>
    <link rel="stylesheet" href="./Public/styles/index.css" />
    <link rel="stylesheet" href="./Public/styles/eachpage.css">
    <link rel="stylesheet" href="./Public/styles/bootstrap.min.css">
    <link rel="stylesheet" href="./Public/styles/FAall.css">
    <link rel="stylesheet" href="./Public/styles/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body data-spy ="scroll" data-target="#navbarResponsive">
    <!--NavBar--><?php  require_once './Public/Layout/header.php'?><!--End of NavBar-->
    
    <!--BreadCum-->
    <div class="container">
      <h6>Home > SSD</h6> 
    </div>
    <hr>
    <!--End of breadCum-->

    <!--Title-->
    <div class="container mb-5">
      <div class="row">
        <div class="col-lg-3 d-none d-lg-block">
          <div><p style="font-weight: bold;">THƯƠNG HIỆU</p></div>
          <div>
            <!--Search Box-->
            <div class="mt-5">
              <form class="form-inline"  action="#" method="POST">
                <div class="">
                  <input class="form-control form-control-sm" type="search" placeholder="Thương hiệu" aria-label="Search" size="23">
                </div>
                <button class="btn btn-success btn-sm" type="submit">Search</button>
              </form>
            </div>
            <!--End of Search Box-->

            <!--Chech Box-->
            <div>
              <div class="input-group mb-2 mt-5">
                <div class="form-inline">
                  <input type="checkbox" class="mr-3">
                  <a href="#">Corsair</a>
                </div>
              </div>
              <div class="input-group mb-2 mt-2">
                <div class="form-inline">
                  <input type="checkbox" class="mr-3">
                  <a href="#">Crucial</a>
                </div>
              </div>
              <div class="input-group mb-2 mt-2">
                <div class="form-inline">
                  <input type="checkbox" class="mr-3">
                  <a href="#">Essencore</a>
                </div>
              </div>
              <div class="input-group mb-2 mt-2">
                <div class="form-inline">
                  <input type="checkbox" class="mr-3">
                  <a href="#">Kingston</a>
                </div>
              </div>
              <div class="input-group mb-2 mt-2">
                <div class="form-inline">
                  <input type="checkbox" class="mr-3">
                  <a href="#">Samsung</a>
                </div>
              </div>
              <div class="input-group mb-2 mt-2">
                <div class="form-inline">
                  <input type="checkbox" class="mr-3">
                  <a href="#">Western Digital</a>
                </div>
              </div>
            </div>  
            <!--End of Check Box-->

            <!--range price-->
            <div>
              <form>
                <div class="form-group mt-5">
                  <label class="mb-3" for="formControlRange" style="font-weight: bold;">GIÁ SẢN PHẨM</label>
                  <input type="range" class="form-control-range" id="formControlRange">
                </div>
              </form>
              <div class="form-inline mb-5">
                  <button type="button" class="btn  btn-sm mr-4" disabled style="width:100px;background-color: gray; ;">0</button>
                  <a style="font-weight:bolder;padding-top: 5px;">-</a>
                  <button type="button" class="btn  btn-sm ml-4 " disabled style="width:100px;background-color: gray; ;">10000000</button>
              </div>
            </div>
            <!--End of range price-->

            <!--Chuẩn ổ Cứng-->
            <div class="mt-5 mb-5"> 
              <p style="font-weight: bold;">CHUẨN Ổ CỨNG</p>
              <div class="input-group mt-2">
                <div class="form-inline">
                  <input type="checkbox" class="mr-3">
                  <a href="#">2.5 inch</a>
                </div>
              </div>
              <div class="input-group mt-2">
                <div class="form-inline">
                  <input type="checkbox" class="mr-3">
                  <a href="#">mSata</a>
                </div>
              </div>
              <div class="input-group mt-2">
                <div class="form-inline">
                  <input type="checkbox" class="mr-3">
                  <a href="#">M.2 Sata</a>
                </div>
              </div>
              <div class="input-group mt-2">
                <div class="form-inline">
                  <input type="checkbox" class="mr-3">
                  <a href="#">PCle</a>
                </div>
              </div>
            </div>
            <!--End of Chuẩn ổ cứng-->
          </div>
        </div>
        <div class="col-lg-9 col-md-12 col-sm-12 col-12">
          <!--SanPham-->
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-12"><p style="font-weight: bold;">SSD HOT TREND</p></div>
          <!--End of SanPham-->
            <div class="col-lg-3 col-md-3 col-sm-12 col-12">
              <form action="#" method="POST">
                <div class="form-group">
                  <select class="form-control" id="selectbox">
                    <option>A->Z</option>
                    <option>Z->A</option>
                    <option>Giá Tăng Dần</option>
                    <option>Giá Giảm Dần</option>
                    <option>Hàng Mới Nhất</option>
                    <option>Hàng Cũ Nhất</option>
                  </select>
                </div>
              </form>
            </div>
          </div>
          <!--List SP-->
          <div class="row">
            <!--sp1-->
            <div class=" col-lg-3 col-md-3 col-sm-4  col-6 ssd d-flex justify-content-center">
              <div class="card" style="height: 24rem;">
                <img src="./Public/images/Ssd/01.jpg" class="card-img-top" alt="..." title="SSD Crucial BX500 3D NAND SATA III 3.0 inch 120GB ">
                <div class="card-body">
                  <p class="card-text text-justify"><a href="#">SSD Crucial BX500 3D NAND SATA III 3.0 inch 120GB </a> </p>
                  <p class="text-justify price">600.000đ</p>
                  <div class="start">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                  </div>
                  <a href="#" class="btn btn-success btnshow">Buy Now</a>
                </div>
              </div>
            </div>
            <!--End of sp1-->
            
            <!--sp2-->
            <div class="col-lg-3 col-md-3 col-sm-4 col-6 ssd d-flex justify-content-center">
              <div class="card" style="height: 24rem;">
                <img src="./Public/images/Ssd/02.jpg" class="card-img-top" alt="..." title="SSD Crucial BX500 3D NAND SATA III 2.5 inch 120GB ">
                <div class="card-body">
                  <p class="card-text text-justify"><a href="#">SSD Crucial BX500 3D NAND SATA III 2.5 inch 120GB </a> </p>
                  <p class="text-justify price">590.000đ</p>
                  <div class="start">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                  </div>
                  <a href="#" class="btn btn-success btnshow">Buy Now</a>
                </div>
              </div>
            </div>
            <!--End of sp2-->

            <!--sp3-->
            <div class="col-lg-3 col-md-3 col-sm-4 col-6 ssd ">
              <div class="card" style="height: 24rem;">
                <img src="./Public/images/Ssd/03.jpg" class="card-img-top" alt="..." title="SSD SamSung BX500 3D NAND SATA III 2.5 inch 120GB ">
                <div class="card-body">
                  <p class="card-text text-justify"><a href="#">SSD SamSung BX500 3D NAND SATA III 2.5 inch 120GB </a> </p>
                  <p class="text-justify price">550.000đ</p>
                  <div class="start">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                  </div>
                  <a href="#" class="btn btn-success btnshow">Buy Now</a>
                </div>
              </div>
            </div>
            <!--End of sp3-->

            <!--sp4-->
            <div class="col-lg-3 col-md-3 col-sm-4 col-6 ssd">
              <div class="card" style="height: 24rem;">
                <img src="./Public/images/Ssd/04.jpg" class="card-img-top" alt="..." title="SSD Crucial BX600 3D NAND SATA III 2.5 inch 120GB ">
                <div class="card-body">
                  <p class="card-text text-justify"><a href="#">SSD Crucial BX600 3D NAND SATA III 2.5 inch 120GB </a> </p>
                  <p class="text-justify price">500.000đ</p>
                  <div class="start">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                  </div>
                  <a href="#" class="btn btn-success btnshow">Buy Now</a>
                </div>
              </div>
            </div>
            <!--End of sp4-->

            <!--sp5-->
            <div class="col-lg-3 col-md-3 col-sm-4 col-6 ssd d-flex justify-content-center">
              <div class="card" style="height: 24rem;">
                <img src="./Public/images/Ssd/05.jpg" class="card-img-top" alt="..." title="SSD KingSton 3D2500 NAND SATA III 2.5 inch 120GB ">
                <div class="card-body">
                  <p class="card-text text-justify"><a href="#">SSD KingSton 3D2500 NAND SATA III 2.5 inch 120GB </a> </p>
                  <p class="text-justify price">550.000đ</p>
                  <div class="start">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                  </div>
                  <a href="#" class="btn btn-success btnshow">Buy Now</a>
                </div>
              </div>
            </div>
            <!--End of sp5-->

            <!--sp6-->
            <div class="col-lg-3 col-md-3 col-sm-4 col-6 ssd d-flex justify-content-center">
              <div class="card" style="height: 24rem;">
                <img src="./Public/images/Ssd/06.jpg" class="card-img-top" alt="..." title="SSD SamSung S500 3D NAND SATA III 2.5 inch 120GB ">
                <div class="card-body">
                  <p class="card-text text-justify"><a href="#">SSD SamSung S500 3D NAND SATA III 2.5 inch 120GB </a> </p>
                  <p class="text-justify price">550.000đ</p>
                  <div class="start">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                  </div>
                  <a href="#" class="btn btn-success btnshow">Buy Now</a>
                </div>
              </div>
            </div>
            <!--End of sp6-->

            <!--sp7-->
            <div class="col-lg-3 col-md-3 col-sm-4 col-6 ssd d-flex justify-content-center">
              <div class="card" style="height: 24rem;">
                <img src="./Public/images/Ssd/07.jpg" class="card-img-top" alt="..." title="SSD Crucial BX1000 3D NAND SATA III 3.5 inch 120GB">
                <div class="card-body">
                  <p class="card-text text-justify"><a href="#">SSD Crucial BX1000 3D NAND SATA III 3.5 inch 120GB </a> </p>
                  <p class="text-justify price">720.000đ</p>
                  <div class="start">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                  </div>
                  <a href="#" class="btn btn-success btnshow">Buy Now</a>
                </div>
              </div>
            </div>
            <!--End of sp7-->

            <!--sp8-->
            <div class="col-lg-3 col-md-3 col-sm-4 col-6 ssd d-flex justify-content-center">
              <div class="card" style="height: 24rem;">
                <img src="./Public/images/Ssd/08.jpg" class="card-img-top" alt="..." title="SSD Crucial BX500 3D NAND SATA III 2.5 inch 120GB ">
                <div class="card-body">
                  <p class="card-text text-justify"><a href="#">SSD Crucial BX500 3D NAND SATA III 2.5 inch 120GB </a> </p>
                  <p class="text-justify price">480.000đ</p>
                  <div class="start">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                  </div>
                  <a href="#" class="btn btn-success btnshow">Buy Now</a>
                </div>
              </div>
            </div>
            <!--End of sp8-->

            <!--sp9-->
            <div class="col-lg-3 col-md-3 col-sm-4 col-6 ssd d-flex justify-content-center">
              <div class="card" style="height: 24rem;">
                <img src="./Public/images/Ssd/09.jpg" class="card-img-top" alt="..." title="SSD WD TX500 3D NAND SATA III 2.5 inch 120GB">
                <div class="card-body">
                  <p class="card-text text-justify"><a href="#">SSD WD TX500 3D NAND SATA III 2.5 inch 120GB </a> </p>
                  <p class="text-justify price">580.000đ</p>
                  <div class="start">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                  </div>
                  <a href="#" class="btn btn-success btnshow">Buy Now</a>
                </div>
              </div>
            </div>
            <!--End of sp9-->

            <!--sp10-->
            <div class="col-lg-3 col-md-3 col-sm-4 col-6 ssd d-flex justify-content-center">
              <div class="card" style="height: 24rem;">
                <img src="./Public/images/Ssd/10.jpg" class="card-img-top" alt="..." title="SSD Kingston K2019 3D NAND SATA III 2.5 inch 120GB ">
                <div class="card-body">
                  <p class="card-text text-justify"><a href="#">SSD Kingston K2019 3D NAND SATA III 2.5 inch 120GB </a> </p>
                  <p class="text-justify price">450.000đ</p>
                  <div class="start">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                  </div>
                  <a href="#" class="btn btn-success btnshow">Buy Now</a>
                </div>
              </div>
            </div>
            <!--End of sp10-->

            <!--sp11-->
            <div class="col-lg-3 col-md-3 col-sm-4 col-6 ssd d-flex justify-content-center">
              <div class="card" style="height: 24rem;">
                <img src="./Public/images/Ssd/11.jpg" class="card-img-top" alt="..." title="SSD Crucial BX400 3D NAND SATA III 2.0 inch 120GB ">
                <div class="card-body">
                  <p class="card-text text-justify"><a href="#">SSD Crucial BX400 3D NAND SATA III 2.0 inch 120GB </a> </p>
                  <p class="text-justify price">490.000đ</p>
                  <div class="start">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                  </div>
                  <a href="#" class="btn btn-success btnshow">Buy Now</a>
                </div>
              </div>
            </div>
            <!--End of sp11-->

            <!--sp12-->
            <div class="col-lg-3 col-md-3 col-sm-4 col-6 ssd d-flex justify-content-center">
              <div class="card" style="height: 24rem;">
                <img src="./Public/images/Ssd/12.jpg" class="card-img-top" alt="..." title="SSD SamSung S290 3D NAND SATA III PRO inch 120GB ">
                <div class="card-body">
                  <p class="card-text text-justify"><a href="#">SSD SamSung S290 3D NAND SATA III PRO inch 120GB </a> </p>
                  <p class="text-justify price">520.000đ</p>
                  <div class="start">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star "></span>
                    <span class="fa fa-star "></span>
                  </div>
                  <a href="#" class="btn btn-success btnshow">Buy Now</a>
                </div>
              </div>
            </div>
            <!--End of sp12-->
          </div>
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

    <!--Footer-->
    <div class="row bg-dark text-light" style="padding: 40px 40px" id="contact">
      <div class="col-lg-3 col-md-3 col-sm-6 col-12 ">
        <h6>INFORMATION</h6>
        <div class="list-group list-group-flush">
          <a href="#" class="footeritems">Home</a>
          <a href="#" class="footeritems">Term & Contitions</a>
          <a href="#" class="footeritems">Privacy Policy</a>
          <a href="#" class="footeritems">Recruitment</a>
        </div> 
        <br>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-12 ">
        <h6 >COMPANY POLICY</h6>
        <div class="list-group list-group-flush">
          <a href="#" class="footeritems">Delivery Policy</a>
          <a href="#" class="footeritems">Return Policy</a>
          <a href="#" class="footeritems">Payment Methods</a>
          <a href="#" class="footeritems">Warranty</a>
        </div> 
        <br>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-12 ">
        <h6 >CUSTOMER SUPPORT</h6>
        <div class="list-group list-group-flush">
          <a href="#" class="footeritems">Warranty: <b>(038)5234 5678</b></a>
          <a href="#" class="footeritems">Warranty request</a>
          <a href="#" class="footeritems">Business Department: <b>sales@bkcomputer.com.vn</b></a>
          <a href="#" class="footeritems">Customer Services: <b>suport@bkcomputer.com.vn</b> </a>
        </div> 
        <br>
      </div>
      <div class="col-lg-3 col-md-3 col-sm-6 col-12 ">
        <h6 >BK TECHNOLOGY CO.LTD</h6>
        <div class="list-group list-group-flush">
          <a href="#" class="footeritems"><b>HO CHI MINH:</b> Trung Son Department</a>
          <a href="#" class="footeritems">Phone <b>(038)5234 5678 - 0978866489</b></a>
          <a href="#" class="footeritems"><b>Open: </b>9am-8pm, <b>Sunday:</b> 10am-4pm</a>
        </div> 
        <div class="list-group list-group-flush mt-2">
          <a href="#" class="footeritems"><b>DA NANG:</b> Ngu Hanh Son Department</a>
          <a href="#" class="footeritems">Phone: <b>(035)5434 5672 - 0924567789</b></a>
          <a href="#" class="footeritems"><b>Open: </b>9am-8pm, <b>Sunday:</b> 10am-4pm</a>
        </div> 
      </div>
    </div>
    <!--End of Footer-->
    <script src="./Public/script/jquery.js"></script>
    <script src="./Public/script/popper.min.js"></script>
    <script src="./Public/script/bootstrap.min.js"></script>
  </body>
</html>
