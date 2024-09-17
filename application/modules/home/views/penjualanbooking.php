<!-- /#page -->
<div id="wrapper">
    <div id="page" class="clearfix">
        <div class="sidebar-dashboard">
            <!-- <div class="db-logo">
                <a href="index.html"><img src="assets/images/logo/logo2.png" alt="Logo"></a>
            </div> -->
            <div class="db-profile">
                <img src="<?php echo base_url('assets/images/profile_1.png') ?>" alt="">
                <div class="name"><?php echo $user['name'] ?></div>
                <p class="seller">
                    <?php if ($this->session->userdata('id_role') == 1 || $this->session->userdata('id_role') == 2) :  ?>
                        Admin
                    <?php elseif ($this->session->userdata('id_role') == 3 || $this->session->userdata('id_role') == 4) :  ?>
                        Member
                    <?php endif; ?>
                </p>
            </div>
            <div class="db-menu">
                <ul>
                    <li>
                        <a href="<?php echo base_url('home/booking/dashboard'); ?>">
                            <div class="icon">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.5 8.83333H7.16667V0.5H0.5V8.83333ZM0.5 15.5H7.16667V10.5H0.5V15.5ZM8.83333 15.5H15.5V7.16667H8.83333V15.5ZM8.83333 0.5V5.5H15.5V0.5H8.83333Z" fill="#D01818" />
                                </svg>
                            </div>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url('home/booking/historybooking'); ?>">
                            <div class="icon">
                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.99167 14.4493L1.85 9.67435L0.5 10.7243L8 16.5577L15.5 10.7243L14.1417 9.66602L7.99167 14.4493ZM8 12.3327L14.1333 7.55768L15.5 6.49935L8 0.666016L0.5 6.49935L1.85833 7.55768L8 12.3327Z" fill="#D01818" />
                                </svg>
                            </div>
                            <p>History Booking</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url('home/booking/historypenjualan'); ?>">
                            <div class="icon">
                                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7.99167 14.4493L1.85 9.67435L0.5 10.7243L8 16.5577L15.5 10.7243L14.1417 9.66602L7.99167 14.4493ZM8 12.3327L14.1333 7.55768L15.5 6.49935L8 0.666016L0.5 6.49935L1.85833 7.55768L8 12.3327Z" fill="#D01818" />
                                </svg>
                            </div>
                            <p>History Penjualan</p>
                        </a>
                    </li>
                </ul>


            </div>

        </div>
        <div class="overlay-dashboard">
        </div>
        <div class="has-dashboard">
            <!-- Main Header -->
            <header id="header2" class="main-header">
                <!-- Header Lower -->
                <div class="header-lower">
                    <div class="themesflat-container full">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="flex justify-space align-center">
                                    <!-- Logo Box -->
                                    <div class="logo-box flex">
                                        <div class="logo">
                                            <a href="#"><img src="assets/images/logo/logo2.png" alt="Logo">
                                            </a>
                                        </div>
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
                            <a href="#"><img src="<?php echo base_url('assets/images/AUTORESERVE-PNG.png'); ?>" alt="Logo Motorx"></a>
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
                                    <li class="dropdown2 current">
                                        <a href="#">Page</a>
                                        <ul>
                                            <li><a href="dashboard.html">Dashboard</a></li>
                                            <li class="current"><a href="my-inventory.html"></a>History Booking</li>
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

            <main id="main-content" class="site-main-dashboard">
                <div class="page-dashboard-wrap">
                    <div class="dashboard">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="title-dashboard">History Penjualan</h4>
                            </div>
                            <div class="col-md-6 sellec-list-db">
                                <!-- <div class="group-select">
                                    <div class="nice-select" tabindex="0">
                                        <span class="current">Recently Added</span>
                                        <ul class="list">
                                            <li data-value class="option selected">Recently Added</li>
                                            <li data-value="Public" class="option">Public</li>
                                            <li data-value="Pending" class="option">Pending</li>
                                        </ul>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="show-dashboard">
                            <span class="btn-show-dashboard">
                                <i class="icon-th-list"></i>
                                Show Dashboard
                            </span>
                        </div>
                        <div class="table-listing-inventory">
                            <table class="listing-inventory">
                                <tbody>
                                    <?php if (count($historyPenjualanMobil) != 0) : ?>
                                        <?php foreach ($historyPenjualanMobil as $data) : ?>
                                            <tr>
                                                <td>
                                                    <div class="tfcl-listing-listing">
                                                        <div class="features-images">
                                                            <ul class="controller2">
                                                                <li>
                                                                    <a href="#" class="btn-action">
                                                                        <i class="icon-heart-1-1"></i>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="btn-action">
                                                                        <i class="icon-shuffle-2-11"></i>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <!-- <a class="thumb" title="" href="#">
                                                            <img src="<?php echo $data[''] ?>" alt="" title="">
                                                        </a> -->
                                                            <ul class="controller">
                                                                <li>
                                                                    <a href="#" class="btn-action" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                                                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M0 9.49971V11.9997H2.5L9.87333 4.62638L7.37333 2.12638L0 9.49971ZM11.8067 2.69305C12.0667 2.43305 12.0667 2.01305 11.8067 1.75305L10.2467 0.193047C9.98667 -0.0669531 9.56667 -0.0669531 9.30667 0.193047L8.08667 1.41305L10.5867 3.91305L11.8067 2.69305Z" fill="white" />
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="btn-action" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                                                                        <svg width="20" height="14" viewBox="0 0 20 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M9.9987 0.75C5.83203 0.75 2.2737 3.34167 0.832031 7C2.2737 10.6583 5.83203 13.25 9.9987 13.25C14.1654 13.25 17.7237 10.6583 19.1654 7C17.7237 3.34167 14.1654 0.75 9.9987 0.75ZM9.9987 11.1667C7.6987 11.1667 5.83203 9.3 5.83203 7C5.83203 4.7 7.6987 2.83333 9.9987 2.83333C12.2987 2.83333 14.1654 4.7 14.1654 7C14.1654 9.3 12.2987 11.1667 9.9987 11.1667ZM9.9987 4.5C8.61537 4.5 7.4987 5.61667 7.4987 7C7.4987 8.38333 8.61537 9.5 9.9987 9.5C11.382 9.5 12.4987 8.38333 12.4987 7C12.4987 5.61667 11.382 4.5 9.9987 4.5Z" fill="white" />
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="btn-action" data-bs-toggle="tooltip" data-bs-placement="top" title="Tooltip on top">
                                                                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path d="M11.5013 10.334H14.8346V12.0007H11.5013V10.334ZM11.5013 3.66732H17.3346V5.33398H11.5013V3.66732ZM11.5013 7.00065H16.5013V8.66732H11.5013V7.00065ZM1.5013 12.0007C1.5013 12.9173 2.2513 13.6673 3.16797 13.6673H8.16797C9.08463 13.6673 9.83463 12.9173 9.83463 12.0007V3.66732H1.5013V12.0007ZM10.668 1.16732H8.16797L7.33464 0.333984H4.0013L3.16797 1.16732H0.667969V2.83398H10.668V1.16732Z" fill="white" />
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="listing-summary">
                                                            <div class="mypt-brand">Merk: <?php echo $data['merk'] ?></div>
                                                            <h6 class="listing-title">
                                                                <a title="" href="#"><?php echo $data['model'] ?></a>
                                                            </h6>
                                                            <p class="mypt-address">
                                                                <i class="icon-map-1-1"></i>
                                                                <?php echo $data['domisili'] ?>
                                                            </p>
                                                            <div class="price">
                                                                Perkiraan Harga Mobil :
                                                                <br>
                                                                Rp <?php echo number_format($data['perkiraan_harga_mobil'], 0) ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="list-wrapper">
                                                        <p class="status-publish"> <?php echo $data['status'] ?> </p>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="list-wrapper">
                                                        <p>Plat Nomor</p>
                                                        <b><?php echo $data['plat_nomor'] ?></b>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="list-wrapper">
                                                        <p>Tahun Kendaraan</p>
                                                        <b> <?php echo $data['tahun_pembuatan'] ?></b>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="list-wrapper">
                                                        <p>Transmisi</p>
                                                        <b><?php echo $data['transmisi'] ?></b>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="list-wrapper">
                                                        <p>Lokasi</p>
                                                        <b><?php echo $data['lokasi'] ?></b>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php else : ?>
                                        <p>Tidak ada data penjualan</p>
                                    <?php endif; ?>

                                </tbody>
                            </table>
                            <!-- <div class="tf-pagination mt-60">
                                <a class="prev page-numbers" href="#">
                                    <i class="icon-3"></i>
                                </a>
                                <a class="page-numbers" href="#">1</a>
                                <a class="page-numbers active" href="#">2</a>
                                <a class="page-numbers" href="#">3</a>
                                <a class="page-numbers" href="#">...</a>
                                <a class="next page-numbers" href="#">
                                    <i class="icon--1"></i>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </main>

        </div>
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