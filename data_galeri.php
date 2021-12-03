<?php
	require_once("koneksi.php");

	// Panggil file session check
	require_once("session_check.php");
	if ( $sessionStatus == false ) {
		header("Location: index.php");
	}

	$query = "SELECT * FROM galeri";

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
	<div class="slider py-5">
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
			  	<a class="nav-link" href="login.php">	
			  		<i class="fa fa-sign-out fd-lg box-icon" aria-hidder="true"></i>LogOut
			  	</a>
			</nav>
		</div>
	</div>

	<div class="main-pages py-5">
		<div class="container-fluid">
			<div class="col text-end">
					<a class="btn btn-primary ms-auto" href="galeri.php" role="button">+</a>
			</div>
			<div class="row">
				
				<div class="col">
					
					<table class="table table-striped responsive-utilities jambo_table bulk_action">
						
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Foto</th>
								<th scope="col">Aksi</th>
							</tr>
						</thead>

						<tbody>
							
							<?php

							// pemanggilan data dari tabel galeri
							$query= "SELECT * FROM galeri";
							$result=mysqli_query($mysqli, $query);

							// menampilkan list data pada tabel barang dengan mengginakan pengulangan foreach
							$i=1;
							foreach ($result as $galeri) {

								// cek foto
								if (!file_exists($galeri['gambar'])) {
									$galeri['gambar']='upload/default.jpg';
								}

								if (is_null($galeri['gambar'])||empty($galeri['gambar'])) {
									$galeri['gambar']='upload/default.jpg';
								}

								echo '<tr>
								<th scope="row">'.$i++.'</th>
								<td> <img src="'.$galeri['gambar'].'"></td>
								<td>
								<a href="form_edit.php?id_galeri='.$galeri['id_galeri'].'" class="btn btn-success"><i class="fa fa-edit"></i>Edit</a>
								<a href="delete.php?id_galeri='.$galeri['id_galeri'].'" onclick="return confirm_delete()" class="btn btn-danger"><i class="fa fa-remove"></i>Dalete</a>
								</td>
								</tr>';

							}
							?>

						</tbody>

					</table>

				</div>

			</div>
		
		</div>
	</div>
</div>
</body>
</html>