<style>
    .carousel-item img {
        width: 100%;
        height: 400px;
        object-fit: cover;
    }
</style>

<div class="wrapper">
    <div class="container-fluid">

        <!-- Page-Title -->
        <div class="row mt-3">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="btn-group float-right">
                        <ol class="breadcrumb hide-phone p-0 m-0">
                            <li class="breadcrumb-item"><a href="#"><?php echo $title; ?></a></li>
                        </ol>
                    </div>
                    <h4 class="page-title"><?php echo $title; ?></h4>
                </div>
            </div>
        </div>
        <!-- end page title end breadcrumb -->

        <!--====START CONTENT HERE =====-->


        <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.pexels.com/photos/337909/pexels-photo-337909.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Slide 1" class="d-block w-100 img-fluid">
                    <div class="carousel-caption">
                        <h3 class="text-white">Selamat Datang Di Auto Reserve Showroom </h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/1149831/pexels-photo-1149831.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Slide 2" class="d-block w-100 img-fluid">
                </div>
                <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/1054213/pexels-photo-1054213.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Slide 3" class="d-block w-100 img-fluid">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>

        </div>

        <div class="row layout-top-spacing">
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon"><i class="mdi mdi-cube-outline float-right mb-0"></i></div>
                        <h6 class="text-uppercase mb-0 text-center text-white">Total Booking Mobil</h6>
                    </div>
                    <div class="card-body">
                        <div class="mt-4 text-muted">
                            <h5 class="m-0"><?php echo count($totBookingMobil) ?><i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon"><i class="mdi mdi-cube-outline float-right mb-0"></i></div>
                        <h6 class="text-uppercase mb-0 text-center text-white">Total Jual Mobil</h6>
                    </div>
                    <div class="card-body">
                        <div class="mt-4 text-muted">
                            <h5 class="m-0"><?php echo count($totJualMobil) ?><i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon"><i class="mdi mdi-cube-outline float-right mb-0"></i></div>
                        <h6 class="text-uppercase mb-0 text-center text-white">Total Member</h6>
                    </div>
                    <div class="card-body">
                        <div class="mt-4 text-muted">
                            <h5 class="m-0"><?php echo count($totMember) ?><i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card mini-stat m-b-30">
                    <div class="p-3 bg-primary text-white">
                        <div class="mini-stat-icon"><i class="mdi mdi-cube-outline float-right mb-0"></i></div>
                        <h6 class="text-uppercase mb-0 text-center text-white">Total Admin</h6>
                    </div>
                    <div class="card-body">
                        <div class="mt-4 text-muted">
                            <h5 class="m-0"><?php echo count($totAdmin) ?><i class="mdi mdi-arrow-up text-success ml-2"></i></h5>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
        <div class="row mt-5">
            <div class="col-xl-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-4">All Member</h4>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Status Akun</th>
                                        <th>Tanggal Dibuat Akun</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php foreach ($totMember as $data) : ?>
                                        <tr>
                                            <td><?php echo $data['name'] ?></td>
                                            <td><?php echo $data['email'] ?></td>
                                            <td><?php echo $data['is_active'] == 1 ? 'Aktif' : 'Tidak Aktif' ?></td>
                                            <td><?php echo $data['date_created'] ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-xl-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h4 class="mt-0 header-title mb-4">All Admin</h4>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Status Akun</th>
                                        <th>Tanggal Dibuat Akun</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php foreach ($totAdmin as $data) : ?>
                                        <tr>
                                            <td><?php echo $data['name'] ?></td>
                                            <td><?php echo $data['email'] ?></td>
                                            <td><?php echo $data['is_active'] == 1 ? 'Aktif' : 'Tidak Aktif' ?></td>
                                            <td><?php echo $data['date_created'] ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--====END CONTENT HERE =====-->

    </div> <!-- end container -->
</div>
<!-- end wrapper -->


<!-- Footer -->
<?php $this->load->view('templates/footers/footer'); ?>
<!-- End Footer -->