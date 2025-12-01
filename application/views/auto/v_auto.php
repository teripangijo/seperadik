<!DOCTYPE html>
<html>
<head>
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.css">
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/jquery-ui.css">
	  <script src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
	  <script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
	  <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.js"></script>
	<title>Auto</title>
</head>
<body>
	<form class="" action="">
		<input type="text" name="title" id="title" class="form-control">
		<input type="text" name="alamat" class="form-control">
	</form>

<script>
	$(document).ready(function(){
		$("#title").autocomplete({
			source : "<?php echo site_url('Auto/index') ?>",

			select:function(event,ui){
				$('[name="title"]').val(ui.item.nama);
				$('[name="alamat"]').val(ui.item.alamat);


			}
		});
});
</script>
</body>
</html>