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

    <div class="row layout-top-spacing">
      <!--====START CONTENT HERE =====-->
      <div class="col-lg">
        <div class="card m-b-30">
          <div class="card-body">


            <?php echo $this->session->flashdata('message'); ?>

            <!-- <a href="#" class="btn btn-primary waves-effect waves-light mb-3" data-toggle="modal" data-target="#newKotaModal">Tambahkan Data Kota</a> -->

            <div class="table-responsive">
              <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                <thead>
                  <tr class="text-center">
                    <th class="col-md-2">No.</th>
                    <th class="col-md-2">Status</th>
                    <th class="col-md-4">Merk</th>
                    <th class="col-md-4">Model</th>
                    <th class="col-md-4">Plat Nomor</th>
                    <th class="col-md-4">Tahun Kendaraan</th>
                    <th class="col-md-4">Transmisi</th>
                    <th class="col-md-4">Tanggal Dibuat</th>
                    <th class="col-md-2">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <!-- <?php $no = 1; ?> -->
                  <?php foreach ($historyPenjualMobil as $k) : ?>
                    <tr class="text-center">
                      <th scope="row"><?php echo $no; ?></th>
                      <td><?php echo $k['status']; ?></td>
                      <td><?php echo $k['merk']; ?></td>
                      <td><?php echo $k['model']; ?></td>
                      <td><?php echo $k['plat_nomor']; ?></td>
                      <td><?php echo $k['tahun_pembuatan']; ?></td>
                      <td><?php echo $k['transmisi']; ?></td>
                      <td><?php echo $k['date_created']; ?></td>
                      <td>
                        <a href="#"><span class="badge badge-success waves-effect waves-light" data-toggle="modal" data-target="#newEdit<?php echo $k['id_penjual_mobil']; ?>">Edit</span></a>
                        <a href="#"><span class="badge badge-primary waves-effect waves-light" data-toggle="modal" data-target="#newShow<?php echo $k['id_penjual_mobil']; ?>">Show</span></a>
                      </td>
                    </tr>
                    <?php $no++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div> <!-- end col -->
      <!--====END CONTENT HERE =====-->
    </div>


    <!--====END CONTENT HERE =====-->

  </div> <!-- end container -->
</div>
<!-- end wrapper -->


<!-- Footer -->
<?php $this->load->view('templates/footers/footer'); ?>
<!-- End Footer -->

<!-- Edit Data -->
<?php
foreach ($historyPenjualMobil as $b) :  ?>
  <div class="modal fade" id="newEdit<?php echo $b['id_penjual_mobil']; ?>" tabindex="-1" aria-labelledby="newEditLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newEditLabel">Edit Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?php echo base_url(); ?>riwayatpenjualanmobil/prosesbatal" method="POST">
          <input type="hidden" name="id_penjual_mobil" value="<?php echo encrypt_url($b['id_penjual_mobil']); ?>">
          <input type="hidden" name="id_user" value="<?php echo encrypt_url($b['id_user']); ?>">
          <input type="hidden" name="nama" value="<?php echo $b['nama']; ?>">

          <div class="modal-body">
            <div class="card shadow">
              <div class="card-header bg-primary text-white">
                <h5 class="mb-0 text-white ml-3">Data Diri Penjual</h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <img src="<?php echo base_url('assets/images/profile_1.png'); ?>" alt="Customer Photo" class="img-fluid rounded-circle mb-3">
                  </div>
                  <div class="col-md-8">
                    <h4 class="mb-3"><?php echo $b['nama'] ?></h4>
                    <p><i class="fal fa-phone mr-2"></i> <?php echo $b['no_telp'] ?></p>
                    <p><i class="fal fa-map-marker-alt mr-2"></i> <?php echo $b['domisili'] ?></p>
                    <p><i class="fal fa-map-marker-alt mr-2"></i> <?php echo $b['provinsi'] ?></p>
                    <p><i class="fal fa-map-marker-alt mr-2"></i> <?php echo $b['kota'] ?></p>
                    <p><i class="fal fa-car mr-2"></i> <?php echo $b['status'] ?></p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card shadow mt-5">
              <div class="card-body">
                <label for="">Keterangan *</label>
                <div class="row">
                  <textarea required="" class="form-control" rows="5" name="keterangan"></textarea>
                </div>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-success">Batal</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>

<!-- Show Data -->
<?php
foreach ($historyPenjualMobil as $b) :  ?>
  <div class="modal fade" id="newShow<?php echo $b['id_penjual_mobil']; ?>" tabindex="-1" aria-labelledby="newShowLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newShowLabel">Show Data</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?php echo base_url(); ?>riwayatpenjualanmobil/prosesdata" method="POST">
          <input type="hidden" name="id_penjual_mobil" value="<?php echo encrypt_url($b['id_penjual_mobil']); ?>">
          <input type="hidden" name="id_user" value="<?php echo encrypt_url($b['id_user']); ?>">
          <input type="hidden" name="nama" value="<?php echo $b['nama']; ?>">

          <div class="modal-body">
            <div class="card shadow">
              <div class="card-header bg-primary text-white">
                <h5 class="mb-0 text-white ml-3">Data Diri Penjual</h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <img src="<?php echo base_url('assets/images/profile_1.png'); ?>" alt="Customer Photo" class="img-fluid rounded-circle mb-3">
                  </div>
                  <div class="col-md-8">
                    <h4 class="mb-3"><?php echo $b['nama'] ?></h4>
                    <p><i class="fal fa-phone mr-2"></i> <?php echo $b['no_telp'] ?></p>
                    <p><i class="fal fa-map-marker-alt mr-2"></i> <?php echo $b['domisili'] ?></p>
                    <p><i class="fal fa-map-marker-alt mr-2"></i> <?php echo $b['provinsi'] ?></p>
                    <p><i class="fal fa-map-marker-alt mr-2"></i> <?php echo $b['kota'] ?></p>
                    <p><i class="fal fa-car mr-2"></i> <?php echo $b['status'] ?></p>
                  </div>
                </div>
                <div class="row">
                  <?php
                  $id_mobil = $b['id_mobil'];
                  $dataGambarMobil = $this->mobilModel->getDataGambarMobils($id_mobil)->result_array();
                  ?>
                  <label for="" class="ml-3 mt-5">Gambar Mobil :</label>
                  <?php foreach ($dataGambarMobil as $data) : ?>
                    <div class="col-md-12 mb-3">
                      <img src="<?= base_url('assets_home/images/cars/') . $data['gambar_mobil']; ?>" width="400" height="250" alt="Bukti Bayar Img">
                    </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
            <div class="card shadow mt-5">
              <div class="card-body">
                <label for="">Keterangan *</label>
                <div class="row">
                  <textarea required="" class="form-control" rows="5" name="keterangan"></textarea>
                </div>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <a href="<?php echo base_url('riwayatpenjualanmobil/reject/' . encrypt_url($b['id_penjual_mobil'])); ?>" class="btn btn-danger">Reject</a>
            <button type="submit" class="btn btn-success">Accept</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>