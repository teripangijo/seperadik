
      <!-- End Navbar -->
      <div class="content">
        <div class="container-fluid">

          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-default card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">person</i>
                  </div>
                  <p class="card-category">PEMERIKSA</p>
                  <h3 class="card-title"><?php echo count($kembali_pemeriksa)+count($pemeriksa);  ?>
                  </h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <button type="button" data-toggle="modal" data-target="#modalpemeriksa" class="btn btn-sm btn-default" data-toggle="modal" data-target="#exampleModal">detail</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-warning card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">person</i>
                  </div>
                  <p class="card-category">KASUBSI</p>
                  <h3 class="card-title"><?php echo count($kembali_kasubsi)+count($kasubsi);  ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                   <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#modalkasubsi">Detail</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">person</i>
                  </div>
                  <p class="card-category">KASI</p>
                  <h3 class="card-title"><?php echo count($kembali_kasi)+count($kasi);  ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modalkasi">Detail</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-primary card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">person</i>
                  </div>
                  <p class="card-category">K. Kantor</p>
                  <h3 class="card-title"><?php echo count($kk);  ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalkk">Detail</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-success card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">done</i>
                  </div>
                  <p class="card-category">DISETUJUI</p>
                  <h3 class="card-title"><?php echo count($disetujui);  ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <button type="button" class="btn btn-sm btn-success" data-toggle="modal" data-target="#modalsetuju">Detail</button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
              <div class="card card-stats">
                <div class="card-header card-header-danger card-header-icon">
                  <div class="card-icon">
                    <i class="material-icons">clear</i>
                  </div>
                  <p class="card-category">DITOLAK</p>
                  <h3 class="card-title"><?php echo count($ditolak);  ?></h3>
                </div>
                <div class="card-footer">
                  <div class="stats">
                    <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modaltolak">Detail</button>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!--Modal Detail Pemeriksa-->

          <div class="modal fade" id="modalpemeriksa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" style="font-style: bold;color: black" id="exampleModalLabel">Detail Permohonan di Pemeriksa</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  
                  <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>Agenda</th>
                      </thead>
                      <tbody>
                           <tr>
                            <td>Bongkar</td>
                            <td><?php echo count($pemeriksa_b);  ?></td>
                          </tr>
                          <tr>
                            <td>Timbun</td>
                            <td><?php echo count($pemeriksa_t);  ?></td>
                          </tr>
                          <tr>
                            <td>Muat</td>
                            <td><?php echo count($pemeriksa_m);  ?></td>
                          </tr>
                      </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button  onclick="window.location.href = 'pemeriksa';" type="button" class="btn btn-primary">Proses</button>
                </div>
              </div>
            </div>
          </div>

 <!--Modal Detail kasubsi-->

          <div class="modal fade" id="modalkasubsi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" style="font-style: bold;color: black" id="exampleModalLabel">Detail Permohonan di Kasubsi</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  
                  <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>Agenda</th>
                      </thead>
                      <tbody>
                           <tr>
                            <td>Bongkar</td>
                            <td><?php echo count($kasubsi_b);  ?></td>
                          </tr>
                          <tr>
                            <td>Timbun</td>
                            <td><?php echo count($kasubsi_t);  ?></td>
                          </tr>
                          <tr>
                            <td>Muat</td>
                            <td><?php echo count($kasubsi_m);  ?></td>
                          </tr>
                      </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" onclick="window.location.href = 'kasubsi';" class="btn btn-primary">Proses</button>
                </div>
              </div>
            </div>
          </div>

<!--Modal Detail kasi-->

          <div class="modal fade" id="modalkasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" style="font-style: bold;color: black" id="exampleModalLabel">Detail Permohonan di Kasi</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  
                  <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>Agenda</th>
                      </thead>
                      <tbody>
                           <tr>
                            <td>Bongkar</td>
                            <td><?php echo count($kasi_b);  ?></td>
                          </tr>
                          <tr>
                            <td>Timbun</td>
                            <td><?php echo count($kasi_t);  ?></td>
                          </tr>
                          <tr>
                            <td>Muat</td>
                            <td><?php echo count($kasi_m);  ?></td>
                          </tr>
                      </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" onclick="window.location.href = 'kasi';" class="btn btn-primary">Proses</button>
                </div>
              </div>
            </div>
          </div>

<!--Modal Detail kk-->

          <div class="modal fade" id="modalkk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" style="font-style: bold;color: black" id="exampleModalLabel">Detail Permohonan di Kepala Kantor</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  
                  <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>Agenda</th>
                      </thead>
                      <tbody>
                           <tr>
                            <td>Bongkar</td>
                            <td><?php echo count($kk_b);  ?></td>
                          </tr>
                          <tr>
                            <td>Timbun</td>
                            <td><?php echo count($kk_t);  ?></td>
                          </tr>
                          <tr>
                            <td>Muat</td>
                            <td><?php echo count($kk_m);  ?></td>
                          </tr>
                      </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" onclick="window.location.href = 'kk';" class="btn btn-primary">Proses</button>
                </div>
              </div>
            </div>
          </div>

<!--Modal Detail setuju-->

          <div class="modal fade" id="modalsetuju" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" style="font-style: bold;color: black" id="exampleModalLabel">Detail Permohonan di Kepala Kantor</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  
                  <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>Agenda</th>
                      </thead>
                      <tbody>
                           <tr>
                            <td>Bongkar</td>
                            <td><?php echo count($setuju_b);  ?></td>
                          </tr>
                          <tr>
                            <td>Timbun</td>
                            <td><?php echo count($setuju_t);  ?></td>
                          </tr>
                          <tr>
                            <td>Muat</td>
                            <td><?php echo count($setuju_m);  ?></td>
                          </tr>
                      </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

<!--Modal Detail tolak-->

          <div class="modal fade" id="modaltolak" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" style="font-style: bold;color: black" id="exampleModalLabel">Detail Permohonan di Kepala Kantor</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  
                  <table class="table">
                      <thead class=" text-primary">
                        <th>No</th>
                        <th>Agenda</th>
                      </thead>
                      <tbody>
                           <tr>
                            <td>Bongkar</td>
                            <td><?php echo count($tolak_b);  ?></td>
                          </tr>
                          <tr>
                            <td>Timbun</td>
                            <td><?php echo count($tolak_t);  ?></td>
                          </tr>
                          <tr>
                            <td>Muat</td>
                            <td><?php echo count($tolak_m);  ?></td>
                          </tr>
                      </tbody>
                    </table>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>

          <!--
          <div class="row">
            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-success">
                  <div class="ct-chart" id="dailySalesChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Permohonan Masuk</h4>
                  <p class="card-category">
                    
                </div>
                
              </div>
            </div>


            <div class="col-md-4">
              <div class="card card-chart">
                <div class="card-header card-header-danger">
                  <div class="ct-chart" id="completedTasksChart"></div>
                </div>
                <div class="card-body">
                  <h4 class="card-title">Permohonan Diselesaikan</h4>
              </div>
            </div>
          </div>
          -->


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
