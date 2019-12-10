<!DOCTYPE html>
<html lang="vi">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="./Public/styles/fix-detail.css" />
    <link rel="stylesheet" href="./Public//styles/index.css" />
    <link rel="stylesheet" href="./Public/styles/bootstrap.min.css">
    <link
      rel="stylesheet"
      href="../bootstrap-4.3.1-dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="./Public/script/bootstrap-4.3.1-dist/jquery/fontawesome-free-5.11.2-web/css/all.css"
    />
    <title>BachKhoa_Computer_Detail</title>
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"
      integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <style>
      #popupBoxOnePosition {
        top: 0;
        left: 0;
        position: fixed;
        width: 100%;
        height: 120%;
        z-index: 1000;
        background-color: rgba(0, 0, 0, 0.7);
        display: none;
      }
      .popupBoxWrapper {
        width: 1000px;
        margin: 50px auto;
        text-align: left;
      }
      .popupBoxContent {
        background-color: white;
        padding: 15px;
      }
    </style>
  </head>
  <body data-spy="scroll" data-target="#navbarResponsive">
    <!--NavBar-->
    <nav class="navbar navbar-expand-md navbar-dark mb-2">
      <a class="navbar-brand" href="index.html"><img src="./Public/images/Homepage/logoBK.png" alt="logo" style="width: 50px;"/></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"  aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.html">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Product</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown" >
              <table class="table table-borderless table-lg table-responsive text-left" style="width: 500px;">
                <thead>
                  <tr>
                    <th scope = "col" style="width: 150px"><a href="PCs.html">PCs</a></th>
                    <th scope = "col" style="width: 150px"><a href="laptop.html">LAPTOP</a></th>
                    <th scope = "col" style="width: 200px"><a href="accessories.html">ACCESSORIES</a></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><a href="desktop.html">Desktop</a></td>
                    <td><a href="macbook.html">MacBook</a></td>
                    <td><a href="#">Mac Accessories</a></td>                       
                  </tr>
                  <tr>
                    <td><a href="#">DELL</a></td>
                    <td><a href="#">DELL</a></td>
                    <td><a href="#">Power Adapter</a></td> 
                  </tr>
                  <tr>
                    <td><a href="#">INTEL</a></td>
                    <td><a href="#">LENOVO</a></td>
                    <td><a href="ssd.html">HDD, SSD</a></td> 
                  </tr>
                  <tr>
                    <td><a href="#">GIGABYTE</a></td>
                    <td><a href="#">ASUS</a></td>
                    <td><a href="caddy.html">Caddy Bay</a></td> 
                  </tr>
                  <tr>
                    <td><a href="#">MSI</a></td>
                    <td><a href="#">MSI</a></td>
                    <td><a href="disk.html">Disks</a></td> 
                  </tr>
                  <tr>
                    <td><a href="#">ACER</a></td>
                    <td><a href="#">HP</a></td>
                    <td><a href="usb.html">USB</a></td> 
                  </tr>
                </tbody>
              </table>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#" >Service</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#contact" >Contact</a>
            </li>
        </ul>
        <form class="form-inline  my-lg-0">
          <input class="form-control mr-sm-2 searchbox" type="search" placeholder="Search" aria-label="Search" size="20">
          <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>
    <!--End of NavBar-->
    <div class="container" style="background-color: #F4F4F3;">
      <!-- Thanh địa chỉ -->
      <div class="breadcrumb-content">
        <a href="#" class="breadcrumb-link">Home</a> >
        <a href="#" class="breadcrumb-link">Laptop</a> >
        <a href="#" class="breadcrumb-link">MSI</a> >
        <a href="#" class="breadcrumb-link">Laptop MSI GF63 Thin 9RCX-646VN</a>
      </div>
      <!-- End Thanh địa chỉ -->
      <hr />
      <!-- Section 1 -->
      <div class="row">
        <!-- left -->
        <div class="col-lg-4 col-md-4 col-sm-12 col-12">
          <!-- Image -->
          <div>
            <div
              id="carouselExampleIndicators"
              class="carousel slide"
              data-ride="carousel"
            >
              <ol class="carousel-indicators">
                <li
                  data-target="#carouselExampleIndicators"
                  data-slide-to="0"
                  class="active"
                ></li>
                <li
                  data-target="#carouselExampleIndicators"
                  data-slide-to="1"
                ></li>
                <li
                  data-target="#carouselExampleIndicators"
                  data-slide-to="2"
                ></li>
                <li
                  data-target="#carouselExampleIndicators"
                  data-slide-to="3"
                ></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active img-style">
                  <img
                    src="./Public/images/detail/product-1.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
                <div class="carousel-item img-style">
                  <img
                    src="./Public/images/detail/product-2.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
                <div class="carousel-item img-style">
                  <img
                    src="./Public/images/detail/product-3.jpg"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
                <div class="carousel-item img-style">
                  <img
                    src="./Public/images/detail/product-4.png"
                    class="d-block w-100"
                    alt="..."
                  />
                </div>
              </div>
            </div>
          </div>
          <!-- End Image -->

          <div class="d-flex justify-content-center">
            <ul class="pagination">
              <li>
                <a href="#"
                  ><img
                    src="./Public/images/detail/product-1.jpg"
                    style="width: 90px; height: 100px;"
                    alt=""
                /></a>
              </li>
              <li>
                <a href="#"
                  ><img
                    src="./Public/images/detail/product-2.jpg"
                    style="width: 90px; height: 100px;"
                    alt=""
                /></a>
              </li>
              <li>
                <a href="#"
                  ><img
                    src="./Public/images/detail/product-3.jpg"
                    style="width: 90px; height: 100px;"
                    alt=""
                /></a>
              </li>
              <li>
                <a href="#"
                  ><img
                    src="./Public/images/detail/product-4.png"
                    style="width: 90px; height: 100px;"
                    alt=""
                /></a>
              </li>
            </ul>
          </div>

          <!-- Mô tả sản phẩm -->
          <div>
            <h5>MÔ TẢ SẢN PHẨM</h5>
            <h6>
              Tên sản phẩm: Máy tính xách tay/ Laptop MSI GF63 9RCX-646VN
              (i5-9300H)
            </h6>
            <p> -CPU: Intel Core I5 9300H (2.4GHz - 4.1GHz/ 8MB/ 4 nhân, 8 luồng)</p>
            <p>- Màn hình: 15,6" IPS (1920 x 1080), không cảm ứng</p>
            <p>- RAM: 1 x 8GB DDR4 2666MHz (2 khe cắm, Hỗ trợ tối đa 32GB)  </p>
            <div class="d-flex justify-content-center mt-30">
              <a
                href="#chitietsanpham"
                class="btn btn-primary btn-lg active fix-button"
                role="button"
                aria-pressed="true"
                >Xem thêm</a
              >
            </div>
          </div>
          <!-- End mô tả sản phẩm -->
        </div>

        <!-- End left -->

        <!-- Start Right -->
        <div class="col-lg-8 col-md-8 col-sm-12 col-12 mt-30">
          <div id="tensanpham">
            <h4>
              Laptop MSI GF63 Thin 9RCX-646VN (15" FHD/i5-9300H/8GB /512GB
              SSD/GTX 1050Ti/Win10/1.9 kg)
            </h4>
          </div>
          <!-- rating stars -->
          <div class="rating fix-stars">
            <div class="stars">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <a href="#" class="review-no">(150 đánh giá)</a>
            </div>
          </div>
          <!-- Chi tiết sản phẩm -->
          <div class="row chitiet">
            <div class="col-3">Giá bán lẻ</div>
            <div class="col-9"><b style="color:red">21.490.000 VND</b></div>
            <div class="w-100 mt-30"></div>
            <div class="col-3">Khuyến mãi</div>
            <div class="col-9">
              <table class="table">
                <tbody>
                  <tr>
                    <td><i class="fas fa-gift"></i></td>
                    <th>Loa Bluetooth Divoom - Tivoo (Quà Tặng)</th>
                  </tr>
                  <tr>
                    <td><i class="fas fa-gift"></i></td>
                    <th>
                      Bộ quà tặng MSI Loot Box 1 (Chuột Gaming, móc khóa, miếng
                      lót chuột)
                    </th>
                  </tr>
                  <tr>
                    <td><i class="fas fa-gift"></i></td>
                    <th>Ba lô MSI</th>
                  </tr>
                  <tr>
                    <td><i class="fas fa-gift"></i></td>
                    <th>
                      Giảm thêm 5% tối đa 1 triệu với mã khi thanh toán qua
                      ZaloPay. <a href="#">Xem chi tiết tại đây</a>
                    </th>
                  </tr>
                </tbody>
              </table>
              <hr />
            </div>
            <!-- Tinh trang san phẩm -->
            <div class="w-100 mt-30"></div>
            <div class="col-3">Tình trạng sản phẩm</div>
            <div class="col-9 fix">Liên hệ</div>
            <!-- End Tinh trang san phẩm -->

            <!--Selecl Ram and Core -->
            <div class="w-100"></div>
            <div class="col align-items-center">
              <form class="form" method="post">
                <!-- Select Box -->
                <div
                  class="form-row align-items-center mb-30 mt-50 d-flex justify-content-center "
                >
                  <div class="col-auto">
                    <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect-0"
                      >Preference</label
                    >
                    <select
                      class="custom-select mr-sm-2 form-control"
                      id="inlineFormCustomSelect-0"
                    >
                      <option selected value="1">8 Gb</option>
                      <option value="2">16 Gb</option>
                      <option value="3">32 Gb</option>
                    </select>
                  </div>
                  <div class="col-auto">
                    <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect-1"
                      >Preference</label
                    >
                    <select
                      class="custom-select mr-sm-2 form-control"
                      id="inlineFormCustomSelect-1"
                    >
                      <option selected value="1">I3</option>
                      <option value="2">I5</option>
                      <option value="3">I7</option>
                    </select>
                  </div>
                  <div class="col-auto">
                    <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect"
                      >Preference</label
                    >
                    <select
                      class="custom-select mr-sm-2 form-control"
                      id="inlineFormCustomSelect"
                    >
                      <option selected value="1">Số sản phẩm</option>
                      <option value="2">1</option>
                      <option value="3">2</option>
                      <option value="3">3</option>
                    </select>
                  </div>
                </div>
              </form>
            </div>
            <!-- ENd Selecl Ram and Core -->

            <!-- Select Buy -->
            <div class="w-100"></div>
            <div
              class="col-12 col-xs-12 d-flex justify-content-center fix-select"
            >
              <a
                href="#"
                class="btn btn-primary btn-lg active fix-button"
                role="button"
                aria-pressed="true"
                >Mua ngay</a
              >
              <a
                href="#contact"
                class="btn btn-secondary btn-lg active fix-button"
                role="button"
                aria-pressed="true"
                >Liên hệ tư vấn</a
              >
            </div>
            <!-- End Select Buy -->
          </div>
          <!-- End Chi tiết sản phẩm -->
        </div>
        <!-- End Right -->
      </div>
      <!-- end section 1 -->
      <hr />
      <!-- Sản phẩm tương tư-->
      <div class="container mt-30">
        <div class="row">
          <div class="h5-fix"><h5>@ SẢN PHẨM TƯƠNG TỰ</h5></div>
          <div class="row">
            <div class="col-12 col-xs-6 col-md-6 col-lg-3">
              <div class="row  d-flex justify-content-center">
                <img src="./Public/images/detail/product-4.jpg" alt="" />
              </div>
              <div class="row-sm align-items-center ml-auto">
                <h6>
                  Laptop MSI GL63 8RC-436VN (15.6" FHD/i7-8750H/8GB/ 1TB HDD/GTX
                  1050/ Win10/2.2 kg)
                </h6>
                <p>25.490.000đ</p>
              </div>
            </div>
            <div class="col-12 col-xs-6 col-md-6 col-lg-3 d-none d-md-block ">
              <div class="row  d-flex justify-content-center">
                <img src="./Public/images/detail/product-4.jpg" alt="" />
              </div>
              <div class="row-sm align-items-center ml-auto">
                <h6>
                  Laptop MSI GL63 8RC-436VN (15.6" FHD/i7-8750H/8GB/ 1TB HDD/GTX
                  1050/ Win10/2.2 kg)
                </h6>
                <p>25.490.000đ</p>
              </div>
            </div>
            <div class="col-12 col-xs-6 col-md-6 col-lg-3 d-none d-md-block">
              <div class="row d-flex justify-content-center">
                <img src="./Public/images/detail/product-4.jpg" alt="" />
              </div>
              <div class="row-sm align-items-center ml-auto">
                <h6>
                  Laptop MSI GL63 8RC-436VN (15.6" FHD/i7-8750H/8GB/ 1TB HDD/GTX
                  1050/ Win10/2.2 kg)
                </h6>
                <p>25.490.000đ</p>
              </div>
            </div>
            <div class="col-12 col-xs-6 col-md-6 col-lg-3 d-none d-md-block">
              <div class="row d-flex justify-content-center">
                <img src="./Public/images/detail/product-4.jpg" alt="" />
              </div>
              <div class="row-sm align-items-center ml-auto">
                <h6>
                  Laptop MSI GL63 8RC-436VN (15.6" FHD/i7-8750H/8GB/ 1TB HDD/GTX
                  1050/ Win10/2.2 kg)
                </h6>
                <p>25.490.000đ</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Sản phẩm tương tư-->
      <hr />
      <!-- ]Chi tiết sản phẩm-->
      <div class="container mt-30">
        <div class="h5-fix">
          <h5><a>@ THÔNG TIN CHI TIẾT SẢN PHẨM</a></h5>
        </div>
        <div class="row fix-table">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-8">
            <div class="chitietsanpham">
              <img
                src="./Public/images/detail/msi-gf63-thin-chitiet-1.jpg"
                alt=""
              />
            </div>
            <div>
              <h5>Thiết kế nhôm phay xước</h5>
              <p>
                Được chế tác bằng chất liệu chủ đạo là nhôm phay xước, Laptop
                MSI GF63 Thin 9RCX-646VN là chiếc laptop gaming hiện đại được
                thiết kế theo xu hướng mới hiện nay: mỏng nhẹ và tinh tế. Với
                các chỉ số ấn tượng như trọng lượng 1.86kg và kích thước 21.7mm,
                bạn có thể mang theo và chơi game ở bất kỳ đâu cùng bạn bè.
              </p>
            </div>
            <div class="chitietsanpham">
              <img src="./Public/images/detail/msi-gf63-thin-2.jpg" alt="" />
            </div>
            <div>
              <h5>Hiệu nặng mạnh mẽ</h5>
              <p>
                Tuy có thiết kế nhỏ gọn nhưng Laptop MSI GF63 Thin 9RCX-646VN
                lại mang sức mạnh gaming đến từ vi xử lý đa nhân Intel mới nhất
                cho hiệu suất vượt trội hơn hẳn so với thế hệ trước. Bên cạnh
                đó, sức mạnh đồ họa đến từ card GeForce của NVIDIA cho phép bạn
                có thể tải về và chơi tốt các tựa game phổ biến hiện nay.
              </p>
            </div>
            <div class="chitietsanpham">
              <img src="./Public/images/detail/msi-gf63-thin-3.jpg" alt="" />
            </div>
            <div>
              <h5>Màn hình siêu mỏng</h5>
              <p>
                Giờ đây thưởng thức trò chơi nhập vai trên một màn hình có tỷ lệ
                khung hình lớn hơn là một lợi thế dành cho các game thủ. Với
                viền màn hình mỏng 4.9mm, màn hình của Laptop MSI GF63 Thin
                9RCX-646VN có tỷ lệ khung hình lớn hơn các dòng laptop gaming
                truyền thống đem lại một trải nghiệm chơi game rõ ràng và choáng
                ngợp.
              </p>
            </div>
            <div class="chitietsanpham">
              <img src="./Public/images/detail/msi-gf63-thin-4.jpg" alt="" />
            </div>
          </div>
          <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-4">
            <!-- Xem đầy đủ -->
            <div id="popupBoxOnePosition" >
              <div class="popupBoxWrapper">
                <div class="popupBoxContent">
                  <div class="row">
                    <div class="col-9">
                      <h3 class="d-flex justify-content-center">
                        THÔNG SỐ KỸ THUẬT
                      </h3>
                    </div>
                    <div class="col-3">
                      <a
                        href="#"
                        style="float: right;"
                        onclick="toggle_visibility('popupBoxOnePosition');"
                        ><h3>X</h3></a
                      >
                    </div>
                  </div>
                  <div>
                    <table class="table table-sm">
                      <thead>
                        <tr>
                          <th scope="col">Thông tin chung</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Thương hiệu</td>
                          <td>MSI</td>
                        </tr>
                        <tr>
                          <td>Bảo hành</td>
                          <td>24 tháng</td>
                        </tr>
                        <tr>
                          <td>Màu sắc</td>
                          <td>Đen</td>
                        </tr>
                        <tr>
                          <td>Series laptop</td>
                          <td>GF Series</td>
                        </tr>
                     
               
                        <tr>
                          <th scope="col">Cấu hình chi tiết</th>
                          <th scope="col"></th>
                        </tr>
                     
              
                        <tr>
                          <td>Màn hình</td>
                          <td> 15.6" (1920 x 1080) Full HD IPS không cảm ứng, Màn hình chống loá, HD webcam</td>
                        </tr>
                        <tr>
                          <td>CPU</td>
                          <td>
                            Intel Core i5 9300H ( 2.4 GHz - 4.1 GHz / 8MB / 4 nhân, 8 luồng)
                          </td>
                        </tr>
                        <tr>
                          <td>RAM</td>
                          <td>
                            1 x 8GB DDR4 2666MHz ( 2 Khe cắm / Hỗ trợ tối đa
                            32GB )
                          </td>
                        </tr>

                        <tr>
                          <td>Chíp đồ hoạ</td>
                          <td>
                            Intel UHD Graphics 630 / NVIDIA GeForce GTX 1050Ti
                            4GB GDDR5
                          </td>
                        </tr>
                        <tr>
                          <td>Lưu trữ</td>
                          <td>512GB SSD M.2 NVMe /</td>
                        </tr>
                        <tr>
                          <td>Số cổng lưu trữ tối đa</td>
                          <td>
                            1 x 2.5" SATA, M.2 SATA/NVMe - Hỗ trợ Intel Optane
                          </td>
                        </tr>
                        <tr>
                          <td>Kiểu khe M.2 hỗ trợ</td>
                          <td>M.2 SATA/NVMe - Hỗ trợ Intel Optane</td>
                        </tr>

                        <tr>
                          <td>Cổng kết nối</td>
                          <td>
                            1 x USB 3.1 Gen 1 Type C , 3 x USB 3.1 Gen 1 , LAN 1
                            Gb/s
                          </td>
                        </tr>
                        <tr>
                          <td>Bàn Phím</td>
                          <td>Thường, không có phím số, LED</td>
                        </tr>
                        <tr>
                          <td>Hệ điều hành</td>
                          <td>Windows 10 Home SL 64-bit</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Xem đầy đủ -->
            <table class="table table-sm">
              <thead>
                <tr>
                  <th scope="col">Thông tin chung</th>
                  <th scope="col">Thông tin chung</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Thương hiệu</td>
                  <td>MSI</td>
                </tr>
                <tr>
                  <td>Bảo hành</td>
                  <td>24 tháng</td>
                </tr>
                <tr>
                  <td>Màu sắc</td>
                  <td>Đen</td>
                </tr>
                <tr>
                  <td>Series laptop</td>
                  <td>GF Series</td>
                </tr>
              </tbody>
            </table>
            <div class="d-flex justify-content-center mb-30">
              <a
                class="btn btn-primary btn-lg active fix-button"
                role="button"
                aria-pressed="true"
                onclick="toggle_visibility('popupBoxOnePosition')"
                >Xem đầy đủ</a
              >
            </div>
          </div>
        </div>
      </div>
      <!-- End Chi tiết sản phẩm-->
      <hr />
      <!-- Đánh giá sản phẩm -->
      <div class="container mt-30">
        <div class="h5-fix"><h5>@ ĐÁNH GIÁ SẢN PHẨM</h5></div>
        <div class="row">
          <div class="col-12 col-sm-6 col-lg-4 d-none d-md-block">
            <div class="row d-flex justify-content-center">
              <img src="./Public/images/detail/product-4.jpg" alt="" />
            </div>
            <div class="row align-items-center ml-auto">
              <p>
                Laptop MSI GF63 Thin 9RCX-646VN (15" FHD/i5-9300H/8GB/512GB
                SSD/GTX 1050Ti/Win10/1.9 kg)
              </p>
              <p><b>21.490.000đ</b></p>
            </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-4">
              <div class="progress mt-50">
                  <p >5 <i class="fas fa-star mr-2"></i></p> 
                  <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="progress mt-2">
                  <p >4 <i class="fas fa-star mr-2"></i></p> 
                  <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="progress mt-2">
                  <p >3 <i class="fas fa-star mr-2"></i></p> 
                  <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="progress mt-2">
                  <p >2 <i class="fas fa-star mr-2"></i></p> 
                  <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <div class="progress mt-2">
                  <p >1 <i class="fas fa-star mr-2"></i></p> 
                  <div class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-4">
            <div class="nhanxet d-flex justify-content-center mt-50 ">
              <h5 style="color:orange">Nhận xét về sản phẩm</h5>
            </div>
            <div>
              <a
                href="#"
                class="btn btn-primary btn-lg active fix-button d-flex justify-content-center"
                role="button"
                aria-pressed="true"
                >Đánh giá và nhận xét của bạn</a
              >
            </div>
          </div>
        </div>
        <hr />
      </div>
      <!-- End đánh giá sản phẩm -->
    </div>

    <!--Footer-->
    <div class="row bg-dark text-light" style="padding: 40px 40px" id="contact">
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ">
        <h6>INFORMATION</h6>
        <div class="list-group list-group-flush">
          <a href="#" class="footeritems">Home</a>
          <a href="#" class="footeritems">Term & Contitions</a>
          <a href="#" class="footeritems">Privacy Policy</a>
          <a href="#" class="footeritems">Recruitment</a>
        </div>
        <br />
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ">
        <h6>COMPANY POLICY</h6>
        <div class="list-group list-group-flush">
          <a href="#" class="footeritems">Delivery Policy</a>
          <a href="#" class="footeritems">Return Policy</a>
          <a href="#" class="footeritems">Payment Methods</a>
          <a href="#" class="footeritems">Warranty</a>
        </div>
        <br />
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ">
        <h6>CUSTOMER SUPPORT</h6>
        <div class="list-group list-group-flush">
          <a href="#" class="footeritems">Warranty: <b>(038)5234 5678</b></a>
          <a href="#" class="footeritems">Warranty request</a>
          <a href="#" class="footeritems"
            >Business Department: <b>sales@bkcomputer.com.vn</b></a
          >
          <a href="#" class="footeritems"
            >Customer Services: <b>suport@bkcomputer.com.vn</b>
          </a>
        </div>
        <br />
      </div>
      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12 ">
        <h6>BK TECHNOLOGY CO.LTD</h6>
        <div class="list-group list-group-flush">
          <a href="#" class="footeritems"
            ><b>HO CHI MINH:</b> Trung Son Department</a
          >
          <a href="#" class="footeritems"
            >Phone <b>(038)5234 5678 - 0978866489</b></a
          >
          <a href="#" class="footeritems"
            ><b>Open: </b>9am-8pm, <b>Sunday:</b> 10am-4pm</a
          >
        </div>
        <div class="list-group list-group-flush mt-2">
          <a href="#" class="footeritems"
            ><b>DA NANG:</b> Ngu Hanh Son Department</a
          >
          <a href="#" class="footeritems"
            >Phone: <b>(035)5434 5672 - 0924567789</b></a
          >
          <a href="#" class="footeritems"
            ><b>Open: </b>9am-8pm, <b>Sunday:</b> 10am-4pm</a
          >
        </div>
      </div>
    </div>
    <!--End of Footer-->
    <script >
      function toggle_visibility(id) {
        var e = document.getElementById(id);
        if (e.style.display == "block") e.style.display = "none";
        else e.style.display = "block";
      }
    </script>
    <script src="../bootstrap-4.3.1-dist/jquery/jquery.js"></script>
    <script src="../bootstrap-4.3.1-dist/jquery/js/popper.min.js"></script>
    <script src="../bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
  </body>
</html>
