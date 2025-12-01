

      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Proses Permohonan</h4>
                  <p class="card-category">Periksa Data Permohonan</p>
                </div>
                <div class="card-body">
                  <form action="<?php echo site_url('auth/proses_kasubsi_action') ?>" method='POST'>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating text-success">Data Perusahaan</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                              <label class="bmd-label-floating" style="font-size: 10pt">Jenis Izin</label>
                                  <input type="text" name="jenisdok" value="<?php 
                            $stat = $utama->jenisdok;
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
                             }?>" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">No Agenda</label>
                          <input type="text" name="agenda" value="<?php echo $utama->agenda ?>"  class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Perusahaan</label>
                          <input type="text" name='namapersh'  value="<?php echo $utama->namapersh ?>" class="form-control">
                        </div>

                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Alamat Perusahaan</label>
                          <input type="text" name="alamat"  value="<?php echo $utama->alamat ?>" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">NPWP Perusahaan</label>
                          <input type="text"  value="<?php echo $utama->npwp ?>" name= 'npwp' class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">No Permohonan / Tanggal Permohonan</label>
                          <input type="text"  value="<?php echo $utama->nomohon." / ".tgl_indo($utama->tglmohon) ?>" name="no_tgl_surat" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama (Jabatan) Pemohon</label>
                          <input type="DateTimePicker"  value="<?php echo $utama->nama_pemohon." (".$utama->jabatan_pemohon.")" ?>" name="nama_jabatan_pemohon" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating text-success">Data Barang</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Barang</label>
                          <input type="text"  value="<?php echo $utama->nm_brg ?>" name="nm_brg" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jumlah Muatan</label>
                          <input type="text"  value="<?php echo $utama->muatan." ".$utama->satuan ?>" name="muatan" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Jumlah Kemasan</label>
                          <input type="text" name="satuan"  value="<?php echo $utama->jum_kemasan." ".$utama->sat_kemasan ?>" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating text-success">Data Pengangkut</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Sarana Pengangkut</label>
                          <input type="text"  value="<?php echo $utama->sarkut ?>" name="sarkut" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Negara Asal</label>
                          <input type="text" value="<?php echo $utama->negara_asal ?>" name="negara_asal" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Negara Tujuan</label>
                          <input type="text" value="<?php echo $utama->negara_tujuan ?>" name="negara_tujuan" class="form-control">
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating"></label>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tanggal Perkiraan Kegiatan</label>
                          <input type="text" value="<?php echo tgl_indo($utama->tgl_kira_muat) ?>" name="tgl_kira_muat" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Lokasi Kegiatan</label>
                          <input type="text" value="<?php echo $utama->lokasi_muat ?>" name="lokasi_muat" class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="text-primary">Alasan 1</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"  >Masukan Alasan Anda</label>
                            <textarea class="form-control" value="<?php echo $utama->alasan ?>" name="alasan"  rows="2" ><?php echo $utama->alasan ?></textarea>
                            <input type="text" style="display:none" name="id" value="<?php echo $utama->id ?>">
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="text-primary">Alasan 2</label>
                          <div class="form-group">
                            <label class="bmd-label-floating" >Masukan Alasan Anda</label>
                            <textarea class="form-control" value="<?php echo $utama->alasan1 ?>" name="alasan1" rows="2"><?php echo $utama->alasan1 ?></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                     <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="text-success">Surat Permohonan</label>
                          <div class="form-group">
                            <td><a href="<?php echo base_url("/file_pdf/$utama->files"); ?><?php echo $row->id; ?>" download>Download</a></td>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating text-danger">Data Pengawasan</label>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Nama Pemeriksa</label>
                          <input type="text" name="petugas" value="<?php echo $utama->petugas ?>" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">No ND Cek Lokasi</label>
                          <input type="text" value="<?php echo $utama->nondp2 ?>"  name="nondp2" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Tanggal ND Cek Lokasi</label>
                          <input type="text" name="tp2" value="<?php echo tgl_indo($utama->tp2) ?>" id="datepicker3" autocomplete="off"  class="form-control">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="text-danger">Hasil Cek Lokasi</label>
                          <div class="form-group">
                            <label class="bmd-label-floating" >Cantumkan Hasil Pemeriksaan Lokasi</label>
                            <input class="form-control" value="<?php echo $utama->hasilp2 ?>" name="hasilp2"></input>
                          </div>
                        </div>
                      </div>
                    </div>

                    <input type="text" style="display:none"  value='3' name="stat_loket"></input>
                    <input type="submit"  value='ajukan' class="btn btn-success pull-right"></input>
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
                <div class="card-header card-header-danger">
                  <h4 class="card-title">Kembalikan ke Pemeriksa</h4>
                  <p class="card-category">Berikan Catatan Pengembalian</p>
                </div>
                <div class="card-body">
                  <form action="<?php echo site_url('auth/kembalikan_pemeriksa') ?>" method='POST'>

                    <div class="form-group">
                      <label class="bmd-label-floating"  >Masukan Catatan Pengembalian</label>
                            <textarea class="form-control"  name="catatan"  rows="5" ></textarea>
                    
                    </div>  
                    <input type="hidden"  value='<?php echo $utama->id ?>' name="id"></input>                
                    <input type="text" style="display:none"  value='11' name="stat_loket"></input>
                    <input type="submit"  value='Kembalikan' class="btn btn-danger pull-right"></input>
                    
                  </form>
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
