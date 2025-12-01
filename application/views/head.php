<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url();?> images/logo.png">
  <link rel="icon" type="image/png" href="<?php echo base_url();?>images/logo.png">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  
 
  <!-- Auto Complete -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery-ui.css">
  <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.js"></script>
  <!-- Auto Complete -->

  <title>
    SEPERADIK
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url();?>css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
  
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Default functionality</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <!-- <link rel="stylesheet" href="/resources/demos/style.css"> -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>
  <script>
  $( function() {
    $( "#datepicker2" ).datepicker();
  } );
  </script>
  <script>
  $( function() {
    $( "#datepicker3" ).datepicker();
  } );
  </script>
 <!-- <script src="<?php echo base_url(); ?>assets/ajax.js"></script> -->
  
<script>
    function autofill(){
        var nama =document.getElementById('nama').value;
        $.ajax({
                       url:"<?php echo base_url();?>auth/cari_perusahaan",
                       data:'&nama='+nama,
                       success:function(data){
                           var hasil = JSON.parse(data);  
          
      $.each(hasil, function(key,val){ 
        
         document.getElementById('nama').value=val.nama;
                           document.getElementById('npwp').value=val.npwp;
                           document.getElementById('alamat').value=val.alamat;  
                               
          
        });
      }
                   });
                  
    }
</script>

  
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

.notification {
  background-color: #555;
  color: white;
  text-decoration: none;
  padding: 15px 26px;
  position: relative;
  display: inline-block;
  border-radius: 2px;
}

.notification:hover {
  background: red;
}

.notification .badge {
  position: absolute;
  top: -10px;
  right: -10px;
  padding: 5px 10px;
  border-radius: 50%;
  background-color: red;
  color: white;
}
</style>
  
</head>