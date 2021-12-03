<?php
	require_once("koneksi.php");

	// Panggil file session check
	require_once("session_check.php");

	// echo $sessionStatus;
	// die();
	if ( $sessionStatus == false ) {
		header("Location: index.php");
	}

	$query = "SELECT * FROM admin";

	$result = mysqli_query($mysqli, $query);

?>

<!-- Html -->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admin</title> 
	<link rel="stylesheet" type="text/css" href="style.css">
	
	<?php
	require('komponen/style.php');
	require('komponen/script.php');
	?>
	
		<!-- Javascript -->
	<script type="text/javascript">
		function confirm_delete(){
			return confirm("Anda yakin?");
		}
	</script>
</head>
<body>

<!--Header-->	
	<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-primary">
		<div class="container-fluid">

			<!--Navbar Brand-->
			<a class="navbar-brand" href="#">
				<h1 class="text-white">Admin</h1>
			</a>

			<!-- navbar toggler -->
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Togglenavigation">

				<span class="navbar-toggler-icon"></span>

			</button>

			<!--Navbar Collapse-->
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ms-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="index.php">Lihat Web</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
<div class="wrapper py-5">
	<div class="slider py-5 col-2">
		<div class="slider-head">
			<div class="d-block pt-4 pb-3 px-3">
				<img src="user.png" alt="" class="slider-img-user mb-2">
				<p class="fw-bold mb-0 lh-1 text-white">Admin</p>
				<?php
				$query = "SELECT * FROM admin";

				$result = mysqli_query($mysqli, $query); 
				
				foreach ($result as $admin) {?>

				<small><?php echo $admin['email']?></small>
				<?php }?>
			</div>
		</div>
		<div class="slider-body px-1">
			<nav class="nav flex-column">
  				<a class="nav-link active" href="admin.php">Dashboard</a>
  				<a class="nav-link" href="data_paket.php">Paket</a>
			  	<a class="nav-link" href="data_galeri.php">Galeri</a>
			  	<hr class="soft my-1 bg-white">
			  	<a class="nav-link" href="Logout.php">	
			  		<i class="fa fa-sign-out fd-lg box-icon" aria-hidder="true"></i>LogOut
			  	</a>
			</nav>
		</div>
	</div>

	<div class="main-page py-5">
		<div class="conteiner-fluid py-5">
			<div class="row g-3 mb-3">
				<div class="row-mt-3 mt-sm-0 ps-5 pe-5 ps-sm-2 pe-sm-2 p-0 p-sm-3 d-flex justify-content-center">

					<div class="col-12 col-sm-6 col-lg-4 p-2 d-flex justify-content-center">
						<div class="bungkus shadow-sm d-flex col-10 justify-content-center">
							
							<?php
							$query ="SELECT * FROM paket";
							$result = mysqli_query($mysqli, $query);

							$jumlah_paket = mysqli_num_rows($result);
							?>

							<div class="col-5 box-produk p-2 pt-4 pb-4 text-center">
								<h1 class="fw-bolder"><?php echo $jumlah_paket?></h1>
								<a class="text-decoration-none text-secondary fw-bolder">Paket</a>
							</div>

							<div class="col-5 p-2 text-center d-flex justify-content-start align-items-center">
								<i class="icon1 fab fa-shopify"></i>
							</div>
						</div>
						
					</div>

					<div class="col-12 col-sm-6 col-lg-4 p-2 d-flex justify-content-center">
						<div class="bungkus shadow-sm d-flex col-10 justify-content-center">
							
							<?php
							$query ="SELECT * FROM galeri";
							$result = mysqli_query($mysqli, $query);

							$jumlah_galeri = mysqli_num_rows($result);
							?>

							<div class="col-5 box-produk p-2 pt-4 pb-4 text-center">
								<h1 class="fw-bolder"><?php echo $jumlah_galeri?></h1>
								<a class="text-decoration-none text-secondary fw-bolder">Galeri</a>
							</div>

							<div class="col-5 p-2 text-center d-flex justify-content-start align-items-center">
								<i class="icon1 fas fa-images"></i>
							</div>
						</div>
						
					</div>
					
				</div>
			
		</div>
		
	</div>
</div>
</body>
</html>