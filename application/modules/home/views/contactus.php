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
                  <div class="logo"><a href="<?php echo base_url('home') ?>"><img src="<?php echo base_url('assets/images/AUTORESERVE-PNG.png'); ?>" alt="Logo"></a></div>
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
                        <a href="<?php echo base_url('home/profile') ?>" role="button"> <img src="<?php echo base_url('assets/images/profile_1.png') ?>" alt=""></a>
                      <?php else : ?>
                        <a data-bs-toggle="modal" href="#exampleModalToggle" role="button"> <img src="<?php echo base_url('assets/images/profile_1.png') ?>" alt=""></a>
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
                <li class="dropdown2 current"><a href="contact-us.html">Contact Us</a>

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
          <span>Save up to 15%</span>
          <h1 class="main-title">Contact</h1>
        </div>
      </div>
    </div>
    <!-- End Page Title -->

    <div class="widget-contact-us">
      <div class="themesflat-container">
        <div class="contact-us">
          <div class="row mb-60">
            <div class="col-md-12 col-lg-12">
              <div class="contact-us-box">
                <!-- <div class="icon">
                  <svg width="68" height="70" viewBox="0 0 68 70" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M28.9135 59.5918H20.0275C18.1902 59.5918 16.6953 60.9681 16.6953 62.66C16.6953 64.3519 18.1902 65.7282 20.0275 65.7282H28.9135C30.7508 65.7282 32.2457 64.3519 32.2457 62.66C32.2457 60.9681 30.7508 59.5918 28.9135 59.5918ZM28.9135 63.6827H20.0275C19.415 63.6827 18.9168 63.224 18.9168 62.66C18.9168 62.096 19.415 61.6373 20.0275 61.6373H28.9135C29.526 61.6373 30.0242 62.096 30.0242 62.66C30.0242 63.224 29.5258 63.6827 28.9135 63.6827Z" fill="#D01818" />
                    <path d="M66.6796 8.18185H48.9077V5.11366C48.9077 2.29392 46.4164 0 43.354 0H5.58886C2.52647 0 0.0351562 2.29392 0.0351562 5.11366V64.7048C0.0351562 67.5246 2.52647 69.8185 5.58886 69.8185H43.354C46.4164 69.8185 48.9077 67.5246 48.9077 64.7048V38.8638H66.6796C67.2932 38.8638 67.7903 38.4059 67.7903 37.8411V9.20459C67.7903 8.63976 67.2932 8.18185 66.6796 8.18185ZM21.1392 36.8183C21.1392 35.8668 21.63 34.9545 22.452 34.3778L36.0923 24.8087L39.9881 27.5418C40.9788 28.2368 42.1663 28.5844 43.3539 28.5844C44.5413 28.5844 45.7288 28.2368 46.7197 27.5418L50.6158 24.8086L64.2563 34.378C65.0783 34.9545 65.569 35.8669 65.569 36.8185H21.1392V36.8183ZM21.1392 14.3187L34.2596 23.523L21.1392 32.7274V14.3187ZM52.4483 23.5228L65.5689 14.3182V32.7273L52.4483 23.5228ZM64.256 12.6678L45.3734 25.9147C44.1841 26.7488 42.5235 26.7488 41.3343 25.9147L22.4517 12.6678C21.6324 12.0931 21.1425 11.1846 21.1394 10.2363V10.2273H65.5687C65.5687 11.1789 65.0779 12.0911 64.256 12.6678ZM46.6863 64.7048C46.6863 66.3967 45.1914 67.773 43.354 67.773H5.58886C3.75155 67.773 2.25664 66.3967 2.25664 64.7048V5.11366C2.25664 3.42179 3.75155 2.04546 5.58886 2.04546H43.354C45.1914 2.04546 46.6863 3.42179 46.6863 5.11366V8.18185H44.4648V5.11366C44.4648 4.54884 43.9676 4.09093 43.354 4.09093H5.58886C4.97529 4.09093 4.47812 4.54884 4.47812 5.11366V35.7956C4.47812 36.3604 4.97529 36.8183 5.58886 36.8183C6.20243 36.8183 6.6996 36.3604 6.6996 35.7956V6.13639H42.2433V8.18185H20.0285C19.4149 8.18185 18.9177 8.63976 18.9177 9.20459V37.8411C18.9177 38.4059 19.4149 38.8638 20.0285 38.8638H42.2433V55.5002H6.6996V39.8865C6.6996 39.3217 6.20243 38.8638 5.58886 38.8638C4.97529 38.8638 4.47812 39.3217 4.47812 39.8865V56.523C4.47812 57.0878 4.97529 57.5457 5.58886 57.5457H43.354C43.9676 57.5457 44.4648 57.0878 44.4648 56.523V38.8638H46.6863V64.7048Z" fill="#D01818" />
                  </svg>
                </div> -->
                <!-- <div class="title">Phone Number</div> -->
                <p class="des" style="text-align: left;">Terima kasih telah mengunjungi situs kami! Kami Auto Reserve berkomitmen untuk memberikan pengalaman terbaik dalam membeli mobil dengan layanan autoreserveshowroom kami. Jika Anda memiliki pertanyaan, membutuhkan informasi lebih lanjut, atau ingin membuat janji temu, jangan ragu untuk menghubungi kami melalui salah satu cara di bawah ini:
                </p>
                <p style="text-align: left; margin-top:10px;">
                  Telepon: 081212938750
                </p>
                <p style="text-align: left;">
                  Email: autoreserve25@gmail.com
                </p>
                <p style="text-align: left;">
                  Jl. Boulevard Raya No.1 Lantai P3 Block G3 - G5, Klp. Gading Tim., Kec. Klp. Gading, Jkt Utara, Daerah Khusus Ibukota Jakarta 14240Alamat Showroom: Jalan Pahlawan No. 123, Jakarta 10110
                </p>
                <p style="text-align: left;">
                  Jam Operasional: Senin - Minggu: 10:00 - 19:00
                </p>
                <p class="des" style="text-align: left;margin-top:10px;">
                  Tim kami siap membantu Anda menemukan mobil impian Anda dengan kemudahan reservasi otomatis. Kami menantikan kunjungan dan kerja sama Anda!
                </p>
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
