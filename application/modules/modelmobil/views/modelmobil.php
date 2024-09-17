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

          <h4 class="mt-0 header-title">Silahkan buat model mobil management anda</h4>

          <?php echo form_error('model', '<div class="alert alert-danger text-center" role="alert">', '</div>'); ?>

          <?php echo $this->session->flashdata('message'); ?>

          <a href="#" class="btn btn-primary waves-effect waves-light mb-3" data-toggle="modal" data-target="#newTambah">Tambahkan data baru</a>

          <div class="table-responsive">
            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead>
                <tr class="text-center">
                  <th>#</th>
                  <th>Model Mobil</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach ($modelmobil as $b) : ?>
                  <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $b['model']; ?></td>
                    <td>
                      <a href="#"><span class="badge badge-success waves-effect waves-light" data-toggle="modal" data-target="#newEdit<?php echo $b['id_model_mobil']; ?>">Edit</span></a>
                      <a class="btn-hapus" href="<?php echo base_url('modelmobil/deletedata/') . encrypt_url($b['id_model_mobil']); ?>"><span class="badge badge-danger waves-effect waves-light ml-3">Delete</span></a>
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
      <form action="<?php echo base_url(); ?>modelmobil" method="POST">
        <div class="modal-body">
          <div class="form-group">
            <label for="model_mobil">Model Mobil</label>
            <input type="text" class="form-control" id="model_mobil" name="model_mobil" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label for="merk_mobil">Merk Mobil</label>
            <select name="merk_mobil" id="merk_mobil" class="form-control selectpicker" data-live-search="true">
              <option value="">Select</option>
              <?php foreach ($merekmobil as $data) : ?>
                <option value="<?php echo $data['id_merk_mobil'] ?>"><?php echo $data['merk'] ?></option>
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
foreach ($modelmobil as $b) :  ?>
  <div class="modal fade" id="newEdit<?php echo $b['id_model_mobil']; ?>" tabindex="-1" aria-labelledby="newEditLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newEditLabel">Edit Data Baru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?php echo base_url(); ?>modelmobil/editdata" method="POST">
          <input type="hidden" name="id_model_mobil" value="<?php echo encrypt_url($b['id_model_mobil']); ?>">
          <div class="modal-body">
            <div class="modal-body">
              <div class="form-group">
                <label for="model_mobil">Model Mobil</label>
                <input type="text" class="form-control" id="model_mobil" name="model_mobil" autocomplete="off" value="<?php echo $b['model']; ?>" required>
              </div>
              <div class="form-group">
                <label for="merk_mobil">Merk Mobil</label>
                <select name="merk_mobil" id="merk_mobil" class="form-control selectpicker" data-live-search="true">
                  <option value="">Select</option>
                  <?php foreach ($merekmobil as $data) : ?>
                    <option value="<?php echo $data['id_merk_mobil'] ?>" <?php echo $selected = $data['id_merk_mobil'] == $b['id_merk_mobil'] ? 'selected' : '' ?>><?php echo $data['merk'] ?></option>
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