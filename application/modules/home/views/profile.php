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
                  <div class="logo"><a href="#"><img src="<?php echo base_url('assets/images/AUTORESERVE-PNG.png'); ?>" alt="Logo"></a></div>
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
            <a href="#"><img src="assets/images/logo/logo2@.png" alt="Logo Motorx"></a>
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
                <li class="dropdown2">
                  <a href="#">Cars</a>
                  <ul>
                    <li><a href="car-list.html">Car Listings</a></li>
                    <li><a href="listing-details.html">Listing Details</a></li>
                  </ul>
                  <div class="dropdown2-btn"></div>
                </li>
                <li class="dropdown2 current">
                  <a href="#">Page</a>
                  <ul>
                    <li><a href="dashboard.html">Dashboard</a></li>
                    <li><a href="my-inventory.html">My Inventory</a></li>
                    <li><a href="addcart.html">Add Car</a></li>
                    <li class="current"><a href="seller-profile.html"> Profile</a></li>
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

    <!-- Main Page Title -->
    <div class="tf-page-title mt-10">
      <div class="themesflat-container full">
        <div class="page-title t-al-center">
          <h1 class="main-title"> Profile</h1>
        </div>
      </div>
    </div>
    <!-- End Page Title -->

    <div class="widget-dealer-single">
      <div class="themesflat-container">
        <div class="dealer-single">
          <div class="row">
            <div class="col-lg-12">
              <div class="seller-profile">
                <div class="profile">
                  <img src="./assets/images/avatar/avt-review.jpg" alt="">
                  <div class="information">
                    <!-- <p class="private-seller">Private seller</p> -->
                    <h2 class="title"><?php echo $user['name'] ?></h2>
                  </div>
                </div>
                <div class="dealer-author-content">
                  <!-- <div class="dealer-author-item">
                    <div class="dealer-author-icon">
                      <i class="icon-Group-14"></i>
                    </div>
                    <div class="dealer-content-info-box">
                      <p class="label-dealer-content">Phone</p>
                      <span class="dealer-title"><?php echo $user['phone'] ?> </span>
                    </div>
                  </div>
                  <div class="dealer-author-item">
                    <div class="dealer-author-icon">
                      <i class="icon-map-1-1"></i>
                    </div>
                    <div class="dealer-content-info-box">
                      <p class="label-dealer-content">Email</p>
                      <span class="dealer-title"><?php echo $user['email'] ?> </span>
                    </div>
                  </div> -->
                  <div class="dealer-author-item">
                    <div class="dealer-author-icon">
                      <i class="icon-Group2"></i>
                    </div>
                    <div class="dealer-content-info-box">
                      <p class="label-dealer-content"> Email</p>
                      <a class="dealer-title" href="<?php echo $user['email'] ?>">
                        <?php echo $user['email'] ?></a>
                    </div>
                  </div>
                  <div class="dealer-author-item">
                    <div class="dealer-author-icon">
                      <i class="icon-uniE971"></i>
                    </div>
                    <div class="dealer-content-info-box">
                      <p class="label-dealer-content">Status</p>
                      <span class="dealer-title">
                        <?php if ($user['id_role'] == 1 || $user['id_role'] == 2) : ?>
                          <p>Admin</p>
                        <?php elseif ($user['id_role'] == 3 || $user['id_role'] == 4) : ?>
                          <p>Member</p>
                        <?php endif; ?>
                      </span>
                    </div>
                  </div>
                </div>

                <hr>

                <?php echo $this->session->flashdata('message'); ?>
                <h6>Ganti Password</h6>
                <form action="<?php echo base_url('home/profile/updatedata'); ?>" method="post">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="tfad-listing-title mb-30">
                        <div class="form-group">
                          <label>Nama (*)</label>
                          <input type="text" id="nama" class="form-control" name="nama" placeholder="Masukkan Nama" value="" required>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="tfad-listing-title mb-30">
                        <div class="form-group">
                          <label>Password (*)</label>
                          <input type="text" id="password" class="form-control" name="password" placeholder="Masukkan password" value="">
                          <input type="text" name="id_user" value="<?php echo $user['id_user'] ?>" hidden>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-2">
                      <button type="submit" class="btn btn-success">Ubah</button>
                    </div>
                  </div>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Footer -->
    <?php $this->load->view('templates/templatehome/footer_text_home') ?>

  </div>

</div>
<!-- /#page -->

<!-- Button Top -->
<a id="scroll-top" class="button-go"></a>
<!-- Button Top -->