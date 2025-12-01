     
      <div class="content">
        <div class="container-fluid">

          <div class="navbar-form navbar-right">
            <?php echo form_open('auth/cari')?>
            <input type="text" name="keyword" class="form-control" placeholder="Masukan Parameter (Nama Perusahaan/No Surat)">
            <input type="submit" class="btn btn-sm btn-success" value="cari"></input>
            <?php echo form_close()?>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Permohonan Masuk</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>Jenis Dokumen</th>
                        <th>Permohonan / Tanggal</th>
                        <th>Perusahaan</th>
                        <th>Tanggal Kegiatan</th>
                        <th>Petugas</th>
                        <th style="text-align: center;">Status</th>
                      </thead>
                      <tbody>

                      <?php 
                          $counter = 1;
                         foreach (array_reverse($utama) as $utam) {
                           ?>
                           <tr>
                            <td><?php echo $counter++; ?></td>
                            <td>
                              <?php 
                            $stat = $utam->jenisdok;
                            switch ( $stat ) {
                              case "1":
                                  echo 'Bongkar';
                                  break;
                              case "2":
                                  echo 'Timbun';
                                  break;
                              case "3":
                                  echo 'Muat';
                                  break;
                             }?>

                            </td>
                            <td><?php echo $utam->nomohon; ?>/<p style="color: green"><?php echo tgl_indo($utam->tglmohon); ?></p></td>
                            <td><?php echo $utam->namapersh; ?></td>
                            <td><p style="color: green"><?php echo tgl_indo($utam->tgl_kira_muat); ?></p></td>
                            <td><?php echo $utam->petugas; ?></td>
                            <td ><?php 
                            $stat = $utam->stat_loket;
                            switch ( $stat ) {
                              case "1":
                                  echo '<button class="btn btn-block btn-sm btn-warning">Proses Pemeriksaan</button>';
                                  break;
                              case "11":
                                  echo '<button class="btn btn-block btn-sm btn-warning">Proses Pemeriksaan</button>';
                                  break;
                              case "2":
                                  echo '<button class="btn btn-block btn-sm btn-warning">Proses Pemeriksaan</button>';
                                  break;
                              case "21":
                                  echo '<button class="btn btn-block btn-sm btn-warning">Proses Pemeriksaan</button>';
                                  break;
                              case "3":
                                  echo '<button class="btn btn-block btn-sm btn-warning">Proses Pemeriksaan</button>';
                                  break;
                               case "31":
                                  echo '<button class="btn btn-block btn-sm btn-warning">Proses Pemeriksaan</button>';
                                  break;
                              case "5":
                                  echo '<button class="btn btn-block btn-sm btn-warning">Proses Pemeriksaan</button>';
                                  break;
                              case "9":
                                  echo '<button class="btn btn-block btn-sm btn-success">Disetujui</button>';
                                  break;
                              case "8":
                              echo '<button class="btn btn-block btn-sm btn-danger">Ditolak</button>';
                                  break;
                             }?></td>
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


      <footer class="footer">
        <div class="container-fluid">
          <nav class="float-left">
            <ul>
              <li>
                <a href="http://bcpangkalpinang.beacukai.go.id/">
                  Bea Cukai Pangkal Pinang
                </a>
              </li>
              <li>
                <a href="http://bcpangkalpinang.beacukai.go.id/">
                  About Us
                </a>
              </li>
            </ul>
          </nav>
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
  <script src="<?php echo base_url();?>js/core/jquery.min.js"></script>
  <script src="<?php echo base_url();?>js/core/popper.min.js"></script>
  <script src="<?php echo base_url();?>js/core/bootstrap-material-design.min.js"></script>
  <script src="<?php echo base_url();?>js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!-- Plugin for the momentJs  -->
  <script src="<?php echo base_url();?>js/plugins/moment.min.js"></script>
  <!--  Plugin for Sweet Alert -->
  <script src="<?php echo base_url();?>js/plugins/sweetalert2.js"></script>
  <!-- Forms Validations Plugin -->
  <script src="<?php echo base_url();?>js/plugins/jquery.validate.min.js"></script>
  <!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
  <script src="<?php echo base_url();?>js/plugins/jquery.bootstrap-wizard.js"></script>
  <!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="<?php echo base_url();?>js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="<?php echo base_url();?>js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="<?php echo base_url();?>js/plugins/jquery.dataTables.min.js"></script>
  <!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
  <script src="<?php echo base_url();?>js/plugins/bootstrap-tagsinput.js"></script>
  <!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
  <script src="<?php echo base_url();?>js/plugins/jasny-bootstrap.min.js"></script>
  <!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
  <script src="<?php echo base_url();?>js/plugins/fullcalendar.min.js"></script>
  <!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
  <script src="<?php echo base_url();?>js/plugins/jquery-jvectormap.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?php echo base_url();?>js/plugins/nouislider.min.js"></script>
  <!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
  <!-- Library for adding dinamically elements -->
  <script src="<?php echo base_url();?>js/plugins/arrive.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chartist JS -->
  <script src="<?php echo base_url();?>js/plugins/chartist.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="<?php echo base_url();?>js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="<?php echo base_url();?>js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
  <!-- Material Dashboard DEMO methods, don't include it in your project! -->
  <script src="<?php echo base_url();?>demo/demo.js"></script>
  
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      md.initDashboardPageCharts();

    });
  </script>
</body>

</html>
