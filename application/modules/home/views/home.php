<!-- /#page -->
<style>
  .custom-select {
    width: 300px;
    height: 60px;
    /* Sesuaikan dengan tinggi yang diinginkan */
  }
</style>
<style>
  .flash-message {
    padding: 10px;
    border: 1px solid #ccc;
    background-color: #f8f8f8;
    margin-bottom: 10px;
  }
</style>
<div id="wrapper">
  <div id="page" class="clearfix">

    <!-- Main Header -->

    <header id="header3" class="main-header header header-fixed ">
      <!-- Header Lower -->
      <div class="top-bar">
        <div class="themesflat-container">
          <div class="row">
            <div class="col-md-9">
              <ul class="list-infor-topbar">
                <li>
                  <a href="#">
                    <i class="icon-Group-11"></i>
                    <p>Hot Line: 0812 1293 8750</p>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="icon-Group3"></i>
                    <p>Mail Us: Autoreserve25@gmail.com</p>
                  </a>
                </li>
              </ul>
            </div>
            <div class="col-md-3">
              <ul class="icon-topbar">
                <li>
                  <a href="#"><i class="icon-6"></i></a>
                </li>
                <li>
                  <a href="#"><i class="icon-4"></i></a>
                </li>
                <li>
                  <a href="#"><i class="icon-5"></i></a>
                </li>
                <li>
                  <a href="#"><i class="icon-7"></i></a>
                </li>

              </ul>

            </div>
          </div>
        </div>
      </div>
      <div class="header-lower">
        <div class="themesflat-container">
          <div class="row">
            <div class="col-lg-12">
              <div class="header-style2 flex justify-space align-center">
                <!-- Logo Box -->
                <div class="logo-box flex">
                  <div class="logo"><a href="#"><img src="<?= base_url(); ?>assets/images/AUTORESERVE-PNG.png" alt="Logo"></a></div>
                </div>
                <div class="nav-outer flex align-center">
                  <!-- Main Menu -->
                  <nav class="main-menu show navbar-expand-md">
                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                      <ul class="navigation clearfix">
                      </ul>
                    </div>
                  </nav>
                  <!-- Main Menu End-->
                </div>
                <div class="header-account flex align-center">

                  <div class="inner-container flex justify-space align-center">
                    <div class="nav-outer flex align-center">
                      <!-- Main Menu -->
                      <nav class="main-menu show navbar-expand-md">
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                          <ul class="navigation clearfix">
                            <li><a href="http://localhost/autoreserveshowroom/home">Home </a>
                            </li>
                            <li><a href="http://localhost/autoreserveshowroom/home/contactus">Contact us </a>
                            </li>
                            <li class="dropdown2"><a href="#">History </a>
                              <ul>
                                <li><a href="http://localhost/autoreserveshowroom/home/booking/historybooking">Pembelian</a></li>
                                <li><a href="http://localhost/autoreserveshowroom/home/booking/historypenjualan">Penjualan</a></li>
                              </ul>
                            </li>
                            <li><a href="http://localhost/autoreserveshowroom/home/pesan">Pesan </a>
                            </li>
                          </ul>
                        </div>
                      </nav>
                      <!-- Main Menu End-->
                    </div>
                  </div>
                  <div class="register ml--18">
                    <div class="flex align-center">
                      <?php if ($this->session->userdata('id_role')) : ?>
                        <a href="<?php echo base_url('auth/logout'); ?>" role="button">Logout</a>
                        <a href="<?php echo base_url('home/profile'); ?>" role="button">Profile</a>
                      <?php else : ?>
                        <a data-bs-toggle="modal" href="#exampleModalToggle" role="button">Register</a>
                        <a data-bs-toggle="modal" href="#exampleModalToggle2" role="button">Login</a>
                      <?php endif; ?>

                    </div>
                  </div>
                  <div class="flat-bt-top sc-btn-top ml--20 ">
                    <a class="btn-icon-list" href="<?php echo base_url('home/penjualanmobil'); ?>">
                      <span>Sell Your Car</span>
                      <i class="icon-add-button-1"></i>
                    </a>
                  </div>

                </div>
                <div class="mobile-nav-toggler mobile-button">
                  <span></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Header Lower -->

      <?php if ($this->session->flashdata('message')) : ?>
        <div class="flash-message">
          <?php echo $this->session->flashdata('message'); ?>
        </div>
      <?php endif; ?>
      <!-- Mobile Menu  -->
      <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
      <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <nav class="menu-box">
          <div class="nav-logo">
            <a href="#"><img src="<?= base_url(); ?>assets/images/AUTORESERVE-PNG.png" alt="Logo Motorx"></a>
          </div>
          <div class="bottom-canvas">
            <div class="menu-outer">
              <ul class="navigation clearfix">
                <li class="dropdown2 current">
                  <a href="#">Home</a>
                  <ul>
                    <li class="current"><a href="index.html">Home Page 01</a>
                    </li>
                    <li><a href="home02.html">Home Page 02</a></li>
                    <li><a href="home03.html">Home Page 03</a></li>
                    <li><a href="home04.html">Home Page 04</a></li>
                    <li><a href="home05.html">Home Page 05</a></li>
                    <li><a href="home06.html">Home Page 06</a></li>
                  </ul>
                  <div class="dropdown2-btn"></div>
                </li>
                <li class="dropdown2">
                  <a href="#">Cars</a>
                  <ul>
                    <li><a href="<?php echo base_url('home/penjualanmobil'); ?>">Car Listings</a></li>
                    <li><a href="listing-details.html">Listing Details</a></li>
                  </ul>
                  <div class="dropdown2-btn"></div>
                </li>
                <li class="dropdown2">
                  <a href="#">Page</a>
                  <ul>
                    <li><a href="dashboard.html">Dashboard</a></li>
                    <li><a href="my-inventory.html">My Inventory</a></li>
                    <li><a href="addcart.html">Add Car</a></li>
                    <li><a href="seller-profile.html">Seller Profile</a></li>
                    <li><a href="dealer-details.html">Dearer Details</a></li>
                    <li><a href="404.html">404</a></li>
                  </ul>
                  <div class="dropdown2-btn"></div>
                </li>
                <li class="dropdown2">
                  <a href="#">News </a>
                  <ul>
                    <li><a href="blog.html">Blog List</a></li>
                    <li><a href="blog-single.html">Blog Detail</a></li>
                  </ul>
                  <div class="dropdown2-btn"></div>
                </li>
                <li><a href="contact-us.html">Contact Us</a>

                </li>
              </ul>
            </div>
            <div class="help-bar-mobie login-box">
              <a data-bs-toggle="modal" href="#exampleModalToggle" role="button" class="fw-7 category"><i class="icon-user"></i>Login</a>
            </div>
            <div class="help-bar-mobie search">
              <a href="#" class="fw-7 font-2"><i class="icon-loupe-1"></i>Search</a>
            </div>
            <div class="help-bar-mobie compare">
              <a href="#" class="fw-7 font-2"><i class="icon-shuffle-2-1"></i>Compare</a>
            </div>
            <div class="help-bar-mobie cart">
              <a href="#" class="fw-7 font-2"><i class="icon-Vector"></i>Cart</a>
            </div>
          </div>
        </nav>
      </div>
      <!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    <!-- Slide -->
    <div class="widget-tf-slider ">
      <div class="slider-wrap swiper-wrapper">
        <div class="tf-slide-item swiper-slide">
          <div class="slide-item-image">
            <img src="<?= base_url(); ?>assets_home/images/slide/bground.jpg" alt="">
            <div class="overlay"></div>
          </div>
          <div class="slide-item-content">
            <div class="slide-content">
              <span class="wow fadeInUp sub-title" data-wow-delay="100ms" data-wow-duration="2000ms">Trusted Dealer, Rental</span>
              <h1 class=" title-slide wow slideInUp" data-wow-delay="50ms" data-wow-duration="200ms">
                premium car Collection..</h1>
              <p class="description wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                Car is where early adopters and innovation seekers find lively
                imaginative tech before it hits the mainstream.</p>
              <div class="box">
                <!-- Button -->
                <div class="btn-main wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">
                  <a href="#widget-car-service" class="button_main_inner ">
                    <span>
                      Go to listing
                    </span>
                  </a>
                </div>
                <!-- Button -->
                <div class="video-wrap wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">
                  <a href="https://www.youtube.com/watch?v=ThMXH5MrlZI" class="popup-youtube btn-video ml-28">
                    <i class="icon-Polygon-6"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="slide-image">
              <img src="<?= base_url(); ?>assets_home/images/slide/icon.png" class="icon-shape wow swing" alt="">
              <div class="box-offer">
                <p>40 <span>%</span></p>
                <span>off</span>
              </div>
              <div class="box-car">
                <img src="<?= base_url(); ?>assets_home/images/slide/car-home.png" alt="">
                <!-- <div class="dot-car">
                  <div class="dot">
                    <i class="icon-Vector-5 active">
                    </i>
                    <div class="content-price active">
                      <div class="proflile">
                        <span>Luxury Ford Car</span>
                        <span class="price">Rp 195,000,000</span>
                      </div>
                      <p>Jl. Jenderal Sudirman No.Kav. 5, Karet Tengsin, Kecamatan Tanah Abang, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10220</p>

                    </div>

                  </div>
                </div> -->
              </div>
            </div>
            <div class="box">
              <span>(0331) 4221 1902</span>
              <span>autoreserveshowroom@gmail.com</span>
            </div>
          </div>
        </div>
      </div>
    </div><!-- Slide -->

    <!-- Slide search car -->
    <div class="widget-search-car">
      <div class="themesflat-container">
        <div class="search-form-widget">
          <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">All Cars</button>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
              <form method="post" id="search-forms" action="<?php echo base_url('home'); ?>">
                <div class="inner-group grid">
                  <div class="form-group">
                    <span class="current">Merk</span>
                    <select name="merk" class="form-select custom-select" aria-label="Default select example">
                      <option value="">-- Pilih --</option>
                      <?php foreach ($merkModel as $data) : ?>
                        <option value="<?php echo $data['id_merk_mobil'] ?>"><?php echo $data['merk'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <span class="current">Grade</span>
                    <select name="grade" class="form-select custom-select" aria-label="Default select example">
                      <option value="">-- Pilih --</option>
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="C">C</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <span class="current">Mobil</span>
                    <input type="text" id="search_text" class="form-control" name="search_text" placeholder="Masukkan Nama Mobil" value="">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="button-search-listing" style="margin-top:27px;">
                      <i class="icon-search-1"></i>
                      Cari
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Slide  search car-->

    <!-- Icon box -->
    <div class="widget-icon-box mt--115">
      <div class="themesflat-container">
        <div class="heading-section t-al-center mb-30">
          <span class="sub-title mb-6 wow fadeInUp">Find your car by car brand</span>
          <!-- <h2 class="title wow fadeInUp">Browse by Brands</h2> -->
        </div>
        <div class="row">

          <?php foreach ($merkModel as $merk) : ?>
            <div class="col-6 col-md-4 col-lg-4 col-xl-2 mt-3">
              <div class="icon-box border-line">
                <div class="image-box-wrap">
                  <img src="<?= base_url('assets_home/images/logo/' . $merk['gambar_merk']); ?>" alt="">
                </div>
                <span class="title-icon"><?= $merk['merk'] ?></span>
                <!-- <div class="btn-con-box">
                  <i class="icon-arrow-right2"></i>
                </div> -->
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>
    </div>
    <!-- Icon box -->

    <!-- Widget Tab Car Service -->
    <div class="widget-car-service" id="widget-car-service">
      <div class="themesflat-container">
        <div class="header-section tab-car-service">
          <div class="heading-section">
            <span class="sub-title mb-6 wow fadeInUp">Trusted Car DeAler Service</span>
            <h2 class="title wow fadeInUp">Explore all Vehicles</h2>
          </div>
          <ul class="nav nav-pills justify-content-end" id="pills-tab-service" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab-service" data-bs-toggle="pill" data-bs-target="#pills-home-service" type="button" role="tab" aria-selected="true"> Cars</button>
            </li>
          </ul>
        </div>
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home-service" role="tabpanel">
            <!-- Widget Car Service -->
            <div class="car-list-item">

              <?php foreach ($mobilDetail as $mobil) : ?>
                <?php
                $id_mobil = $mobil['id_mobil'];
                $mobilBooking = $this->mobilModel->getDataBookingMobilByIdMobil($id_mobil)->row_array();

                // die;
                ?>
                <div class="tf-car-service">
                  <?php if ($mobilBooking == true) : ?>
                    <a href="#" id="myLink" onclick="event.preventDefault();" class="image">
                    <?php else : ?>
                      <a href="<?php echo base_url('home/cardetail/detail/' . $mobil['id_mobil']); ?>" class="image">
                      <?php endif; ?>
                      <div class="stm-badge-top">
                        <div class="feature">
                          <?php if ($mobilBooking == true) : ?>
                            <span style="background-color: #8dbf42;">Booked</span>
                          <?php endif; ?>
                          <div class="cut">
                            <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M12.296 14.0939C13.9707 14.0939 15.3284 12.8164 15.3284 11.2406C15.3284 9.66468 13.9707 8.38718 12.296 8.38718C10.6213 8.38718 9.26367 9.66468 9.26367 11.2406C9.26367 12.8164 10.6213 14.0939 12.296 14.0939Z" fill="white"></path>
                              <path d="M9.45163 2.32436L7.71751 4.10772H4.71358C3.67121 4.10772 2.81836 4.91023 2.81836 5.89108V16.5913C2.81836 17.5721 3.67121 18.3746 4.71358 18.3746H19.8754C20.9177 18.3746 21.7706 17.5721 21.7706 16.5913V5.89108C21.7706 4.91023 20.9177 4.10772 19.8754 4.10772H16.8714L15.1373 2.32436H9.45163ZM12.2945 15.6996C9.67906 15.6996 7.55641 13.7022 7.55641 11.2412C7.55641 8.78013 9.67906 6.78276 12.2945 6.78276C14.9099 6.78276 17.0325 8.78013 17.0325 11.2412C17.0325 13.7022 14.9099 15.6996 12.2945 15.6996Z" fill="white"></path>
                            </svg>
                            <!-- <p>5</p> -->
                          </div>
                        </div>
                        <span><?= $mobil['tahun_pembuatan'] ?></span>

                      </div>
                      <div class="listing-images">
                        <div class="hover-listing-image">
                          <div class="wrap-hover-listing">
                            <?php
                            $dataGambarMobil = $this->mobilModel->getDataGambarMobils($id_mobil)->result_array();
                            ?>

                            <?php foreach ($dataGambarMobil as $data) : ?>
                              <div class="listing-item active" title="Lexus LC Hybrid 2024">
                                <div class="images">
                                  <img src="<?= base_url('assets_home/images/cars/') . $data['gambar_mobil']; ?>" class="swiper-image tfcl-light-gallery" alt="images">
                                </div>
                              </div>
                            <?php endforeach; ?>

                            <div class="bullet-hover-listing">
                              <?php foreach ($dataGambarMobil as $data) : ?>
                                <div class="bl-item"></div>
                              <?php endforeach; ?>
                            </div>
                          </div>
                        </div>
                      </div>
                      </a>
                      <div class="content">
                        <span class="sub-title"><?php echo $mobil['variant_mobil'] ?></span>
                        <?php if ($mobilBooking == true) : ?>
                          <h6 class="title"><a onclick="event.preventDefault();" href="#" id="myLink2"><?php echo $mobil['jenis_mobil'] ?></a></h6>
                        <?php else : ?>
                          <h6 class="title"><a href="<?php echo base_url('home/cardetail/detail/' . $mobil['id_mobil']); ?>"><a href="<?php echo base_url('home/cardetail/detail/' . $mobil['id_mobil']); ?>"><?php echo $mobil['jenis_mobil'] ?></a></a></h6>
                        <?php endif; ?>

                        <span class="price"><?php echo number_format($mobil['harga_cash'], 0) ?></span>
                        <div class="description">
                          <ul>
                            <li class="listing-information fuel">
                              <i class="icon-gasoline-pump-1"></i>
                              <div class="inner">
                                <span>Fuel type</span>
                                <p>Petrol</p>
                              </div>
                            </li>
                            <li class="listing-information size-engine">
                              <i class="icon-Group1"></i>
                              <div class="inner">
                                <span>Mileage</span>
                                <p><?php echo $mobil['kilometer_mobil'] ?></p>
                              </div>
                            </li>
                            <li class="listing-information transmission">
                              <i class="icon-gearbox-1"></i>
                              <div class="inner">
                                <span>Transmission</span>
                                <p><?php echo $mobil['transmisi'] ?></p>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <div class="bottom-btn-wrap">
                          <div class="btn-read-more">
                            <?php if ($mobilBooking == true) : ?>
                              <a class="more-link" onclick="event.preventDefault();" id="myLink3" href="#">
                                <span>View details</span>
                                <i class="icon-arrow-right2"></i>
                              </a>
                            <?php else : ?>
                              <a class="more-link" href="<?php echo base_url('home/cardetail/detail/' . $mobil['id_mobil']); ?>">
                                <span>View details</span>
                                <i class="icon-arrow-right2"></i>
                              </a>
                            <?php endif; ?>

                          </div>
                          <!-- <div class="btn-group">
                        <a href="#" class="icon-service">
                          <i class="icon-shuffle-2-11"></i>
                        </a>
                        <a href="#" class="icon-service">
                          <i class="icon-heart-1-1"></i>
                        </a>
                      </div> -->
                        </div>

                      </div>
                </div>
              <?php endforeach; ?>

            </div>
            <!-- Widget Car Service -->
          </div>
        </div>
      </div>
    </div>
    <!-- Widget Tab Car Service -->

    <!-- Widget Logo -->
    <!-- <section class="flat-brand">
      <div class="themesflat-container">
        <div class="row">
          <div class="col-lg-12">
            <div class="title-section t-al-center">
              <h4 class="wow fadeInUp">our partners & supporters</h4>
            </div>
            <div class="swiper-container carousel-5">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="slogan-logo">
                    <a href="#">
                      <img src="</?= base_url(); ?>assets_home/images/partner/logo-partner.png" alt="images">
                    </a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slogan-logo">
                    <a href="#">
                      <img src="</?= base_url(); ?>assets_home/images/partner/logo-partner.png" alt="images">
                    </a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slogan-logo">
                    <a href="#">
                      <img src="</?= base_url(); ?>assets_home/images/partner/logo-partner.png" alt="images">
                    </a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slogan-logo">
                    <a href="#">
                      <img src="</?= base_url(); ?>assets_home/images/partner/logo-partner.png" alt="images">
                    </a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slogan-logo">
                    <a href="#">
                      <img src="</?= base_url(); ?>assets_home/images/partner/logo-partner.png" alt="images">
                    </a>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="slogan-logo">
                    <a href="#">
                      <img src="</?= base_url(); ?>assets_home/images/partner/logo-partner.png" alt="images">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Widget Logo -->

    <!-- Widget Car List V2 -->
    <div class="widget-car-list-v2">
      <div class="themesflat-container">
        <div class="header-tab mb-46">
          <div class="heading-section">
            <span class="sub-title mb-10 wow fadeInUp">Trusted Car Delaer Service</span>
            <h2 class="title wow fadeInUp">Popular Makes by</h2>
          </div>
          <ul class="nav nav-pills tab-car-service-v2 justify-content-end" id="pills-tab-service-v2" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-cadilliac-tab-service-v2" data-bs-toggle="pill" data-bs-target="#pills-cadilliac-service-v2" type="button" role="tab" aria-selected="true"> Cadilliac</button>
            </li>
            <!-- <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-audi-tab-service-v2" data-bs-toggle="pill" data-bs-target="#pills-audi-service-v2" type="button" role="tab" aria-selected="false">Audi</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-bmw-tab-service-v2" data-bs-toggle="pill" data-bs-target="#pills-bmw-service-v2" type="button" role="tab" aria-selected="false">Bmw</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-mercedez-tab-service-v2" data-bs-toggle="pill" data-bs-target="#pills-mercedez-service-v2" type="button" role="tab" aria-selected="false">Mercedez</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-huyndai-tab-service-v2" data-bs-toggle="pill" data-bs-target="#pills-huyndai-service-v2" type="button" role="tab" aria-selected="false">Haundai </button>
            </li> -->
          </ul>
        </div>
        <div class="tab-content" id="pills-tabContent-v2">

          <div class="tab-pane fade show active" id="pills-cadilliac-service-v2" role="tabpanel">
            <!-- Widget Car Service -->
            <div class="row">

              <?php foreach ($mobilPopuler as $data) : ?>
                <div class="col-12 col-sm-6 col-md-6 col-xl-6">
                  <div class="tf-car-service-v2">
                    <a href="<?php echo base_url('home/cardetail/detail/' . $mobil['id_mobil']); ?>" class="image">
                      <div class="stm-badge-top">
                        <div class="feature-group">
                          <!-- <span class="featured">Featured</span> -->
                          <!-- <span class="year"><?php echo $data['tahun_pembuatan'] ?></span> -->
                        </div>
                      </div>
                      <?php
                      $id_mobil = $data['id_mobil'];
                      $dataGambarMobil = $this->mobilModel->getDataGambarMobils($id_mobil)->row_array();
                      ?>
                      <div class="thumb">
                        <img src="<?= base_url(); ?>assets_home/images/car-list/c5.png" class="img-responsive" alt="Image Car Service">
                      </div>
                    </a>
                    <div class="content">
                      <span class="sub-title"><?php echo $data['merk'] ?></span>
                      <h6 class="title"><a href="<?php echo base_url('home/cardetail/detail/' . $mobil['id_mobil']); ?>"><?php echo $data['jenis_mobil'] ?></a></h6>
                      <div class="description">
                        <ul>
                          <!-- <li class="listing-information fuel">
                            <i class="icon-gasoline-pump-1"></i>
                            <div class="inner">
                              <span>Fuel type</span>
                              <p>Petrol</p>
                            </div>
                          </li> -->
                          <li class="listing-information size-engine">
                            <i class="icon-Group1"></i>
                            <div class="inner">
                              <span>Mileage</span>
                              <p><?php echo $data['kilometer_mobil'] ?></p>
                            </div>
                          </li>
                          <li class="listing-information transmission">
                            <i class="icon-gearbox-1"></i>
                            <div class="inner">
                              <span>Transmission</span>
                              <p><?php echo $data['transmisi'] ?></p>
                            </div>
                          </li>
                        </ul>
                      </div>
                      <div class="bottom-btn-wrap">
                        <div class="price-group">
                          <span class="price-sale">
                            Harga Cash
                            <br>
                            <?php echo number_format($data['harga_cash'], 0)  ?>
                          </span>
                          <span class="price">
                            <br>
                            <br>
                            Harga Credit
                            <br>
                            <?php echo number_format($data['harga_credit'], 0)  ?>
                          </span>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php endforeach; ?>

            </div>
            <!-- Widget Car Service -->
          </div>

        </div>
      </div>
    </div>
    <!-- Widget Car List V2 -->

    <!-- Widget Counter car -->
    <div class="widget-counter-car">
      <div class="themesflat-container">
        <div class="counter-car">
          <div class="counter-car-header-wrap">
            <div class="counter-car-header">
              <!-- <span class="sub-heading wow fadeInUp">Find your car by car brand</span> -->
              <h2 class="title wow fadeInUp">Showroom Terbaik</h2>
            </div>
            <div class="counter-car-content">
              <!-- <p class="description wow fadeInUp">There are many variations of simply free text
                passages of Lorem
                available but the majority have suffered alteration in some form
                by injected hum randomised words which don't slightly.
              </p> -->
            </div>
          </div>
          <div class="counter-wrap tf-counter mb--25">
            <div class="widget-counter t-al-center counter-v1">
              <svg width="76" height="68" viewBox="0 0 76 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M70.8177 23.8466L69.2522 22.1851L63.7577 7.33891C62.8214 4.83122 60.4271 3.16968 57.7566 3.1543H18.5117C15.8412 3.1543 13.4469 4.83122 12.5106 7.33891L7.09279 22.0004L4.83663 24.0927C2.87208 25.7697 1.73633 28.2312 1.73633 30.8158V52.4466C1.75168 55.985 4.62175 58.8466 8.1518 58.8466H12.2037C15.7337 58.8466 18.6038 55.985 18.6191 52.4466V49.3081H56.6822V52.4466C56.6976 55.985 59.5676 58.8466 63.0977 58.8466H67.1496C70.6796 58.8466 73.5497 55.985 73.565 52.4466V30.2466C73.5497 27.8312 72.5674 25.5235 70.8177 23.8466ZM15.3961 8.38506C15.8872 7.07737 17.1304 6.23122 18.5117 6.23122H57.7719C59.1533 6.23122 60.3964 7.09276 60.8876 8.38506L65.6762 21.3081H62.1001C61.2559 15.5389 55.8995 11.5543 50.144 12.4158C45.5549 13.0928 41.9481 16.7081 41.2728 21.3081H10.6075L15.3961 8.38506ZM58.9691 21.3081H44.3731C45.2173 17.262 49.177 14.6774 53.2136 15.5235C56.099 16.1389 58.3552 18.4004 58.9691 21.3081ZM15.5495 52.4466C15.5342 54.2927 14.0454 55.7696 12.2037 55.7696H8.1518C6.31004 55.7696 4.82128 54.2927 4.80593 52.4466V48.4158C5.72681 49.0158 6.9393 49.3081 8.1518 49.3081H15.5495V52.4466ZM70.4954 52.4466C70.4801 54.2927 68.9913 55.7696 67.1496 55.7696H63.0977C61.2559 55.7696 59.7672 54.2773 59.7518 52.4466V49.3081H67.1496C68.3621 49.3081 69.5746 49.0158 70.4954 48.4158V52.4466ZM67.1496 46.2312H8.1518C6.32538 46.2466 4.82128 44.785 4.80593 42.9389V30.8158C4.80593 29.1235 5.55798 27.5081 6.84722 26.4158C6.86256 26.4004 6.89326 26.3697 6.90861 26.3543L8.99594 24.385H67.1189L68.5923 25.9697C68.6076 26.0004 68.6537 26.0158 68.669 26.0466C69.8201 27.1389 70.4801 28.662 70.4801 30.2466V42.9389H70.4954C70.4801 44.7697 68.976 46.2466 67.1496 46.2312Z" fill="#D01818"></path>
                <path d="M21.995 30.5381H10.484C9.63988 30.5381 8.94922 31.2304 8.94922 32.0765V40.0765C8.94922 40.9227 9.63988 41.615 10.484 41.615H21.995C22.8392 41.615 23.5298 40.9227 23.5298 40.0765V32.0765C23.5298 31.2304 22.8392 30.5381 21.995 30.5381ZM20.4602 38.5381H12.0188V33.615H20.4602V38.5381Z" fill="#D01818"></path>
                <path d="M64.8173 30.5381H53.3063C52.4621 30.5381 51.7715 31.2304 51.7715 32.0765V40.0765C51.7715 40.9227 52.4621 41.615 53.3063 41.615H64.8173C65.6614 41.615 66.3521 40.9227 66.3521 40.0765V32.0765C66.3521 31.2304 65.6614 30.5381 64.8173 30.5381ZM63.2825 38.5381H54.8411V33.615H63.2825V38.5381Z" fill="#D01818"></path>
                <path d="M45.0641 37H30.2379C29.3938 37 28.7031 37.6923 28.7031 38.5385C28.7031 39.3846 29.3938 40.0769 30.2379 40.0769H45.0641C45.9083 40.0769 46.5989 39.3846 46.5989 38.5385C46.5989 37.6923 45.9083 37 45.0641 37Z" fill="#D01818"></path>
                <path d="M45.0641 32.2305H30.2379C29.3938 32.2305 28.7031 32.9228 28.7031 33.7689C28.7031 34.6151 29.3938 35.3074 30.2379 35.3074H45.0641C45.9083 35.3074 46.5989 34.6151 46.5989 33.7689C46.5989 32.9228 45.9083 32.2305 45.0641 32.2305Z" fill="#D01818"></path>
              </svg>
              <div class="number-counter number" data-to="1200" data-speed="2000" data-waypoint-active="yes">
                1200
              </div>
              <p>Vehicle in stock Cars</p>
            </div>
            <div class="widget-counter t-al-center counter-v1">
              <svg width="93" height="74" viewBox="0 0 93 74" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M22.5684 46.6988L35.1185 52.0133C35.0961 51.8564 35.0737 51.6994 35.0737 51.5312C35.0737 49.087 37.0535 47.1024 39.492 47.1024H48.5298C48.8989 47.1024 49.2569 47.024 49.5924 46.867L57.2545 43.3912C58.4513 42.853 59.7824 42.5615 61.0911 42.5615H67.3326V44.8039H61.0911C60.0956 44.8039 59.0889 45.017 58.1717 45.4318L50.5096 48.9076C49.8833 49.1879 49.2121 49.3337 48.5186 49.3337H39.4808C38.2728 49.3337 37.2996 50.3203 37.2996 51.52C37.2996 52.7197 38.2839 53.7064 39.4808 53.7064H51.192V55.9488H39.492C38.7202 55.9488 38.0043 55.7358 37.3779 55.3882V55.3994L21.7071 48.7506C20.4096 48.2012 18.989 48.2124 17.7027 48.773C16.7184 49.2103 15.913 49.9167 15.3761 50.8361L43.0378 65.5464C45.1518 66.6676 47.6685 66.8918 49.9504 66.1631L63.4848 61.8015L67.3438 61.7455V63.9879H63.9993L50.6327 68.2934C49.5253 68.6521 48.3844 68.8203 47.2323 68.8203C45.4203 68.8203 43.6082 68.3831 41.9975 67.5197L12.5238 51.8676L12.8482 50.9482C13.5305 49.0421 14.9399 47.5397 16.7967 46.7212C18.6535 45.9252 20.7004 45.9027 22.5684 46.6988Z" fill="#D01818"></path>
                <path d="M69.7589 65.7479V41.9446C69.7589 40.7112 70.7656 39.7021 71.996 39.7021H83.2598V41.9446H71.996V65.7591H83.2598V68.0015H71.996C70.7656 67.9903 69.7589 66.9812 69.7589 65.7479Z" fill="#D01818"></path>
                <path d="M74.937 62.2606C74.937 63.1239 75.6416 63.8303 76.5029 63.8303C77.3754 63.8303 78.0801 63.1239 78.0801 62.2606C78.0801 61.3861 77.3754 60.6797 76.5029 60.6797C75.6416 60.6797 74.937 61.3861 74.937 62.2606Z" fill="#D01818"></path>
                <path d="M56.7947 31.8762L55.5866 32.7732L47.2647 28.1538L39.7368 32.6947L39.0881 33.0759L37.8801 32.2014L39.6921 22.8505L33.0368 17.065L32.4999 16.5493L32.9696 15.159L42.3878 13.9929L45.8105 5.87535L46.1237 5.20262L46.8396 5.19141H47.6002L51.6158 13.8359L60.3852 14.5759L61.1346 14.6656L61.582 16.0672L54.6359 22.559L56.7947 31.8762ZM57.7454 16.6053L50.7881 15.9999L50.1281 15.9214L46.9179 9.01474L44.1998 15.4393L43.9202 16.0559L36.3588 16.9866L41.5936 21.5387L42.1193 21.9872L40.6652 29.4993L46.6606 25.8778L47.2311 25.575L53.8641 29.2638L52.3093 22.5366L52.1191 21.8414L57.7454 16.6053Z" fill="#D01818"></path>
                <path d="M71.5035 27.7388L73.1254 34.724L73.3491 35.5313L72.0852 36.4619L65.1166 32.5937L58.9646 36.2937L58.2711 36.731L57.0296 35.8228L58.5508 27.9855L56.9289 26.584L58.3942 24.891L60.553 26.7634L60.8774 27.1446V27.5931L59.8259 33.1655L64.3672 30.4185L64.6021 30.1943L65.5529 30.1719L65.7766 30.3961L70.4185 32.9749L69.1658 27.5258V26.8643L73.5169 22.8055L68.1926 22.3346L67.6781 22.3234L67.2083 21.8525L64.8258 16.7173L62.6782 21.7964L62.3315 22.4579H61.7051L59.0094 22.7943L58.7297 20.5631L60.8885 20.3052L63.7296 13.5779L64.1099 12.8604L65.6535 12.9837L65.8661 13.6452L68.8861 20.1594L76.0001 20.7761L76.8837 20.821L77.3535 22.4579L76.7383 22.8616L71.5035 27.7388Z" fill="#D01818"></path>
                <path d="M34.7377 20.3053L34.5364 22.5365L32.3776 22.3347L31.8743 22.3122L31.4045 21.8413L29.022 16.7062L26.975 21.5386L26.9527 22.4468H25.9012L20.5658 23.1083L24.7156 26.7186L25.0847 27.111V27.5932L24.0221 33.1544L28.5746 30.4186L28.8095 30.1832L29.7938 30.1944L29.9951 30.4074L34.6147 32.975L33.3507 27.5259L33.3619 26.8644L36.2254 24.1847L37.7578 25.8216L35.7109 27.7389L37.3216 34.7241L37.5453 35.4753L36.3261 36.4844L29.3128 32.5938L23.1496 36.305L22.4561 36.731L21.2369 35.8116L22.7581 27.9856L17.3779 23.3101C17.0088 23.0186 16.8522 22.5253 16.9753 22.0768L17.2325 21.2807L25.0847 20.3165L27.9482 13.5668L28.2837 12.9501L29.6148 12.9053L29.9616 13.4547L33.0935 20.1595L34.7377 20.3053Z" fill="#D01818"></path>
              </svg>
              <div class="number-counter number" data-to="120" data-speed="2000" data-waypoint-active="yes">
                120<span>k</span></div>
              <p>Satisfied customers</p>
            </div>
            <div class="widget-counter t-al-center counter-v1">
              <svg width="89" height="64" viewBox="0 0 89 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M46.0986 56.5C45.4102 56.5 44.8516 57.06 44.8516 57.75C44.8516 58.44 45.4102 59 46.0986 59C46.7869 59 47.3456 58.44 47.3456 57.75C47.3456 57.06 46.7869 56.5 46.0986 56.5Z" fill="#D01818"></path>
                <path d="M63.5578 5.75H59.8168V3.75C59.8168 1.68225 58.1385 0 56.0757 0H26.1471C24.0842 0 22.406 1.68225 22.406 3.75V5.75H18.6649C16.6021 5.75 14.9238 7.43225 14.9238 9.5C14.9238 17.6321 18.72 23.6084 24.8786 25.2722C26.9898 29.9304 30.3278 33.8903 34.5647 36.7516C35.5407 37.4108 36.1233 38.5391 36.1233 39.77V46.6574C35.2684 46.8771 34.4842 47.3226 33.8436 47.9649C32.9012 48.9096 32.3822 50.165 32.3822 51.5H31.1352C29.0723 51.5 27.3941 53.1823 27.3941 55.25V62.75C27.3941 63.4404 27.9525 64 28.6411 64H53.5816C54.2702 64 54.8287 63.4404 54.8287 62.75V55.25C54.8287 53.1823 53.1504 51.5 51.0876 51.5H49.8406C49.8406 49.1745 48.2485 47.2146 46.0995 46.6582V39.7762C46.0995 38.5414 46.6825 37.4109 47.6593 36.7518C51.8965 33.8901 55.2346 29.9301 57.3457 25.2719C63.5034 23.6074 67.2989 17.6315 67.2989 9.5C67.2989 7.43225 65.6207 5.75 63.5578 5.75ZM17.4179 9.5C17.4179 8.81075 17.9773 8.25 18.6649 8.25H22.406V13.8375C22.406 16.6869 22.8366 19.4771 23.6867 22.1642C19.7183 20.1939 17.4179 15.6432 17.4179 9.5ZM51.0876 54C51.7752 54 52.3346 54.5607 52.3346 55.25V61.5H29.8881V55.25C29.8881 54.5607 30.4476 54 31.1352 54H51.0876ZM57.3227 13.8375C57.3227 17.252 56.6446 20.5745 55.3068 23.7125C53.4038 28.1771 50.2775 31.969 46.2661 34.6781C44.6001 35.8022 43.6054 37.7081 43.6054 39.7762V47.75C43.6054 48.4404 44.1638 49 44.8525 49C46.2277 49 47.3465 50.1215 47.3465 51.5H34.8762C34.8762 50.8327 35.1359 50.2051 35.6071 49.7326C36.0553 49.2834 36.6435 49.0261 37.2725 49.0019C37.3048 49.0044 37.3374 49.0056 37.3702 49.0056C38.0588 49.0056 38.6172 48.4404 38.6172 47.75V39.77C38.6172 37.7062 37.6232 35.8029 35.9583 34.6784C31.9465 31.9691 28.8202 28.1772 26.917 23.7122C25.5787 20.5754 24.9 17.253 24.9 13.8375V3.75C24.9 3.06075 25.4595 2.5 26.1471 2.5H56.0757C56.7633 2.5 57.3227 3.06075 57.3227 3.75V13.8375ZM58.5366 22.164C59.3863 19.4762 59.8168 16.6861 59.8168 13.8375V8.25H63.5578C64.2455 8.25 64.8049 8.81075 64.8049 9.5C64.8049 15.6429 62.5047 20.1934 58.5366 22.164Z" fill="#D01818"></path>
                <path d="M50.9806 14.7698C50.834 14.3172 50.4437 13.9873 49.9738 13.9191L44.5922 13.1361L42.185 8.24668C41.9749 7.81993 41.5414 7.5498 41.0667 7.5498C40.592 7.5498 40.1585 7.81993 39.9484 8.24668L37.5412 13.1361L32.1597 13.9191C31.6898 13.9874 31.2996 14.3173 31.1528 14.7698C31.0062 15.2224 31.1285 15.7192 31.4685 16.0513L35.3634 19.8563L34.4441 25.2297C34.3639 25.6987 34.5562 26.1726 34.9403 26.4523C35.3244 26.7319 35.8336 26.7688 36.2536 26.5474L41.0668 24.0108L45.8812 26.5474C46.304 26.7702 46.8129 26.7302 47.1945 26.4522C47.5784 26.1724 47.7707 25.6984 47.6904 25.2294L46.7701 19.8562L50.6649 16.0513C51.005 15.7192 51.1272 15.2224 50.9806 14.7698ZM44.5597 18.5246C44.2658 18.8118 44.1315 19.2257 44.2011 19.6313L44.8048 23.1559L41.6469 21.4921C41.2834 21.3007 40.8495 21.3007 40.4865 21.4922L37.3296 23.1559L37.9327 19.6311C38.002 19.2254 37.8678 18.8117 37.5739 18.5246L35.0195 16.0291L38.5487 15.5156C38.955 15.4564 39.3062 15.2007 39.4878 14.8317L41.0668 11.6243L42.6458 14.8317C42.8275 15.2007 43.1787 15.4564 43.585 15.5156L47.1143 16.0291L44.5597 18.5246Z" fill="#D01818"></path>
                <path d="M41.1121 56.5H36.124C35.4354 56.5 34.877 57.0596 34.877 57.75C34.877 58.4404 35.4354 59 36.124 59H41.1121C41.8007 59 42.3591 58.4404 42.3591 57.75C42.3591 57.0596 41.8007 56.5 41.1121 56.5Z" fill="#D01818"></path>
                <path d="M60.3184 60.2498H61.0136C60.6594 60.1794 60.4212 60.1724 60.3184 60.2498Z" fill="#D01818"></path>
              </svg>
              <div class="number-counter number" data-to="1200" data-speed="2000" data-waypoint-active="yes">
                1200
              </div>
              <p>Awward achievment</p>
            </div>
            <div class="widget-counter t-al-center counter-v1">
              <svg width="66" height="65" viewBox="0 0 66 65" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M59.3784 38.1939H6.32368C6.04669 38.1939 5.78105 38.0836 5.58519 37.8873C5.38933 37.691 5.2793 37.4247 5.2793 37.1471V1.09375C5.2793 0.816101 5.38933 0.549825 5.58519 0.353497C5.78105 0.15717 6.04669 0.046875 6.32368 0.046875H59.3784C59.6554 0.046875 59.9211 0.15717 60.1169 0.353497C60.3128 0.549825 60.4228 0.816101 60.4228 1.09375V37.1471C60.4228 37.4247 60.3128 37.691 60.1169 37.8873C59.9211 38.0836 59.6554 38.1939 59.3784 38.1939ZM7.37433 36.1002H58.334V2.14062H7.36807L7.37433 36.1002Z" fill="#D01818"></path>
                <path d="M56.4175 35.4314H9.28657C9.00958 35.4314 8.74394 35.3211 8.54808 35.1248C8.35222 34.9284 8.24219 34.6621 8.24219 34.3845V3.85449C8.24219 3.57684 8.35222 3.31057 8.54808 3.11424C8.74394 2.91791 9.00958 2.80762 9.28657 2.80762H56.4175C56.6945 2.80762 56.9602 2.91791 57.156 3.11424C57.3519 3.31057 57.4619 3.57684 57.4619 3.85449V34.3845C57.4619 34.6621 57.3519 34.9284 57.156 35.1248C56.9602 35.3211 56.6945 35.4314 56.4175 35.4314ZM10.331 33.3376H55.3731V4.90137H10.331V33.3376Z" fill="#D01818"></path>
                <path d="M9.28446 24.0326C9.10131 24.0322 8.92148 23.9836 8.76301 23.8916C8.60453 23.7995 8.47299 23.6673 8.38158 23.5083C8.29017 23.3492 8.24209 23.1688 8.24219 22.9852C8.24228 22.8016 8.29054 22.6213 8.38211 22.4623L19.4954 3.32753C19.5627 3.2055 19.6536 3.09817 19.7629 3.01185C19.8721 2.92552 19.9975 2.86195 20.1316 2.82485C20.2657 2.78775 20.4058 2.77787 20.5437 2.7958C20.6817 2.81373 20.8147 2.85911 20.9349 2.92926C21.0551 2.99942 21.1601 3.09294 21.2438 3.20433C21.3275 3.31573 21.3881 3.44276 21.4221 3.57796C21.4561 3.71317 21.4629 3.85382 21.4419 3.99167C21.421 4.12952 21.3727 4.26178 21.3001 4.38069L10.1878 23.5123C10.0959 23.6707 9.96404 23.8022 9.8055 23.8935C9.64697 23.9848 9.4673 24.0327 9.28446 24.0326Z" fill="#D01818"></path>
                <path d="M17.2375 35.4316C16.9615 35.4316 16.6966 35.322 16.5009 35.1268C16.3052 34.9316 16.1945 34.6667 16.1932 34.3899L16.0762 9.4984C16.0755 9.36092 16.1018 9.22465 16.1537 9.09738C16.2055 8.9701 16.2819 8.85431 16.3784 8.75661C16.4749 8.65891 16.5896 8.58122 16.7161 8.52798C16.8425 8.47473 16.9782 8.44697 17.1153 8.44629C17.3923 8.44629 17.658 8.55658 17.8538 8.75291C18.0497 8.94924 18.1597 9.21552 18.1597 9.49316L18.2819 34.3847C18.2819 34.6624 18.1719 34.9286 17.976 35.125C17.7802 35.3213 17.5145 35.4316 17.2375 35.4316Z" fill="#D01818"></path>
                <path d="M30.2729 35.4312C30.1337 35.4315 29.9958 35.4038 29.8674 35.3499C29.739 35.296 29.6226 35.2168 29.5252 35.1172L16.4892 21.7381C16.3931 21.6397 16.3174 21.5232 16.2663 21.3955C16.2152 21.2677 16.1897 21.1311 16.1912 20.9935C16.1928 20.8558 16.2214 20.7198 16.2754 20.5932C16.3293 20.4666 16.4077 20.352 16.5059 20.2557C16.6041 20.1595 16.7202 20.0836 16.8477 20.0324C16.9751 19.9811 17.1114 19.9555 17.2487 19.9571C17.3861 19.9587 17.5217 19.9873 17.648 20.0414C17.7743 20.0955 17.8887 20.174 17.9847 20.2725L31.0207 33.6515C31.1648 33.7989 31.2622 33.9856 31.3008 34.1883C31.3393 34.391 31.3173 34.6006 31.2374 34.7907C31.1575 34.9809 31.0233 35.1431 30.8517 35.2571C30.6801 35.371 30.4788 35.4316 30.2729 35.4312Z" fill="#D01818"></path>
                <path d="M23.5378 28.5216C23.3617 28.5211 23.1886 28.476 23.0346 28.3905C22.8806 28.3049 22.7506 28.1818 22.6568 28.0324C22.563 27.883 22.5084 27.7123 22.4981 27.5361C22.4878 27.3599 22.5221 27.1839 22.5978 27.0246L33.8458 3.40292C33.8987 3.26953 33.9783 3.14845 34.0797 3.0472C34.1812 2.94595 34.3023 2.86669 34.4356 2.81434C34.5689 2.76198 34.7115 2.73766 34.8546 2.74288C34.9976 2.7481 35.1381 2.78274 35.2673 2.84467C35.3964 2.90659 35.5115 2.99447 35.6053 3.10284C35.6992 3.21122 35.7698 3.33777 35.8128 3.47465C35.8558 3.61153 35.8702 3.75581 35.8553 3.89853C35.8403 4.04125 35.7962 4.17936 35.7257 4.30428L24.4808 27.926C24.3958 28.1044 24.2621 28.255 24.0952 28.3605C23.9283 28.4659 23.735 28.5218 23.5378 28.5216Z" fill="#D01818"></path>
                <path d="M37.2133 35.4311C37.0135 35.4313 36.8178 35.374 36.6494 35.266C36.4811 35.158 36.3472 35.0039 36.2637 34.8219C36.1801 34.64 36.1504 34.4378 36.178 34.2394C36.2056 34.041 36.2895 33.8547 36.4196 33.7027L55.6216 11.2179C55.7095 11.1094 55.8182 11.0197 55.9412 10.954C56.0643 10.8883 56.1992 10.8479 56.338 10.8353C56.4769 10.8227 56.6168 10.8381 56.7496 10.8806C56.8824 10.923 57.0054 10.9917 57.1114 11.0826C57.2173 11.1734 57.304 11.2846 57.3663 11.4096C57.4287 11.5346 57.4655 11.6708 57.4745 11.8103C57.4835 11.9497 57.4646 12.0896 57.4188 12.2216C57.373 12.3535 57.3014 12.475 57.208 12.5788L38.006 35.0678C37.9078 35.182 37.7861 35.2736 37.6493 35.3363C37.5125 35.399 37.3638 35.4313 37.2133 35.4311Z" fill="#D01818"></path>
                <path d="M49.3049 21.2732C49.0989 21.2736 48.8975 21.2124 48.7264 21.0973L31.8063 9.7827C31.5934 9.6226 31.4495 9.38709 31.404 9.12426C31.3586 8.86143 31.4149 8.5911 31.5615 8.36849C31.7081 8.14588 31.934 7.98777 32.193 7.92646C32.452 7.86516 32.7246 7.90527 32.9551 8.03861L49.8814 19.3553C50.068 19.48 50.2096 19.6616 50.2852 19.8732C50.3609 20.0849 50.3665 20.3153 50.3014 20.5303C50.2363 20.7454 50.1038 20.9338 49.9236 21.0676C49.7434 21.2014 49.525 21.2735 49.3008 21.2732H49.3049Z" fill="#D01818"></path>
                <path d="M26.9909 21.2732C26.7308 21.2725 26.4803 21.1746 26.2885 20.9986C26.0966 20.8226 25.9772 20.5811 25.9535 20.3215C25.9299 20.0619 26.0038 19.8028 26.1607 19.5948C26.3176 19.3869 26.5462 19.2451 26.8019 19.1973L44.2713 15.952C44.5437 15.9016 44.8249 15.9617 45.0531 16.1192C45.2813 16.2766 45.4377 16.5185 45.488 16.7916C45.5383 17.0646 45.4783 17.3465 45.3212 17.5752C45.1641 17.804 44.9228 17.9608 44.6504 18.0112L27.181 21.2565C27.1182 21.2677 27.0546 21.2733 26.9909 21.2732Z" fill="#D01818"></path>
                <path d="M5.78995 48.9532C4.93062 48.9532 4.09059 48.6977 3.37609 48.2191C2.6616 47.7406 2.10474 47.0603 1.77593 46.2645C1.44713 45.4687 1.36115 44.593 1.52887 43.7482C1.6966 42.9033 2.11049 42.1274 2.7182 41.5183C3.32591 40.9093 4.10015 40.4946 4.943 40.3267C5.78584 40.1588 6.65944 40.2452 7.4533 40.575C8.24716 40.9048 8.92563 41.4631 9.4029 42.1794C9.88017 42.8957 10.1348 43.7378 10.1346 44.5992C10.1332 45.7537 9.675 46.8605 8.86049 47.6768C8.04598 48.493 6.9417 48.9521 5.78995 48.9532ZM5.78995 42.3369C5.34383 42.3369 4.90772 42.4695 4.53677 42.7179C4.16581 42.9664 3.87667 43.3195 3.7059 43.7326C3.53513 44.1457 3.49039 44.6003 3.57735 45.0389C3.66431 45.4775 3.87906 45.8805 4.19444 46.1967C4.50983 46.513 4.91169 46.7285 5.34922 46.8158C5.78674 46.9032 6.24029 46.8586 6.65251 46.6876C7.06474 46.5166 7.41713 46.2269 7.66513 45.8552C7.91314 45.4835 8.04562 45.0464 8.04582 44.5992C8.04444 44.0002 7.80623 43.4262 7.38338 43.0029C6.96053 42.5796 6.38754 42.3417 5.78995 42.3411V42.3369Z" fill="#D01818"></path>
                <path d="M10.0621 64.953H1.51899C1.24201 64.953 0.976362 64.8427 0.780502 64.6463C0.584642 64.45 0.474609 64.1837 0.474609 63.9061V60.7655C0.474609 60.4878 0.584642 60.2215 0.780502 60.0252C0.976362 59.8289 1.24201 59.7186 1.51899 59.7186H2.40672V46.9258C2.40672 46.6481 2.51675 46.3819 2.71261 46.1855C2.90847 45.9892 3.17412 45.8789 3.4511 45.8789C3.72809 45.8789 3.99374 45.9892 4.1896 46.1855C4.38546 46.3819 4.49549 46.6481 4.49549 46.9258V60.7655C4.49549 61.0431 4.38546 61.3094 4.1896 61.5057C3.99374 61.702 3.72809 61.8123 3.4511 61.8123H2.56338V62.8592H9.01767V61.8123H8.12994C7.85296 61.8123 7.58731 61.702 7.39145 61.5057C7.19559 61.3094 7.08556 61.0431 7.08556 60.7655V46.9258C7.08556 46.6481 7.19559 46.3819 7.39145 46.1855C7.58731 45.9892 7.85296 45.8789 8.12994 45.8789C8.40693 45.8789 8.67258 45.9892 8.86844 46.1855C9.0643 46.3819 9.17433 46.6481 9.17433 46.9258V59.7186H10.0621C10.339 59.7186 10.6047 59.8289 10.8005 60.0252C10.9964 60.2215 11.1064 60.4878 11.1064 60.7655V63.9061C11.1064 64.1837 10.9964 64.45 10.8005 64.6463C10.6047 64.8427 10.339 64.953 10.0621 64.953Z" fill="#D01818"></path>
                <path d="M59.9101 48.9532C59.0508 48.9534 58.2106 48.6981 57.496 48.2197C56.7814 47.7412 56.2243 47.0611 55.8954 46.2652C55.5664 45.4694 55.4803 44.5937 55.6479 43.7488C55.8155 42.9039 56.2293 42.1278 56.837 41.5187C57.4446 40.9096 58.2189 40.4948 59.0618 40.3268C59.9046 40.1588 60.7783 40.2451 61.5722 40.5749C62.3661 40.9046 63.0447 41.463 63.522 42.1793C63.9993 42.8956 64.2539 43.7378 64.2537 44.5992C64.2524 45.7535 63.7943 46.8602 62.98 47.6764C62.1657 48.4926 61.0617 48.9518 59.9101 48.9532ZM59.9101 42.3369C59.464 42.3367 59.0278 42.4691 58.6567 42.7174C58.2856 42.9657 57.9963 43.3187 57.8253 43.7319C57.6544 44.145 57.6095 44.5996 57.6964 45.0383C57.7832 45.477 57.9979 45.88 58.3132 46.1964C58.6286 46.5128 59.0304 46.7283 59.468 46.8158C59.9055 46.9032 60.3591 46.8586 60.7714 46.6877C61.1837 46.5167 61.5362 46.2271 61.7842 45.8553C62.0323 45.4836 62.1648 45.0464 62.165 44.5992C62.1633 44.0005 61.9252 43.4268 61.5026 43.0036C61.08 42.5804 60.5075 42.3422 59.9101 42.3411V42.3369Z" fill="#D01818"></path>
                <path d="M64.1829 64.953H55.6398C55.3629 64.953 55.0972 64.8427 54.9014 64.6463C54.7055 64.45 54.5955 64.1837 54.5955 63.9061V60.7655C54.5955 60.4878 54.7055 60.2215 54.9014 60.0252C55.0972 59.8289 55.3629 59.7186 55.6398 59.7186H56.5276V46.9258C56.5276 46.6481 56.6376 46.3819 56.8335 46.1855C57.0293 45.9892 57.295 45.8789 57.572 45.8789C57.8489 45.8789 58.1146 45.9892 58.3104 46.1855C58.5063 46.3819 58.6163 46.6481 58.6163 46.9258V60.7655C58.6163 61.0431 58.5063 61.3094 58.3104 61.5057C58.1146 61.702 57.8489 61.8123 57.572 61.8123H56.6842V62.8592H63.1385V61.8123H62.2508C61.9738 61.8123 61.7082 61.702 61.5123 61.5057C61.3164 61.3094 61.2064 61.0431 61.2064 60.7655V46.9258C61.2064 46.6481 61.3164 46.3819 61.5123 46.1855C61.7082 45.9892 61.9738 45.8789 62.2508 45.8789C62.5278 45.8789 62.7934 45.9892 62.9893 46.1855C63.1851 46.3819 63.2952 46.6481 63.2952 46.9258V59.7186H64.1829C64.4599 59.7186 64.7255 59.8289 64.9214 60.0252C65.1173 60.2215 65.2273 60.4878 65.2273 60.7655V63.9061C65.2273 64.1837 65.1173 64.45 64.9214 64.6463C64.7255 64.8427 64.4599 64.953 64.1829 64.953Z" fill="#D01818"></path>
                <path d="M32.8515 48.9532C31.9922 48.9534 31.152 48.6981 30.4374 48.2197C29.7228 47.7412 29.1657 47.0611 28.8368 46.2652C28.5078 45.4694 28.4217 44.5937 28.5893 43.7488C28.7569 42.9039 29.1707 42.1278 29.7784 41.5187C30.386 40.9096 31.1603 40.4948 32.0032 40.3268C32.846 40.1588 33.7197 40.2451 34.5136 40.5749C35.3075 40.9046 35.9861 41.463 36.4634 42.1793C36.9407 42.8956 37.1953 43.7378 37.1951 44.5992C37.1938 45.7535 36.7357 46.8602 35.9214 47.6764C35.1071 48.4926 34.0031 48.9518 32.8515 48.9532ZM32.8515 42.3369C32.4054 42.3367 31.9692 42.4691 31.5981 42.7174C31.227 42.9657 30.9377 43.3187 30.7667 43.7319C30.5958 44.145 30.5509 44.5996 30.6378 45.0383C30.7246 45.477 30.9393 45.88 31.2546 46.1964C31.57 46.5128 31.9718 46.7283 32.4094 46.8158C32.8469 46.9032 33.3005 46.8586 33.7128 46.6877C34.1251 46.5167 34.4776 46.2271 34.7256 45.8553C34.9737 45.4836 35.1062 45.0464 35.1064 44.5992C35.105 44.0004 34.8669 43.4265 34.4443 43.0033C34.0217 42.58 33.4489 42.3419 32.8515 42.3411V42.3369Z" fill="#D01818"></path>
                <path d="M37.1226 64.953H28.5795C28.3026 64.953 28.0369 64.8427 27.841 64.6463C27.6452 64.45 27.5352 64.1837 27.5352 63.9061V60.7655C27.5352 60.4878 27.6452 60.2215 27.841 60.0252C28.0369 59.8289 28.3026 59.7186 28.5795 59.7186H29.4673V46.9258C29.4673 46.6481 29.5773 46.3819 29.7732 46.1855C29.969 45.9892 30.2347 45.8789 30.5117 45.8789C30.7886 45.8789 31.0543 45.9892 31.2501 46.1855C31.446 46.3819 31.556 46.6481 31.556 46.9258V60.7655C31.556 61.0431 31.446 61.3094 31.2501 61.5057C31.0543 61.702 30.7886 61.8123 30.5117 61.8123H29.6239V62.8592H36.0782V61.8123H35.1905C34.9135 61.8123 34.6479 61.702 34.452 61.5057C34.2561 61.3094 34.1461 61.0431 34.1461 60.7655V46.9258C34.1461 46.6481 34.2561 46.3819 34.452 46.1855C34.6479 45.9892 34.9135 45.8789 35.1905 45.8789C35.4675 45.8789 35.7331 45.9892 35.929 46.1855C36.1248 46.3819 36.2349 46.6481 36.2349 46.9258V59.7186H37.1226C37.3996 59.7186 37.6652 59.8289 37.8611 60.0252C38.057 60.2215 38.167 60.4878 38.167 60.7655V63.9061C38.167 64.1837 38.057 64.45 37.8611 64.6463C37.6652 64.8427 37.3996 64.953 37.1226 64.953Z" fill="#D01818"></path>
                <path d="M20.1728 48.3578C16.1526 48.2883 12.1987 47.3193 8.59997 45.5218C8.47893 45.4571 8.37179 45.3692 8.28467 45.263C8.19754 45.1568 8.13213 45.0345 8.09217 44.9029C8.05222 44.7714 8.0385 44.6333 8.0518 44.4964C8.0651 44.3596 8.10515 44.2267 8.16968 44.1054C8.23421 43.9841 8.32195 43.8767 8.42789 43.7893C8.53382 43.702 8.65588 43.6364 8.78709 43.5964C8.91831 43.5563 9.05611 43.5426 9.19262 43.5559C9.32914 43.5692 9.4617 43.6094 9.58274 43.6741C9.68717 43.7317 20.4945 49.3617 28.9749 43.7254C29.2057 43.5718 29.488 43.5165 29.7596 43.5716C30.0311 43.6266 30.2697 43.7876 30.4229 44.019C30.5761 44.2504 30.6313 44.5334 30.5763 44.8056C30.5214 45.0778 30.3608 45.317 30.13 45.4705C27.1717 47.4052 23.7046 48.4105 20.1728 48.3578Z" fill="#D01818"></path>
                <path d="M47.233 48.6904C43.1576 48.5961 39.1678 47.4997 35.6142 45.4975C35.3882 45.3496 35.228 45.1197 35.1674 44.8561C35.1067 44.5924 35.1502 44.3155 35.2888 44.0833C35.4273 43.8511 35.6502 43.6817 35.9107 43.6106C36.1711 43.5396 36.4489 43.5723 36.6858 43.7021C36.7902 43.7659 47.5474 50.0493 55.9871 43.7607C56.0971 43.6786 56.2222 43.6191 56.3553 43.5855C56.4883 43.5519 56.6266 43.5448 56.7623 43.5648C56.898 43.5848 57.0285 43.6314 57.1463 43.7019C57.264 43.7724 57.3668 43.8655 57.4487 43.9758C57.5306 44.0861 57.59 44.2116 57.6235 44.3449C57.657 44.4782 57.664 44.6169 57.6441 44.7529C57.6241 44.889 57.5777 45.0198 57.5073 45.1378C57.437 45.2558 57.3441 45.3588 57.2341 45.4409C54.3456 47.5931 50.8318 48.7348 47.233 48.6904Z" fill="#D01818"></path>
              </svg>
              <div class="number-counter number" data-to="60" data-speed="2000" data-waypoint-active="yes">
                60<span>+</span></div>
              <p>Total Showroom</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Widget Counter car -->

    <!-- Widget car Blog  v1-->
    <div class="themesflat-container main-content">
      <div class="row">
        <div class="col-md-4">
          <article class="widget-blog bl-v1">
            <div class="feature-post">
              <div class="category">
                <ul class="flex">
                  <li>
                    <a href="#"><i class="icon-Group-12"></i>Business</a>
                  </li>
                </ul>
              </div>
              <a href="https://www.bing.com/ck/a?!&&p=0ea3315510bfadbbJmltdHM9MTcxODIzNjgwMCZpZ3VpZD0wZDgzNDJkNC1kOGQ0LTY5YjgtMzk5OS01MzU0ZDk4MjY4MTImaW5zaWQ9NTQ4MA&ptn=3&ver=2&hsh=3&fclid=0d8342d4-d8d4-69b8-3999-5354d9826812&psq=tips+dan+trik+aman+mobil&u=a1aHR0cHM6Ly90YWt0ZXJsaWhhdC5jb20vdGlwcy1kYW4tdHJpay1hbWFuLWJlcmtlbmRhcmEtZGVuZ2FuLW1vYmlsLyM6fjp0ZXh0PVRpcHMlMjBkYW4lMjBUcmlrJTIwQW1hbiUyMEJlcmtlbmRhcmElMjBkZW5nYW4lMjBNb2JpbCUzQSUyME5pa21hdGksQmVyc2lrYXAlMjBSYW1haCUyMGRhbiUyME1lbmdoYXJnYWklMjBQZW5nZ3VuYSUyMEphbGFuJTIwTGFpbm55YSUyMA&ntb=1">
                <img src="<?= base_url(); ?>assets_home/images/blog/post-2.jpg" alt="image">
              </a>
            </div><!-- /.feature-post -->
            <div class="main-post">
              <div class="entry-meta">
                <span class="author">
                  <img src="<?= base_url(); ?>assets_home/images/avatar/avt-blog.png" alt="">
                  <a href="#">Mehedii .H</a>
                </span>
                <span class="comment">
                  <i class="icon-2"></i>
                  <a href="#">Coments (03)</a>
                </span>
              </div>
              <h2 class="entry-title">
                <a href="https://www.bing.com/ck/a?!&&p=0ea3315510bfadbbJmltdHM9MTcxODIzNjgwMCZpZ3VpZD0wZDgzNDJkNC1kOGQ0LTY5YjgtMzk5OS01MzU0ZDk4MjY4MTImaW5zaWQ9NTQ4MA&ptn=3&ver=2&hsh=3&fclid=0d8342d4-d8d4-69b8-3999-5354d9826812&psq=tips+dan+trik+aman+mobil&u=a1aHR0cHM6Ly90YWt0ZXJsaWhhdC5jb20vdGlwcy1kYW4tdHJpay1hbWFuLWJlcmtlbmRhcmEtZGVuZ2FuLW1vYmlsLyM6fjp0ZXh0PVRpcHMlMjBkYW4lMjBUcmlrJTIwQW1hbiUyMEJlcmtlbmRhcmElMjBkZW5nYW4lMjBNb2JpbCUzQSUyME5pa21hdGksQmVyc2lrYXAlMjBSYW1haCUyMGRhbiUyME1lbmdoYXJnYWklMjBQZW5nZ3VuYSUyMEphbGFuJTIwTGFpbm55YSUyMA&ntb=1">TIPS AMAN BERKENDARA</a>
              </h2>
              <p class="entry-des">Perjalanan anda akan terasa aman..</p>
              <div class="btn-read-more">
                <a class="more-link" href="https://www.bing.com/ck/a?!&&p=0ea3315510bfadbbJmltdHM9MTcxODIzNjgwMCZpZ3VpZD0wZDgzNDJkNC1kOGQ0LTY5YjgtMzk5OS01MzU0ZDk4MjY4MTImaW5zaWQ9NTQ4MA&ptn=3&ver=2&hsh=3&fclid=0d8342d4-d8d4-69b8-3999-5354d9826812&psq=tips+dan+trik+aman+mobil&u=a1aHR0cHM6Ly90YWt0ZXJsaWhhdC5jb20vdGlwcy1kYW4tdHJpay1hbWFuLWJlcmtlbmRhcmEtZGVuZ2FuLW1vYmlsLyM6fjp0ZXh0PVRpcHMlMjBkYW4lMjBUcmlrJTIwQW1hbiUyMEJlcmtlbmRhcmElMjBkZW5nYW4lMjBNb2JpbCUzQSUyME5pa21hdGksQmVyc2lrYXAlMjBSYW1haCUyMGRhbiUyME1lbmdoYXJnYWklMjBQZW5nZ3VuYSUyMEphbGFuJTIwTGFpbm55YSUyMA&ntb=1">
                  <span>Read MOre</span>
                  <i class="icon-Arrow-1"></i>
                </a>
              </div>

              <!-- /.entry-meta -->
            </div><!-- /.main-post -->
          </article>
        </div>
        <div class="col-md-4">
          <article class="widget-blog bl-v1">
            <div class="feature-post">
              <div class="category">
                <ul class="flex">
                  <li>
                    <a href="#"><i class="icon-Group-12"></i>Business</a>
                  </li>
                </ul>
              </div>
              <a href="https://www.bing.com/ck/a?!&&p=4eb30b6d44666d16JmltdHM9MTcxODIzNjgwMCZpZ3VpZD0wZDgzNDJkNC1kOGQ0LTY5YjgtMzk5OS01MzU0ZDk4MjY4MTImaW5zaWQ9NTQ3NA&ptn=3&ver=2&hsh=3&fclid=0d8342d4-d8d4-69b8-3999-5354d9826812&psq=tips+dan+trik+mobil&u=a1aHR0cHM6Ly9vdG8uZGV0aWsuY29tL3RpcHMtYW5kLXRyaWNrcy1tb2JpbC9kLTQ2NDU4NjMvMTAtdGlwcy1tZXJhd2F0LW1vYmlsLWFnYXItdGV0YXAtYXdldC1kYW4ta2luY2xvbmcjOn46dGV4dD0xJTIwMS4lMjBSdXRpbiUyMENlayUyME9saSUyMEdhbnRpJTIwb2xpJTIwRm90byUzQSwuLi4lMjA4JTIwOC4lMjBCZXJzaWhrYW4lMjBLYWNhJTIwLi4uJTIwSXRlbSUyMGxhaW5ueWE&ntb=1">
                <img src="<?= base_url(); ?>assets_home/images/blog/post-1.jpg" alt="image">
              </a>
            </div><!-- /.feature-post -->
            <div class="main-post">
              <div class="entry-meta">
                <span class="author">
                  <img src="<?= base_url(); ?>assets_home/images/avatar/avt-blog.png" alt="">
                  <a href="#">Mehedii .H</a>
                </span>
                <span class="comment">
                  <i class="icon-2"></i>
                  <a href="#">Coments (03)</a>
                </span>
              </div>
              <h2 class="entry-title">
                <a href="https://www.bing.com/ck/a?!&&p=4eb30b6d44666d16JmltdHM9MTcxODIzNjgwMCZpZ3VpZD0wZDgzNDJkNC1kOGQ0LTY5YjgtMzk5OS01MzU0ZDk4MjY4MTImaW5zaWQ9NTQ3NA&ptn=3&ver=2&hsh=3&fclid=0d8342d4-d8d4-69b8-3999-5354d9826812&psq=tips+dan+trik+mobil&u=a1aHR0cHM6Ly9vdG8uZGV0aWsuY29tL3RpcHMtYW5kLXRyaWNrcy1tb2JpbC9kLTQ2NDU4NjMvMTAtdGlwcy1tZXJhd2F0LW1vYmlsLWFnYXItdGV0YXAtYXdldC1kYW4ta2luY2xvbmcjOn46dGV4dD0xJTIwMS4lMjBSdXRpbiUyMENlayUyME9saSUyMEdhbnRpJTIwb2xpJTIwRm90byUzQSwuLi4lMjA4JTIwOC4lMjBCZXJzaWhrYW4lMjBLYWNhJTIwLi4uJTIwSXRlbSUyMGxhaW5ueWE&ntb=1">10 TIPS MERAWAT MOBIL AGAR TETAP AWET DAN KINCLONG</a>
              </h2>
              <p class="entry-des">Mobil harus awet dan nyaman digunakan..</p>
              <div class="btn-read-more">
                <a class="more-link" href="https://www.bing.com/ck/a?!&&p=4eb30b6d44666d16JmltdHM9MTcxODIzNjgwMCZpZ3VpZD0wZDgzNDJkNC1kOGQ0LTY5YjgtMzk5OS01MzU0ZDk4MjY4MTImaW5zaWQ9NTQ3NA&ptn=3&ver=2&hsh=3&fclid=0d8342d4-d8d4-69b8-3999-5354d9826812&psq=tips+dan+trik+mobil&u=a1aHR0cHM6Ly9vdG8uZGV0aWsuY29tL3RpcHMtYW5kLXRyaWNrcy1tb2JpbC9kLTQ2NDU4NjMvMTAtdGlwcy1tZXJhd2F0LW1vYmlsLWFnYXItdGV0YXAtYXdldC1kYW4ta2luY2xvbmcjOn46dGV4dD0xJTIwMS4lMjBSdXRpbiUyMENlayUyME9saSUyMEdhbnRpJTIwb2xpJTIwRm90byUzQSwuLi4lMjA4JTIwOC4lMjBCZXJzaWhrYW4lMjBLYWNhJTIwLi4uJTIwSXRlbSUyMGxhaW5ueWE&ntb=1">
                  <span>Read MOre</span>
                  <i class="icon-Arrow-1"></i>
                </a>
              </div>

              <!-- /.entry-meta -->
            </div><!-- /.main-post -->
          </article>
        </div>
        <div class="col-md-4">
          <article class="widget-blog bl-v1">
            <div class="feature-post">
              <div class="category">
                <ul class="flex">
                  <li>
                    <a href="#"><i class="icon-Group-12"></i>Business</a>
                  </li>
                </ul>
              </div>
              <a href="https://auto2000.co.id/berita-dan-tips/tips-membuat-interior-mobil-nyaman-tips">
                <img src="<?= base_url(); ?>assets_home/images/blog/post-3.jpg" alt="image">
              </a>
            </div><!-- /.feature-post -->
            <div class="main-post">
              <div class="entry-meta">
                <span class="author">
                  <img src="<?= base_url(); ?>assets_home/images/avatar/avt-blog.png" alt="">
                  <a href="#">Mehedii .H</a>
                </span>
                <span class="comment">
                  <i class="icon-2"></i>
                  <a href="#">Coments (03)</a>
                </span>
              </div>
              <h2 class="entry-title">
                <a href="https://auto2000.co.id/berita-dan-tips/tips-membuat-interior-mobil-nyaman-tips">TIPS MEMBUAT INTERIOR LEBIH NYAMAN</a>
              </h2>
              <p class="entry-des">Membuat interior lebih nyaman perlu dilakukan..</p>
              <div class="btn-read-more">
                <a class="more-link" href="https://auto2000.co.id/berita-dan-tips/tips-membuat-interior-mobil-nyaman-tips">
                  <span>Read MOre</span>
                  <i class="icon-Arrow-1"></i>
                </a>
              </div>

              <!-- /.entry-meta -->
            </div><!-- /.main-post -->
          </article>
        </div>
      </div>
    </div>
    <!-- Widget car Blog  v1-->

  </div>


  <!-- Footer -->
  <?php $this->load->view('templates/templatehome/footer_text_home') ?>

</div>
<!-- /#page -->

<!-- Button Top -->
<a id="scroll-top" class="button-go"></a>
<!-- Button Top -->

<!-- Modal -->
<div class="modal fade" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="content-re-lo">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="title">Register</div>
        <div class="register-form">
          <div class="respond-register-form">
            <form method="post" class="comment-form form-submit" action="<?php echo base_url('auth/register/register_member'); ?>" accept-charset="utf-8" novalidate="novalidate">
              <fieldset>
                <label>User name</label>
                <input type="text" class="tb-my-input" name="username" placeholder="User name" required>
              </fieldset>
              <fieldset>
                <label>Email</label>
                <input type="email" class="tb-my-input" name="email" placeholder="Email" required>
              </fieldset>
              <fieldset>
                <label>Password</label>
                <input type="password" class="input-form password-input" placeholder="Your password" name="password" required>
              </fieldset>
              <button class="sc-button" name="submit" type="submit">
                <span>Sign Up</span>
              </button>
            </form>
          </div>
        </div>
        <div class="text-box text-center mt-30">Allready have an account? <a class="color-popup " data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Login</a></div>
      </div>

    </div>
  </div>
</div>
<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="content-re-lo">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="title">Login</div>
        <div class="register-form">
          <div class="respond-register-form">
            <form method="post" class="comment-form form-submit" action="<?php echo base_url('auth/loginmember'); ?>" accept-charset="utf-8">
              <fieldset>
                <label>Account</label>
                <input type="email" id="email" class="tb-my-input" name="email" placeholder="Email or user name" required>
              </fieldset>
              <fieldset>
                <label>Password</label>
                <input type="password" class="input-form password-input" name="password" placeholder="Your password" required>
              </fieldset>
              <!-- <div class="title-forgot t-al-right mb-20"><a class="t-al-right" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" data-bs-dismiss="modal">Forgot password</a>
              </div> -->
              <button class="sc-button" name="submit" type="submit">
                <span>Login</span>
              </button>
            </form>
          </div>
        </div>
        <div class="text-box text-center mt-30">Don’t you have an account? <a class="color-popup" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Register</a></div>
      </div>

    </div>
  </div>
</div>
<!-- <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="content-re-lo">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        <div class="title">Forgot your password?</div>
        <div class="register-form">
          <div class="respond-register-form">
            <form method="post" class="comment-form form-submit" action="#" accept-charset="utf-8">

              <fieldset>
                <label>Password</label>
                <input type="password" class="input-form password-input" placeholder="Your password">
              </fieldset>
              <button class="sc-button" name="submit" type="submit">
                <span>Get new password</span>
              </button>
            </form>
          </div>
        </div>
        <div class="text-box text-center mt-30"><a class="color-popup" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Back to Login</a></div>
      </div>

    </div>
  </div>
</div> -->
<!-- Modal -->

<script>
  // Menambahkan event listener pada link dengan id "myLink"
  document.getElementById('myLink').addEventListener('click', function(event) {
    // Mencegah aksi default dari elemen link
    event.preventDefault();
  });
</script>

<script>
  // Menambahkan event listener pada link dengan id "myLink"
  document.getElementById('myLink2').addEventListener('click', function(event) {
    // Mencegah aksi default dari elemen link
    event.preventDefault();
  });
</script>

<script>
  // Menambahkan event listener pada link dengan id "myLink"
  document.getElementById('myLink3').addEventListener('click', function(event) {
    // Mencegah aksi default dari elemen link
    event.preventDefault();
  });
</script>

<script>
  // Wait for the DOM to be fully loaded
  document.addEventListener("DOMContentLoaded", function() {
    // Find the flash message element
    var flashMessage = document.querySelector('.flash-message');

    // If the flash message element exists
    if (flashMessage) {
      // Set a timeout to hide the flash message after 3 seconds
      setTimeout(function() {
        flashMessage.style.display = 'none';
      }, 3000);
    }
  });
</script>