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
    <div class="col-lg">
      <div class="card m-b-30">
        <div class="card-body">

          <h4 class="mt-0 header-title">Silahkan buat varian mobil management anda</h4>

          <?php echo form_error('merek', '<div class="alert alert-danger text-center" role="alert">', '</div>'); ?>

          <?php echo $this->session->flashdata('message'); ?>

          <a href="#" class="btn btn-primary waves-effect waves-light mb-3" data-toggle="modal" data-target="#newTambah">Tambahkan data baru</a>

          <div class="table-responsive">
            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead>
                <tr class="text-center">
                  <th>#</th>
                  <th>Varian Mobil</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach ($varianmobil as $b) : ?>
                  <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $b['variant_mobil']; ?></td>
                    <td>
                      <a href="#"><span class="badge badge-success waves-effect waves-light" data-toggle="modal" data-target="#newEdit<?php echo $b['id_variant_mobil']; ?>">Edit</span></a>
                      <a class="btn-hapus" href="<?php echo base_url('varianmobil/deletedata/') . encrypt_url($b['id_variant_mobil']); ?>"><span class="badge badge-danger waves-effect waves-light ml-3">Delete</span></a>
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

  </div> <!-- end container -->
</div>
<!-- end wrapper -->

<div class="modal fade" id="newTambah" tabindex="-1" aria-labelledby="newTambahLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newTambahLabel">Tambah Data Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url(); ?>varianmobil" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <label for="varian_mobil">Varian Mobil</label>
            <input type="text" class="form-control" id="varian_mobil" name="varian_mobil" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="model_mobil">Model Mobil</label>
            <select name="model_mobil" id="model_mobil" class="form-control selectpicker" data-live-search="true">
              <option value="">Select</option>
              <?php foreach ($modelmobil as $data) : ?>
                <option value="<?php echo $data['id_model_mobil'] ?>"><?php echo $data['model'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </form>
    </div>
  </div>
</div>

<?php
foreach ($varianmobil as $b) :  ?>
  <div class="modal fade" id="newEdit<?php echo $b['id_variant_mobil']; ?>" tabindex="-1" aria-labelledby="newEditLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newEditLabel">Edit Data Baru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?php echo base_url(); ?>varianmobil/editdata" method="POST">
          <input type="hidden" name="id_variant_mobil" value="<?php echo encrypt_url($b['id_variant_mobil']); ?>">
          <div class="modal-body">
            <div class="modal-body">
              <div class="form-group">
                <label for="variant_mobil">Varian Mobil</label>
                <input type="text" class="form-control" id="variant_mobil" name="variant_mobil" autocomplete="off" value="<?php echo $b['variant_mobil']; ?>" required>
              </div>
              <div class="form-group">
                <label for="model_mobil">Model Mobil</label>
                <select name="model_mobil" id="model_mobil" class="form-control selectpicker" data-live-search="true">
                  <option value="">Select</option>
                  <?php foreach ($modelmobil as $data) : ?>
                    <option value="<?php echo $data['id_model_mobil'] ?>" <?php echo $selected = $data['id_model_mobil'] == $b['id_model_mobil'] ? 'selected' : '' ?>><?php echo $data['model'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Edit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>