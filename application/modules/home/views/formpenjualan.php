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
                        <a href="#"><img src="<?php echo base_url('assets/images/AUTORESERVE-PNG.png') ?>" alt="Logo Motorx"></a>
                    </div>
                    <div class="bottom-canvas">
                        <div class="menu-outer">
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

        <div class="tf-widget-add-cart">
            <div class="themesflat-container">
                <div class="tf-add-cart">
                    <form enctype="multipart/form-data" method="post" action="<?php echo base_url('home/prosesjualmobil') ?>" id="submit-add-cart" class="form-add-cart needs-validation">
                        <fieldset id="information" class="mb-60">
                            <div class="inner-title mb-30">
                                <!-- <span class="sub-title">Add Your Car Today</span> -->
                                <?php echo $this->session->flashdata('message'); ?>
                                <h3 class="title">Form Penjualan</h3>
                            </div>
                            <div class="tfad-listing-title mb-30">
                                <div class="form-group">
                                    <label>Nama (*)</label>
                                    <input type="text" id="nama" class="form-control" name="nama" placeholder="Masukkan nama" value="" required>
                                </div>
                            </div>
                            <div class="tfad-listing-title mb-30">
                                <div class="form-group">
                                    <label>No.Telepon (*)</label>
                                    <input type="text" id="no_telp" class="form-control" name="no_telp" placeholder="Masukkan Nomor Telfon" value="" required>
                                </div>
                            </div>
                            <div class="tfad-listing-title mb-30">
                                <div class="form-group">
                                    <label>Alamat Domisili (*)</label>
                                    <input type="text" id="domisili" class="form-control" name="domisili" placeholder="Enter title here" value="" required>
                                </div>
                            </div>
                            <div class="listing-fields-grid mb-30">
                                <div class="form-group">
                                    <label>Provinsi (*)</label>
                                    <input type="text" id="provinsi" class="form-control" name="provinsi" placeholder="Masukkan provinsi" value="" required="">
                                    <!-- <select class="form-select" aria-label="Default select example" name="provinsi" required>
                                        <option selected>-- Pilih --</option>
                                        <option value="DKI Jakarta">DKI Jakarta</option>
                                        <option value="Palembang">Palembang</option>
                                        <option value="Surabaya">Surabaya</option>
                                    </select> -->
                                </div>
                                <div class="form-group">
                                    <label>Kota (*)</label>
                                    <input type="text" id="kota" class="form-control" name="kota" placeholder="Masukkan kota" value="" required="">
                                    <!-- <select class="form-select" aria-label="Default select example" name="kota" required>
                                        <option selected>-- Pilih --</option>
                                        <option value="Jakarta Utara">Jakarta Utara</option>
                                        <option value="Jakarta Selatan">Jakarta Selatan</option>
                                        <option value="Jakarta Barat">Jakarta Barat</option>
                                    </select> -->
                                </div>
                            </div>
                            <div class="description-fields">
                                <div class="form-group">
                                    <label>Data Kendaraan</label>
                                </div>
                            </div>
                            <div class="listing-fields-grid mb-30">
                                <div class="form-group">
                                    <label>Merk (*)</label>
                                    <select class="form-select select2" aria-label="Default select example" name="merk" id="merk" required>
                                        <option selected>-- Pilih --</option>
                                        <?php foreach ($merkmobil as $data) : ?>
                                            <option value="<?php echo $data['id_merk_mobil'] ?>"><?php echo $data['merk'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Model (*)</label>
                                    <select class="form-select select2" aria-label="Default select example" name="model" id="model" required>
                                        <option selected>-- Pilih --</option>
                                        <?php foreach ($modelmobil as $data) : ?>
                                            <option value="<?php echo $data['id_model_mobil'] ?>"><?php echo $data['model'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Variant (*)</label>
                                    <select class="form-select select2" aria-label="Default select example" name="variant" id="variant" required>
                                        <option selected>-- Pilih --</option>
                                        <?php foreach ($varianmobil as $data) : ?>
                                            <option value="<?php echo $data['id_variant_mobil'] ?>"><?php echo $data['variant_mobil'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Jenis (*)</label>
                                    <select class="form-select select2" aria-label="Default select example" name="jenis" required>
                                        <option selected>-- Pilih --</option>
                                        <?php foreach ($jenismobil as $data) : ?>
                                            <option value="<?php echo $data['id_jenis_mobil'] ?>"><?php echo $data['jenis_mobil'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Warna (*)</label>
                                    <select class="form-select select2" aria-label="Default select example" name="warna" required>
                                        <option selected>-- Pilih --</option>
                                        <?php foreach ($warnamobil as $data) : ?>
                                            <option value="<?php echo $data['id_warna_mobil'] ?>"><?php echo $data['warna_mobil'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="listing-fields-grid mb-30">
                                <div class="form-group">
                                    <label>Tahun (*)</label>
                                    <input type="text" id="tahun" class="form-control" name="tahun" placeholder="Masukkan Tahun" value="" required>
                                    <small class="text-danger"><?php echo form_error('tahun'); ?></small>
                                </div>
                                <div class="form-group">
                                    <label>Kilometer (*)</label>
                                    <input type="text" id="kilometer" class="form-control" name="kilometer" placeholder="Masukkan Kilometer" value="" required>
                                </div>
                                <div class="form-group">
                                    <label>Plat Nomer (*)</label>
                                    <input type="text" id="plat_nomor" class="form-control" name="plat_nomor" placeholder="Masukkan Plat Nomor" value="" required>
                                </div>
                                <div class="form-group">
                                    <label>Transmisi</label>
                                    <div class="group-select">
                                        <div class="radio">
                                            <input id="yes_transmisi" type="radio" name="transmisi" value="Automatic">
                                            <label for="yes_transmisi">Automatic</label>
                                        </div>
                                        <div class="radio">
                                            <input id="no_transmisi" type="radio" name="transmisi" value="Manual">
                                            <label for="no_transmisi">Manual</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="listing-fields-grid mb-30">
                                <div class="form-group">
                                    <label>Bebas Tabrak</label>
                                    <div class="group-select">
                                        <div class="radio">
                                            <input id="yes_tabrak" type="radio" name="bebas_tabrak" value="Ya">
                                            <label for="yes_tabrak">Ya</label>
                                        </div>
                                        <div class="radio">
                                            <input id="no_tabrak" type="radio" name="bebas_tabrak" value="Tidak">
                                            <label for="no_tabrak">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Bebas Banjir</label>
                                    <div class="group-select">
                                        <div class="radio">
                                            <input id="yes_banjir" type="radio" name="bebas_banjir" value="Ya">
                                            <label for="yes_banjir">Ya</label>
                                        </div>
                                        <div class="radio">
                                            <input id="no_banjir" type="radio" name="bebas_banjir" value="Tidak">
                                            <label for="no_banjir">Tidak</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>BPKB</label>
                                    <div class="group-select">
                                        <div class="radio">
                                            <input id="yes_bpkb" type="radio" name="bpkb" value="Ya">
                                            <label for="yes_bpkb">Ya</label>
                                        </div>
                                        <div class="radio">
                                            <input id="no_bpkb" type="radio" name="bpkb" value="Tidak">
                                            <label for="no_bpkb">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Buku Service</label>
                                    <div class="group-select">
                                        <div class="radio">
                                            <input id="yes_buku_service" type="radio" name="buku_service" value="Ya">
                                            <label for="yes_buku_service">Ya</label>
                                        </div>
                                        <div class="radio">
                                            <input id="no_buku_service" type="radio" name="buku_service" value="Tidak">
                                            <label for="no_buku_service">Tidak</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Perkiraan Harga Mobil</label>
                                    <input type="number" id="perkiraan_harga_mobil" class="form-control" name="perkiraan_harga_mobil" placeholder="Masukkan Harga Perkiraan Harga Mobil" value="" required>
                                </div>
                                <div class="form-group">
                                    <label>Upload Gambar</label>
                                    <input name="files[]" type="file" multiple="multiple" />
                                </div>

                            </div>
                        </fieldset>
                        <fieldset>
                            <button type="submit" class="button-save-listing">Sell
                                Car</button>
                        </fieldset>
                    </form>
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
                                <input type="text" class="tb-my-input" name="text" placeholder="User name" required>
                            </fieldset>
                            <fieldset>
                                <label>Email</label>
                                <input type="email" class="tb-my-input" name="email" placeholder="Email" required>
                            </fieldset>
                            <fieldset>
                                <label>Password</label>
                                <input type="password" class="input-form password-input" placeholder="Your password" required>
                            </fieldset>
                            <fieldset>
                                <label>Confirm password</label>
                                <input type="password" class="input-form password-input" placeholder="Confirm password" required>
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

<script>
    $(document).ready(function() {
        $('.select2').select2({
            placeholder: "-- Pilih --",
            // allowClear: true
        });
    });
</script>

<script>
    $(document).ready(function() {
        $("#merk").change(function() {
            var url = "<?php echo site_url('mobil/add_ajax_model'); ?>/" + $(this).val();
            $('#model').load(url);

            return false;
        })

        $("#model").change(function() {
            var url = "<?php echo site_url('mobil/add_ajax_variant'); ?>/" + $(this).val();
            $('#variant').load(url);
            return false;
        })

    });
</script>