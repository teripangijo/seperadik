
      
      
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Permohonan Masuk Pemeriksa</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>Agenda</th>
                        <th>Jenis Dokumen</th>
                        <th>Permohonan</th>
                        <th>Tanggal</th>
                        <th>Perusahaan</th>
                        <th>Edit</th>
                      </thead>
                      <tbody>

                      <?php 
                          $counter = 1;
                         foreach ($utama as $utam) {
                           ?>
                           <tr>
                            <td><?php echo $counter++; ?></td>
                            <td><?php echo $utam->agenda; ?></td>
                            <td><?php 
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
                             }?></td>
                            <td><?php echo $utam->nomohon; ?></td>
                            <td><?php echo tgl_indo($utam->tglmohon); ?></td>
                            <td><?php echo $utam->namapersh; ?></td>
                            <td><a  class="btn btn-sm btn-success" href="<?php echo base_url('auth/proses_pemeriksa.html?id='.$utam->id) ?>" class="text-white">Proses</a></td>
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

        
       <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-danger">
                  <h4 class="card-title ">Permohonan Dikembalikan Kasubsi</h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-danger">
                        <th>No</th>
                        <th>Catatan</th>
                        <th>Jenis Dokumen</th>
                        <th>Permohonan</th>
                        <th>Tanggal</th>
                        <th>Perusahaan</th>
                        <th>Edit</th>
                      </thead>
                      <tbody>

                      <?php 
                          $counter = 1;
                         foreach ($kembali as $back) {
                           ?>
                           <tr>
                            <td><?php echo $counter++; ?></td>
                            <td><?php echo $back->catatan; ?></td>
                            <td><?php 
                            $stat = $back->jenisdok;
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
                             }?></td>
                            <td><?php echo $back->nomohon; ?></td>
                            <td><?php echo tgl_indo($back->tglmohon); ?></td>
                            <td><?php echo $back->namapersh; ?></td>
                            <td><a  class="btn btn-sm btn-success" href="<?php echo base_url('auth/proses_pemeriksa.html?id='.$back->id) ?>" class="text-white">Proses</a></td>
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
    

                             <!-- Modal -->    
<div class="modal fade bd-example-modal-lg" id="LihatModal" tabindex="-1" role="">
  <div class="modal-dialog modal-login container-fluid" role="document">
    <div class="modal-content modal-lg">
      <div class="content">
        <div class="container-fluid">
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
                      </thead>
                      <tbody>

                      <?php 
                          $counter = 1;
                         foreach ($utama as $utam) {
                           ?>
                           <tr>
                            <td><?php echo $counter++; ?></td>
                            <td><?php echo $utam->agenda; ?></td>
                            <td><?php 
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
                             }?></td>
                            <td><?php echo $utam->nomohon; ?></td>
                            <td><?php echo tgl_indo($utam->tglmohon); ?></td>
                            <td><?php echo $utam->namapersh; ?></td>
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
</div>
           <!-- Modal End --> 
        

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
