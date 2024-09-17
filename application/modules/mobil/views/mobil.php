<!-- Custom CSS -->
<style>
  /* Set the height of the Select2 container */
  .select2-container .select2-selection--single {
    height: 38px;
    /* Match this to your desired height */
  }

  /* Adjust the Select2 dropdown arrow */
  .select2-container--default .select2-selection--single .select2-selection__arrow {
    height: 36px;
    /* Adjust to match the select height */
    top: 1px;
    /* Adjust to vertically center the arrow */
  }

  /* Adjust the input field inside Select2 */
  .select2-container--default .select2-selection--single .select2-selection__rendered {
    line-height: 36px;
    /* Adjust to vertically center the text */
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
    <div class="col-lg">
      <div class="card m-b-30">
        <div class="card-body">

          <h4 class="mt-0 header-title">Silahkan buat mobil management anda</h4>

          <?php echo form_error('model', '<div class="alert alert-danger text-center" role="alert">', '</div>'); ?>

          <?php echo $this->session->flashdata('message'); ?>

          <a href="#" class="btn btn-primary waves-effect waves-light mb-3" data-toggle="modal" data-target="#newTambah">Tambahkan data baru</a>

          <div class="table-responsive">
            <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
              <thead>
                <tr class="text-center">
                  <th>No.</th>
                  <th>Nama Mobil</th>
                  <th>Merk</th>
                  <th>Tahun</th>
                  <th>Kilometer</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php $no = 1; ?>
                <?php foreach ($mobilDetail as $b) : ?>
                  <tr class="text-center">
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $b['jenis_mobil']; ?></td>
                    <td><?php echo $b['merk']; ?></td>
                    <td><?php echo $b['tahun_pembuatan']; ?></td>
                    <td><?php echo $b['kilometer_mobil']; ?></td>
                    <td>
                      <a href="#"><span class="badge badge-success waves-effect waves-light" data-toggle="modal" data-target="#newEdit<?php echo $b['id_mobil']; ?>">Edit</span></a>
                      <a class="btn-hapus" href="<?php echo base_url('mobil/deletedata/') . encrypt_url($b['id_mobil']); ?>"><span class="badge badge-danger waves-effect waves-light ml-3">Delete</span></a>
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
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newTambahLabel">Tambah Data Baru</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?php echo base_url(); ?>mobil" method="POST" enctype="multipart/form-data" id="myForm">
        <div class="modal-body">

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="merk_mobil">Merk Mobil</label>
                <select name="merk_mobil" id="merk" class="form-control select2">
                  <option value="">Select</option>
                  <?php foreach ($merkmobil as $merk) : ?>
                    <option value="<?php echo $merk['id_merk_mobil'] ?>"><?php echo $merk['merk'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="model_mobil">Model Mobil</label>
                <select name="model_mobil" id="model" class="form-control select2">
                  <option value="">Select</option>
                  <?php foreach ($modelmobil as $model) : ?>
                    <option value="<?php echo $model['id_model_mobil'] ?>"><?php echo $model['model'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="varian_mobil">Varian Mobil</label>
                <select name="varian_mobil" id="variant" class="form-control select2">
                  <option value="">Select</option>
                  <?php foreach ($varianmobil as $varian) : ?>
                    <option value="<?php echo $varian['id_variant_mobil'] ?>"><?php echo $varian['variant_mobil'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="jenis_mobil">Jenis Mobil</label>
                <select name="jenis_mobil" id="jenis_mobil" class="form-control select2">
                  <option value="">Select</option>
                  <?php foreach ($jenismobil as $jenis) : ?>
                    <option value="<?php echo $jenis['id_jenis_mobil'] ?>"><?php echo $jenis['jenis_mobil'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="warna_mobil">Warna Mobil</label>
                <select name="warna_mobil" id="warna_mobil" class="form-control select2">
                  <option value="">Select</option>
                  <?php foreach ($warnamobil as $warna) : ?>
                    <option value="<?php echo $warna['id_warna_mobil'] ?>"><?php echo $warna['warna_mobil'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="tahun_mobil">Tahun Mobil</label>
                <input type="number" class="form-control" id="tahun_mobil" name="tahun_mobil" maxlength="4" autocomplete="off" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="kilometer_mobil">Kilometer Mobil</label>
                <input type="number" class="form-control" id="kilometer_mobil" name="kilometer_mobil" autocomplete="off" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="plat_nomor">Plat Nomor Mobil</label>
                <input type="text" class="form-control" id="plat_nomor" name="plat_nomor" autocomplete="off" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="transmisi">Transmisi Mobil</label>
                <select name="transmisi" id="transmisi" class="form-control select2">
                  <option value="">Select</option>
                  <option value="Automatic">Automatic</option>
                  <option value="Manual">Manual</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="bebas_tabrak">Bebas Tabrak</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="bebas_tabrak" id="exampleRadios1" value="Ya" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Ya
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="bebas_tabrak" id="exampleRadios2" value="Tidak">
                  <label class="form-check-label" for="exampleRadios2">
                    Tidak
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="bebas_banjir">Bebas Banjir Mobil</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="bebas_banjir" id="exampleRadios3" value="Ya" checked>
                  <label class="form-check-label" for="exampleRadios3">
                    Ya
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="bebas_banjir" id="exampleRadios4" value="Tidak">
                  <label class="form-check-label" for="exampleRadios4">
                    Tidak
                  </label>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="bpkb">BPKB Mobil</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="bpkb" id="exampleRadios5" value="Ya" checked>
                  <label class="form-check-label" for="exampleRadios5">
                    Ya
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="bpkb" id="exampleRadios6" value="Tidak">
                  <label class="form-check-label" for="exampleRadios6">
                    Tidak
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="buku_service">Buku Service Mobil</label>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="buku_service" id="exampleRadios7" value="Ya" checked>
                  <label class="form-check-label" for="exampleRadios7">
                    Ya
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="buku_service" id="exampleRadios8" value="Tidak">
                  <label class="form-check-label" for="exampleRadios8">
                    Tidak
                  </label>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="grade_mobil">Grade Mobil</label>
                <select name="grade_mobil" id="grade_mobil" class="form-control select2">
                  <option value="">Select</option>
                  <option value="A">A</option>
                  <option value="B">B</option>
                  <option value="C">C</option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="harga_cash">Harga Cash Mobil</label>
                <input type="text" class="form-control" id="harga_cash" name="harga_cash" autocomplete="off" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="harga_credit">Harga Kredit Mobil</label>
                <input type="text" class="form-control" id="harga_credit" name="harga_credit" autocomplete="off" required>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="url_video_mobil">URL Video Mobil</label>
                <input type="text" class="form-control" id="url_video_mobil" name="url_video_mobil" autocomplete="off" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="lokasi">Lokasi Mobil</label>
                <input type="text" class="form-control" id="lokasi" name="lokasi" autocomplete="off" required>
              </div>
            </div>
          </div>

          <div class="m-b-30">
            <div class="row">
              <div class="col-md-12">
                <div class="fallback">
                  <input name="files[]" type="file" multiple="multiple" />
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" id="submitBtn" class="btn btn-primary">Tambah</button>
        </div>
      </form>

    </div>
  </div>
</div>

<!-- START EDIT BANK MODAL -->
<?php
foreach ($mobilDetail as $b) :  ?>
  <div class="modal fade" id="newEdit<?php echo $b['id_mobil']; ?>" tabindex="-1" aria-labelledby="newEditLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="newEditLabel">Edit Data Baru</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="<?php echo base_url(); ?>mobil/editdatamobil" method="POST">
          <input type="hidden" name="id_mobil" value="<?php echo encrypt_url($b['id_mobil']); ?>">
          <div class="modal-body">

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="merk_mobil">Merk Mobil</label>
                  <select name="merk_mobil" id="merk" class="form-control select2" disabled>
                    <option value="">Select</option>
                    <?php foreach ($merkmobil as $merk) : ?>
                      <option value="<?php echo $merk['id_merk_mobil'] ?>" <?php echo $selected = $merk['id_merk_mobil'] == $b['id_merk_mobil'] ? 'selected' : '' ?>><?php echo $merk['merk'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="model_mobil">Model Mobil</label>
                  <select name="model_mobil" id="model" class="form-control select2" disabled>
                    <option value="">Select</option>
                    <?php foreach ($modelmobil as $model) : ?>
                      <option value="<?php echo $model['id_model_mobil'] ?>" <?php echo $selected = $model['id_model_mobil'] == $b['id_model_mobil'] ? 'selected' : '' ?>><?php echo $model['model'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="varian_mobil">Varian Mobil</label>
                  <select name="varian_mobil" id="variant" class="form-control select2" disabled>
                    <option value="">Select</option>
                    <?php foreach ($varianmobil as $varian) : ?>
                      <option value="<?php echo $varian['id_variant_mobil'] ?>" <?php echo $selected = $varian['id_variant_mobil'] == $b['id_variant_mobil'] ? 'selected' : '' ?>><?php echo $varian['variant_mobil'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="jenis_mobil">Jenis Mobil</label>
                  <select name="jenis_mobil" id="jenis_mobil" class="form-control select2" disabled>
                    <option value="">Select</option>
                    <?php foreach ($jenismobil as $jenis) : ?>
                      <option value="<?php echo $jenis['id_jenis_mobil'] ?>" <?php echo $selected = $jenis['id_jenis_mobil'] == $b['id_jenis_mobil'] ? 'selected' : '' ?>><?php echo $jenis['jenis_mobil'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="warna_mobil">Warna Mobil</label>
                  <select name="warna_mobil" id="warna_mobil" class="form-control select2" disabled>
                    <option value="">Select</option>
                    <?php foreach ($warnamobil as $warna) : ?>
                      <option value="<?php echo $warna['id_warna_mobil'] ?>" <?php echo $selected = $warna['id_warna_mobil'] == $b['id_warna_mobil'] ? 'selected' : '' ?>><?php echo $warna['warna_mobil'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="tahun_mobil">Tahun Mobil</label>
                  <input readonly type="number" class="form-control" id="tahun_mobil" name="tahun_mobil" maxlength="4" autocomplete="off" value="<?php echo $b['tahun_pembuatan'] ?>" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="kilometer_mobil">Kilometer Mobil</label>
                  <input readonly type="number" class="form-control" id="kilometer_mobil" name="kilometer_mobil" autocomplete="off" value="<?php echo $b['kilometer_mobil'] ?>" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="plat_nomor">Plat Nomor Mobil</label>
                  <input readonly type="text" class="form-control" id="plat_nomor" name="plat_nomor" autocomplete="off" value="<?php echo $b['plat_nomor'] ?>" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="transmisi">Transmisi Mobil</label>
                  <select name="transmisi" id="transmisi" class="form-control select2" disabled>
                    <option value="">Select</option>
                    <option value="Automatic" <?php echo $selected = $b['transmisi'] == 'Automatic' ? 'selected' : '' ?>>Automatic</option>
                    <option value="Manual" <?php echo $selected = $b['transmisi'] == 'Manual' ? 'selected' : '' ?>>Manual</option>
                  </select>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="bebas_tabrak">Bebas Tabrak</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="bebas_tabrak" id="exampleRadios1" value="Ya" <?php echo $selected = $b['bebas_tabrak'] == 'Ya' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="exampleRadios1">
                      Ya
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="bebas_tabrak" id="exampleRadios2" value="Tidak" <?php echo $selected = $b['bebas_tabrak'] == 'Tidak' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="exampleRadios2">
                      Tidak
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="bebas_banjir">Bebas Banjir Mobil</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="bebas_banjir" id="exampleRadios3" value="Ya" <?php echo $selected = $b['bebas_banjir'] == 'Ya' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="exampleRadios3">
                      Ya
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="bebas_banjir" id="exampleRadios4" value="Tidak" <?php echo $selected = $b['bebas_banjir'] == 'Tidak' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="exampleRadios4">
                      Tidak
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="bpkb">BPKB Mobil</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="bpkb" id="exampleRadios5" value="Ya" <?php echo $selected = $b['bpkb'] == 'Ya' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="exampleRadios5">
                      Ya
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="bpkb" id="exampleRadios6" value="Tidak" <?php echo $selected = $b['bpkb'] == 'Tidak' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="exampleRadios6">
                      Tidak
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="buku_service">Buku Service Mobil</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="buku_service" id="exampleRadios7" value="Ya" <?php echo $selected = $b['buku_service'] == 'Ya' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="exampleRadios7">
                      Ya
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="buku_service" id="exampleRadios8" value="Tidak" <?php echo $selected = $b['buku_service'] == 'Tidak' ? 'checked' : '' ?>>
                    <label class="form-check-label" for="exampleRadios8">
                      Tidak
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="grade_mobil">Grade Mobil</label>
                  <select name="grade_mobil" id="grade_mobil" class="form-control select2">
                    <option value="">Select</option>
                    <option value="A" <?php echo $selected = $b['grade_mobil'] == 'A' ? 'selected' : '' ?>>A</option>
                    <option value="B" <?php echo $selected = $b['grade_mobil'] == 'B' ? 'selected' : '' ?>>B</option>
                    <option value="C" <?php echo $selected = $b['grade_mobil'] == 'C' ? 'selected' : '' ?>>C</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="harga_cash">Harga Cash Mobil</label>
                  <input type="text" class="form-control" id="harga_cash" name="harga_cash" autocomplete="off" value="<?php echo $b['harga_cash'] ?>" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="harga_credit">Harga Kredit Mobil</label>
                  <input type="text" class="form-control" id="harga_credit" name="harga_credit" autocomplete="off" value="<?php echo $b['harga_credit'] ?>" required>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="url_video_mobil">URL Video Mobil</label>
                  <input type="text" class="form-control" id="url_video_mobil" name="url_video_mobil" autocomplete="off" value="<?php echo $b['url_video_mobil'] ?>" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lokasi">Lokasi Mobil</label>
                  <input type="text" class="form-control" id="lokasi" name="lokasi" autocomplete="off" value="<?php echo $b['lokasi'] ?>" required>
                </div>
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
<!-- END EDIT BANK MODAL -->



<script>
  document.getElementById('tahun_mobil').addEventListener('input', function(e) {
    // Get the input element
    const input = e.target;
    // Define the maximum length
    const maxLength = 4;

    // Check if the input value length exceeds the max length
    if (input.value.length > maxLength) {
      // Trim the input value to the max length
      input.value = input.value.slice(0, maxLength);
    }
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

<script>
  $(document).ready(function() {
    $('.select2').select2({
      placeholder: "-- Pilih --",
      width: '100%'

      // allowClear: true
    });
  });
</script>