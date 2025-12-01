<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOGIC</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	
</head>
<body class='body' >
	<div class="container-fluid">
		<div class= "row" align="#">

			<div class="col-sm-4"></div>

			<div class="col-sm-4" align="center"  style="padding-top: 100pt">
				<div class="card ">

					<div class="card-header bg-dark text-white"  align="center">
						<img src="images/logo.png" class="img-responsive" width="100px">
						</br>
						SEPERADIK
					</div>

					<div class="card-body container-fluid">
						<form method="post" action="#">
							<div class="container-fluid">
								<div class="row">
									
										<div class="col-sm">
											<div class="form-group " >
												<input class="form-control" placeholder="Username" name="username" type="text" autofocus="">	
											</div>
											<div class="form-group">
												<input class="form-control" placeholder="Password" name="password" type="password">
											</div>
											<div class="form-group">
												<a href="#"><button type="submit" class="btn btn-dark  btn-block" >SUBMIT</button></a>
											</div>
											<div class="form-group">
												<button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#MyModal">LOGIN PEGAWAI</button>
											</div>
										</div>	

								</div>
							</div>
						</form>
								
								<!-- The Modal -->
								<div class="modal fade" id="MyModal" >
									<div class="modal-dialog">
										<div class="modal-content">
											
											<!-- Modal Header -->
											<div class="modal-header">
												<h6 class="modal-title">LOGIN PEGAWAI</h6>
												<button type="button" class="close" data-dismiss="modal">&times;</button>
											</div>

											<!-- Modal Body -->
											<div class="modal-body">
												<div class="form-group">
													<input class="form-control" type="text" name="username" placeholder="Username">
												</div>
												<div class="form-group">
													<input class="form-control" type="password" name="password" placeholder="Password">
												</div>
												<div class="form-group">						
													<input type="submit" class="btn btn-danger" value="Masuk">
												</div>
											</div>

										</div>
									</div>
								</div>

					</div>

				</div>
			</div>
			
			<div class="col-sm-4"></div>

		</div>	
	</div>

<script src="js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>