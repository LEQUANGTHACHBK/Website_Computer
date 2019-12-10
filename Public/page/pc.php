<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>BachKhoa_Computer</title>
    <link rel="stylesheet" href="./Public/styles/index.css" />
    <link rel="stylesheet" href="./Public/script/owl.carousel.min.js" />
    <link rel="stylesheet" href="./Public/styles/owl.theme.default.min.css" />
    <link rel="stylesheet" href="./Public/styles/PC.css" />
    <link rel="stylesheet" href="./Public/styles/bootstrap.min.css">
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

    <!-- body -->
    <div class="container ">
      <div class="link ">
        <a href="#" class="breadcrumb-link"><b>Home</b></a> >
        <a href="#" class="breadcrumb-link"><b>PCs</b></a> >
        <a href="#" class="breadcrumb-link"><b>PC Cũ</b></a> >
      </div>
      <div class="row mt-2">
        <div
          class="col-12 col-md-4 col-lg-3" 
          style="background-color: #F4F4F3;"
        >
          <div class="shop_sidebar_area">
            <div class="catagory mt-2">
              <!-- Title -->
              <h5 class="title">DANH MỤC SẢN PHẨM</h5>
              <!--  Catagories  -->
              <div class="catagories-menu">
                <ul id="menu-content2" class="menu-content collapse show">
                  <!-- Single Item -->
                  <li data-toggle="collapse" data-target="#desktop">
                    <a href="#" id="desktop-icon"
                      ><b style="margin-left: 10px;">MÀN HÌNH</b></a
                    >
                    <ul class="sub-menu collapse show" id="desktop">
                      <li>
                        <a href="#"><b>All</b> </a>
                      </li>
                      <li><a href="#">DELL</a></li>
                      <li><a href="#">I-MAC</a></li>
                      <li><a href="#">ASUS</a></li>
                      <li><a href="#">HP</a></li>
                      <li><a href="#">MSI</a></li>
                      <li><a href="#">PANASONIC</a></li>
                      <li><a href="#">SAMSUNG</a></li>
                      <li><a href="#">LENOVO</a></li>
                      <li><a href="#">ACER</a></li>
                      <li><a href="#">LG</a></li>
                    </ul>
                  </li>
                  <!-- Single Item -->
                  <li
                    data-toggle="collapse"
                    data-target="#pcs"
                    class="collapsed"
                  >
                    <a href="#" id="pcs-icon"
                      ><b style="margin-left: 10px;">PCs</b></a
                    >
                    <ul class="sub-menu collapse" id="pcs">
                      <li><a href="#">PCs CŨ</a></li>
                      <li><a href="#">PCs MỚI</a></li>
                      <li><a href="#">PCs MỚI (100%)</a></li>
                      <li><a href="#">PCs GAME</a></li>
                      <li><a href="#">PCs ĐỒ HOẠ</a></li>
                    </ul>
                  </li>
                  <!-- Single Item -->
                  <li
                    data-toggle="collapse"
                    data-target="#cpu"
                    class="collapsed"
                  >
                    <a href="#" id="cpu-icon"
                      ><b style="margin-left: 10px;">CPU</b></a
                    >
                    <ul class="sub-menu collapse" id="cpu">
                      <li><a href="#">All</a></li>
                      <li><a href="#">Intel Core I3</a></li>
                      <li><a href="#">Intel Core I5</a></li>
                      <li><a href="#">Intel Core I7</a></li>
                      <li><a href="#">Intel Pentium</a></li>
                      <li><a href="#">Intel Celeron</a></li>
                      <li><a href="#">Intel Atom</a></li>
                      <li><a href="#">Intel Core M</a></li>
                      <li><a href="#">Intel Core I9</a></li>
                    </ul>
                  </li>
                  <!-- Single Item -->
                  <li
                    data-toggle="collapse"
                    data-target="#ram"
                    class="collapsed"
                  >
                    <a href="#" id="ram-icon"
                      ><b style="margin-left: 10px;">RAM</b></a
                    >
                    <ul class="sub-menu collapse" id="ram">
                      <li><a href="#">All</a></li>
                      <li><a href="#">4GB</a></li>
                      <li><a href="#">8GB</a></li>
                      <li><a href="#">16GB</a></li>
                      <li><a href="#">32GB</a></li>
                      <li><a href="#">64GB</a></li>
                    </ul>
                  </li>
                  <li
                    data-toggle="collapse"
                    data-target="#hdd"
                    class="collapsed"
                  >
                    <a href="#" id="ocung-icon"
                      ><b style="margin-left: 10px;">LOẠI Ổ CỨNG</b></a
                    >
                    <ul class="sub-menu collapse" id="hdd">
                      <li><a href="#">All</a></li>
                      <li><a href="#">HDD</a></li>
                      <li><a href="#">SSD</a></li>
                      <li><a href="#">SSD + HDD</a></li>
                      <li><a href="#">eMMC</a></li>
                      <li><a href="#">DDR4</a></li>
                      <li><a href="#">SSHD</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <hr />
            </div>
          </div>
          <!-- Giá sản phẩm -->
          <div class="range mt-2 d-none d-md-block">
            <h5 class="title mb-4">GIÁ SẢN PHẨM</h5>
            <input
              type="range"
              class="custom-range"
              min="0"
              max="5"
              step="0.5"
              id="customRange3"
            />
            <div class="form-inline mb-5 mt-3">
              <input
                type="text"
                class="form-control mr-2"
                style="width:110px;background-color: white;"
                placeholder="THẤP NHẤT"
              />
              <a style="font-weight:bolder;padding-top: 5px;">-</a>
              <input
                type="text"
                class="form-control ml-2"
                style="width:110px;background-color: white;"
                placeholder="CAO NHẤT"
              />
            </div>
            <hr />
          </div>
          <!-- End Giá sản phẩm -->

          <!-- Rating stars -->
          <div class="rating mt-5 d-none d-md-block">
            <h5 class="title mb-4">ĐÁNH GIÁ</h5>
            <a href="" style="color:#B8B8B8; text-decoration: none; ">
              <div class="stars ml-3">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="danhgia">(ít nhất 4 sao)</span>
              </div>
            </a>
            <a href="" style="color:#B8B8B8; text-decoration: none;">
              <div class="stars ml-3">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="danhgia">(ít nhất 3 sao)</span>
              </div>
            </a>
            <a href="" style="color:#B8B8B8; text-decoration: none;">
              <div class="stars ml-3">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="danhgia">(ít nhất 2 sao)</span>
              </div>
            </a>
            <a href="" style="color:#B8B8B8; text-decoration: none;">
              <div class="stars ml-3">
                <span class="fa fa-star checked"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="fa fa-star"></span>
                <span class="danhgia">(ít nhất 1 sao)</span>
              </div>
            </a>
          </div>
          <!-- End Rating stars -->
        </div>

        <div
          class="col-12 col-md-8 col-lg-9"
          style="background-color: #F4F4F3;"
        >
          <div class="d-flex justify-content-center banner">
            <a href="./Detail.html"
              ><img
                src="./Public/images/PC-product/PCs/banner.jpg"
                alt="banner2"
                title="Big Sale 2019"
            /></a>
          </div>
          <div class="shop_product_area mt-2">
            <div class="row">
              <div class="col-12 d-none d-md-block">
                <div
                  class="product-topbar d-flex align-items-center justify-content-between"
                >
                  <!-- Total Products -->
                  <div class="total-products cover">
                    <p style="margin: 0px; padding: 0px;">
                      PCs cũ: <span>86</span> sản phẩm
                    </p>
                  </div>
                  <!-- Sorting -->
                  <div class="product-sorting d-flex">
                    <p style="margin: 0px; padding: 0px;" class="mt-2">
                      SORT BY:
                    </p>
                    <form action="#" method="get">
                      <select
                        class="form-control"
                        name="select"
                        id="sortByselect"
                      >
                        <option value="value">HÀNG MỚI</option>
                        <option value="value">BÁN CHẠY</option>
                        <option value="value">GIẢM GIÁ NHIỀU</option>
                        <option value="value">GIÁ CAO</option>
                        <option value="value">GIÁ THẤP</option>
                      </select>
                      <input type="submit" class="d-none" value="" />
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="item owl-carousel owl-theme">
                  <div class="sale">
                    <a href="./Detail.html">
                      <div class="col-12 d-flex justify-content-center">
                        <img
                          src="./Public/images/PC-product/PCs/procduct-1.jpg"
                          title="Trọn bộ Dell Cpu i3-2100 Ram 4g Hdd 250G Màn 18.5"
                        />
                      </div>
                    </a>
                      <div class="col-12 text-justify">
                        <span>topsell</span>
                      <a href="./Detail.html">
                          <h6>
                            Trọn bộ Dell Cpu i3-2100 Ram 4g Hdd 250G Màn 18.5"
                          </h6>
                      </a>
                        <p class="product-price">
                          <span class="old-price">6.489.000đ</span>
                          <b>5.690.000đ</b>
                        </p>
                      </div>
                      <div class="stars ml-3">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="danhgia">(150 đánh giá)</span>
                      </div>
                    
                  </div>
                  <div class="sale">
                    <a href="./Detail.html">
                      <div class="col-12 d-flex justify-content-center">
                        <img
                          src="./Public/images/PC-product/PCs/procduct-9.jpg"
                          alt=""
                          title="Trọn Bộ HP Cpu i5-2400 Ram 4g Hdd 250G Màn 20"
                        />
                      </div>
                    </a>
                      <div class="col-12 text-justify">
                        <span>topsell</span>
                        <a href="./Detail.html">
                          <h6>
                            Trọn Bộ HP Cpu i5-2400 Ram 4g Hdd 250G Màn 20"
                          </h6>
                        </a>
                        <p class="product-price">
                          <span class="old-price">5.690.000đ</span>
                          <b>5.120.000đ</b>
                        </p>
                      </div>
                      <div class="stars ml-3">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="danhgia">(150 đánh giá)</span>
                      </div>
                   
                  </div>
                  <div class="sale">
                    <a href="./Detail.html">
                      <div class="col-12 d-flex justify-content-center">
                        <img
                          src="./Public/images/PC-product/PCs/procduct-3.jpg"
                          alt=""
                          title="Trọn Bộ HP 8000 Ram 4g/1333 Hdd 160G Màn 18.5"
                        />
                      </div>
                    </a>
                      <div class="col-12 text-justify">
                        <span>topsell</span>
                        <a href="./Detail.html">
                          <h6>
                            Trọn Bộ HP 8000 Ram 4g/1333 Hdd 160G Màn 18.5"
                          </h6>
                        </a>
                        <p class="product-price">
                          <span class="old-price">3.749.000đ</span
                          ><b> 3.510.000đ</b>
                        </p>
                      </div>
                      <div class="stars ml-3">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="danhgia">(150 đánh giá)</span>
                      </div>
                    
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="item">
                  <div class="sale">
                    <a href="./Detail.html">
                      <div class="col-12 d-flex justify-content-center">
                        <img
                          src="./Public/images/PC-product/PCs/procduct-4.jpg"
                          alt=""
                          title="Trọn Bộ dell vostro 230 Hdd 160G Màn Hình 17in"
                        />
                      </div>
                    </a>
                      <div class="col-12 text-justify">
                        <span>topsell</span>
                        <a href="./Detail.html">
                          <h6>
                            Trọn Bộ dell vostro 230 Hdd 160G Màn Hình 17in
                          </h6>
                        </a>
                        <p class="product-price">
                          <span class="old-price">4.100.000đ</span>
                          <b>2.959.000đ</b>
                        </p>
                      </div>
                      <div class="stars ml-3">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="danhgia">(150 đánh giá)</span>
                      </div>
                    
                  </div>
                  <div class="sale">
                    <a href="./Detail.html">
                      <div class="col-12 d-flex justify-content-center">
                        <img
                          src="./Public/images/PC-product/PCs/procduct-2.jpg"
                          alt=""
                          title="Trọn Bộ :Dell Optiplex 755, Chíp E7500, màn 17"
                        />
                      </div>
                    </a>
                      <div class="col-12 text-justify mt-3">
                        <span>topsell</span>
                        <a href="./Detail.html">
                          <h6>
                            Trọn Bộ :Dell Optiplex 880, Chíp E5500, màn 17
                          </h6>
                        </a>
                        <p class="product-price">
                          <span class="old-price">7.990.000đ</span
                          ><b>7.130.000đ</b>
                        </p>
                      </div>
                      <div class="stars ml-3">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="danhgia">(150 đánh giá)</span>
                      </div>
                    
                  </div>
                  <div class="sale">
                    <a href="./Detail.html">
                      <div class="col-12 d-flex justify-content-center">
                        <img
                          src="./Public/images/PC-product/PCs/procduct-3.jpg"
                          alt=""
                          title="Trọn Bộ :Dell Optiplex 755, Chíp E7500, màn 17"
                        />
                      </div>
                    </a>
                      <div class="col-12 text-justify">
                        <span>topsell</span>
                        <a href="./Detail.html">
                          <h6>
                            Trọn Bộ :Dell Optiplex 755, Chíp E7500, màn 17
                          </h6>
                        </a>
                        <p class="product-price">
                          <span class="old-price">4.290.000đ</span
                          ><b>3.880.000đ</b>
                        </p>
                      </div>
                      <div class="stars ml-3">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="danhgia">(150 đánh giá)</span>
                      </div>
                    
                  </div>
                </div>
              </div>
              <div class="col-xs-12 col-sm-6 col-lg-4">
                <div class="item">
                  <div class="sale">
                    <a href="./Detail.html">
                      <div class="col-12 d-flex justify-content-center">
                        <img
                          src="./Public/images/PC-product/PCs/procduct-6.jpg"
                          alt=""
                          title="Trọn Bộ dell vostro 230 Hdd 160G Màn Hình 18.5"
                        />
                      </div>
                    </a>
                      <div class="col-12 text-justify">
                        <span>topsell</span>
                        <a href="./Detail.html">
                          <h6>
                            Trọn Bộ dell vostro 230 Hdd 160G Màn Hình 18.5"
                          </h6>
                        </a>
                        <p class="product-price">
                          <span class="old-price">9.459.000đ</span
                          ><b> 4.499.000đ</b>
                        </p>
                      </div>
                      <div class="stars ml-3">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="danhgia">(150 đánh giá)</span>
                      </div>
                    
                  </div>
                  <div class="sale">
                    <a href="./Detail.html">
                      <div class="col-12 d-flex justify-content-center">
                        <img
                          src="./Public/images/PC-product/PCs/procduct-7.jpg"
                          alt=""
                          title="Trọn Bộ HP 8000 Ram 4g/1333 Hdd 160G Màn 18.5"
                        />
                      </div>
                    </a>
                      <div class="col-12 text-justify mt-4">
                        <span>topsell</span>
                        <a href="./Detail.html">
                          <h6>
                            Trọn Bộ HP 8000 Ram 4g/1333 Hdd 160G Màn 18.5"
                          </h6>
                        </a>
                        <p class="product-price">
                          <span class="old-price">3.500.000đ</span>
                          <b>2.938.600đ</b>
                        </p>
                      </div>
                      <div class="stars ml-3">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="danhgia">(150 đánh giá)</span>
                      </div>
                    
                  </div>
                  <div class="sale">
                    <a href="./Detail.html">
                      <div class="col-12 d-flex justify-content-center">
                        <img
                          src="./Public/images/PC-product/PCs/procduct-3.jpg"
                          alt=""
                          title="Trọn Bộ Hp 8000 Ram 2g/1333 Hdd 160G Màn Hình 18.5"
                        />
                      </div>
                    </a>
                      <div class="col-12 text-justify">
                        <span>topsell</span>
                        <a href="./Detail.html">
                          <h6>
                            Trọn Bộ Hp 8000 Ram 2g/1333 Hdd 160G Màn Hình 18.5
                          </h6>
                        </a>
                        <p class="product-price">
                          <span class="old-price">4.190.000đ</span
                          ><b>3.590.000đ</b>
                        </p>
                      </div>
                      <div class="stars ml-3">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="danhgia">(150 đánh giá)</span>
                      </div>
                    
                  </div>
                </div>
              </div>
            </div>
            <nav aria-label="navigation">
              <ul class="pagination mt-30 mb-50">
                <li class="page-item">
                  <a class="page-link" href="./PCs.html"
                    ><i class="fa fa-angle-left"></i
                  ></a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="./PCs.html">1</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="./PCs.html">2</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="./PCs.html">3</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="./PCs.html">...</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="./PCs.html">21</a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="./PCs.html"
                    ><i class="fa fa-angle-right"></i
                  ></a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
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

    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
