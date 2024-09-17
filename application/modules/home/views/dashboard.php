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
                                <h4 class="title-dashboard">Dashboard</h4>
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
                        <div class="dashboard-overview">
                            <div class="row tf-counter">
                                <div class="col-12 col-sm-6 col-xl-6 col-xxl-3">
                                    <div class="db-card tf-counter">
                                        <div class="icon-overview">
                                            <svg width="34" height="34" viewBox="0 0 34 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_4175_22)">
                                                    <path d="M5.04688 17.9297C5.30186 17.9297 5.55659 17.8324 5.75114 17.6379L13.0156 10.3734L16.2957 13.6535C16.6848 14.0426 17.3152 14.0426 17.7043 13.6535L27.957 3.40073V4.98047C27.957 5.53091 28.4027 5.97656 28.9531 5.97656C29.5036 5.97656 29.9492 5.53091 29.9492 4.98047V0.996094C29.9492 0.963409 29.9474 0.930466 29.9443 0.898041C29.9427 0.881699 29.9396 0.865875 29.9373 0.850052C29.935 0.833969 29.9331 0.817886 29.93 0.802063C29.9264 0.782608 29.9209 0.763931 29.9163 0.744995C29.9129 0.732803 29.9103 0.720352 29.9067 0.70816C29.9007 0.688187 29.8934 0.668991 29.8862 0.649536C29.882 0.638641 29.8787 0.627487 29.8743 0.616852C29.866 0.596878 29.8564 0.577423 29.847 0.558228C29.8423 0.54837 29.8379 0.538513 29.833 0.528915C29.8216 0.507645 29.8091 0.487411 29.7964 0.467178C29.792 0.459915 29.7881 0.452652 29.7835 0.445648C29.7656 0.41893 29.7466 0.39299 29.7264 0.368088C29.7261 0.367828 29.7261 0.367569 29.7259 0.36731C29.6828 0.314651 29.6346 0.266403 29.5819 0.223343C29.5816 0.223083 29.5814 0.223083 29.5811 0.222824C29.5562 0.202591 29.5303 0.183655 29.5036 0.165756C29.4966 0.161087 29.4893 0.157196 29.482 0.152786C29.4618 0.140076 29.4416 0.127625 29.4203 0.116211C29.4107 0.111023 29.4008 0.106873 29.391 0.102203C29.3718 0.0926056 29.3523 0.0832672 29.3324 0.0749664C29.3217 0.0705566 29.3106 0.0671845 29.2997 0.0630341C29.2802 0.0557709 29.261 0.0485077 29.2411 0.0425415C29.2289 0.0389099 29.2164 0.0363159 29.2042 0.0329437C29.1853 0.0282745 29.1666 0.0228271 29.1472 0.0191955C29.1313 0.0160828 29.1152 0.014267 29.0992 0.0119324C29.0833 0.00959776 29.0675 0.00648498 29.0512 0.00492859C29.0188 0.0018158 28.9858 0 28.9531 0H24.9688C24.4183 0 23.9727 0.445648 23.9727 0.996094C23.9727 1.54654 24.4183 1.99219 24.9688 1.99219H26.5485L17 11.5407L13.7199 8.26057C13.3308 7.87148 12.7005 7.87148 12.3114 8.26057L4.34261 16.2293C3.95351 16.6184 3.95351 17.2488 4.34261 17.6379C4.53716 17.8324 4.79189 17.9297 5.04688 17.9297Z" fill="#D01818"></path>
                                                    <path d="M0 33.0039C0 33.5544 0.445648 34 0.996094 34H8.96484C9.51529 34 9.96094 33.5544 9.96094 33.0039V31.6094H0V33.0039Z" fill="#D01818"></path>
                                                    <path d="M8.96484 27.2266H0.996094C0.445648 27.2266 0 27.6722 0 28.2227V29.6172H9.96094V28.2227C9.96094 27.6722 9.51529 27.2266 8.96484 27.2266Z" fill="#D01818"></path>
                                                    <path d="M12.0195 33.0039C12.0195 33.5544 12.4652 34 13.0156 34H20.9844C21.5348 34 21.9805 33.5544 21.9805 33.0039V31.6094H12.0195V33.0039Z" fill="#D01818"></path>
                                                    <path d="M24.0391 27.2266H34V29.6172H24.0391V27.2266Z" fill="#D01818"></path>
                                                    <path d="M33.0039 14.0781H25.0352C24.4847 14.0781 24.0391 14.5238 24.0391 15.0742V16.4688H34V15.0742C34 14.5238 33.5544 14.0781 33.0039 14.0781Z" fill="#D01818"></path>
                                                    <path d="M24.0391 18.4609H34V20.8516H24.0391V18.4609Z" fill="#D01818"></path>
                                                    <path d="M24.0391 22.8438H34V25.2344H24.0391V22.8438Z" fill="#D01818"></path>
                                                    <path d="M24.0391 33.0039C24.0391 33.5544 24.4847 34 25.0352 34H33.0039C33.5544 34 34 33.5544 34 33.0039V31.6094H24.0391V33.0039Z" fill="#D01818"></path>
                                                    <path d="M12.0195 27.2266H21.9805V29.6172H12.0195V27.2266Z" fill="#D01818"></path>
                                                    <path d="M20.9844 22.8438H13.0156C12.4652 22.8438 12.0195 23.2894 12.0195 23.8398V25.2344H21.9805V23.8398C21.9805 23.2894 21.5348 22.8438 20.9844 22.8438Z" fill="#D01818"></path>
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_4175_22">
                                                        <rect width="34" height="34" fill="white"></rect>
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </div>
                                        <div class="content-overview">
                                            <span>Total Pembelian</span>
                                            <div class="d-flex">
                                                <div class="listing-text number" data-to="431" data-speed="3000" data-waypoint-active="yes"><?php echo count($dataPembeliMember) ?></div><span> </span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-xl-6 col-xxl-3">
                                    <div class="db-card tf-counter">
                                        <div class="icon-overview">
                                            <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M18.9339 6.39608L20.694 4.68046C20.8194 4.55837 20.9081 4.40362 20.9501 4.23374C20.992 4.06385 20.9856 3.8856 20.9316 3.71916C20.8775 3.55272 20.7779 3.40473 20.6441 3.29195C20.5103 3.17917 20.3476 3.10609 20.1744 3.08099L17.7414 2.72764L16.6538 0.522925C16.5675 0.376727 16.4445 0.255569 16.297 0.171402C16.1496 0.0872355 15.9827 0.0429687 15.8129 0.0429688C15.6431 0.0429688 15.4762 0.0872355 15.3288 0.171402C15.1813 0.255569 15.0583 0.376727 14.972 0.522925L13.8845 2.72755L11.4515 3.08089C11.2783 3.106 11.1156 3.17908 10.9817 3.29186C10.8479 3.40464 10.7484 3.55262 10.6943 3.71906C10.6402 3.8855 10.6338 4.06375 10.6758 4.23364C10.7178 4.40353 10.8065 4.55827 10.9319 4.68036L12.692 6.39599L12.2763 8.81933C12.2467 8.99178 12.2659 9.16907 12.3318 9.33115C12.3977 9.49323 12.5077 9.63363 12.6493 9.73647C12.7908 9.8393 12.9583 9.90047 13.1328 9.91305C13.3074 9.92563 13.4819 9.88912 13.6368 9.80765L15.8129 8.66333L17.9891 9.80774C18.144 9.88921 18.3185 9.92572 18.493 9.91314C18.6676 9.90056 18.8351 9.8394 18.9766 9.73656C19.1182 9.63373 19.2281 9.49333 19.2941 9.33125C19.36 9.16917 19.3792 8.99187 19.3496 8.81943L18.9339 6.39608Z" fill="#D01818"></path>
                                                <path d="M30.7671 6.49086C30.713 6.32446 30.6134 6.17651 30.4796 6.06373C30.3458 5.95096 30.1831 5.87786 30.01 5.8527L27.5774 5.49927L26.4888 3.29474C26.4026 3.14846 26.2797 3.02722 26.1322 2.94299C25.9848 2.85876 25.8179 2.81445 25.6481 2.81445C25.4783 2.81445 25.3114 2.85876 25.164 2.94299C25.0166 3.02722 24.8937 3.14846 24.8074 3.29474L23.7199 5.49927L21.2874 5.8527C21.1143 5.8778 20.9516 5.95084 20.8178 6.06356C20.684 6.17629 20.5844 6.32419 20.5303 6.49056C20.4762 6.65692 20.4698 6.83511 20.5116 7.00497C20.5535 7.17482 20.6421 7.32957 20.7674 7.4517L22.5279 9.16733L22.1122 11.5908C22.0825 11.7632 22.1017 11.9405 22.1676 12.1025C22.2334 12.2646 22.3433 12.405 22.4848 12.5079C22.6264 12.6108 22.7938 12.672 22.9683 12.6847C23.1428 12.6973 23.3174 12.6609 23.4722 12.5795L25.648 11.4358L27.8242 12.5795C27.979 12.661 28.1536 12.6975 28.3281 12.6849C28.5026 12.6724 28.6702 12.6112 28.8117 12.5084C28.9533 12.4055 29.0632 12.2651 29.1291 12.1031C29.1951 11.941 29.2143 11.7637 29.1847 11.5912L28.7691 9.1678L30.5293 7.45217C30.6547 7.33011 30.7434 7.17538 30.7855 7.00548C30.8275 6.83559 30.8211 6.65732 30.7671 6.49086Z" fill="#D01818"></path>
                                                <path d="M10.3381 5.85207L7.90559 5.49864L6.81809 3.29411C6.74067 3.13723 6.62091 3.00515 6.47234 2.91279C6.32377 2.82043 6.15232 2.77148 5.97739 2.77148C5.80245 2.77148 5.631 2.82043 5.48243 2.91279C5.33386 3.00515 5.2141 3.13723 5.13668 3.29411L4.04806 5.49864L1.61543 5.85207C1.44226 5.87719 1.27958 5.95027 1.14578 6.06305C1.01199 6.17582 0.91243 6.32379 0.858367 6.49022C0.804304 6.65664 0.797897 6.83487 0.83987 7.00475C0.881844 7.17462 0.970522 7.32936 1.09587 7.45145L2.85631 9.16717L2.44062 11.5906C2.41101 11.7631 2.43026 11.9403 2.49617 12.1024C2.56209 12.2645 2.67205 12.4049 2.81361 12.5077C2.95517 12.6106 3.12268 12.6717 3.2972 12.6843C3.47172 12.6969 3.64628 12.6604 3.80112 12.5789L5.97734 11.4352L8.15309 12.5789C8.30793 12.6604 8.48249 12.6969 8.65701 12.6843C8.83153 12.6717 8.99904 12.6106 9.1406 12.5077C9.28216 12.4049 9.39212 12.2645 9.45804 12.1024C9.52395 11.9403 9.5432 11.7631 9.51359 11.5906L9.0979 9.16717L10.8584 7.45154C10.9837 7.32941 11.0723 7.17466 11.1141 7.0048C11.156 6.83495 11.1496 6.65676 11.0954 6.4904C11.0413 6.32403 10.9418 6.17612 10.808 6.0634C10.6742 5.95068 10.5113 5.87717 10.3381 5.85207Z" fill="#D01818"></path>
                                                <path d="M25.1875 14.0625H6.4375C5.69183 14.0633 4.97694 14.3599 4.44967 14.8872C3.9224 15.4144 3.62582 16.1293 3.625 16.875V24.375C3.62582 25.1207 3.9224 25.8356 4.44967 26.3628C4.97694 26.8901 5.69183 27.1867 6.4375 27.1875H12.6118L15.1497 29.7253C15.2367 29.8124 15.34 29.8815 15.4538 29.9286C15.5675 29.9757 15.6894 30 15.8125 30C15.9356 30 16.0575 29.9757 16.1712 29.9286C16.285 29.8815 16.3883 29.8124 16.4753 29.7253L19.0132 27.1875H25.1875C25.9332 27.1867 26.6481 26.8901 27.1753 26.3628C27.7026 25.8356 27.9992 25.1207 28 24.375V16.875C27.9992 16.1293 27.7026 15.4144 27.1753 14.8872C26.6481 14.3599 25.9332 14.0633 25.1875 14.0625ZM23.3125 23.4375H8.3125C8.06386 23.4375 7.8254 23.3387 7.64959 23.1629C7.47377 22.9871 7.375 22.7486 7.375 22.5C7.375 22.2514 7.47377 22.0129 7.64959 21.8371C7.8254 21.6613 8.06386 21.5625 8.3125 21.5625H23.3125C23.5611 21.5625 23.7996 21.6613 23.9754 21.8371C24.1512 22.0129 24.25 22.2514 24.25 22.5C24.25 22.7486 24.1512 22.9871 23.9754 23.1629C23.7996 23.3387 23.5611 23.4375 23.3125 23.4375ZM23.3125 19.6875H8.3125C8.06386 19.6875 7.8254 19.5887 7.64959 19.4129C7.47377 19.2371 7.375 18.9986 7.375 18.75C7.375 18.5014 7.47377 18.2629 7.64959 18.0871C7.8254 17.9113 8.06386 17.8125 8.3125 17.8125H23.3125C23.5611 17.8125 23.7996 17.9113 23.9754 18.0871C24.1512 18.2629 24.25 18.5014 24.25 18.75C24.25 18.9986 24.1512 19.2371 23.9754 19.4129C23.7996 19.5887 23.5611 19.6875 23.3125 19.6875Z" fill="#D01818"></path>
                                            </svg>
                                        </div>
                                        <div class="content-overview">
                                            <span>Total Penjualan</span>
                                            <div class="d-flex">
                                                <div class="listing-text number" data-to="235" data-speed="3000" data-waypoint-active="yes"><?php echo count($dataPenjualMember) ?></div><span> </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </dv>
                            </div>
                            <div class="table-listing-inventory">
                                <table class="listing-inventory">
                                    <tbody>

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