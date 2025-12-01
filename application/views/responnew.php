
<body class="" filter-color="black" style="background-image: url('<?php echo base_url();?>images/BCPAPIN.png'); background-size: cover; background-position: top center; ">

  

  <!-- <nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top text-white">
    <img  style="display: block;
  margin-left: auto;
  margin-right: auto;width: 5%;" src="<?php echo base_url();?>images/logo.png"></img></br>
  </nav> -->
  <!-- End Navbar -->
  <div  class="wrapper " style="">
    <div class="page-header  header-filter"  >
      <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->

      <div class="container" >
        
          <div class=" ml-auto mr-auto" style='margin-top:70pt '>
            
            <!-- <p style="font-family: sans-serif; text-align: center;">
            <font size='5' s>SEPERADIK </font><font size='5'  >V</font><font size='4'  >.2</font></p> -->
            <?php 
                    if(count($utama)>0)
                      {
                         foreach ($utama as $utam) {
                           ?>
          <div class="card">
              <div class="card-header card-header-warning text-center">
                STATUS PERMOHONAN
              </div>
          <div class="card-body">
            <form action="<?php echo site_url('auth/pengguna_jasa_action') ?>" method='POST'>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating text-primary">Data Permohonan</label>
                        </div>
                      </div>
                    </div>



                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                              <label class="bmd-label-floating" style="color: grey">Jenis Izin</label>
                              <a type="text" name="jenisdok" value="" class="form-control " style="color: black; font-size: 12pt" ><b><?php 
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
                             }?></b></a>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating" style="color: grey">No Agenda </label>
                          <a  type="text" name="agenda" value="" class="form-control" style="color: black; font-size: 12pt"><b><?php echo $utam->agenda; ?></b></a>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating" style="color: grey">Nama Perusahaan</label>
                          <a  type="text" name='namapersh' value="" class="form-control" style="color: black; font-size: 12pt"><b><?php echo $utam->namapersh; ?></b></a>
                        </div>

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating" style="color: grey">No Permohonan</label>
                          <a  type="text" name="nomohon" value="" class="form-control" style="color: black; font-size: 12pt"><b><?php echo $utam->nomohon; ?></b></a>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating" style="color: grey">Tanggal Permohonan</label>
                          <a  type="text" value="" name="tglmohon" class="form-control" style="color: black; font-size: 12pt"><b><?php echo $utam->tglmohon; ?></b></a>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating text-primary">Status Permohonan</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating" style="color: grey">Nama Petugas</label>
                          <a  type="text" name="petugas" value="" class="form-control" style="color: black; font-size: 12pt"><b><?php echo $utam->petugas; ?></b></a>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating" style="color: grey">Status Permohonan</label>
                          <a  type="text" name="stat_loket" value="" class="form-control" style="color: black; font-size: 12pt"><b><?php 
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
                             }?></b></a>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating" style="color: grey" style="color: black; font-size: 12pt">Tanggal Persetujuan</label>
                          <a  type="text" name="wk_selesai" value="" class="form-control"><b><?php echo $utam->wk_selesai; ?></b></a>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"></label>
                        </div>
                      </div>
                    </div>

                   
                  </form>
                  <a href="<?php echo site_url('auth') ?>" class="btn btn-danger">Kembali</a>
                  
                
              </div>
            </div>

           </div>
          </div>
        </div>
      </div>

     
    </div>
  </div>
<?php } 
        }else{?> 

        <div class="card">
          <div class="card-header card-header-warning">
                <h4 class=" text-center bmd-label-floating text-danger">Data Tidak Ditemukan</h4>
                <a href="<?php echo site_url('auth') ?>" class="btn btn-danger">Kembali</a>
        </div>

    <?php  } 
          ?>
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
  <!--  Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
  <script src="<?php echo base_url();?>js/plugins/bootstrap-selectpicker.js"></script>
  <!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
  <script src="<?php echo base_url();?>js/plugins/bootstrap-datetimepicker.min.js"></script>
  <!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
  <script src="<?php echo base_url();?>js/plugins/jquery.dataTables.min.js"></script>
  <!--  Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
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