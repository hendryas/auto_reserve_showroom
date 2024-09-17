<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- /#page -->
<div id="wrapper">
  <div id="page" class="clearfix">
    <!-- Main Header -->
    <header id="header" class="main-header header header-fixed ">
      <!-- Header Lower -->
      <div class="header-lower">
        <div class="themesflat-container w1700">
          <div class="row">
            <div class="col-lg-12">
              <div class="inner-container flex justify-space align-center">
                <!-- Logo Box -->
                <div class="logo-box flex">
                  <div class="logo"><a href="<?php echo base_url('home'); ?>"><img src="<?php echo base_url('assets/images/AUTORESERVE-PNG.png'); ?>" alt="Logo"></a></div>
                </div>
                <div class="nav-outer flex align-center">
                  <!-- Main Menu -->
                  <nav class="main-menu show navbar-expand-md">
                    <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                      <ul class="navigation clearfix">
                        <li><a href="<?php echo base_url('home') ?>">Home </a>
                        </li>
                        <li><a href="<?php echo base_url('home/contactus') ?>">Contact us </a>
                        </li>
                        <li class="dropdown2"><a href="#">History </a>
                          <ul>
                            <li><a href="<?php echo base_url('home/booking/historybooking') ?>">Pembelian</a></li>
                            <li><a href="<?php echo base_url('home/booking/historypenjualan') ?>">Penjualan</a></li>
                          </ul>
                        </li>
                        <li><a href="<?php echo base_url('home/pesan') ?>">Pesan </a>
                        </li>

                      </ul>
                    </div>
                  </nav>
                  <!-- Main Menu End-->
                </div>
                <div class="header-account flex align-center">
                  <div class="register ml--18">
                    <div class="flex align-center">
                      <?php if ($this->session->userdata('id_role')) : ?>
                        <a href="<?php echo base_url('home/profile') ?>" role="button">
                          <img src="<?php echo base_url('assets/images/profile_1.png') ?>" alt="">
                        </a>
                      <?php else : ?>
                        <a data-bs-toggle="modal" href="#exampleModalToggle" role="button">
                          <img src="<?php echo base_url('assets/images/profile_1.png') ?>" alt="">
                        </a>
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

      <!-- Mobile Menu  -->
      <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>
      <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <nav class="menu-box">
          <div class="nav-logo">
            <a href="<?php echo base_url('home') ?>"><img src="<?php echo base_url('assets/images/AUTORESERVE-PNG.png'); ?>" alt="Logo Motorx"></a>
          </div>
          <div class="bottom-canvas">
            <div class="menu-outer">
              <ul class="navigation clearfix">
                <li class="dropdown2">
                  <a href="#">Home</a>
                  <ul>
                    <li><a href="index.html">Home Page 01</a>
                    </li>
                    <li><a href="home02.html">Home Page 02</a></li>
                    <li><a href="home03.html">Home Page 03</a></li>
                    <li><a href="home04.html">Home Page 04</a></li>
                    <li><a href="home05.html">Home Page 05</a></li>
                    <li><a href="home06.html">Home Page 06</a></li>
                  </ul>
                  <div class="dropdown2-btn"></div>
                </li>
                <li class="dropdown2 current">
                  <a href="#">Cars</a>
                  <ul>
                    <li><a href="<?php echo base_url('home/penjualanmobil'); ?>">Car Listings</a></li>
                    <li class="current"><a href="listing-details.html">Listing Details</a></li>
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
                <li class="dropdown2"><a href="contact-us.html">Contact Us</a>

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

    <!-- Breakcrumb -->
    <div class="widget-breakcrumb">
      <div class="themesflat-container">
        <div class="breakcrumb">
          <div class="title-breakcrumb">
            <a class="home" href="<?php echo base_url('home') ?>">Home</a>
            <span>Car Detail</span>
          </div>
        </div>
      </div>
    </div>
    <!-- Breakcrumb -->

    <!-- property-detail -->
    <div class="widget-property-detail">
      <div class="themesflat-container">
        <div class="row">
          <div class="col-lg-12">
            <div class="wrap-property-car flex">
              <div class="box-1">
                <div class="icon-box-info flex">
                  <div class="info-sale">
                    <!-- <span class="sale">-34%</span> -->
                  </div>
                  <div class="info flex">
                    <span>Merk:</span>
                    <span class="fw-4"><?php echo $mobilDetail['merk'] ?></span>
                  </div>
                  <div class="info flex">
                    <span>Model:</span>
                    <span class="fw-4"><?php echo $mobilDetail['model'] ?></span>
                  </div>
                </div>
                <div class="title-heading"><?php echo $mobilDetail['jenis_mobil'] ?></div>

              </div>
              <div class="box-2 t-al-right">
                <div class="icon-boxs flex">
                  <!-- <a href="#">
                    <i class="icon-heart-1-1"></i>
                    <span>Favorite</span>
                  </a>
                  <a href="#">
                    <i class="icon-shuffle-2-11"></i>
                    <span>Compare</span>
                  </a> -->
                </div>
                <div class="price-wrap flex">
                  <!-- <p class="price-sale"><?php echo $mobilDetail['url_video_mobil'] ?></p> -->
                  <!-- <p class="price">$48,000</p> -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="gallary-property-details">
              <?php
              $id_mobil = $mobilDetail['id_mobil'];
              $dataGambarMobil = $this->mobilModel->getDataGambarMobils($id_mobil)->result_array();
              ?>

              <div class="swiper property-gallary2">
                <div class="swiper-wrapper">
                  <!-- looping image 1 -->
                  <?php foreach ($dataGambarMobil as $data) : ?>
                    <div class="swiper-slide">
                      <img src="<?= base_url('assets_home/images/cars/') . $data['gambar_mobil']; ?>" alt="Image">
                    </div>
                  <?php endforeach; ?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
              </div>
              <div class="swiper property-gallary">
                <div class="swiper-wrapper">
                  <!-- looping image 2 -->
                  <?php foreach ($dataGambarMobil as $data) : ?>
                    <div class="swiper-slide">
                      <img src="<?= base_url('assets_home/images/cars/') . $data['gambar_mobil']; ?>" alt="Image">
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-8 col-md-12">
            <div class="post-property">
              <!-- <div class="wrap-description wrap-style">
                <h4 class="title">Description</h4>
                <p>There are many variations of passages of Lorem Ipsum available, but majority have
                  suffered teration in some form, by injected humour, or randomised words which
                  don't look even slight believable. If you are going to use a passa There
                  are many variations of passages of Lorem Ipsum available, but majority have
                  suffered teration in some form look even
                  by injected humour, or randomised There are many variations of passages of Lorem
                  Ipsum available, but majority
                  have suffered teration in some form, by injected humour, or randomised words
                  which don't look even slight believable.
                  If you are going to use a passa There are many variations of passages of Lorem
                  Ipsum available, but majority
                  have suffered teration in some form, by injected humour, or randomised many
                  variations of passages of Lorem Ipsum available, but majority There are many
                  variations of passages of </p>
              </div> -->
              <!-- Video -->
              <div class="video-wrap wow fadeInUp mb-5" data-wow-delay="500ms" data-wow-duration="2000ms" style="background-color: red;">
                <!-- <a href="https://www.youtube.com/watch?v=ThMXH5MrlZI" class="popup-youtube btn-video ml-28"> -->
                <a href="<?php echo $mobilDetail['url_video_mobil'] ?>" class="popup-youtube btn-video ml-28">
                  <i class="icon-Polygon-6"></i>
                </a>
              </div>

              <div class="wrap-car-overview wrap-style">
                <h4 class="title">Car Overview</h4>
                <div class="listing-info">
                  <div class="row">
                    <!-- data overview -->
                    <div class="col-xl-6 col-md-6 item">
                      <div class="inner listing-infor-box">
                        <div class="content-listing-info">
                          <span class="listing-info-title">Tahun Pembuatan:</span>
                          <p class="listing-info-value"><?php echo $mobilDetail['tahun_pembuatan'] ?></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6 col-md-6 item">
                      <div class="inner listing-infor-box">
                        <div class="content-listing-info">
                          <span class="listing-info-title">Kilometer Mobil:</span>
                          <p class="listing-info-value"><?php echo $mobilDetail['kilometer_mobil'] ?></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6 col-md-6 item">
                      <div class="inner listing-infor-box">
                        <div class="content-listing-info">
                          <span class="listing-info-title">Plat Nomor:</span>
                          <p class="listing-info-value"><?php echo $mobilDetail['plat_nomor'] ?></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6 col-md-6 item">
                      <div class="inner listing-infor-box">
                        <div class="content-listing-info">
                          <span class="listing-info-title">Transmisi:</span>
                          <p class="listing-info-value"><?php echo $mobilDetail['transmisi'] ?></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6 col-md-6 item">
                      <div class="inner listing-infor-box">
                        <div class="content-listing-info">
                          <span class="listing-info-title">Bebas Tabrak:</span>
                          <p class="listing-info-value"><?php echo $mobilDetail['bebas_tabrak'] ?></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6 col-md-6 item">
                      <div class="inner listing-infor-box">
                        <div class="content-listing-info">
                          <span class="listing-info-title">Bebas Banjir:</span>
                          <p class="listing-info-value"><?php echo $mobilDetail['bebas_banjir'] ?></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6 col-md-6 item">
                      <div class="inner listing-infor-box">
                        <div class="content-listing-info">
                          <span class="listing-info-title">BPKB:</span>
                          <p class="listing-info-value"><?php echo $mobilDetail['bpkb'] ?></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6 col-md-6 item">
                      <div class="inner listing-infor-box">
                        <div class="content-listing-info">
                          <span class="listing-info-title">Buku Service:</span>
                          <p class="listing-info-value"><?php echo $mobilDetail['buku_service'] ?></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6 col-md-6 item">
                      <div class="inner listing-infor-box">
                        <div class="content-listing-info">
                          <span class="listing-info-title">Grade Mobil:</span>
                          <p class="listing-info-value"><?php echo $mobilDetail['grade_mobil'] ?></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6 col-md-6 item">
                      <div class="inner listing-infor-box">
                        <div class="content-listing-info">
                          <span class="listing-info-title">Harga Cash:</span>
                          <p class="listing-info-value">Rp <?php echo number_format($mobilDetail['harga_cash'], 0) ?></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6 col-md-6 item">
                      <div class="inner listing-infor-box">
                        <div class="content-listing-info">
                          <span class="listing-info-title">Harga Kredit:</span>
                          <p class="listing-info-value">Rp <?php echo number_format($mobilDetail['harga_credit'], 0) ?></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-xl-6 col-md-6 item">
                      <div class="inner listing-infor-box">
                        <div class="content-listing-info">
                          <span class="listing-info-title">Lokasi:</span>
                          <p class="listing-info-value"><?php echo $mobilDetail['lokasi'] ?></p>
                        </div>
                      </div>
                    </div>
                    <!-- end data overview -->
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col-lg-4 col-md-12">
            <div class="driver-price-wrap mb-40">
              <a class="test-driver mb-16" data-bs-toggle="modal" href="#test-driver" data-id_mobil="<?php echo $mobilDetail['id_mobil'] ?>" role="button">
                Booking
                <i class="icon-Group-12"></i>
              </a>

            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- property-detail -->


    <!-- Footer -->
    <?php $this->load->view('templates/templatehome/footer_text_home') ?>

  </div>

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
                <input type="text" class="tb-my-input" name="text" placeholder="User name">
              </fieldset>
              <fieldset>
                <label>Email</label>
                <input type="email" class="tb-my-input" name="email" placeholder="Email">
              </fieldset>
              <fieldset>
                <label>Password</label>
                <input type="password" class="input-form password-input" placeholder="Your password">
              </fieldset>
              <fieldset>
                <label>Confirm password</label>
                <input type="password" class="input-form password-input" placeholder="Confirm password">
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
                <input type="email" id="email" class="tb-my-input" name="email" placeholder="Email or user name">
              </fieldset>
              <fieldset>
                <label>Password</label>
                <input type="password" class="input-form password-input" placeholder="Your password">
              </fieldset>
              <div class="title-forgot t-al-right mb-20"><a class="t-al-right" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" data-bs-dismiss="modal">Forgot password</a>
              </div>
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
<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" tabindex="-1">
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
</div><!-- Modal -->

<!-- Modal-drive -->
<div class="modal  fade" id="test-driver" aria-hidden="true" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <h4 class="title-form">Form Data Diri</h4>
      <form action="<?php echo base_url('home/booking/booking_mobil'); ?>" method="post" class="test-driver-form" aria-label="Contact form" novalidate="novalidate" data-status="init">
        <input type="hidden" name="id_mobil" id="modalIdMobil">
        <div class="group-form">
          <label for="">Nama</label>
          <input class="test-driver-name" value="" name="nama" type="text">
        </div>
        <div class="group-form">
          <label for="">No. Telefon</label>
          <input class="test-driver-name" value="" name="no_telp" type="text">
        </div>
        <div class="group-form">
          <label for="">Alamat</label>
          <input class="test-driver-name" value="" name="domisili" type="text">
        </div>
        <div class="group-form">
          <label for="">Provinsi</label>
          <input class="test-driver-name" value="" name="provinsi" type="text">
        </div>
        <div class="group-form">
          <label for="">Kota</label>
          <input class="test-driver-name" value="" name="kota" type="text">
        </div>
        <div class="group-form">
          <label for="">Tanggal Kedatangan</label>
          <input class="test-driver-name" value="" name="tgl_kedatangan" type="date">
        </div>
        <div class="group-form">
          <label for="">Jam Kedatangan</label>
          <input class="test-driver-name" value="" name="jam_kedatangan" type="time">
        </div>
        <button class="test-driver-submit" type="submit">Send Request</button>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="offer-price" aria-hidden="true" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <h4 class="title-form">Make An Offer Price</h4>
      <form action="/" method="post" class="offer-price-form" aria-label="Contact form" novalidate="novalidate" data-status="init">
        <div class="group-form">
          <input class="test-driver-name" placeholder="Enter Your Name Here" value="" type="text">
        </div>
        <div class="group-form">
          <input class="test-driver-mail" placeholder="Email" value="" type="email">
        </div>
        <div class="group-form">
          <input class="test-driver-form" placeholder="Your Phone" value="" type="tel">
        </div>
        <div class="group-form">
          <input class="trade-price" placeholder="Trade Price" value="" type="text">
        </div>
        <input class="test-driver-submit" type="submit" value="Send Request">
      </form>
    </div>
  </div>
</div>
<!-- Modal-price -->

<script>
  $(document).ready(function() {
    $('.test-driver-name[name="no_telp"]').on('input', function() {
      this.value = this.value.replace(/[^0-9]/g, '');
    });
  });
</script>

<script>
  document.addEventListener('DOMContentLoaded', (event) => {
    var modal = document.getElementById('test-driver');
    modal.addEventListener('show.bs.modal', function(event) {
      // Button that triggered the modal
      var button = event.relatedTarget;
      // Extract info from data-* attributes
      var idMobil = button.getAttribute('data-id_mobil');
      // Update the modal's content.
      var modalBodyInput = modal.querySelector('#modalIdMobil');
      modalBodyInput.value = idMobil;
    });
  });
</script>