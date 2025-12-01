<datalist id="data_perusahaan">
  <?php
  foreach ($record->result() as $b) {
    echo "<option value='$b->nama'></option>";
  }
  ?>

</datalist>



<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Pengajuan Permohonan</h4>
            <p class="card-category">Lengkapi Data Permohonan</p>
          </div>
          <div class="card-body">
            <form action="<?php echo site_url('auth/pengguna_jasa_action') ?>" method='POST' enctype="multipart/form-data">
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating text-primary">Data Perusahaan</label>
                    <!-- <p>Date: <input type="text" id="datepicker"></p> -->
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <div class="form-group">
                    <label for="inputIzin" style="color: black">Jenis Izin</label>
                    <select id="inputIzin" name="jenisdok" class="form-control">
                      <option value="">- Pilih -</option>
                      <option value="1" <?= set_value('jenisdok') == 'Bongkar' ? "selected" : null ?>>Bongkar</option>
                      <option value="2" <?= set_value('jenisdok') == 'Timbun' ? "selected" : null ?>>Timbun</option>
                      <option value="3" <?= set_value('jenisdok') == 'Muat' ? "selected" : null ?>>Muat</option>
                    </select>
                    <h9 style="color:red"><?php echo form_error('jenisdok'); ?></h9>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color: black">No Agenda </label>
                    <input autocomplete="off" type="text" name="agenda" value="<?= set_value('agenda') ?>" class="form-control">
                    <h9 style="color:red"><?php echo form_error('agenda'); ?></h9>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color: black">Nama Perusahaan</label>
                    <input type="text" value="<?= set_value('nama') ?>" class="form-control" list="data_perusahaan" type="text" name="nama" id="nama" onchange="return autofill();">
                    <h9 style="color:red"><?php echo form_error('namapersh'); ?></h9>
                  </div>

                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color: black">Alamat Perusahaan</label>
                    <input type="text" name="alamat" id="alamat" value="<?= set_value('alamat') ?>" class="form-control">
                    <h9 style="color:red"><?php echo form_error('alamat'); ?></h9>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color: black">NPWP Perusahaan</label>
                    <input type="text" id="npwp" name='npwp' value="<?= set_value('npwp') ?>" class="form-control">
                    <h9 style="color:red"><?php echo form_error('npwp'); ?></h9>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color: black">No Permohonan</label>
                    <input type="text" name="nomohon" value="<?= set_value('nomohon') ?>" class="form-control">
                    <h9 style="color:red"><?php echo form_error('nomohon'); ?></h9>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color: black">Tanggal Permohonan</label>
                    <input autocomplete="off" type="text" id="datepicker" value="<?= set_value('tglmohon') ?>" name="tglmohon" class="form-control datetimepicker">
                    <h9 style="color:red"><?php echo form_error('tglmohon'); ?></h9>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color: black">Nama Pemohon</label>
                    <input type="text" name="nama_pemohon" value="<?= set_value('nama_pemohon') ?>" class="form-control">
                    <h9 style="color:red"><?php echo form_error('nama_pemohon'); ?></h9>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color: black">Jabatan Pemohon</label>
                    <input type="text" name='jabatan_pemohon' value="<?= set_value('jabatan_pemohon') ?>" class="form-control">
                    <h9 style="color:red"><?php echo form_error('jabatan_pemohon'); ?></h9>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating text-primary">Data Barang</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color: black">Nama Barang</label>
                    <input type="text" name="nm_brg" value="<?= set_value('nm_brg') ?>" class="form-control">
                    <h9 style="color:red"><?php echo form_error('nm_brg'); ?></h9>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color: black">Jumlah Muatan</label>
                    <input autocomplete="off" type="text" name="muatan" value="<?= set_value('muatan') ?>" class="form-control">
                    <h9 style="color:red"><?php echo form_error('muatan'); ?></h9>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color: black">Satuan (kg/ton/..)</label>
                    <input type="text" name="satuan" value="<?= set_value('satuan') ?>" class="form-control">
                    <h9 style="color:red"><?php echo form_error('satuan'); ?></h9>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating"></label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color: black">Jumlah Kemasan</label>
                    <input autocomplete="off" type="text" name="jum_kemasan" value="<?= set_value('jum_kemasan') ?>" class="form-control">
                    <h9 style="color:red"><?php echo form_error('jum_kemasan'); ?></h9>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color: black">Kemasan (Box/Cont/..)</label>
                    <input type="text" name="sat_kemasan" value="<?= set_value('sat_kemasan') ?>" class="form-control">
                    <h9 style="color:red"><?php echo form_error('sat_kemasan'); ?></h9>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="bmd-label-floating text-primary">Data Pengangkut</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color: black">Nama Sarana Pengangkut</label>
                    <input type="text" name="sarkut" value="<?= set_value('sarkut') ?>" class="form-control">
                    <h9 style="color:red"><?php echo form_error('sarkut'); ?></h9>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color: black">Negara Asal</label>
                    <input type="text" name="negara_asal" value="<?= set_value('negara_asal') ?>" class="form-control">
                    <h9 style="color:red"><?php echo form_error('negara_asal'); ?></h9>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color: black">Negara Tujuan</label>
                    <input type="text" name="negara_tujuan" value="<?= set_value('negara_tujuan') ?>" class="form-control">
                    <h9 style="color:red"><?php echo form_error('negara_tujuan'); ?></h9>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating"></label>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color: black">Tanggal Perkiraan Kegiatan</label>
                    <input autocomplete="off" type="text" name="tgl_kira_muat" id="datepicker2" value="<?= set_value('tgl_kira_muat') ?>" class="form-control">
                    <h9 style="color:red"><?php echo form_error('tgl_kira_muat'); ?></h9>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating" style="color: black">Lokasi Kegiatan</label>
                    <input type="text" name="lokasi_muat" value="<?= set_value('lokasi_muat') ?>" class="form-control">
                    <h9 style="color:red"><?php echo form_error('lokasi_muat'); ?></h9>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="text-primary" style="color: black">Alasan 1</label>
                    <h9 style="color:red"><?php echo form_error('alasan'); ?></h9>
                    <div class="form-group">
                      <label class="bmd-label-floating" style="color: black">Masukan Alasan Anda</label>
                      <input type="text" name="alasan" value="<?= set_value('alasan') ?>" class="form-control">
                    </div>
                  </div>
                </div>
              </div>

              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="text-primary">Alasan 2</label>
                    <h9 style="color:red"><?php echo form_error('alasan1'); ?></h9>
                    <div class="form-group">
                      <label class="bmd-label-floating" style="color: black">Masukan Alasan Anda</label>
                      <input type="text" name="alasan1" value="<?= set_value('alasan1') ?>" class="form-control">
                    </div>
                  </div>
                </div>
              </div>


              <div class="row">
                <div class="col-md-12">
                  <label class="text-primary">Surat Permohonan (file wajib pdf)</label>
                  <h9 style="color:red"><?php echo form_error('files'); ?></h9>
                  <span id="upload_file"></span>
                </div>
              </div>
              <button type="submit" class="btn btn-primary pull-right">Simpan</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-warning">
              <h4 class="card-title">Draft Permohonan</h4>
            </div>

            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead class=" text-warning">
                    <th>No</th>
                    <th>Permohonan</th>
                    <th>No Surat</th>
                    <th>Tanggal</th>
                    <th>Perusahaan</th>
                    <th style="text-align: center;">Aksi</th>
                  </thead>
                  <tbody>
                    <?php
                    $counter = 1;

                    foreach ($utama as $utam) {
                    ?>
                      <tr>
                        <td><?php echo $counter++; ?></td>
                        <td> <?php
                              $stat = $utam->jenisdok;
                              switch ($stat) {
                                case "1":
                                  echo 'Bongkar';
                                  break;
                                case "2":
                                  echo 'Timbun';
                                  break;
                                case "3":
                                  echo 'Muat';
                                  break;
                              } ?></td>
                        <td><?php echo $utam->nomohon; ?></td>
                        <td><?php echo tgl_text($utam->tglmohon); ?></td>
                        <td><?php echo $utam->namapersh; ?></td>
                        <td style="text-align: right;"><a class="btn btn-sm btn-primary text-white" href="<?php echo base_url('auth/update_pengguna_jasa.html?id=' . $utam->id) ?>">Edit</a>
                          <a class="btn btn-sm btn-info" href="<?php echo base_url('auth/ajukan_pemeriksa.html?id=' . $utam->id) ?>">Ajukan</a>
                          <a class="btn btn-sm btn-danger" href="<?php echo base_url('auth/delete_pengguna_jasa.html?id=' . $utam->id) ?>" class="text-white">Delete</a>
                        </td>
                      </tr>

                    <?php
                    }
                    ?>
                  </tbody>
                </table>

              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<footer class="footer">
  <div class="container-fluid">
    <div class="copyright float-right">
      &copy;
      <script>
        document.write(new Date().getFullYear())
      </script>
    </div>
  </div>
</footer>
</div>
</div>

<!--   Core JS Files   -->


<!-- <script src="<?php echo base_url(); ?>js/core/jquery.min.js"></script> -->
<script src="<?php echo base_url(); ?>js/core/popper.min.js"></script>
<script src="<?php echo base_url(); ?>js/core/bootstrap-material-design.min.js"></script>
<script src="<?php echo base_url(); ?>js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Plugin for the momentJs  -->
<script src="<?php echo base_url(); ?>js/plugins/moment.min.js"></script>
<!--  Plugin for Sweet Alert -->
<script src="<?php echo base_url(); ?>js/plugins/sweetalert2.js"></script>
<!-- Forms Validations Plugin -->
<script src="<?php echo base_url(); ?>js/plugins/jquery.validate.min.js"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="<?php echo base_url(); ?>js/plugins/jquery.bootstrap-wizard.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="<?php echo base_url(); ?>js/plugins/bootstrap-selectpicker.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="<?php echo base_url(); ?>js/plugins/bootstrap-datetimepicker.min.js"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="<?php echo base_url(); ?>js/plugins/jquery.dataTables.min.js"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="<?php echo base_url(); ?>js/plugins/bootstrap-tagsinput.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="<?php echo base_url(); ?>js/plugins/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="<?php echo base_url(); ?>js/plugins/fullcalendar.min.js"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="<?php echo base_url(); ?>js/plugins/jquery-jvectormap.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo base_url(); ?>js/plugins/nouislider.min.js"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="<?php echo base_url(); ?>js/plugins/arrive.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chartist JS -->
<script src="<?php echo base_url(); ?>js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url(); ?>js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo base_url(); ?>js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->




<script>
  $(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    md.initDashboardPageCharts();

  });
  var x = document.createElement("INPUT");
              x.setAttribute("type", "file");
              x.setAttribute("accept", "application/pdf");
              x.setAttribute("name", "files");
              x.setAttribute("value", "<?= set_value('files')?>");
              x.setAttribute("class", "form-control");
              document.getElementById("upload_file").appendChild(x);
</script>
</body>

</html>